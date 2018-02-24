<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\guanli_xitong\ShippingAreaModel */

$this->title = Yii::t('app', 'Create Shipping Area Model');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shipping Area Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shipping-area-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
