<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\OrderGoodsModel */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Order Goods Model',
]) . $model->rec_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Order Goods Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rec_id, 'url' => ['view', 'id' => $model->rec_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="order-goods-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
