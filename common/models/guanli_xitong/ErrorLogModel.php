<?php

namespace common\models\guanli_xitong;

use Yii;

/**
 * This is the model class for table "ecs_error_log".
 *'该表用来记录页面触发计划任务时失败所产生的错误，从程序来看，目前主要是记录某计划任务所对应的插件文件不存在的错误
 * @property integer $id
 * @property string $info
 * @property string $file
 * @property integer $time
 */
class ErrorLogModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ecs_error_log}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['info', 'file', 'time'], 'required'],
            [['time'], 'integer'],
            [['info'], 'string', 'max' => 255],
            [['file'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', '计划任务错误自增id'),
            'info' => Yii::t('app', '错误详细信息'),
            'file' => Yii::t('app', '产生错误的执行文件的绝对路径'),
            'time' => Yii::t('app', '错误发生的时间'),
        ];
    }
}
