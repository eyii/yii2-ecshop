<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\GoodsActivityModel */

$this->title = Yii::t('app', 'Create Goods Activity Model');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Goods Activity Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-activity-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
