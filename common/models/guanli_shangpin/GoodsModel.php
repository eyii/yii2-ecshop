<?php

namespace common\models\guanli_shangpin;

use common\models\guanli_wenzhang\GoodsArticleModel;

use Yii;

/**
商品表 http://book.ecmoban.com/
 *
 * @property string $goods_id
 * @property integer $cat_id
 * @property string $goods_sn
 * @property string $goods_name
 * @property string $goods_name_style
 * @property string $click_count
 * @property integer $brand_id
 * @property string $provider_name
 * @property integer $goods_number
 * @property string $goods_weight
 * @property string $market_price
 * @property string $shop_price
 * @property string $promote_price
 * @property string $promote_start_date
 * @property string $promote_end_date
 * @property integer $warn_number
 * @property string $keywords
 * @property string $goods_brief
 * @property string $goods_desc
 * @property string $goods_thumb
 * @property string $goods_img
 * @property string $original_img
 * @property integer $is_real
 * @property string $extension_code
 * @property integer $is_on_sale
 * @property integer $is_alone_sale
 * @property string $integral
 * @property string $add_time
 * @property integer $sort_order
 * @property integer $is_delete
 * @property integer $is_best
 * @property integer $is_new
 * @property integer $is_hot
 * @property integer $is_promote
 * @property integer $bonus_type_id
 * @property string $last_update
 * @property integer $goods_type
 * @property string $seller_note
 * @property integer $give_integral
 */
class GoodsModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods}}';
      
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_id', 'click_count', 'brand_id', 'goods_number', 'promote_start_date', 'promote_end_date', 'warn_number', 'is_real', 'is_on_sale', 'is_alone_sale', 'integral', 'add_time', 'sort_order', 'is_delete', 'is_best', 'is_new', 'is_hot', 'is_promote', 'bonus_type_id', 'last_update', 'goods_type', 'give_integral','is_shipping'], 'integer'],
            [['goods_sn', 'goods_name', 'provider_name', 'keywords', 'goods_brief', 'goods_desc', 'goods_thumb', 'goods_img', 'original_img', 'extension_code', 'seller_note'], 'required'],
            [['goods_weight', 'market_price', 'shop_price', 'promote_price'], 'number'],
            [['goods_desc'], 'string'],
            [['goods_sn', 'goods_name_style'], 'string', 'max' => 60],
            [['goods_name'], 'string', 'max' => 120],
            [['provider_name'], 'string', 'max' => 100],
            [['keywords', 'goods_brief', 'goods_thumb', 'goods_img', 'original_img', 'seller_note'], 'string', 'max' => 255],
            [['extension_code'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_id' => Yii::t('app', '商品的自增id'),
            'cat_id' => Yii::t('app', '商品分类id'),//，取值ecs_category的cat_id
            'goods_sn' => Yii::t('app', '商品货号'),
            'goods_name' => Yii::t('app', '商品名称'),
            'goods_name_style' => Yii::t('app', '商品名称显示样式'),//；包括颜色和字体样式；格式如#ff00ff+strong
            'click_count' => Yii::t('app', '点击数'),
            'brand_id' => Yii::t('app', '品牌id'),//，取值于ecs_brand 的brand_id
            'provider_name' => Yii::t('app', '供货人名称'),
            'goods_number' => Yii::t('app', '库存'),
            'goods_weight' => Yii::t('app', '商品的重量/千克'),
            'market_price' => Yii::t('app', '市场售价'),
            'shop_price' => Yii::t('app', '本店售价'),
            'promote_price' => Yii::t('app', '促销价格'),
            'promote_start_date' => Yii::t('app', '促销价格开始日期'),
            'promote_end_date' => Yii::t('app', '促销价结束日期'),
            'warn_number' => Yii::t('app', '商品报警数量'),
            'keywords' => Yii::t('app', '商品关键字'),
            'goods_brief' => Yii::t('app', '商品的简短描述'),
            'goods_desc' => Yii::t('app', '详细描述'),
            'goods_thumb' => Yii::t('app', '微缩图片'),//商品在前台显示的，如在分类筛选时显示的小图片
            'goods_img' => Yii::t('app', '实际大小图片'),//，如进入该商品页时介绍商品属性所显示的大图片
            'original_img' => Yii::t('app', '原始图片'),
            'is_real' => Yii::t('app', '是否实物'),
            'extension_code' => Yii::t('app', '商品扩展属性'),//，比如像虚拟卡
            'is_on_sale' => Yii::t('app', '开放销售'),
            'is_alone_sale' => Yii::t('app', '单独销售'),
            'integral' => Yii::t('app', '可用积分'),//购买该商品可以使用的积分数量估计应该是用积分代替金额消费
            'add_time' => Yii::t('app', '添加时间'),
            'sort_order' => Yii::t('app', '推荐排序'),
            'is_delete' => Yii::t('app', '是否删除'),
            'is_best' => Yii::t('app', '精品'),
            'is_new' => Yii::t('app', '新品'),
            'is_hot' => Yii::t('app', '热销'),
            'is_promote' => Yii::t('app', '是否特价'),
            'bonus_type_id' => Yii::t('app', '可领红包类型'),//买该商品能领红包类型
            'last_update' => Yii::t('app', '最近更新时间'),
            'goods_type' => Yii::t('app', '商品类型id'),//，取值表goods_type的cat_id
            'is_shipping' => Yii::t('app', '是否免运费'),
            'seller_note' => Yii::t('app', '商家备注'),//商品的商家备注，仅商家可见
            'give_integral' => Yii::t('app', '赠送积分'),//购买该商品时每笔成功交易赠送的积分数量。
        ];
    }
    public function getGoodsArticle(){
        return $this->hasOne(GoodsArticleModel::className(),['goods_id'=>'goods_id']);
    }

    public function getBrandModel(){
        return $this->hasOne(BrandModel::className(),['brand_id'=>'brand_id']);
    }

    public function getGoodsAttrModel(){
        return $this->hasMany(GoodsAttrModel::className(),['goods_id'=>'goods_id']);
    }

    public static function getShangpinXinxi($id){
        return GoodsModel::find()->asArray()->joinWith(['brandModel'])->where(['goods_id'=>$id])->one();
    }
}
