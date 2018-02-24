<?php

// NOTE: Make sure this file is not accessible when deployed to production
if (!in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) {
    die('You are not allowed to access this file.');
}

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'test');
define('WEBROOT',__DIR__.'/../..');

require(WEBROOT . '/common/vendor/autoload.php');
require(WEBROOT. '/common/vendor/yiisoft/yii2/Yii.php');
require(WEBROOT. '/common/config/bootstrap.php');
require(WEBROOT . '/common/config/backend/bootstrap.php');


$config = require(WEBROOT . '/tests/codeception/config/backend/acceptance.php');

(new yii\web\Application($config))->run();
