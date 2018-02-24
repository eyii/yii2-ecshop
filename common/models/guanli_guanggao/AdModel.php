<?php

namespace common\models\guanli_guanggao;

use Yii;
//广告列表配置表
//，包括站内站外的图片，文字，flash，代码广告
/**
 * This is the model class for table "ecs_ad".
 *
 * @property integer $ad_id
 * @property integer $position_id
 * @property integer $media_type
 * @property string $ad_name
 * @property string $ad_link
 * @property string $ad_code
 * @property integer $start_time
 * @property integer $end_time
 * @property string $link_man
 * @property string $link_email
 * @property string $link_phone
 * @property string $click_count
 * @property integer $enabled
 */
class AdModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ad}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position_id', 'media_type', 'start_time', 'end_time', 'click_count', 'enabled'], 'integer'],
            [['ad_name', 'ad_link', 'ad_code', 'link_man', 'link_email', 'link_phone'], 'required'],
            [['ad_code'], 'string'],
            [['ad_name', 'link_man', 'link_email', 'link_phone'], 'string', 'max' => 60],
            [['ad_link'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ad_id' => Yii::t('app', '自增ID号'),
            'position_id' => Yii::t('app', '0,站外广告；从1开始代表的是该广告所处的广告位，同表ad_position中的字段position_id的值'),
            'media_type' => Yii::t('app', '广告类型，0，图片；1，flash;2,代码；3，文字'),
            'ad_name' => Yii::t('app', '该条广告记录的广告名称'),
            'ad_link' => Yii::t('app', '广告链接地址'),
            'ad_code' => Yii::t('app', '广告链接的表现，文字广告就是文字或图片和flash就是它们的地址，代码广告就是代码内容'),
            'start_time' => Yii::t('app', '广告开始时间'),
            'end_time' => Yii::t('app', '广告结束时间'),
            'link_man' => Yii::t('app', '广告联系人'),
            'link_email' => Yii::t('app', '广告联系人的邮箱'),
            'link_phone' => Yii::t('app', '广告联系人的电话'),
            'click_count' => Yii::t('app', '该广告点击数'),
            'enabled' => Yii::t('app', '该广告是否关闭，1，开启；0，关闭；关闭后广告将不再有效，直至重新开启'),
        ];
    }
}
