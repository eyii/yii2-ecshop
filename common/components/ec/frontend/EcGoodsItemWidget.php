<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/23
 * Time: 12:29
 */

namespace common\components\ec\frontend;


use Yii;
use yii\base\Widget;

class EcGoodsItemWidget extends Widget
{
    public $url='all';
    public $classIcon='news';
    public $src='/images/home/9_thumb_G_1241511871555.jpg';
    public $href='#';
    public $title='测试';
    public $price=0;
    public function init()
    {
        $this->url=Yii::getAlias($this->url);
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        return '<div class="goodsItem">
                 <span class="'.$this->classIcon.'"></span>
                    <a href="'.$this->href.'"><img src="'.$this->src.'" alt="'.$this->title.'" class="goodsimg"></a><br>
                 <p><a href="'.$this->href.'" title="'.$this->title.'">'.$this->title.'</a></p>
                <font class="f1">￥'.$this->price.'元</font>
                </div>';
   }
}