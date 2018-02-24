<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AdModel */

$this->title = Yii::t('app', 'Create Ad Model');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
