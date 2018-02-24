<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use \common\components\ec\frontend\EcFooterWidget;
use \common\components\ec\frontend\EcHeaderWidget;
use \common\components\eleme\ElRenwuMenuWidget;
AppAsset::register($this);
$this->title='YiiEcshop';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Generator" content="YiiEcshop v2.7.3">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="http://ec.com/favicon.ico">
    <link rel="icon" href="http://ec.com/animated_favicon.gif" type="image/gif">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?=$this->head() ?>
</head>
<body>
<?=$this->beginBody() ?>
<div id="main">
<?=EcHeaderWidget::widget()?>
    <?= $content ?>
<?=EcFooterWidget::widget()?>
    <?=ElRenwuMenuWidget::widget()?>
</div>
<?=$this->endBody() ?>
</body>
</html>
<?=$this->endPage() ?>
