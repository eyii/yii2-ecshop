<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/28
 * Time: 1:47
 */

namespace common\components\ec\backend;


use yii\base\Widget;

class EcMenuManageWidget extends Widget
{
    public $routes;
    public function init()
    {

        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        //  parent::run(); // TODO: Change the autogenerated stub
        return $this->render('ec-menu-manage',['routes'=>$this->routes]);
    }
}