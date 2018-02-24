<?php

namespace common\models\guanli_wenzhang;

use Yii;

/**
 * 文章分类信息表
 *
 * @property integer $cat_id
 * @property string $cat_name
 * @property integer $cat_type
 * @property string $keywords
 * @property string $cat_desc
 * @property integer $sort_order
 * @property integer $show_in_nav
 * @property integer $parent_id
 */
class ArticleCatModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article_cat}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_name', 'keywords', 'cat_desc'], 'required'],
            [['cat_type', 'sort_order', 'show_in_nav', 'parent_id'], 'integer'],
            [['cat_name', 'keywords', 'cat_desc'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cat_id' => Yii::t('app', '自增ID号'),
            'cat_name' => Yii::t('app', '分类名称'),
            'cat_type' => Yii::t('app', '分类类型；1，普通分类；2，系统分类；3，网店信息；4，帮助分类；5，网店帮助'),
            'keywords' => Yii::t('app', '分类关键字'),
            'cat_desc' => Yii::t('app', '分类说明文字'),
            'sort_order' => Yii::t('app', '分类显示顺序'),
            'show_in_nav' => Yii::t('app', '是否在导航栏显示；0，否；1，是'),
            'parent_id' => Yii::t('app', '父节点id，取值于该表cat_id字段'),
        ];
    }

    public function getArticleModel(){
        return $this->hasMany(ArticleModel::className(),['cat_id'=>'cat_id'])->where(['is_open'=>1]);
    }
}
