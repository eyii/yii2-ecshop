<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\guanli_shangpin\TagModel */

$this->title = Yii::t('app', 'Create Tag Model');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tag Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tag-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
