<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\guanli_xitong\ShippingModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shipping-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'shipping_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shipping_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shipping_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'insure')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'support_cod')->textInput() ?>

    <?= $form->field($model, 'enabled')->textInput() ?>

    <?= $form->field($model, 'shipping_print')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'print_bg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'config_lable')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'print_model')->textInput() ?>

    <?= $form->field($model, 'shipping_order')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
