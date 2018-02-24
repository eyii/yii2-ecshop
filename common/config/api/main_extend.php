<?php
$params = array_merge(
    require(__DIR__ . '/../../../common/config/params.php'),
    require(__DIR__ . '/params.php')
);
$config['params']= $params;
$config['id']= 'app-api';
$config['basePath']= dirname(__DIR__);
$config['bootstrap'] = ['log'];
$config['controllerNamespace']='api\controllers';
$config['components']['authManager']=[
    'class' => 'yii\rbac\DbManager'
];
/*修改路径 别忘修改web/index.php了*/
//$config['viewPath']=dirname(dirname(__DIR__)).'/models/views/';
//$config['runtimePath']=$config['viewPath'].'/all/runtime';
/*默认路由*/
$config['defaultRoute']='site/index';
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
$config['components'][ 'request']=[
    // 'csrfParam' => '_csrf-backend',
    'cookieValidationKey' => '7EmI1aODEGmCo7LwyKBilJ3WKe45oMsv',
];
$config['components'][ 'user']=[
    'identityClass' => 'common\models\User',
    'enableAutoLogin' => true,
    'enableSession'=>false
];
$config['components'][  'log']=[
    'traceLevel' => YII_DEBUG ? 3 : 0,
    'targets' => [
        [
            'class' => 'yii\log\FileTarget',
            'levels' => ['error', 'warning'],
        ],
    ],
];
/*$config['components'][ 'errorHandler']=[
    'errorAction' => 'site/error',
];*/
$config['modules']= [
    'v1' => [
        'class' => 'api\modules\v1\Modules',
    ],
];
/*url美化*/
$config['components']['urlManager']=[
    'enablePrettyUrl' => false,
    'showScriptName' => false,
    'enableStrictParsing' =>true,
    'rules' => [
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => ['v1/user']
        ],
    ],
];

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
$config['params']=$params;
return $config;