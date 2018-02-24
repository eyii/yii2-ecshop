<?php

namespace common\models\guanli_cuxiao;

use Yii;

/**
红包类型表
 *
 * @property integer $type_id
 * @property string $type_name
 * @property string $type_money
 * @property integer $send_type
 * @property string $min_amount
 * @property string $max_amount
 * @property integer $send_start_date
 * @property integer $send_end_date
 * @property integer $use_start_date
 * @property integer $use_end_date
 * @property string $min_goods_amount
 */
class BonusTypeModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bonus_type}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_name'], 'required'],
            [['type_money', 'min_amount', 'max_amount', 'min_goods_amount'], 'number'],
            [['send_type', 'send_start_date', 'send_end_date', 'use_start_date', 'use_end_date'], 'integer'],
            [['type_name'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'type_id' => Yii::t('app', '红包类型流水号'),
            'type_name' => Yii::t('app', '红包名称'),
            'type_money' => Yii::t('app', '红包所值的金额'),
            'send_type' => Yii::t('app', '红包发送类型.0,按用户如会员等级,会员名称发放;1,按商品类别发送;2,按订单金额所达到的额度发送;3,线下发送'),
            'min_amount' => Yii::t('app', '如果是按金额发送红包,该项是最小金额.即只要购买超过该金额的商品都可以领到红包'),
            'max_amount' => Yii::t('app', 'Max Amount'),
            'send_start_date' => Yii::t('app', '红包发送的开始时间'),
            'send_end_date' => Yii::t('app', '红包发送的结束时间'),
            'use_start_date' => Yii::t('app', '红包可以使用的开始时间'),
            'use_end_date' => Yii::t('app', '红包可以使用的结束时间'),
            'min_goods_amount' => Yii::t('app', '可以使用该红包的商品的最低价格.即只要达到该价格的商品才可以使用红包'),
        ];
    }
}
