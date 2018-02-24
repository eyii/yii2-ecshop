<?php

namespace common\models\guanli_xitong;

use Yii;

/**
 * 计划任务插件安装配置信息
 * This is the model class for table "ecs_crons".
 *
 * @property integer $cron_id
 * @property string $cron_code
 * @property string $cron_name
 * @property string $cron_desc
 * @property integer $cron_order
 * @property string $cron_config
 * @property integer $thistime
 * @property integer $nextime
 * @property integer $day
 * @property string $week
 * @property string $hour
 * @property string $minute
 * @property integer $enable
 * @property integer $run_once
 * @property string $allow_ip
 * @property string $alow_files
 */
class CronsModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%crons}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cron_code', 'cron_name', 'cron_config', 'nextime', 'day', 'week', 'hour', 'minute', 'allow_ip', 'alow_files'], 'required'],
            [['cron_desc', 'cron_config'], 'string'],
            [['cron_order', 'thistime', 'nextime', 'day', 'enable', 'run_once'], 'integer'],
            [['cron_code'], 'string', 'max' => 20],
            [['cron_name'], 'string', 'max' => 120],
            [['week'], 'string', 'max' => 1],
            [['hour'], 'string', 'max' => 2],
            [['minute', 'alow_files'], 'string', 'max' => 255],
            [['allow_ip'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cron_id' => Yii::t('app', '自增ID号'),
            'cron_code' => Yii::t('app', '该插件文件在相应路径下的不包括\'.php\'部分的文件名，运行该插件将通过该字段的值寻找将运行的文件'),
            'cron_name' => Yii::t('app', '计划任务的名称'),
            'cron_desc' => Yii::t('app', '计划人物的描述'),
            'cron_order' => Yii::t('app', '应该是用了设置计划任务执行的顺序的，即当同时触发2个任务时先执行哪一个，如果一样应该是id在前的先执行暂不确定'),
            'cron_config' => Yii::t('app', '对每次处理的数据的数量的值，类型，名称序列化；比如删几天的日志，每次执行几个商品或文章的处理'),
            'thistime' => Yii::t('app', '该计划任务上次被执行的时间'),
            'nextime' => Yii::t('app', '该计划任务下次被执行的时间'),
            'day' => Yii::t('app', '如果该字段有值，则计划任务将在每月的这一天执行该计划人物'),
            'week' => Yii::t('app', '如果该字段有值，则计划任务将在每周的这一天执行该计划人物'),
            'hour' => Yii::t('app', '如果该字段有值，则该计划任务将在每天的这个小时段执行该计划任务'),
            'minute' => Yii::t('app', '如果该字段有值，则该计划任务将在每小时的这个分钟段执行该计划任务，该字段的值可以多个，用空格间隔'),
            'enable' => Yii::t('app', '该计划任务是否开启；0，关闭；1，开启'),
            'run_once' => Yii::t('app', '执行后是否关闭，这个关闭的意思还得再研究下'),
            'allow_ip' => Yii::t('app', '允许运行该计划人物的服务器ip'),
            'alow_files' => Yii::t('app', '运行触发该计划人物的文件列表可多个值，为空代表所有许可的文件都可以'),
        ];
    }
}
