<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\guanli_wenzhang\ArticleModel */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Article Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->article_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->article_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'article_id',
            'cat_id',
            'title',
            'content:ntext',
            'author',
            'author_email:email',
            'keywords',
            'article_type',
            'is_open',
            'add_time',
            'file_url:url',
            'open_type',
            'link',
            'description',
        ],
    ]) ?>

</div>
