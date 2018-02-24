<?php

namespace common\models\guanli_cuxiao;

use Yii;

/*
 * 拍卖活动和夺宝奇兵活动配置信息表
 * This is the model class for table "ecs_goods_activity".
 *
 * @property string $act_id
 * @property string $act_name
 * @property string $act_desc
 * @property integer $act_type
 * @property string $goods_id
 * @property string $goods_name
 * @property string $start_time
 * @property string $end_time
 * @property integer $is_finished
 * @property string $ext_info
 */
class GoodsActivityModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_activity}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['act_name', 'act_desc', 'act_type', 'goods_id', 'goods_name', 'start_time', 'end_time', 'is_finished', 'ext_info'], 'required'],
            [['act_desc', 'ext_info'], 'string'],
            [['act_type', 'goods_id', 'start_time', 'end_time', 'is_finished'], 'integer'],
            [['act_name', 'goods_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'act_id' => Yii::t('app', '自增ID号'),
            'act_name' => Yii::t('app', '促销活动的名称'),
            'act_desc' => Yii::t('app', '促销活动的描述'),
            'act_type' => Yii::t('app', 'Act Type'),
            'goods_id' => Yii::t('app', '参加活动的id，取值于ecs_goods的goods_id'),
            'goods_name' => Yii::t('app', '商品的名称，取值于ecs_goods的goods_id'),
            'start_time' => Yii::t('app', '活动开始时间'),
            'end_time' => Yii::t('app', '活动结束时间'),
            'is_finished' => Yii::t('app', '活动是否结束，0，结束；1，未结束'),
            'ext_info' => Yii::t('app', '序列化后的促销活动的配置信息，包括最低价，最高价，出价幅度，保证金等'),
        ];
    }
}
