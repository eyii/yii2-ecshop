<?php

namespace common\models\guanli_cuxiao;

use common\models\guanli_shangpin\BrandModel;
use Yii;

/*
 * 优惠活动的配置信息，优惠活动包括送礼，减免，打折
 * This is the model class for table "ecs_favourable_activity".
 *
 * @property integer $act_id
 * @property string $act_name
 * @property string $start_time
 * @property string $end_time
 * @property string $user_rank
 * @property integer $act_range
 * @property string $act_range_ext
 * @property string $min_amount
 * @property string $max_amount
 * @property integer $act_type
 * @property string $act_type_ext
 * @property string $gift
 * @property integer $sort_order
 */
class FavourableActivityModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%favourable_activity}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['act_name', 'start_time', 'end_time', 'user_rank', 'act_range', 'act_range_ext', 'min_amount', 'max_amount', 'act_type', 'act_type_ext', 'gift', 'sort_order'], 'required'],
            [['start_time', 'end_time', 'act_range', 'act_type', 'sort_order'], 'integer'],
            [['min_amount', 'max_amount', 'act_type_ext'], 'number'],
            [['gift'], 'string'],
            [['act_name', 'user_rank', 'act_range_ext'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'act_id' => Yii::t('app', '优惠活动的自增id'),
            'act_name' => Yii::t('app', '优惠活动的活动名称'),
            'start_time' => Yii::t('app', '活动的开始时间'),
            'end_time' => Yii::t('app', '活动的结束时间'),
            'user_rank' => Yii::t('app', '可以参加活动的用户信息，取值于ecs_user_rank的rank_id；其中0是非会员，其他是相应的会员等级；多个值用逗号分隔'),
            'act_range' => Yii::t('app', '优惠范围；0，全部商品；1，按分类；2，按品牌；3，按商品'),
            'act_range_ext' => Yii::t('app', '根据优惠活动范围的不同，该处意义不同；但是都是优惠范围的约束；如，如果是商品，该处是商品的id，如果是品牌，该处是品牌的id'),
            'min_amount' => Yii::t('app', '订单达到金额下限，才参加活动'),
            'max_amount' => Yii::t('app', '参加活动的订单金额下限，0，表示没有上限'),
            'act_type' => Yii::t('app', '参加活动的优惠方式；0，送赠品或优惠购买；1，现金减免；价格打折优惠'),
            'act_type_ext' => Yii::t('app', '如果是送赠品，该处是允许的最大数量，0，无数量限制；现今减免，则是减免金额，单位元；打折，是折扣值，100算，8折就是80'),
            'gift' => Yii::t('app', '如果有特惠商品，这里是序列化后的特惠商品的id,name,price信息;取值于ecs_goods的goods_id，goods_name，价格是添加活动时填写的'),
            'sort_order' => Yii::t('app', '活动在优惠活动页面显示的先后顺序，数字越大越靠后'),
        ];
    }


}
