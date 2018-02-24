<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\guanli_xitong\ShippingModel */

$this->title = $model->shipping_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shipping Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shipping-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->shipping_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->shipping_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'shipping_id',
            'shipping_code',
            'shipping_name',
            'shipping_desc',
            'insure',
            'support_cod',
            'enabled',
            'shipping_print:ntext',
            'print_bg',
            'config_lable:ntext',
            'print_model',
            'shipping_order',
        ],
    ]) ?>

</div>
