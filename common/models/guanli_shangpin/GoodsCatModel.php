<?php

namespace common\models\shangpin_guanli;

use Yii;
//商品的扩展分类
/**
 * This is the model class for table "ecs_goods_cat".
 *
 * @property string $goods_id
 * @property integer $cat_id
 */
class GoodsCatModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_cat}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id', 'cat_id'], 'required'],
            [['goods_id', 'cat_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_id' => Yii::t('app', '商品id'),
            'cat_id' => Yii::t('app', '商品分类id'),
        ];
    }
}
