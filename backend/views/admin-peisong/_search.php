<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\guanli_xitong\ShippingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shipping-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'shipping_id') ?>

    <?= $form->field($model, 'shipping_code') ?>

    <?= $form->field($model, 'shipping_name') ?>

    <?= $form->field($model, 'shipping_desc') ?>

    <?= $form->field($model, 'insure') ?>

    <?php // echo $form->field($model, 'support_cod') ?>

    <?php // echo $form->field($model, 'enabled') ?>

    <?php // echo $form->field($model, 'shipping_print') ?>

    <?php // echo $form->field($model, 'print_bg') ?>

    <?php // echo $form->field($model, 'config_lable') ?>

    <?php // echo $form->field($model, 'print_model') ?>

    <?php // echo $form->field($model, 'shipping_order') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
