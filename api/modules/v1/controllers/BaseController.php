<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/18
 * Time: 1:21
 */

namespace api\modules\v1\controllers;


use backend\models\AdminLog;
use common\utils\CommonFun;
use Yii;
use yii\helpers\Url;
use yii\rest\ActiveController;

class BaseController extends ActiveController
{

    public function beforeAction($action)
    {
       header('Access-Control-Allow-Origin:'.\Yii::$app->params[ 'clientDomain']);
         return parent::beforeAction($action); // TODO: Change the autogenerated stub*/
    /*    if (Yii::$app->user->isGuest){
            return  $this->redirect(Url::toRoute('site/index'));
        }*/
/*        if (parent::beforeAction($action)) {
            if($this->verifyPermission($action) == true){
                return true;
            }
        }

  return false;*/


    }

}