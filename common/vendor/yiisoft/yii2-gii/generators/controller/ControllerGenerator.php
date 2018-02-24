<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/13
 * Time: 14:06
 */

namespace yii\gii\generators\controller;

use Yii;

class ControllerGenerator extends Generator
{

    /**
     * @var string the controller class name
     */
    public $controllerClass='frontend\controllers\Controller';
    /**
     * @var string the controller's view path
     */
    public $viewPath;
    /**
     * @var string the base class of the controller
     */
    public $baseClass = 'yii\web\Controller';
    /**
     * @var string list of action IDs separated by commas or spaces
     */
    public $actions = 'index';



}