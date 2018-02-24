<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\guanli_dingdan\CartModel */

$this->title = $model->rec_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cart Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cart-model-view">

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
            'user_id',
            'session_id',
            'goods_id',
            'goods_sn',
            'product_id',
            'goods_name',
            'market_price',
            'goods_price',
            'goods_number',
            'goods_attr:ntext',
            'is_real',
            'extension_code',
            'parent_id',
            'rec_type',
            'is_gift',
            'is_shipping',
            'can_handsel',
            'goods_attr_id',
        ],
    ]) ?>

</div>
