<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\guanli_dingdan\FahuodanModel */

$this->title = Yii::t('app', 'Create Fahuodan Model');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fahuodan Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fahuodan-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
