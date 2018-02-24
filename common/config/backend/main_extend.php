<?php
$config['id']= 'app-backend';
$config['basePath']= '@backend';

$config['controllerNamespace']='backend\controllers';
$config['bootstrap']=['log','gii'];
/*修改路径 别忘修改web/index.php了*/
//$config['viewPath']='@backend/controllers/views/';
//$config['runtimePath']='@backend/controllers/runtime';

$config["aliases" ]=[
  /*  "@mdm/admin" => "@vendor/mdmsoft/yii2-admin",*/
];
/*$config['as access' ]=[
    'class' => 'mdm\admin\components\AccessControl',
    'allowActions' => [
        //这里是允许访问的action
        //controller/action
        // * 表示允许所有，后期会介绍这个
        '*'
    ]
];*/
/*主题*/
/*
 $config['components'][ 'view'][ 'theme']=[
    'basePath' => '@app/themes/spring',
     'baseUrl' => '@web/themes/spring',
    'pathMap' => [
        '@app/views' => [
            '@app/views/pc',
            '@app/views/mobile',
        ]
    ],
];
*/
$config['components'][ 'request']=[
 'csrfParam' => '_csrf-backend',
    'cookieValidationKey' => 'w3BnewAWmCrjijzkiLucYD5Ty1Ym_V9F'
];
/*user验证*/
$config['components'][ 'user']=[
    'class'=>'yii\web\User',
    'identityClass' => 'common\models\guanli_quanxian\AdminUser',
    'enableAutoLogin' => true,
    'enableSession'=>true,
];
$config['components'][ 'session']=[
    // this is the name of the session cookie used for login on the backend
    'name' => 'advanced-backend',
];
$config['components'][ 'authManager']=[
    "class" => 'yii\rbac\DbManager',
    "defaultRoles" => ["guest"],
];
$config['components'][ 'errorHandler']=[
    'errorAction' => 'site/error',
];
/*缓存区域*/
/*配置yii2 的session存储于 memcached*/
/*$config['components'][ 'cache']= [
    'class' => 'yii\caching\MemCache',
    'servers' => [
        'a' => [
            'host' => 'xxx',
            'port' => xxx,
        ],
    ],
    'useMemcached' => true,
    'serializer' => false,
    'keyPrefix' => 'xxx:',
    'persistentId' => 'xxx',
];
$config['components'][ 'session']= [
    'class' => 'yii\web\CacheSession',
    'cookieParams' => [
        'domain' => '.xxx.com',
        'httpOnly' => true,
    ],
];*/
//缓存
$config['components'][ 'cache']= [
    'class' => 'yii\caching\FileCache',
    'cachePath' => '@runtime/cache2',
];
$config['components'][  'log']= [
    'traceLevel' => YII_DEBUG ? 3 : 0,
    'targets' => [
        [
            'class' => 'yii\log\FileTarget',
            'levels' => ['error', 'warning'],
            'logVars' => [],
        ],
    ],
];
//禁用JQUERY
/*$config['components']['assetManager']= [
    'bundles' => [
        'yii\web\JqueryAsset' => [
            'sourcePath' => null,
            'js' => []
        ],
    ],
];*/

//返回的JSON格式
$config['components']['response']= [
    'on beforeSend' => function($event){
        $response = $event->sender;
        if(
            $response->format != \yii\web\Response::FORMAT_JSON //没设定format为JSON
            &&    is_array($response->data) //数组
        ){
            $data = $response->data;
            $response->data = [
                'message' => $data[0],
                'code' => isset($data[1]) ? $data[1] : 0,
                'data' => isset($data[2]) ? $data[2] : '',
            ];
            $response->format = \yii\web\Response::FORMAT_JSON;
        }
    }
];
$config['defaultRoute']='site/index';
$config['language']= 'zh-CN';

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'generators' => [
            'model' => [
                'class' => 'yii\gii\generators\model\GeneratorCommon',
                'templates' => [
                    //  'adminlte' => '@commonvendor\yiisoft\yii2-gii\generators\model\adminlte',
               //   'adminlte' => '@vendor/yiisoft/yii2-gii/generators/model/adminlte',
                ]
            ],
            'controller' => [
                'class' => 'yii\gii\generators\controller\ControllerGenerator',
            ],
             'crud' => [
                'class' => 'yii\gii\generators\crud\Gen',
/*           'templates' => [
//                     'adminlte' => '..\..\vendor\yiisoft\yii2-gii\generators\crud\adminlte',


                    'adminlte' => '@vendor/yiisoft/yii2-gii/generators/crud/adminlte',
                ]*/
            ],
       /*     'enumerable' => [
                'class' => 'yii2mod\gii\enum\Generator',
            ],*/
         /*   'crud' => [
                'class' => 'yii2mod\gii\crud\Generator',
            ],*/
        ]
    ];
}
return $config;