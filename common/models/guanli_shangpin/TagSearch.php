<?php

namespace common\models\guanli_shangpin;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\guanli_shangpin\TagModel;

/**
 * TagSearch represents the model behind the search form about `common\models\guanli_shangpin\TagModel`.
 */
class TagSearch extends TagModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tag_id', 'user_id', 'goods_id'], 'integer'],
            [['tag_words'], 'safe'],
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
        $query = TagModel::find();

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
            'tag_id' => $this->tag_id,
            'user_id' => $this->user_id,
            'goods_id' => $this->goods_id,
        ]);

        $query->andFilterWhere(['like', 'tag_words', $this->tag_words]);

        return $dataProvider;
    }
}
