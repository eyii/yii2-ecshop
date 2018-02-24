<?php

namespace common\models\guanli_dingdan;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\guanli_dingdan\CartModel;

/**
 * CartSearch represents the model behind the search form about `common\models\guanli_dingdan\CartModel`.
 */
class CartSearch extends CartModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rec_id', 'user_id', 'goods_id', 'product_id', 'goods_number', 'is_real', 'parent_id', 'rec_type', 'is_gift', 'is_shipping', 'can_handsel'], 'integer'],
            [['session_id', 'goods_sn', 'goods_name', 'goods_attr', 'extension_code', 'goods_attr_id'], 'safe'],
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
        $query = CartModel::find();

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
            'user_id' => $this->user_id,
            'goods_id' => $this->goods_id,
            'product_id' => $this->product_id,
            'market_price' => $this->market_price,
            'goods_price' => $this->goods_price,
            'goods_number' => $this->goods_number,
            'is_real' => $this->is_real,
            'parent_id' => $this->parent_id,
            'rec_type' => $this->rec_type,
            'is_gift' => $this->is_gift,
            'is_shipping' => $this->is_shipping,
            'can_handsel' => $this->can_handsel,
        ]);

        $query->andFilterWhere(['like', 'session_id', $this->session_id])
            ->andFilterWhere(['like', 'goods_sn', $this->goods_sn])
            ->andFilterWhere(['like', 'goods_name', $this->goods_name])
            ->andFilterWhere(['like', 'goods_attr', $this->goods_attr])
            ->andFilterWhere(['like', 'extension_code', $this->extension_code])
            ->andFilterWhere(['like', 'goods_attr_id', $this->goods_attr_id]);

        return $dataProvider;
    }

    /**
     * 提交订单 调用的
     * @return mixed|string
     */
    public static function getGouwuche(){
        $session= Yii::$app->session;
        (!$session->isActive)?$session->open():'';
        $cart_model= self::find()
            ->select(['goods_attr','g.goods_name','g.market_price','g.shop_price','g.goods_number','g.goods_id'])
            ->where(['session_id'=>$session->id])
            ->joinWith(['goodsModel g'])->asArray()->all();
        return json_encode($cart_model,JSON_UNESCAPED_UNICODE);
    }

    public static function getGouwucheYilaiSql(){
        $query=CartModel::find();
        if (Yii::$app->session->isActive&&isset(Yii::$app->session->id)){
            $query=$query->where(['session_id'=>Yii::$app->session->id]);
        }
        $query= $query->select(['max(goods_id)']);
       return $query->createCommand()->getRawSql();
    }

    /**
     * 加入购物车
     * @return bool
     */
    public static function JiaruGouwuche(){
        $session=Yii::$app->session;
        $session->isActive?'':$session->open();
        $CartModel=Yii::$app->request->post()['CartModel'];
        $specs=isset($CartModel['goods_attr'])?$CartModel['goods_attr']:null;
        return CartModel::JRGouwuche($CartModel['goods_id'],Yii::$app->session->id,$CartModel['goods_number'],$specs);
    }

    /**
     * 删除购物车
     * @return array
     */
    public static function ShanchuGouwuche(){
        $session= Yii::$app->session;
        !$session->isActive?$session->open():'';
       return   ['执行结果',$session->id!=null?CartModel::QKCart($session->id):-1] ;
    }
}
