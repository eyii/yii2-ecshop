<?php

namespace common\models\guanli_xitong;

use Yii;

/*增加发送队列表
 * This is the model class for table "ecs_email_sendlist".
 *
 * @property integer $id
 * @property string $email
 * @property integer $template_id
 * @property string $email_content
 * @property integer $error
 * @property integer $pri
 * @property integer $last_send
 */
class EmailSendListModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%email_sendlist}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'template_id', 'email_content', 'pri', 'last_send'], 'required'],
            [['template_id', 'error', 'pri', 'last_send'], 'integer'],
            [['email_content'], 'string'],
            [['email'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', '邮件发送队列自增id'),
            'email' => Yii::t('app', '该邮件将要发送到的邮箱地址'),
            'template_id' => Yii::t('app', '该邮件的模板id，取值于ecs_mail_templates的template_id'),
            'email_content' => Yii::t('app', '邮件发送的内容'),
            'error' => Yii::t('app', '错误次数，不知干什么用的，猜应该是发送邮件的失败记录'),
            'pri' => Yii::t('app', '该邮件发送的优先级；0，普通；1，高'),
            'last_send' => Yii::t('app', '上一次发送的时间'),
        ];
    }
}
