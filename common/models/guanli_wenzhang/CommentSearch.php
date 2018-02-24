<?php

namespace common\models\guanli_wenzhang;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\guanli_wenzhang\CommentModel;

/**
 * CommentSearch represents the model behind the search form about `common\models\guanli_wenzhang\CommentModel`.
 */
class CommentSearch extends CommentModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comment_id', 'comment_type', 'id_value', 'comment_rank', 'add_time', 'status', 'parent_id', 'user_id'], 'integer'],
            [['email', 'user_name', 'content', 'ip_address'], 'safe'],
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
        $query = CommentModel::find();

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
            'comment_id' => $this->comment_id,
            'comment_type' => $this->comment_type,
            'id_value' => $this->id_value,
            'comment_rank' => $this->comment_rank,
            'add_time' => $this->add_time,
            'status' => $this->status,
            'parent_id' => $this->parent_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'user_name', $this->user_name])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'ip_address', $this->ip_address]);

        return $dataProvider;
    }
}
