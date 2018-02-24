<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\GoodsModel */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Goods Model',
]) . $model->goods_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Goods Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->goods_id, 'url' => ['view', 'id' => $model->goods_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="goods-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
