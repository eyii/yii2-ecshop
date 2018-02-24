<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\guanli_shangpin\BrandModel */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Brand Model',
]) . $model->brand_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Brand Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->brand_id, 'url' => ['view', 'id' => $model->brand_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="brand-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
