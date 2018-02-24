<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\guanli_shangpin\TagModel */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Tag Model',
]) . $model->tag_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tag Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tag_id, 'url' => ['view', 'id' => $model->tag_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tag-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
