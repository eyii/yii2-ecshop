<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\guanli_quanxian\AuthItemChildModel */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Auth Item Child Model',
]) . $model->parent;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Auth Item Child Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->parent, 'url' => ['view', 'parent' => $model->parent, 'child' => $model->child]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="auth-item-child-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'routes'=>$routes
    ]) ?>

</div>
