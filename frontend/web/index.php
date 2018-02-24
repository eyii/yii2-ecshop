<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

define('WEBROOT',__DIR__.'/../../');
$GLOBALS['URL']='http://yiiec.com/all';

require(WEBROOT . '/common/utils/constant.php');
require(WEBROOT . '/common/utils/function.php');
require(WEBROOT. '/common/vendor/autoload.php');
require(WEBROOT. '/common/vendor/yiisoft/yii2/Yii.php');
require(WEBROOT. '/common/config/bootstrap.php');
require(WEBROOT . '/common/config/frontend/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    //main配置文件
    require(WEBROOT . '/common/config/main.php'),
    require(WEBROOT . '/common/config/main-local.php'),
    //程序的配置文件
    require(WEBROOT . '/common/config/frontend/main.php'),
    require(WEBROOT . '/common/config/frontend/main-local.php')
);

$application = new yii\web\Application($config);
$application->run();
