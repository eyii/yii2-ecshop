<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\guanli_huiyuan\UserAddressModel */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'User Address Model',
]) . $model->address_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Address Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->address_id, 'url' => ['view', 'id' => $model->address_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="user-address-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
