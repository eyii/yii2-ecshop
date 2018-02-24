<?php

namespace common\models\guanli_xitong;

use Yii;
//'页面搜索关键字搜索记录
/**
 * This is the model class for table "ecs_keywords".
 *
 * @property string $date
 * @property string $searchengine
 * @property string $keyword
 * @property string $count
 */
class KeywordsModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%keywords}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'searchengine', 'keyword'], 'required'],
            [['date'], 'safe'],
            [['count'], 'integer'],
            [['searchengine'], 'string', 'max' => 20],
            [['keyword'], 'string', 'max' => 90],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'date' => Yii::t('app', '搜索日期'),
            'searchengine' => Yii::t('app', '搜索引擎，默认是ecshop'),
            'keyword' => Yii::t('app', '搜索关键字，即用户填写的搜索内容'),
            'count' => Yii::t('app', '搜索次数，按天累加'),
        ];
    }
}
