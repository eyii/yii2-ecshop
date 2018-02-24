<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\guanli_xitong\FriendLinkModel */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Friend Link Model',
]) . $model->link_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Friend Link Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->link_id, 'url' => ['view', 'id' => $model->link_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="friend-link-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
