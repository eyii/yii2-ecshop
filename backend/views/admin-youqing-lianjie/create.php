<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\guanli_xitong\FriendLinkModel */

$this->title = Yii::t('app', 'Create Friend Link Model');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Friend Link Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="friend-link-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
