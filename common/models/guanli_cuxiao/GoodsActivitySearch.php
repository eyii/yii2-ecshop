<?php

namespace common\models\guanli_cuxiao;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;


/**
 * GoodsActivitySearch represents the model behind the search form about `common\models\GoodsActivityModel`.
 */
class GoodsActivitySearch extends GoodsActivityModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['act_id', 'act_type', 'goods_id', 'start_time', 'end_time', 'is_finished'], 'integer'],
            [['act_name', 'act_desc', 'goods_name', 'ext_info'], 'safe'],
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
        $query = GoodsActivityModel::find();

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
            'act_id' => $this->act_id,
            'act_type' => $this->act_type,
            'goods_id' => $this->goods_id,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'is_finished' => $this->is_finished,
        ]);

        $query->andFilterWhere(['like', 'act_name', $this->act_name])
            ->andFilterWhere(['like', 'act_desc', $this->act_desc])
            ->andFilterWhere(['like', 'goods_name', $this->goods_name])
            ->andFilterWhere(['like', 'ext_info', $this->ext_info]);

        return $dataProvider;
    }
}
