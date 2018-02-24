<?php

namespace common\models\guanli_guanggao;

use Yii;

/**
 * This is the model class for table "{{%ad_position}}".
 *
 * @property integer $position_id
 * @property string $position_name
 * @property integer $ad_width
 * @property integer $ad_height
 * @property string $position_desc
 * @property string $position_style
 */
class AdPositionModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad_position}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ad_width', 'ad_height'], 'integer'],
            [['position_style'], 'required'],
            [['position_style'], 'string'],
            [['position_name'], 'string', 'max' => 60],
            [['position_desc'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'position_id' => Yii::t('app', 'Position ID'),
            'position_name' => Yii::t('app', '广告位名称'),
            'ad_width' => Yii::t('app', '位置宽度'),
            'ad_height' => Yii::t('app', '位置高度'),
            'position_desc' => Yii::t('app', '广告位描述'),
            'position_style' => Yii::t('app', '广告风格'),
        ];
    }
}
