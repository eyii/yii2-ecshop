<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\GoodsModel */

$this->title = Yii::t('app', 'Create Goods Model');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Goods Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('el_form', [
        'model' => $model,
    ]) ?>

</div>
