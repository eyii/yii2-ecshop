<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/23
 * Time: 10:16
 */

namespace common\components\ec\frontend;


use Yii;
use yii\base\Widget;
use \common\models\guanli_shangpin\GoodsModel;

class EcXinpinWidget extends Widget
{
    public $url='all';
    public $items;
    public function init()
    {
        $this->items=json_encode(GoodsModel::find()->select(['goods_id','shop_price','goods_name','goods_thumb'])->where(['is_new'=>1])
            ->asArray()->all());

        $this->url=Yii::getAlias($this->url);
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        //  parent::run(); // TODO: Change the autogenerated stub
        return $this->render('ec-xinpin',['url'=>$this->url,'items'=>$this->items]);
    }
}