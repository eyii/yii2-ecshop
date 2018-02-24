<?php
//修改vendor路径
$config['vendorPath'] ='@common/vendor';
//国际化
$config['components'][ 'i18n']= [
    'translations' => [
        'app*' => [
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => '@common/messages',
            //'sourceLanguage' => 'en',
            'fileMap' => [
                'app' => 'app.php',
                'app/error' => 'error.php',
            ],
        ],
        'model*' => [
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => '@common/messages',
            'fileMap' => [
                'model' => 'model.php'
            ]
        ]
    ],
];
//文件缓存
$config['components'][ 'cache']= [
    'class' => 'yii\caching\FileCache',
    'cachePath' => '@runtime/cache2',
];
//redis缓存
$config['components'][ 'redis']=  [
    'class' => 'yii\redis\Connection',
    'hostname' => '10.0.1.13',
    'port' => 6389,
    'database' => 0,
    'password'  => '82868781',
    'connectionTimeout'=>'0.2'
];
//邮件
$config['components']['mailer']=[
    'class' => 'yii\swiftmailer\Mailer',
    'viewPath' => '@common/mail',
    'useFileTransport' => true,
];
//认证管理
$config['components'][ 'authManager']=[
    "class" => 'yii\rbac\DbManager',
    "defaultRoles" => ["guest"],
];

/*url美化*/
/*$config['components'][ 'urlManager']=[
    //'class' => 'yii\web\UrlManager',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules'=>[
        '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
        '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
    ],
];*/

return $config;