<?php

use common\components\eleme\ElTreeWidget;
use common\models\guanli_quanxian\MenuHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \common\models\guanli_quanxian\MenuModel;
use \yii\helpers\ArrayHelper;
use \common\components\ec\backend\EcMenuManageWidget;
use\common\components\eleme\ElJilianCascaderWidget;
$parents=MenuModel::find()->select(['id','name'])->asArray()->all();


/* @var $this yii\web\View */
/* @var $model common\models\MenuModel */
/* @var $form yii\widgets\ActiveForm */



?>
<?php yii\widgets\Pjax::begin(['id'=>'phoneDetail']);?>
<div class="menu-model-form " >
    
    <?php $form = ActiveForm::begin(['id'=>'queryPhone',
                                         'method'=>'post',
                                         'options'=>['data-pjax'=>'#phoneDetail']]); ?>

     <div class="container" style="margin-left: 15px">

         <div class="row">
             <div class="col-sm-5">
                 <?=ElTreeWidget::widget(['menuData'=>MenuHelper::getAssignedMenu(Yii::$app->user->id,true)]);?>
             </div>
             <div class="col-sm-5">
                 <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                 <?= $form->field($model, 'parent')->dropDownList(ArrayHelper::map($parents,'id','name'),['prompt'=>'主项','value' => '0', ]) ?>
                 <?= $form->field($model, 'order')->textInput() ?>
                 <?= $form->field($model, 'data')->textInput() ?>
                  <div class="form-group">
                         <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                     </div>
                 <?php echo ElJilianCascaderWidget::widget(['options'=>json_encode($routes),'value'=>'text',
                         'extend'=>$form->field($model, 'route')->textInput(),
                         'jsCode'=>'value[1]!=undefined?this.$el.querySelector(\'input\').value=value[1]:false;']);?>
             </div>
        </div>
         <div class="row">
             <?=EcMenuManageWidget::widget(['routes'=>json_encode($routes)])?>
         </div>
     </div>
    <?php ActiveForm::end(); ?>

</div>
    <?php yii\widgets\Pjax::end();?>
