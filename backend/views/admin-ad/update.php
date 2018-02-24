<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AdModel */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Ad Model',
]) . $model->ad_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ad_id, 'url' => ['view', 'id' => $model->ad_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="ad-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
