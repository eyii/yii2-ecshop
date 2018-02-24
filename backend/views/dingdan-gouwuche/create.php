<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\guanli_dingdan\CartModel */

$this->title = Yii::t('app', 'Create Cart Model');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cart Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cart-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
