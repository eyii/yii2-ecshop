<?php

namespace common\models\guanli_shangpin;

use Yii;

/**
商品品牌信息记录表
 *
 * @property integer $brand_id
 * @property string $brand_name
 * @property string $brand_logo
 * @property string $brand_desc
 * @property string $site_url
 * @property integer $sort_order
 * @property integer $is_show
 */
class BrandModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%brand}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brand_name', 'brand_logo', 'brand_desc', 'site_url'], 'required'],
            [['brand_desc'], 'string'],
            [['sort_order', 'is_show'], 'integer'],
            [['brand_name'], 'string', 'max' => 60],
            [['brand_logo'], 'string', 'max' => 80],
            [['site_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'brand_id' => Yii::t('app', '自增ID号'),
            'brand_name' => Yii::t('app', '品牌名称'),
            'brand_logo' => Yii::t('app', '品牌logo'),//上传的该品牌公司logo图片
            'brand_desc' => Yii::t('app', '品牌描述'),
            'site_url' => Yii::t('app', '品牌网址'),
            'sort_order' => Yii::t('app', '显示顺序'),//品牌在前台页面的显示顺序，数字越大越靠后
            'is_show' => Yii::t('app', '是否显示'),//该品牌是否显示，0，否；1，显示
        ];
    }
}
