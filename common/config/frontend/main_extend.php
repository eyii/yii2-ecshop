<?php
//设置frontend的ID
$config['id']= 'app-frontend';
//路径相关
$config['basePath']= dirname(__DIR__);
//$config['runtimePath']='@frontend/controllers/runtime';
$config['viewPath']='@frontend/views/';

$config['bootstrap'] = ['log'];
$config['controllerNamespace']='frontend\controllers';
//请求
$config['components'][ 'request']=[
    'csrfParam' => '_csrf-frontend',
    'cookieValidationKey' => '7EmI1aODEGmCo7LwyKBilJ3WKe45oMsv',
];
$config['components'][ 'user']=[
    'identityClass' => 'common\models\User',
    'enableAutoLogin' => true,
];
//日志
$config['components'][  'log']=[
    'traceLevel' => YII_DEBUG ? 3 : 0,
    'targets' => [
        [
            'class' => 'yii\log\FileTarget',
            'levels' => ['error', 'warning'],
        ],
    ],
];
//错误处理
$config['components'][ 'errorHandler']=[
    'errorAction' => 'site/error',
];
//资源管理者
$config['components']['assetManager']= [
    'bundles'=>[
        'yii\bootstrap\BootstrapAsset'=>[
            'css'=>[],
        ],
        'yii\web\JqueryAsset'=>[
            'js'=>[],
        ],
        'yii\bootstrap\BootstrapPluginAsset'=>[
            'js'=>[]
        ]
    ]
];
//默认路由
$config['defaultRoute']='home/index';
//返回的JSON格式
/*return ['余额不足'];

return ['操作成功！', 0];

return ['搜索结果', 0, $dataList];

return $this->render('xxx'); //此时返回的是string，beforeSend里有is_array的判断，所以不会影响模板的输出*/
$config['components']['response']= [
    'on beforeSend' => function($event){
        $response = $event->sender;
        //没设定format为JSON
        if( $response->format != \yii\web\Response::FORMAT_JSON  &&is_array($response->data) ){
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
return $config;