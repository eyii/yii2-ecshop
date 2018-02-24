<?php

namespace common\models\guanli_huiyuan;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\guanli_huiyuan\UserAddressModel;

/**
 * UserAddressSearch represents the model behind the search form about `common\models\guanli_huiyuan\UserAddressModel`.
 */
class UserAddressSearch extends UserAddressModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['address_id', 'user_id', 'country', 'province', 'city', 'district'], 'integer'],
            [['address_name', 'consignee', 'email', 'address', 'zipcode', 'tel', 'mobile', 'sign_building', 'best_time'], 'safe'],
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
        $query = UserAddressModel::find();

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
            'address_id' => $this->address_id,
            'user_id' => $this->user_id,
            'country' => $this->country,
            'province' => $this->province,
            'city' => $this->city,
            'district' => $this->district,
        ]);

        $query->andFilterWhere(['like', 'address_name', $this->address_name])
            ->andFilterWhere(['like', 'consignee', $this->consignee])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'zipcode', $this->zipcode])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'sign_building', $this->sign_building])
            ->andFilterWhere(['like', 'best_time', $this->best_time]);

        return $dataProvider;
    }
    public static function getDizhi(){
        if(isset(Yii::$app->user->id)){
            $user_id=Yii::$app->user->id;
            $model= UserAddressModel::find()->where(['user_id'=>$user_id])->select(['address_id','address_name','user_id','consignee','country','province','city','district','address','tel','mobile','version() as sheng'])->asArray()->all();
            return json_encode($model,JSON_UNESCAPED_UNICODE);
        }else{
            return null;
        }

    }


}
