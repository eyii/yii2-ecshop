<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\guanli_huiyuan\UserAddressModel */

$this->title = Yii::t('app', 'Create User Address Model');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Address Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-address-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
