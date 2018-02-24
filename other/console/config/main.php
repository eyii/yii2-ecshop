<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

$config['id']= 'app-console';
$config[ 'basePath']= dirname(__DIR__);
$config['bootstrap']= ['log'];
$config['controllerNamespace']=  'console\controllers';
$config[ 'components'][ 'log' ]=[
    'targets' => [
        [
            'class' => 'yii\log\FileTarget',
            'levels' => ['error', 'warning'],
        ],
    ],
];
$config[  'controllerMap']=  [
    'migrate' => [
        'class' => 'yii\console\controllers\MigrateController',
        'templateFile' => '@jamband/schemadump/template.php',
    ],
    'schemadump' => [
        'class' => 'jamband\schemadump\SchemaDumpController',
    ],
];
$config[ 'params']= $params;
return $config;