<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/26
 * Time: 5:33
 */

namespace common\components\eleme;


use yii\base\Widget;

class ElDongtaiTabWidget extends Widget
{
    public $tabs;
    public function init()
    {

        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {

        return $this->render('el-dongtai-tab',['tabs'=>json_encode($this->tabs)]);
    }
}