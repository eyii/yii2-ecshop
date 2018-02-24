<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\guanli_xitong\DiquModel */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Diqu Model',
]) . $model->region_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Diqu Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->region_id, 'url' => ['view', 'id' => $model->region_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="diqu-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
