<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/1
 * Time: 12:19
 */

namespace common\components\ec\frontend;


use Yii;
use yii\base\Widget;

class EcYonghuZhongxinZuoquWidget extends Widget
{

    public function init()
    {

        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        //  parent::run(); // TODO: Change the autogenerated stub
        return $this->render('ec-yonghu-zhongxin-zuoqu');
    }
}