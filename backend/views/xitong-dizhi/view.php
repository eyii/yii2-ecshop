<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\guanli_huiyuan\UserAddressModel */

$this->title = $model->address_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Address Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-address-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->address_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->address_id], [
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
            'address_id',
            'address_name',
            'user_id',
            'consignee',
            'email:email',
            'country',
            'province',
            'city',
            'district',
            'address',
            'zipcode',
            'tel',
            'mobile',
            'sign_building',
            'best_time',
        ],
    ]) ?>

</div>
