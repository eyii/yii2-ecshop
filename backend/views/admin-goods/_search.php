<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\GoodsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="goods-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'goods_id') ?>

    <?= $form->field($model, 'cat_id') ?>

    <?= $form->field($model, 'goods_sn') ?>

    <?= $form->field($model, 'goods_name') ?>

    <?= $form->field($model, 'goods_name_style') ?>

    <?php // echo $form->field($model, 'click_count') ?>

    <?php // echo $form->field($model, 'brand_id') ?>

    <?php // echo $form->field($model, 'provider_name') ?>

    <?php // echo $form->field($model, 'goods_number') ?>

    <?php // echo $form->field($model, 'goods_weight') ?>

    <?php // echo $form->field($model, 'market_price') ?>

    <?php // echo $form->field($model, 'shop_price') ?>

    <?php // echo $form->field($model, 'promote_price') ?>

    <?php // echo $form->field($model, 'promote_start_date') ?>

    <?php // echo $form->field($model, 'promote_end_date') ?>

    <?php // echo $form->field($model, 'warn_number') ?>

    <?php // echo $form->field($model, 'keywords') ?>

    <?php // echo $form->field($model, 'goods_brief') ?>

    <?php // echo $form->field($model, 'goods_desc') ?>

    <?php // echo $form->field($model, 'goods_thumb') ?>

    <?php // echo $form->field($model, 'goods_img') ?>

    <?php // echo $form->field($model, 'original_img') ?>

    <?php // echo $form->field($model, 'is_real') ?>

    <?php // echo $form->field($model, 'extension_code') ?>

    <?php // echo $form->field($model, 'is_on_sale') ?>

    <?php // echo $form->field($model, 'is_alone_sale') ?>

    <?php // echo $form->field($model, 'is_shipping') ?>

    <?php // echo $form->field($model, 'integral') ?>

    <?php // echo $form->field($model, 'add_time') ?>

    <?php // echo $form->field($model, 'sort_order') ?>

    <?php // echo $form->field($model, 'is_delete') ?>

    <?php // echo $form->field($model, 'is_best') ?>

    <?php // echo $form->field($model, 'is_new') ?>

    <?php // echo $form->field($model, 'is_hot') ?>

    <?php // echo $form->field($model, 'is_promote') ?>

    <?php // echo $form->field($model, 'bonus_type_id') ?>

    <?php // echo $form->field($model, 'last_update') ?>

    <?php // echo $form->field($model, 'goods_type') ?>

    <?php // echo $form->field($model, 'seller_note') ?>

    <?php // echo $form->field($model, 'give_integral') ?>

    <?php // echo $form->field($model, 'rank_integral') ?>

    <?php // echo $form->field($model, 'suppliers_id') ?>

    <?php // echo $form->field($model, 'is_check') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
