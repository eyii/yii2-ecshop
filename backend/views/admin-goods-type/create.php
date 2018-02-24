<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\guanli_shangpin\GoodsTypeModel */

$this->title = Yii::t('app', 'Create Goods Type Model');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Goods Type Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="goods-type-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
