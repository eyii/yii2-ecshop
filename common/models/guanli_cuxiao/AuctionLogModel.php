<?php

namespace common\models\guanli_cuxiao;

use Yii;
//拍卖活动
/**
 * This is the model class for table "ecs_auction_log".
 *
 * @property string $log_id
 * @property string $act_id
 * @property string $bid_user
 * @property string $bid_price
 * @property string $bid_time
 */
class AuctionLogModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%auction_log}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['act_id', 'bid_user', 'bid_price', 'bid_time'], 'required'],
            [['act_id', 'bid_user', 'bid_time'], 'integer'],
            [['bid_price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'log_id' => Yii::t('app', '自增ID号'),
            'act_id' => Yii::t('app', '拍卖活动的id，取值于ecs_goods_activity的act_id字段'),
            'bid_user' => Yii::t('app', '出价的用户id，取值于ecs_users的user_id'),
            'bid_price' => Yii::t('app', '出价价格'),
            'bid_time' => Yii::t('app', '出价时间'),
        ];
    }
}
