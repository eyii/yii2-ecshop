<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/2
 * Time: 17:48
 */

namespace common\components\ec\frontend;


use Yii;
use yii\base\Widget;

class EcGoumaiciShangpinderenHaigoumaiWidget extends Widget
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
        return $this->render('ec-goumaici-shangpinderen-haigoumai',['url'=>$this->url]);
    }
}