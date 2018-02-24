<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AdminChannel */

$this->title = Yii::t('app', 'Create Admin Channel');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Admin Channels'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-channel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
