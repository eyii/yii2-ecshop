<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\guanli_wenzhang\ArticleModel */

$this->title = Yii::t('app', 'Create Article Model');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Article Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
