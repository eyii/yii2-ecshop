<?php

namespace yii\gii\generators\crud;
use Yii;


/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/26
 * Time: 15:35
 */
class Gen extends Generator
{
   public $modelClass='common\models\Model';
    public $controllerClass='backend\controllers\Controller';
    public $viewPath;
    public $baseControllerClass = 'BaseController';
    public $indexWidgetType = 'grid';
    public $searchModelClass = 'common\models\Search';
    public $enablePjax = true;


    /**
     * @var boolean whether to wrap the `GridView` or `ListView` widget with the `yii\widgets\Pjax` widget
     * @since 2.0.5
     */





}