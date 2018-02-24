<?php

namespace common\models\guanli_shangpin;

use Yii;

/**
商品分类表
 *
 * @property integer $cat_id
 * @property string $cat_name
 * @property string $keywords
 * @property string $cat_desc
 * @property integer $parent_id
 * @property integer $sort_order
 * @property string $template_file
 * @property string $measure_unit
 * @property integer $show_in_nav
 * @property string $style
 * @property integer $is_show
 * @property integer $grade
 * @property integer $filter_attr
 */
class CategoryModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_name', 'keywords', 'cat_desc', 'template_file', 'measure_unit', 'style'], 'required'],
            [['parent_id', 'sort_order', 'show_in_nav', 'is_show', 'grade', 'filter_attr'], 'integer'],
            [['cat_name'], 'string', 'max' => 90],
            [['keywords', 'cat_desc'], 'string', 'max' => 255],
            [['template_file'], 'string', 'max' => 50],
            [['measure_unit'], 'string', 'max' => 15],
            [['style'], 'string', 'max' => 150],
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
            'keywords' => Yii::t('app', '分类的关键字，可能是为了搜索'),
            'cat_desc' => Yii::t('app', '分类描述'),
            'parent_id' => Yii::t('app', '该分类的父id，取值于该表的cat_id字段'),
            'sort_order' => Yii::t('app', '该分类在页面显示的顺序，数字越大顺序越靠后；同数字，id在前的先显示'),
            'template_file' => Yii::t('app', '不确定字段，按名字和表设计猜，应该是该分类的单独模板文件的名字'),
            'measure_unit' => Yii::t('app', '该分类的计量单位'),
            'show_in_nav' => Yii::t('app', '是否显示在导航栏，0，不；1，显示在导航栏'),
            'style' => Yii::t('app', '该分类的单独的样式表的包括文件名部分的文件路径'),
            'is_show' => Yii::t('app', '是否在前台页面显示，1，显示；0，不显示'),
            'grade' => Yii::t('app', '该分类的最高和最低价之间的价格分级，当大于1时，会根据最大最小价格区间分成区间，会在页面显示价格范围，如0-300,300-600,600-900这种'),
            'filter_attr' => Yii::t('app', '如果该字段有值，则该分类将还会按照该值对应在表goods_attr的goods_attr_id所对应的属性筛选，如，封面颜色下有红，黑分类筛选 '),
        ];
    }
}
