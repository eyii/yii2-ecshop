<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/23
 * Time: 11:08
 */

namespace common\components\ec\frontend;


use Yii;
use yii\base\Widget;

class EcGouwucheXiaoxiWidget extends Widget
{
    public $url='all';
    public function init()
    {
        $this->url=Yii::getAlias($this->url);
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
       return $this->render('ec-gouwuche-xiaoxi',['url'=>$this->url]);
    }
}