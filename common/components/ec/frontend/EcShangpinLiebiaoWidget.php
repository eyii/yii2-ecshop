<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/31
 * Time: 3:53
 */

namespace common\components\ec\frontend;


use Yii;
use yii\base\Widget;

class EcShangpinLiebiaoWidget extends Widget
{
    public $url='all';
    public function init()
    {
        $this->url=Yii::getAlias($this->url);
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        //  parent::run(); // TODO: Change the autogenerated stub
        return $this->render('ec-xiangguan-shangpin',['url'=>$this->url]);
    }
}