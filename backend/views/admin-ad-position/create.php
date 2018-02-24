<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\guanli_guanggao\AdPositionModel */

$this->title = Yii::t('app', 'Create Ad Position Model');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Position Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-position-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
