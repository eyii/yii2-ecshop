<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/1
 * Time: 10:51
 */

namespace common\components\ec\frontend;


use Yii;
use yii\base\Widget;

class EcYonghuZhuceWidget extends Widget
{
    public $url='all';
    public $items;
    public function init()
    {


        $this->url=Yii::getAlias($this->url);
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        //  parent::run(); // TODO: Change the autogenerated stub
        return $this->render('ec-yonghu-zhuce',['url'=>$this->url,'items'=>$this->items]);
    }
}