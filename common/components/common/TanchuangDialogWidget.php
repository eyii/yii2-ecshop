<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/24
 * Time: 17:57
 */

namespace common\components\common;


use common\models\guanli_quanxian\AdminUser;
use Yii;
use yii\base\Widget;

class TanchuangDialogWidget extends Widget
{
    public $model;
    public $obj;
    public $routeCreate='info/create';
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }
   public function actionIndex($obj,$view='index'){
      return $obj->render($view);
   }
    public function actionSave($model)
    {
        if (Yii::$app->request->isPost){
            return  $model->load(Yii::$app->request->post()) && $model->save();
        }
        return false;
    }
    public function actionData($obj,$model,$view='create'){
        return $obj->renderAjax($view, [
            'model' => $model,
        ]);
    }
    public function run()
    {
        return $this->render('tanchuang-dialog',['url'=>$this->url]);
    }
}