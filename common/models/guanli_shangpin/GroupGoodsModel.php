<?php

namespace common\models\shangpin_guanli;

use Yii;

/**
 *团购表
 * This is the model class for table "ecs_group_goods".
 *
 * @property string $parent_id
 * @property string $goods_id
 * @property string $goods_price
 * @property integer $admin_id
 */
class GroupGoodsModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%group_goods}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'goods_id', 'admin_id'], 'required'],
            [['parent_id', 'goods_id', 'admin_id'], 'integer'],
            [['goods_price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'parent_id' => Yii::t('app', '父类ID'),
            'goods_id' => Yii::t('app', '商品ID'),
            'goods_price' => Yii::t('app', '配件价格'), //配件商品的价格
            'admin_id' => Yii::t('app', '操作者ID'), //添加该配件的管理员的id
        ];
    }
}
