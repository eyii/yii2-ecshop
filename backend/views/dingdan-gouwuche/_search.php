<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\guanli_dingdan\CartSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cart-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'rec_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'session_id') ?>

    <?= $form->field($model, 'goods_id') ?>

    <?= $form->field($model, 'goods_sn') ?>

    <?php // echo $form->field($model, 'product_id') ?>

    <?php // echo $form->field($model, 'goods_name') ?>

    <?php // echo $form->field($model, 'market_price') ?>

    <?php // echo $form->field($model, 'goods_price') ?>

    <?php // echo $form->field($model, 'goods_number') ?>

    <?php // echo $form->field($model, 'goods_attr') ?>

    <?php // echo $form->field($model, 'is_real') ?>

    <?php // echo $form->field($model, 'extension_code') ?>

    <?php // echo $form->field($model, 'parent_id') ?>

    <?php // echo $form->field($model, 'rec_type') ?>

    <?php // echo $form->field($model, 'is_gift') ?>

    <?php // echo $form->field($model, 'is_shipping') ?>

    <?php // echo $form->field($model, 'can_handsel') ?>

    <?php // echo $form->field($model, 'goods_attr_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
