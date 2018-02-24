<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AdModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ad-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'position_id')->textInput() ?>

    <?= $form->field($model, 'media_type')->textInput() ?>

    <?= $form->field($model, 'ad_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ad_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ad_code')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'start_time')->textInput() ?>

    <?= $form->field($model, 'end_time')->textInput() ?>

    <?= $form->field($model, 'link_man')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'click_count')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'enabled')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
