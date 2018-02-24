<?php

namespace common\models\guanli_dingdan;


use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;


/**
 * OrderGoodsSearch represents the model behind the search form about `common\models\OrderGoodsModel`.
 */
class OrderGoodsSearch extends OrderGoodsModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rec_id', 'order_id', 'goods_id', 'goods_number', 'send_number', 'is_real', 'parent_id', 'is_gift'], 'integer'],
            [['goods_name', 'goods_sn', 'goods_attr', 'extension_code'], 'safe'],
            [['market_price', 'goods_price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = OrderGoodsModel::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'rec_id' => $this->rec_id,
            'order_id' => $this->order_id,
            'goods_id' => $this->goods_id,
            'goods_number' => $this->goods_number,
            'market_price' => $this->market_price,
            'goods_price' => $this->goods_price,
            'send_number' => $this->send_number,
            'is_real' => $this->is_real,
            'parent_id' => $this->parent_id,
            'is_gift' => $this->is_gift,
        ]);

        $query->andFilterWhere(['like', 'goods_name', $this->goods_name])
            ->andFilterWhere(['like', 'goods_sn', $this->goods_sn])
            ->andFilterWhere(['like', 'goods_attr', $this->goods_attr])
            ->andFilterWhere(['like', 'extension_code', $this->extension_code]);

        return $dataProvider;
    }

    /**
     * 取得订单商品
     * @param   int     $order_id   订单id
     * @return  array   订单商品数组
     */
    function order_goods($order_id)
    {
        $sql = "SELECT rec_id, goods_id, goods_name, goods_sn, market_price, goods_number, " .
            "goods_price, goods_attr, is_real, parent_id, is_gift, " .
            "goods_price * goods_number AS subtotal, extension_code " .
            "FROM " . $GLOBALS['ecs']->table('order_goods') .
            " WHERE order_id = '$order_id'";

        $res = $GLOBALS['db']->query($sql);

        while ($row = $GLOBALS['db']->fetchRow($res))
        {
            if ($row['extension_code'] == 'package_buy')
            {
                $row['package_goods_list'] = get_package_goods($row['goods_id']);
            }
            $goods_list[] = $row;
        }

        //return $GLOBALS['db']->getAll($sql);
        return $goods_list;
    }

    /**
     * 取得订单信息
     * @param   int     $order_id   订单id（如果order_id > 0 就按id查，否则按sn查）
     * @param   string  $order_sn   订单号
     * @return  array   订单信息（金额都有相应格式化的字段，前缀是formated_）
     */
    function order_info($order_id, $order_sn = '')
    {
        /* 计算订单各种费用之和的语句 */
        $total_fee = " (goods_amount - discount + tax + shipping_fee + insure_fee + pay_fee + pack_fee + card_fee) AS total_fee ";
        $order_id = intval($order_id);
        if ($order_id > 0)
        {
            $sql = "SELECT *, " . $total_fee . " FROM " . $GLOBALS['ecs']->table('order_info') .
                " WHERE order_id = '$order_id'";
        }
        else
        {
            $sql = "SELECT *, " . $total_fee . "  FROM " . $GLOBALS['ecs']->table('order_info') .
                " WHERE order_sn = '$order_sn'";
        }
        $order = $GLOBALS['db']->getRow($sql);

        /* 格式化金额字段 */
        if ($order)
        {
            $order['formated_goods_amount']   = price_format($order['goods_amount'], false);
            $order['formated_discount']       = price_format($order['discount'], false);
            $order['formated_tax']            = price_format($order['tax'], false);
            $order['formated_shipping_fee']   = price_format($order['shipping_fee'], false);
            $order['formated_insure_fee']     = price_format($order['insure_fee'], false);
            $order['formated_pay_fee']        = price_format($order['pay_fee'], false);
            $order['formated_pack_fee']       = price_format($order['pack_fee'], false);
            $order['formated_card_fee']       = price_format($order['card_fee'], false);
            $order['formated_total_fee']      = price_format($order['total_fee'], false);
            $order['formated_money_paid']     = price_format($order['money_paid'], false);
            $order['formated_bonus']          = price_format($order['bonus'], false);
            $order['formated_integral_money'] = price_format($order['integral_money'], false);
            $order['formated_surplus']        = price_format($order['surplus'], false);
            $order['formated_order_amount']   = price_format(abs($order['order_amount']), false);
            $order['formated_add_time']       = local_date($GLOBALS['_CFG']['time_format'], $order['add_time']);
        }

        return $order;
    }
}
