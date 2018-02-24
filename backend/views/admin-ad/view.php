<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AdModel */

$this->title = $model->ad_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->ad_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->ad_id], [
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
            'ad_id',
            'position_id',
            'media_type',
            'ad_name',
            'ad_link',
            'ad_code:ntext',
            'start_time:datetime',
            'end_time:datetime',
            'link_man',
            'link_email:email',
            'link_phone',
            'click_count',
            'enabled',
        ],
    ]) ?>

</div>
