<?php

namespace common\models\guanli_huiyuan;

use Yii;
//办事处 供应商表
/**
 * This is the model class for table "ecs_agency".
 *
 * @property integer $agency_id
 * @property string $agency_name
 * @property string $agency_desc
 */
class AgencyModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%agency}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['agency_name', 'agency_desc'], 'required'],
            [['agency_desc'], 'string'],
            [['agency_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'agency_id' => Yii::t('app', '办事处ID'),
            'agency_name' => Yii::t('app', '办事处名字'),
            'agency_desc' => Yii::t('app', '办事处描述'),
        ];
    }
}
