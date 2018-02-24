<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
define('WEBROOT',__DIR__.'/../..');
require(WEBROOT . '/common/vendor/autoload.php');
require(WEBROOT. '/common/vendor/yiisoft/yii2/Yii.php');
require(WEBROOT. '/common/config/bootstrap.php');
require(WEBROOT . '/common/config/backend/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(WEBROOT . '/common/config/main.php'),
    require(WEBROOT . '/common/config/main-local.php'),
    require(WEBROOT. '/common/config/backend/main.php'),
    require(WEBROOT . '/common/config/backend/main-local.php')
);

$application = new yii\web\Application($config);
$application->run();
require(WEBROOT . '/common/utils/constant.php');
require(WEBROOT . '/common/utils/function.php');