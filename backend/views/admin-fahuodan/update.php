<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\guanli_dingdan\FahuodanModel */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Fahuodan Model',
]) . $model->delivery_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fahuodan Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->delivery_id, 'url' => ['view', 'id' => $model->delivery_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="fahuodan-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
