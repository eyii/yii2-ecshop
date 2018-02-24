<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/7
 * Time: 11:56
 */

namespace api\models;


use common\models\User;
use Yii;
use yii\base\Model;
use yii\filters\auth\QueryParamAuth;
use yii\helpers\ArrayHelper;
use yii\web\IdentityInterface;

class LoginForm extends Model
{
    public $username;
    public $password;

    private $_user;

    public function init ()
    {
        parent::init();

    }
    /**
     *保存访问AT到数据库
     */
    public function updateAccessToken()
    {
        $this->access_token = Yii::$app->security->generateRandomString();
        $this->last_login_time = date('Y-m-d H:i:s', strtotime('now'));
        $this->last_login_ip = Yii::$app->request->userIP;
        $this->save();
        return $this->access_token;
    }

    /**
     * @inheritdoc
     * 对客户端表单数据进行验证的rule
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            ['password', 'YanzhengMima'],
        ];
    }

    /**
     * 自定义的密码认证方法
     */
    public function YanzhengMima($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $this->_user = $this->getUser();
            if (!$this->_user || !$this->_user->validatePassword($this->password)) {
                $this->addError($attribute, '用户名或密码错误.');
            }
        }
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => '用户名',
            'password' => '密码',
        ];
    }
    /**
     * 登录通过用户名和密码 并且验证 验证规则在rule里配置
     *
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            $this->generateAccessToken();
            return $this->getUser();
        } else {
            return null;
        }
    }

    /**
     * 根据用户名获取用户的认证信息
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findByUsername($this->username);
        }
        return $this->_user;
    }

    /**
     * 登录校验成功后，为用户生成新的token
     * 如果token失效，则重新生成token
     */
    public function generateAccessToken ()
    {
        if (!User::apiTokenIsValid($this->_user->access_token)) {
            $this->getUser()->generateApiToken();
            $this->getUser()->save(false);
        }
    }
    /*、调用LoginForm的login方法

           2、调用validate方法，随后对rules进行校验

           3、rules校验中调用validatePassword方法，对用户名和密码进行校验

           4、validatePassword方法校验的过程中调用LoginForm的getUser方法，通过common\models\User类的findByUsername获取用户，找不到或者common\models\User的validatePassword对密码校验失败则返回error

           5、触发LoginForm::GENERATE_API_TOKEN事件，调用LoginForm的onGenerateApiToken方法,通过common\models\User的apiTokenIsValid校验token的有效性，如果无效，则调用User的generateApiToken方法重新生成*/
    /**
     *
     * 登录
     */
    public static function actionLogin ()
    {
        $model = new self();
        $model->setAttributes(Yii::$app->request->post());
        if ($user = $model->login()) {
            if ($user instanceof IdentityInterface) {
                return ['登录成功',1,$user->access_token];
            } else {
                return ['登录失败',-1,$user->errors];
            }
        } else {
            return ['登录失败',-1,$model->errors];
        }
    }

    public static function actionAuth()
    {
        // 到这一步，token都认为是有效的了
        // 下面只需要实现业务逻辑即可，下面仅仅作为案例，比如你可能需要关联其他表获取用户信息等等
      //  $user = User::findIdentityByAccessToken($token);
     /*   $data=[
            'id' => $user->id,
            'username' => $user->username,
            'email' => $user->email,
        ];*/
        return ['测试',0,111];
    }
    public static function auth($parent)
    {
        return ArrayHelper::merge ($parent, [
            'authenticator' => [
                'class' =>QueryParamAuth::className(),
               'tokenParam' => 'token',
                'optional' => [
                    'login',
                    'signup'
                ],
            ]
        ] );
    }
}