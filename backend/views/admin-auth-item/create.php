<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\guanli_quanxian\AuthItemModel */

$this->title = Yii::t('app', 'Create Auth Item Model');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Auth Item Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
