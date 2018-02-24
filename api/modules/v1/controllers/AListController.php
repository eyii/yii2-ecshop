<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/18
 * Time: 1:20
 */

namespace api\modules\v1\controllers;


use common\models\AdminVideoList;
use yii\base\Exception;
use yii\db\ActiveQuery;
use yii\filters\AccessControl;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use yii\helpers\ArrayHelper;
use yii\rest\ActiveController;

class AListController extends BaseController
{
  public $modelClass = 'common\models\AdminVideoList';
    /*   public function behaviors() {
           return ArrayHelper::merge (parent::behaviors(), [
               'authenticator' => [
                   'class' => QueryParamAuth::className()
               ]
           ] );
       }*/
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

    public function actionList(){
        $model=AdminVideoList::find()->asArray()->limit(10)->all();
        return ['搜索结果', 0, $model];
    }

    public function actionT($id=1){
        $auth= \Yii::$app->authManager;
        var_dump($auth->getRole('shop'));
    //    $auth->add($rule);
      //  $aq=\Yii::$app->db->createCommand('SELECT * FROM t_admin_video_list '.$id)->queryAll();

        return ['搜索结果', 0,1];
    }

 /*   public function behaviors()
    {

    return  ArrayHelper::merge(parent::behaviors(),[
            'authenticator' => [
                'class' => CompositeAuth::className(),
                'authMethods' => [
                    HttpBasicAuth::className(),
                    HttpBearerAuth::className(),
                    QueryParamAuth::className(),
                ],
            ],
        ]);

     return [
         'access'=>[
             'class'=>AccessControl::className(),
            // 'only'=>[],
             'rules'=>[
                 [
                     'roles'
                 ]
             ],
             'denyCallback'=>function ($rule, $action){
                throw new Exception('没有访问权限');
             }
         ]

     ];
    }*/


}