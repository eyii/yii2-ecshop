<?php

namespace common\models\shangpin_guanli;

use Yii;

/**
 * 商品关联表
 * This is the model class for table "ecs_link_goods".
 *
 * @property string $goods_id
 * @property string $link_goods_id
 * @property integer $is_double
 * @property integer $admin_id
 */
class LinkGoodsModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%link_goods}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id', 'link_goods_id', 'admin_id'], 'required'],
            [['goods_id', 'link_goods_id', 'is_double', 'admin_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_id' => Yii::t('app', '商品id'),
            'link_goods_id' => Yii::t('app', '被关联的商品的id'),
            'is_double' => Yii::t('app', '是否是双向关联'),//；0，否；1，是
            'admin_id' => Yii::t('app', '添加此关联商品信息的管理员id'),
        ];
    }
}
