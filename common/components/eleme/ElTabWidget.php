<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/21
 * Time: 14:58
 */

namespace common\components\eleme;


use yii\base\Widget;

class ElTabWidget extends Widget
{
    public function init()
    {

        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        //  parent::run(); // TODO: Change the autogenerated stub
        return $this->render('el-tab');
    }
}