<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/21
 * Time: 12:06
 */

namespace common\components\eleme;


use yii\base\Widget;

class ElCarouselWidget extends Widget
{
    public $interval=5000;
    public $height='300px';
    public function init()
    {

        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        //  parent::run(); // TODO: Change the autogenerated stub
        return $this->render('el-carousel');
    }
}