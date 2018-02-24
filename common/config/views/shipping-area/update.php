<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\guanli_xitong\ShippingAreaModel */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Shipping Area Model',
]) . $model->shipping_area_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shipping Area Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->shipping_area_id, 'url' => ['view', 'id' => $model->shipping_area_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="shipping-area-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
