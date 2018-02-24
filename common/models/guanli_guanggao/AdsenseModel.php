<?php

namespace common\models\guanli_guanggao;

use Yii;
//
/**
 * 广告统计表
 * This is the model class for table "ecs_adsense".
 *
 * @property integer $from_ad
 * @property string $referer
 * @property string $clicks
 */
class AdsenseModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%adsense}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['from_ad', 'clicks'], 'integer'],
            [['referer'], 'required'],
            [['referer'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'from_ad' => Yii::t('app', '广告代号，-1是站外广告，如果是站内广告则为ecs_ad的ad_id'),
            'referer' => Yii::t('app', '页面来源'),
            'clicks' => Yii::t('app', '点击率'),
        ];
    }
}
