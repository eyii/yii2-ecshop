<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/23
 * Time: 10:19
 */

namespace common\components\ec\frontend;


use Yii;
use yii\base\Widget;

class EcDingdanChaxunWidget extends Widget
{
    public $url='all';
    public function init()
    {
        $this->url=Yii::getAlias($this->url);
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
      return $this->render('ec-dingdan-chaxun',['url'=>$this->url]);
    }
}