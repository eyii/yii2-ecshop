<?php

namespace common\models\guanli_shangpin;

use Yii;

/**
 * This is the model class for table "{{%tag}}".
 *http://book.ecmoban.com/images/db.htm
 * @property integer $tag_id
 * @property string $user_id
 * @property string $goods_id
 * @property string $tag_words
 */
class TagModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tag}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'goods_id'], 'integer'],
            [['tag_words'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tag_id' => Yii::t('app', 'Tag ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'goods_id' => Yii::t('app', 'Goods ID'),
            'tag_words' => Yii::t('app', '标签名称'),
        ];
    }

    public function getGoodsModel(){
        return $this->hasOne(GoodsModel::className(),['goods_id'=>'goods_id']);
    }
}
