<?php

namespace common\models\guanli_xitong;

use Yii;

/**
 * This is the model class for table "{{%region}}".
 *
 * @property integer $region_id
 * @property integer $parent_id
 * @property string $region_name
 * @property integer $region_type
 * @property integer $agency_id
 */
class DiquModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%region}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'region_type', 'agency_id'], 'integer'],
            [['region_name'], 'string', 'max' => 120],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'region_id' => Yii::t('app', '该地区的id'),
            'parent_id' => Yii::t('app', '父节点ID'),
            'region_name' => Yii::t('app', '地区名字'),
            'region_type' => Yii::t('app', '区域等级'),
            'agency_id' => Yii::t('app', '办事处的id'),//,这里有一个bug,同一个省不能有多个办事处,该字段只记录最新的那个办事处的id
        ];
    }
}
