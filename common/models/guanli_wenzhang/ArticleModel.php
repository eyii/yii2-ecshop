<?php

namespace common\models\guanli_wenzhang;


use Yii;

/**
 * This is the model class for table "ecs_article".
 *http://book.ecmoban.com/images/db.htm
 * @property string $article_id
 * @property integer $cat_id
 * @property string $title
 * @property string $content
 * @property string $author
 * @property string $author_email
 * @property string $keywords
 * @property integer $article_type
 * @property integer $is_open
 * @property string $add_time
 * @property string $file_url
 * @property integer $open_type
 * @property string $link
 */
class ArticleModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_id', 'article_type', 'is_open', 'add_time', 'open_type'], 'integer'],
            [['title', 'content', 'author', 'author_email', 'keywords', 'file_url', 'link'], 'required'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 150],
            [['author'], 'string', 'max' => 30],
            [['author_email'], 'string', 'max' => 60],
            [['keywords', 'file_url', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'article_id' => Yii::t('app', '自增ID号'),
            'cat_id' => Yii::t('app', '该文章的分类，同ecs_article_cat的cat_id,如果不在，将自动成为保留类型而不能删除'),
            'title' => Yii::t('app', '文章题目'),
            'content' => Yii::t('app', '文章内容'),
            'author' => Yii::t('app', '文章作者'),
            'author_email' => Yii::t('app', '文章作者的email'),
            'keywords' => Yii::t('app', '文章的关键字'),
            'article_type' => Yii::t('app', '文章类型，0，普通；1，置顶；2和大于2的，为保留文章，保留文章不能删除'),
            'is_open' => Yii::t('app', '是否显示'),
            'add_time' => Yii::t('app', '文章添加时间'),
            'file_url' => Yii::t('app', '上传文件或者外部文件的url'),
            'open_type' => Yii::t('app', '0,正常；当该字段为1或者2时，会在文章最后添加一个链接“相关下载”，连接地址等于file_url的值；但程序在此处有bug'),
            'link' => Yii::t('app', '该文章标题所引用的连接，如果该项有值将不能显示文章内容，即该表中content的值'),
        ];
    }

    public function getArticleCatModel(){
        return $this->hasOne(ArticleCatModel::className(),['cat_id'=>'cat_id']);
    }
}
