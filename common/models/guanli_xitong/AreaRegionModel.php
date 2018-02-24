<?php

namespace common\models\guanli_xitong;

use Yii;

/**
 * This is the model class for table "ecs_area_region".
 *
 * @property integer $shipping_area_id
 * @property integer $region_id
 */
class AreaRegionModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%area_region}}';

    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shipping_area_id', 'region_id'], 'required'],
            [['shipping_area_id', 'region_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'shipping_area_id' => Yii::t('app', '配送区域的id号'),//，等同于ecs_shipping_area的shipping_area_id的值
            'region_id' => Yii::t('app', '地区列表'),//，等同于ecs_region的region_id
        ];
    }
}
