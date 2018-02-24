<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\guanli_shangpin\GoodsTypeModel */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Goods Type Model',
]) . $model->cat_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Goods Type Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cat_id, 'url' => ['view', 'id' => $model->cat_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="goods-type-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
