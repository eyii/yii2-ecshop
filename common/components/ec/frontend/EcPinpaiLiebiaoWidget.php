<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/2
 * Time: 2:58
 */

namespace common\components\ec\frontend;


use common\models\guanli_shangpin\BrandModel;
use Yii;
use yii\base\Widget;

class EcPinpaiLiebiaoWidget extends Widget
{
    public $url='all';
    public $items;
    public function init()
    {
       $this->items= \GuzzleHttp\json_encode(BrandModel::find()->asArray()->all());
        $this->url=Yii::getAlias($this->url);
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        //  parent::run(); // TODO: Change the autogenerated stub
        return $this->render('ec-pinpai-liebiao',['url'=>$this->url,'items'=>$this->items]);
    }
}