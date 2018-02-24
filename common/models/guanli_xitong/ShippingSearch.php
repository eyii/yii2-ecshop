<?php

namespace common\models\guanli_xitong;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\guanli_xitong\ShippingModel;

/**
 * ShippingSearch represents the model behind the search form about `common\models\guanli_xitong\ShippingModel`.
 */
class ShippingSearch extends ShippingModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shipping_id', 'support_cod', 'enabled', 'print_model', 'shipping_order'], 'integer'],
            [['shipping_code', 'shipping_name', 'shipping_desc', 'insure', 'shipping_print', 'print_bg', 'config_lable'], 'safe'],
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
        $query = ShippingModel::find();

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
            'shipping_id' => $this->shipping_id,
            'support_cod' => $this->support_cod,
            'enabled' => $this->enabled,
            'print_model' => $this->print_model,
            'shipping_order' => $this->shipping_order,
        ]);

        $query->andFilterWhere(['like', 'shipping_code', $this->shipping_code])
            ->andFilterWhere(['like', 'shipping_name', $this->shipping_name])
            ->andFilterWhere(['like', 'shipping_desc', $this->shipping_desc])
            ->andFilterWhere(['like', 'insure', $this->insure])
            ->andFilterWhere(['like', 'shipping_print', $this->shipping_print])
            ->andFilterWhere(['like', 'print_bg', $this->print_bg])
            ->andFilterWhere(['like', 'config_lable', $this->config_lable]);

        return $dataProvider;
    }




    public static function getWuliuBiao()
    {
        return json_encode(ShippingModel::find()->where(['enabled' => 1])->asArray()->all(), JSON_UNESCAPED_UNICODE);
    }

     public static function getShip()
    {
        return ShippingAreaModel::find()->select(['configure'])->asArray()->all();
    }
}
