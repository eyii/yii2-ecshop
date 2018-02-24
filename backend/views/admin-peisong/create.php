<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\guanli_xitong\ShippingModel */

$this->title = Yii::t('app', 'Create Shipping Model');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shipping Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shipping-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
