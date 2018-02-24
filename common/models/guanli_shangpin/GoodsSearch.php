<?php

namespace common\models\guanli_shangpin;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;


/**
 * GoodsSearch represents the model behind the search form about `common\models\GoodsModel`.
 */
class GoodsSearch extends GoodsModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id', 'cat_id', 'click_count', 'brand_id', 'goods_number', 'promote_start_date', 'promote_end_date', 'warn_number', 'is_real', 'is_on_sale', 'is_alone_sale', 'is_shipping', 'integral', 'add_time', 'sort_order', 'is_delete', 'is_best', 'is_new', 'is_hot', 'is_promote', 'bonus_type_id','is_shipping', 'last_update', 'goods_type', 'give_integral', 'rank_integral', 'suppliers_id', 'is_check'], 'integer'],
            [['goods_sn', 'goods_name', 'goods_name_style', 'provider_name', 'keywords', 'goods_brief', 'goods_desc', 'goods_thumb', 'goods_img', 'original_img', 'extension_code', 'seller_note'], 'safe'],
            [['goods_weight', 'market_price', 'shop_price', 'promote_price'], 'number'],
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
        $query = GoodsModel::find();

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
            'goods_id' => $this->goods_id,
            'cat_id' => $this->cat_id,
            'click_count' => $this->click_count,
            'brand_id' => $this->brand_id,
            'goods_number' => $this->goods_number,
            'goods_weight' => $this->goods_weight,
            'market_price' => $this->market_price,
            'shop_price' => $this->shop_price,
            'promote_price' => $this->promote_price,
            'promote_start_date' => $this->promote_start_date,
            'promote_end_date' => $this->promote_end_date,
            'warn_number' => $this->warn_number,
            'is_real' => $this->is_real,
            'is_on_sale' => $this->is_on_sale,
            'is_alone_sale' => $this->is_alone_sale,
              'is_shipping' => $this->is_shipping,
            'integral' => $this->integral,
            'add_time' => $this->add_time,
            'sort_order' => $this->sort_order,
            'is_delete' => $this->is_delete,
            'is_best' => $this->is_best,
            'is_new' => $this->is_new,
            'is_hot' => $this->is_hot,
            'is_promote' => $this->is_promote,
            'bonus_type_id' => $this->bonus_type_id,
            'last_update' => $this->last_update,
            'goods_type' => $this->goods_type,
            'give_integral' => $this->give_integral,
            'rank_integral' => $this->rank_integral,
            'suppliers_id' => $this->suppliers_id,
            'is_check' => $this->is_check,
        ]);

        $query->andFilterWhere(['like', 'goods_sn', $this->goods_sn])
            ->andFilterWhere(['like', 'goods_name', $this->goods_name])
            ->andFilterWhere(['like', 'goods_name_style', $this->goods_name_style])
            ->andFilterWhere(['like', 'provider_name', $this->provider_name])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'goods_brief', $this->goods_brief])
            ->andFilterWhere(['like', 'goods_desc', $this->goods_desc])
            ->andFilterWhere(['like', 'goods_thumb', $this->goods_thumb])
            ->andFilterWhere(['like', 'goods_img', $this->goods_img])
            ->andFilterWhere(['like', 'original_img', $this->original_img])
            ->andFilterWhere(['like', 'extension_code', $this->extension_code])
            ->andFilterWhere(['like', 'seller_note', $this->seller_note]);

        return $dataProvider;
    }
}
