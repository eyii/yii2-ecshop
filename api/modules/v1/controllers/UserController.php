<?php

namespace api\modules\v1\controllers;

use api\models\LoginForm;
use common\models\guanli_quanxian\AdminUser;

use common\models\User;
use Yii;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\helpers\ArrayHelper;
use yii\filters\auth\QueryParamAuth;
use yii\web\IdentityInterface;

class UserController extends BaseController
{
    public $modelClass = 'common\models\User';

    public function beforeAction($action)
    {
        header('Access-Control-Allow-Origin:'.\Yii::$app->params[ 'clientDomain']);
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }

    public function actionTest(){

        $ret=[
            [
              'image'=> 'http://g3.tdimg.com/71fa6c175a76df85078bf8d0feec2da7/t_2.jpg',
              'title'=>  'Breakfast',
              'author'=>  'Myron'
             ],
            [
                'image'=> 'http://g3.tdimg.com/71fa6c175a76df85078bf8d0feec2da7/t_2.jpg',
                'title'=>  'Breakfast',
                'author'=>  'Myron'
              ],
           [
            'image'=> 'http://g3.tdimg.com/71fa6c175a76df85078bf8d0feec2da7/t_2.jpg',
            'title'=>  'Breakfast',
            'author'=>  'Myron'
             ]
        ];
        return ['搜索结果', 0, $ret];
    }

    public function behaviors()
    {
        return LoginForm::auth(parent::behaviors());
    }




    /**
     *
     * 登录
     */
    public function actionLogin ()
    {
     return  LoginForm::actionLogin();
    }

    public function actionAuth($token)
    {
      return  LoginForm::actionAuth($token);
    }
}
