<?php

namespace backend\controllers;

class AdminInfoController extends BaseController
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function behaviors()
    {
        $behaviors[]=  [
            'class' => 'yii\filters\PageCache', // 设置需要加载的缓存文件
            'only' => ['index'], // 设置需要缓存的控制器
            'duration' => 1, // 设置过期时间
            'dependency' => [ // 设置依赖关系
                'class' => 'yii\caching\FileDependency',
                'fileName' => 'robots.txt'
            ]
        ];
        return $behaviors;
    }

}
