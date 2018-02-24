<?php

namespace common\models\guanli_dingdan;

use Yii;

/**
 * This is the model class for table "ecs_order_goods".
 *
 * @property string $rec_id
 * @property string $order_id
 * @property string $goods_id
 * @property string $goods_name
 * @property string $goods_sn
 * @property integer $goods_number
 * @property string $market_price
 * @property string $goods_price
 * @property string $goods_attr
 * @property integer $send_number
 * @property integer $is_real
 * @property string $extension_code
 * @property string $parent_id
 * @property integer $is_gift
 */
class OrderGoodsModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%order_goods}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'goods_id', 'goods_number', 'send_number', 'is_real', 'parent_id', 'is_gift'], 'integer'],
            [['goods_name', 'goods_sn', 'goods_attr', 'extension_code'], 'required'],
            [['market_price', 'goods_price'], 'number'],
            [['goods_attr'], 'string'],
            [['goods_name'], 'string', 'max' => 120],
            [['goods_sn'], 'string', 'max' => 60],
            [['extension_code'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rec_id' => Yii::t('app', '订单商品信息自增id'),
            'order_id' => Yii::t('app', '订单商品信息对应的详细信息id，取值order_info的order_id'),
            'goods_id' => Yii::t('app', '商品的的id，取值表ecs_goods 的goods_id'),
            'goods_name' => Yii::t('app', '商品的名称，取值表ecs_goods '),
            'goods_sn' => Yii::t('app', '商品的唯一货号，取值ecs_goods '),
            'goods_number' => Yii::t('app', '商品的购买数量'),
            'market_price' => Yii::t('app', '商品的市场售价，取值ecs_goods '),
            'goods_price' => Yii::t('app', '商品的本店售价，取值ecs_goods '),
            'goods_attr' => Yii::t('app', '购买该商品时所选择的属性；'),
            'send_number' => Yii::t('app', '当不是实物时，是否已发货，0，否；1，是'),
            'is_real' => Yii::t('app', '是否是实物，0，否；1，是；取值ecs_goods '),
            'extension_code' => Yii::t('app', '商品的扩展属性，比如像虚拟卡。取值ecs_goods '),
            'parent_id' => Yii::t('app', '父商品id，取值于ecs_cart的parent_id；如果有该值则是值多代表的物品的配件'),
            'is_gift' => Yii::t('app', '是否参加优惠活动，0，否；其他，取值于ecs_cart 的is_gift，跟其一样，是参加的优惠活动的id'),
        ];
    }
}
