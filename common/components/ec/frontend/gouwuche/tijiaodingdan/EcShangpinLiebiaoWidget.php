<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/25
 * Time: 8:04
 */

namespace common\components\ec\frontend\gouwuche\tijiaodingdan;


use yii\base\Widget;

class EcShangpinLiebiaoWidget extends Widget
{
    public $cart_model;
    public function init()
    {

        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        //  parent::run(); // TODO: Change the autogenerated stub
        return $this->render('ec-shangpin-liebiao',['cart_model'=>$this->cart_model]);
    }
}