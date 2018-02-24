<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\OrderGoodsModel */

$this->title = Yii::t('app', 'Create Order Goods Model');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Order Goods Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-goods-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
