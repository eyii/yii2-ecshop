<?php

namespace common\models\guanli_xitong;

use Yii;

/**
 * This is the model class for table "ecs_friend_link".
 *
 * @property integer $link_id
 * @property string $link_name
 * @property string $link_url
 * @property string $link_logo
 * @property integer $show_order
 */
class FriendLinkModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%friend_link}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['link_name', 'link_url', 'link_logo'], 'required'],
            [['show_order'], 'integer'],
            [['link_name', 'link_url', 'link_logo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'link_id' => Yii::t('app', '友情链接自增id'),
            'link_name' => Yii::t('app', '链接名称'),
            'link_url' => Yii::t('app', '链接地址'),
            'link_logo' => Yii::t('app', '链接LOGO'),
            'show_order' => Yii::t('app', '显示顺序'),
        ];
    }
}
