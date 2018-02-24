<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MenuModel */

$this->title = Yii::t('app', 'Create Menu Model');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Menu Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'routes'=>$routes,
    ]) ?>

</div>
