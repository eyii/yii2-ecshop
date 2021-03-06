<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\guanli_quanxian\AuthItemModel */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Auth Item Model',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Auth Item Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->name]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="auth-item-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
