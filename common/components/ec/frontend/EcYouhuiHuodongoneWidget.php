<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/2
 * Time: 4:31
 */

namespace common\components\ec\frontend;


use common\models\guanli_cuxiao\FavourableActivityModel;
use common\models\guanli_cuxiao\GoodsActivityModel;
use Yii;
use yii\base\Widget;

class EcYouhuiHuodongoneWidget extends Widget
{
    public $url='all';
    public $items;
    public function init()
    {
        $this->items=json_encode(FavourableActivityModel::find()->asArray()->all());
        $this->url=Yii::getAlias($this->url);
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        //  parent::run(); // TODO: Change the autogenerated stub
        return $this->render('ec-youhui-huodongone',['url'=>$this->url,'items'=>$this->items]);
    }
}