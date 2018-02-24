<?php

namespace common\models\guanli_dingdan;

use Yii;

/**
 * This is the model class for table "{{%payment}}".
 *
 * @property integer $pay_id
 * @property string $pay_code
 * @property string $pay_name
 * @property string $pay_fee
 * @property string $pay_desc
 * @property integer $pay_order
 * @property string $pay_config
 * @property integer $enabled
 * @property integer $is_cod
 * @property integer $is_online
 */
class ZhifuModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%payment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pay_desc', 'pay_config'], 'required'],
            [['pay_desc', 'pay_config'], 'string'],
            [['pay_order', 'enabled', 'is_cod', 'is_online'], 'integer'],
            [['pay_code'], 'string', 'max' => 20],
            [['pay_name'], 'string', 'max' => 120],
            [['pay_fee'], 'string', 'max' => 10],
            [['pay_code'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pay_id' => Yii::t('app', '支付方式id'),//已安装的支付方式自增id
            'pay_code' => Yii::t('app', '支付方式英文缩写'),//的英文缩写,其实是该支付方式处理插件的不带后缀的文件名部分
            'pay_name' => Yii::t('app', '支付方式名称'),
            'pay_fee' => Yii::t('app', '支付费用'),
            'pay_desc' => Yii::t('app', '支付方式描述'),
            'pay_order' => Yii::t('app', '支付方式在页面的显示顺序'),
            'pay_config' => Yii::t('app', '支付方式的配置信息'),//,包括商户号和密钥什么的
            'enabled' => Yii::t('app', '是否可用'),
            'is_cod' => Yii::t('app', '是否货到付款'),
            'is_online' => Yii::t('app', '是否在线支付'),
        ];
    }
}
