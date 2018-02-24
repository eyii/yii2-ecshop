<?php

namespace common\models\guanli_huiyuan;

use Yii;

/**
 * 用户留言表
 * This is the model class for table "ecs_feedback".
 *
 * @property string $msg_id
 * @property string $parent_id
 * @property string $user_id
 * @property string $user_name
 * @property string $user_email
 * @property string $msg_title
 * @property integer $msg_type
 * @property string $msg_content
 * @property string $msg_time
 * @property string $message_img
 * @property string $order_id
 */
class FeedbackModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%feedback}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'user_id', 'msg_type', 'msg_time', 'order_id'], 'integer'],
            [['user_name', 'user_email', 'msg_title', 'msg_content'], 'required'],
            [['msg_content'], 'string'],
            [['user_name', 'user_email'], 'string', 'max' => 60],
            [['msg_title'], 'string', 'max' => 200],
            [['message_img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'msg_id' => Yii::t('app', '反馈信息自增id'),
            'parent_id' => Yii::t('app', '父节点，取自该表msg_id；反馈该值为0；回复反馈为节点id'),
            'user_id' => Yii::t('app', '反馈的用户的id'),
            'user_name' => Yii::t('app', '反馈的用户的用户名'),
            'user_email' => Yii::t('app', '反馈的用户的邮箱'),
            'msg_title' => Yii::t('app', '反馈的标题，回复为reply'),
            'msg_type' => Yii::t('app', '反馈的类型，0，留言；1，投诉；2，询问；3，售后；4，求购'),
            'msg_content' => Yii::t('app', '反馈的内容'),
            'msg_time' => Yii::t('app', '反馈的时间'),
            'message_img' => Yii::t('app', '用户上传的文件的地址'),
            'order_id' => Yii::t('app', '该反馈关联的订单id，由用户提交，取值于 ecs_order_info的order_id；0，为无匹配；'),
        ];
    }
}
