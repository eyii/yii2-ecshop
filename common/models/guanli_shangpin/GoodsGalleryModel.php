<?php

namespace common\models\shangpin_guanli;

use Yii;
//商品相册表
//，只出现在页面的商品相册中
/**
 * This is the model class for table "ecs_goods_gallery".
 *
 * @property string $img_id
 * @property string $goods_id
 * @property string $img_url
 * @property string $img_desc
 * @property string $thumb_url
 * @property string $img_original
 */
class GoodsGalleryModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_gallery}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id'], 'integer'],
            [['img_url', 'img_desc', 'thumb_url', 'img_original'], 'required'],
            [['img_url', 'img_desc', 'thumb_url', 'img_original'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'img_id' => Yii::t('app', '商品相册自增id'),
            'goods_id' => Yii::t('app', '图片属于商品的id'),
            'img_url' => Yii::t('app', '实际图片url'),
            'img_desc' => Yii::t('app', '图片说明信息'),
            'thumb_url' => Yii::t('app', '微缩图片url'),
            'img_original' => Yii::t('app', '根据名字猜，应该是上传的图片文件的最原始的文件的url'),
        ];
    }
}
