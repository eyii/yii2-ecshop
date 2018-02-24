<?php

namespace common\models\guanli_wenzhang;

use Yii;

/**
用户对文章和产品的评论列表
 *
 * @property string $comment_id
 * @property integer $comment_type
 * @property string $id_value
 * @property string $email
 * @property string $user_name
 * @property string $content
 * @property integer $comment_rank
 * @property string $add_time
 * @property string $ip_address
 * @property integer $status
 * @property string $parent_id
 * @property string $user_id
 */
class CommentModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%comment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comment_type', 'id_value', 'comment_rank', 'add_time', 'status', 'parent_id', 'user_id'], 'integer'],
            [['email', 'user_name', 'content', 'ip_address'], 'required'],
            [['content'], 'string'],
            [['email', 'user_name'], 'string', 'max' => 60],
            [['ip_address'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'comment_id' => Yii::t('app', '编号'),//用户评论的自增id
            'comment_type' => Yii::t('app', '评论类型'), //用户评论的类型；0，评论的是商品；1，评论的是文章
            'id_value' => Yii::t('app', '文章或者商品ID'),//文章或者商品的id，文章对应的是ecs_article 的article_id；商品对应的是ecs_goods的goods_id
            'email' => Yii::t('app', '评论者Email'),//评论时提交的email地址，默认取的ecs_users的email
            'user_name' => Yii::t('app', '评论人'), //评论该文章或商品的人的名称，取值ecs_users的user_name
            'content' => Yii::t('app', '评论的内容'),
            'comment_rank' => Yii::t('app', '文章或者商品等级'),//该文章或者商品的星级；只有1到5星；由数字代替；其中5是代表5星
            'add_time' => Yii::t('app', '评论的时间'),
            'ip_address' => Yii::t('app', '评论时的用户ip'),
            'status' => Yii::t('app', '是否被管理员批准显示'), //是否被管理员批准显示，1，是；0，未批准显示
            'parent_id' => Yii::t('app', '评论的父节点'),//评论的父节点；取值该表的comment_id字段；如果该字段为0，则是一个普通评论，否则该条评论就是该字段的值所对应的评论的回复
            'user_id' => Yii::t('app', '评论的用户id'),//发表该评论的用户的用户id，取值于ecs_users的user_id
        ];
    }
}
