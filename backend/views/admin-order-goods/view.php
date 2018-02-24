<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\OrderGoodsModel */

$this->title = $model->rec_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Order Goods Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-goods-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->rec_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->rec_id], [
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
            'rec_id',
            'order_id',
            'goods_id',
            'goods_name',
            'goods_sn',
            'goods_number',
            'market_price',
            'goods_price',
            'goods_attr:ntext',
            'send_number',
            'is_real',
            'extension_code',
            'parent_id',
            'is_gift',
        ],
    ]) ?>

</div>
