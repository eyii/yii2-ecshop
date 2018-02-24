<?php

namespace common\models\guanli_shangpin;

use Yii;

/**
'处理文章，商品自动上下线的计划任务列表';
；(需要安装计划任务插件才有效)
 * @property integer $item_id
 * @property string $type
 * @property integer $starttime
 * @property integer $endtime
 */
class AutoManageModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%auto_manage}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'type', 'starttime', 'endtime'], 'required'],
            [['item_id', 'starttime', 'endtime'], 'integer'],
            [['type'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'item_id' => Yii::t('app', '如果是商品就是ecs_goods的goods_id，如果是文章就是ecs_article的article_id'),//如果是商品就是ecs_goods的goods_id，如果是文章就是ecs_article的article_id
            'type' => Yii::t('app', '类型'),//goods是商品，article是文章
            'starttime' => Yii::t('app', '上线时间'),
            'endtime' => Yii::t('app', '下线时间'),
        ];
    }
}
