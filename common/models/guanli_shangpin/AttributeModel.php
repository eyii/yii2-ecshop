<?php

namespace common\models\guanli_shangpin;

use Yii;

/**
 * http://book.ecmoban.com/images/db.htm
 *
 * @property integer $attr_id
 * @property integer $cat_id
 * @property string $attr_name
 * @property integer $attr_input_type
 * @property integer $attr_type
 * @property string $attr_values
 * @property integer $attr_index
 * @property integer $sort_order
 * @property integer $is_linked
 * @property integer $attr_group
 */
class AttributeModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%attribute}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_id', 'attr_input_type', 'attr_type', 'attr_index', 'sort_order', 'is_linked', 'attr_group'], 'integer'],
            [['attr_values'], 'required'],
            [['attr_values'], 'string'],
            [['attr_name'], 'string', 'max' => 60],
            [['attr_id'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'attr_id' => Yii::t('app', 'Attr ID'),
            'cat_id' => Yii::t('app', 'Cat ID'), //商品类型 , 同goods_type的 cat_id
            'attr_name' => Yii::t('app', '属性名称'),//属性名称
            'attr_input_type' => Yii::t('app', '属性输入类型'), //当添加商品时,该属性的添加类别; 0为手功输入;1为选择输入;2为多行文本输入
            'attr_type' => Yii::t('app', 'Attr Type'), //属性是否多选; 0否; 1是 如果可以多选,则可以自定义属性,并且可以根据值的不同定不同的价
            'attr_values' => Yii::t('app', 'Attr Values'), //即选择输入,则attr_name对应的值的取值就是该这字段值
            'attr_index' => Yii::t('app', '属性是否可以检索'), //属性是否可以检索;0不需要检索; 1关键字检索2范围检索,该属性应该是如果检索的话,可以通过该属性找到有该属性的商品
            'sort_order' => Yii::t('app', 'Sort Order'),//属性显示的顺序,数字越大越靠前,如果数字一样则按id顺序
            'is_linked' => Yii::t('app', 'Is Linked'), //是否关联,0 不关联 1关联; 如果关联, 那么用户在购买该商品时,具有有该属性相同的商品将被推荐给用户
            'attr_group' => Yii::t('app', 'Attr Group'),//属性分组,相同的为一个属性组应该取自goods_type的attr_group的值的顺序.
        ];
    }


    /**
     * 获得指定的商品属性
     * @param $arr
     * @param string $type
     * @return mixed|string
     */
    function get_goods_attr_info($arr, $type = 'pice')
    {
        $attr   = '';

        if (!empty($arr))
        {
            $fmt = "%s:%s[%s] \n";

            $sql = "SELECT a.attr_name, ga.attr_value, ga.attr_price ".
                "FROM ".$GLOBALS['ecs']->table('goods_attr')." AS ga, ".
                $GLOBALS['ecs']->table('attribute')." AS a ".
                "WHERE " .db_create_in($arr, 'ga.goods_attr_id')." AND a.attr_id = ga.attr_id";
            $res = $GLOBALS['db']->query($sql);

            while ($row = $GLOBALS['db']->fetchRow($res))
            {
                $attr_price = round(floatval($row['attr_price']), 2);
                $attr .= sprintf($fmt, $row['attr_name'], $row['attr_value'], $attr_price);
            }

            $attr = str_replace('[0]', '', $attr);
        }

        return $attr;
    }
}
