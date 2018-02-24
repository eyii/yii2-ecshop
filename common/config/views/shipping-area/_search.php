<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\guanli_xitong\ShippingAreaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shipping-area-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'shipping_area_id') ?>

    <?= $form->field($model, 'shipping_area_name') ?>

    <?= $form->field($model, 'shipping_id') ?>

    <?= $form->field($model, 'configure') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
