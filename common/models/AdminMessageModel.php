<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ecs_admin_message".
 *
 * @property integer $message_id
 * @property integer $sender_id
 * @property integer $receiver_id
 * @property string $sent_time
 * @property string $read_time
 * @property integer $readed
 * @property integer $deleted
 * @property string $title
 * @property string $message
 */
class AdminMessageModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%admin_message}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sender_id', 'receiver_id', 'sent_time', 'read_time', 'readed', 'deleted'], 'integer'],
            [['title', 'message'], 'required'],
            [['message'], 'string'],
            [['title'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'message_id' => Yii::t('app', '自增ID号'),
            'sender_id' => Yii::t('app', '发送该留言的管理员id，同ecs_admin_user的user_id'),
            'receiver_id' => Yii::t('app', '接收消息的管理员id，同ecs_admin_user的user_id，如果是给多个管理员发送，则同一个消息给每个管理员id发送一条'),
            'sent_time' => Yii::t('app', '留言发送时间'),
            'read_time' => Yii::t('app', '留言阅读时间'),
            'readed' => Yii::t('app', '留言是否阅读，1，已阅读；0，未阅读'),
            'deleted' => Yii::t('app', '留言是否已经是否已经被删除，1，已删除；0，未删除'),
            'title' => Yii::t('app', '留言的主题'),
            'message' => Yii::t('app', '留言的内容'),
        ];
    }
}
