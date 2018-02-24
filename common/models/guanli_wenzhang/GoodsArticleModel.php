<?php

namespace common\models\guanli_wenzhang;

use Yii;
//
//即文章中提到的相关产品
/**
 * 文章关联产品表
 * This is the model class for table "ecs_goods_article".
 *http://book.ecmoban.com/images/db.htm
 * @property string $goods_id
 * @property string $article_id
 * @property integer $admin_id
 */
class GoodsArticleModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_article}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id', 'article_id', 'admin_id'], 'required'],
            [['goods_id', 'article_id', 'admin_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_id' => Yii::t('app', '商品id，取自ecs_goods的goods_id'),
            'article_id' => Yii::t('app', '文章id，取自 ecs_article 的article_id'),
            'admin_id' => Yii::t('app', '猜想是管理员的id，但是程序中似乎没有提及到'),
        ];
    }
}
