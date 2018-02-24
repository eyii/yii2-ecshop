<?php

namespace common\models\guanli_shangpin;

use Yii;
//配件表
/**
 * This is the model class for table "ecs_goods_attr".
 *
 * @property string $goods_attr_id
 * @property string $goods_id
 * @property integer $attr_id
 * @property string $attr_value
 * @property string $attr_price
 */
class GoodsAttrModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_attr}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id', 'attr_id'], 'integer'],
            [['attr_value', 'attr_price'], 'required'],
            [['attr_value'], 'string'],
            [['attr_price'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_attr_id' => Yii::t('app', '自增ID号'),
            'goods_id' => Yii::t('app', '商品编号'),//该具体属性属于的商品，取值于ecs_goods的goods_id
            'attr_id' => Yii::t('app', '属性类型的id'),//该具体属性属于的属性类型的id，取自ecs_attribute 的attr_id
            'attr_value' => Yii::t('app', '该具体属性的值'),
            'attr_price' => Yii::t('app', '该属性对应在商品原价格上要加的价格'),
        ];
    }


    public function getAttributeModel(){
        return $this->hasOne(AttributeModel::className(),['attr_id'=>'attr_id']);
    }

    public static function getShangpinGuige($id){
     return  GoodsAttrModel::find()
            ->joinWith(['attributeModel a'])
            ->select(['a.attr_id','a.attr_name','a.attr_group','a.is_linked','a.attr_type','g.goods_attr_id','g.attr_value','g.attr_price'])
            ->alias('g')
            ->where(['g.goods_id'=>$id])
            ->orderBy(['a.sort_order'=>SORT_ASC,'g.goods_attr_id'=>SORT_ASC,'g.goods_attr_id'=>SORT_ASC])
            ->asArray()->all();
    }
}
