<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\guanli_guanggao\AdPositionModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ad-position-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'position_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ad_width')->textInput() ?>

    <?= $form->field($model, 'ad_height')->textInput() ?>

    <?= $form->field($model, 'position_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position_style')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
