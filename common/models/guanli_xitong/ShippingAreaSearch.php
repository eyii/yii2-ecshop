<?php

namespace common\models\guanli_xitong;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\guanli_xitong\ShippingAreaModel;

/**
 * ShippingAreaSearch represents the model behind the search form about `common\models\guanli_xitong\ShippingAreaModel`.
 */
class ShippingAreaSearch extends ShippingAreaModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shipping_area_id', 'shipping_id'], 'integer'],
            [['shipping_area_name', 'configure'], 'safe'],
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
        $query = ShippingAreaModel::find();

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
            'shipping_area_id' => $this->shipping_area_id,
            'shipping_id' => $this->shipping_id,
        ]);

        $query->andFilterWhere(['like', 'shipping_area_name', $this->shipping_area_name])
            ->andFilterWhere(['like', 'configure', $this->configure]);

        return $dataProvider;
    }
}
