<?php


use common\components\ec\backend\EcQuanxianzuShezhiWidget;
use \common\components\common\EcAjaxFormWidget;
use common\components\eleme\ElTreeWidget;
use common\models\guanli_quanxian\MenuHelper;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \common\models\guanli_quanxian\AuthItemChildModel;
use \yii\helpers\Url;
$ps=AuthItemChildModel::find()->select(['name','parent'])->joinWith(['authItemParent'])->groupBy(['parent'])->asArray()->all();
$parents=ArrayHelper::map($ps,'name','parent');

?>
<style>
    #auth-item-child .col-sm-5:nth-child(2){
        margin-top: 24px;
    }
</style>
<div class="auth-item-child-model-form">

    <?php $form = ActiveForm::begin(['id' => 'auth-item-child']); ?>
   <!-- 子项 -->
    <div class="row">
        <div class="col-sm-5">  <?=ElTreeWidget::widget(['menuData'=>MenuHelper::getAssignedMenu(Yii::$app->user->id,true)]);?></div>
        <div class="col-sm-5"> <?=EcQuanxianzuShezhiWidget::widget(['routes'=>json_encode($routes),'value'=>'text']);?> </div>
    </div>
   <!-- 父项-->

    <div class="form-group">
        <div class="row">
            <div class="col-sm-5">
            <?= $form->field($model, 'parent')->dropDownList($parents,['fieldConfig'=>['template' => "{input}\n{label}\n{hint}\n{error}"]])?>
            </div>
            <div class="col-sm-5" id="">
                <?=Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['id'=>'batchCreate','class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                <?=Html::submitButton('批量删除', ['id'=>'batchDel','class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
         </div>

        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>
   var delNode= document.querySelector('#batchDel');
   var createNode= document.querySelector('#batchCreate');
   delNode.onclick=function () {
       <?=EcAjaxFormWidget::widget(['action' =>Url::toRoute(['admin-auth-item-child/batch-del']),'formId'=>'#auth-item-child'])?>
   };
   createNode.onclick=function () {
       <?=EcAjaxFormWidget::widget(['action' =>Url::toRoute(['admin-auth-item-child/create']),'formId'=>'#auth-item-child'])?>
   };

</script>

