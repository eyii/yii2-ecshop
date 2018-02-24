<?php

namespace common\models\guanli_shangpin;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\guanli_shangpin\BrandModel;

/**
 * BrandSearch represents the model behind the search form about `common\models\guanli_shangpin\BrandModel`.
 */
class BrandSearch extends BrandModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brand_id', 'sort_order', 'is_show'], 'integer'],
            [['brand_name', 'brand_logo', 'brand_desc', 'site_url'], 'safe'],
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
        $query = BrandModel::find();

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
            'brand_id' => $this->brand_id,
            'sort_order' => $this->sort_order,
            'is_show' => $this->is_show,
        ]);

        $query->andFilterWhere(['like', 'brand_name', $this->brand_name])
            ->andFilterWhere(['like', 'brand_logo', $this->brand_logo])
            ->andFilterWhere(['like', 'brand_desc', $this->brand_desc])
            ->andFilterWhere(['like', 'site_url', $this->site_url]);

        return $dataProvider;
    }
}
