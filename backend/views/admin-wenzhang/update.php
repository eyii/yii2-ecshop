<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\guanli_wenzhang\ArticleModel */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Article Model',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Article Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->article_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="article-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
