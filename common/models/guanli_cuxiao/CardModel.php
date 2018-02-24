<?php

namespace common\models\guanli_cuxiao;

use Yii;

/**
 *祝福贺卡表
 * @property integer $card_id
 * @property string $card_name
 * @property string $card_img
 * @property string $card_fee
 * @property string $free_money
 * @property string $card_desc
 */
class CardModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%card}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['card_name', 'card_img', 'card_desc'], 'required'],
            [['card_fee', 'free_money'], 'number'],
            [['card_name'], 'string', 'max' => 120],
            [['card_img', 'card_desc'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'card_id' => Yii::t('app', '自增ID号'),
            'card_name' => Yii::t('app', '贺卡名称'),
            'card_img' => Yii::t('app', '贺卡图纸的名称'),
            'card_fee' => Yii::t('app', '贺卡所需费用'),
            'free_money' => Yii::t('app', '订单达到该字段的值后使用此贺卡免费'),
            'card_desc' => Yii::t('app', '贺卡的描述'),
        ];
    }
}
