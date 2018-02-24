<?php

namespace common\models\guanli_quanxian;

use Yii;

/**
会员收藏商品的记录列表
 *
 *
 * ，一条记录一个收藏商品
 *
 * @property string $rec_id
 * @property string $user_id
 * @property string $goods_id
 * @property string $add_time
 * @property integer $is_attention
 */
class CollectGoodsModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%collect_goods}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'goods_id', 'add_time', 'is_attention'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rec_id' => Yii::t('app', '收藏记录的自增id'),
            'user_id' => Yii::t('app', '该条收藏记录的会员id，取值于ecs_users的user_id'),
            'goods_id' => Yii::t('app', '收藏的商品id，取值于ecs_goods的goods_id'),
            'add_time' => Yii::t('app', '收藏时间'),
            'is_attention' => Yii::t('app', '是否关注该收藏商品，1，是；0，否'),
        ];
    }
}
