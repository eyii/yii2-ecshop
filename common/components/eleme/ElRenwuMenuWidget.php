<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/17
 * Time: 1:03
 */

namespace common\components\eleme;


use yii\base\Widget;

class ElRenwuMenuWidget extends Widget
{
    public function init()
    {

        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        //  parent::run(); // TODO: Change the autogenerated stub
        return $this->render('el-renwu-menu');
    }
}