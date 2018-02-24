<?php

namespace common\models\guanli_shangpin;

use Yii;

/*
 * 商品类型表，
 * 该表每条记录就是一个商品类型
 * This is the model class for table "ecs_goods_type".
 *
 * @property integer $cat_id
 * @property string $cat_name
 * @property integer $enabled
 * @property string $attr_group
 */
class GoodsTypeModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_type}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_name', 'attr_group'], 'required'],
            [['enabled'], 'integer'],
            [['cat_name'], 'string', 'max' => 60],
            [['attr_group'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cat_id' => Yii::t('app', '自增ID号'),
            'cat_name' => Yii::t('app', '商品类型名'),
            'enabled' => Yii::t('app', '类型状态'),//类型状态，1，为可用；0为不可用；不可用的类型，在添加商品的时候选择商品属性将不可选
            'attr_group' => Yii::t('app', '商品属性分组'),//商品属性分组，将一个商品类型的属性分成组，在显示的时候也是按组显示。该字段的值显示在属性的前一行，像标题的作用
        ];
    }
}
