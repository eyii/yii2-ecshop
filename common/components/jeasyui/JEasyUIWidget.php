<?php
namespace common\components\jeasyui;
use yii\base\Widget;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/17
 * Time: 0:49
 */
class JEasyUIWidget extends Widget
{

    public function init()
    {

        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        //  parent::run(); // TODO: Change the autogenerated stub
        return $this->render('jeasyui',[]);
    }
}