<?php

namespace common\models\guanli_xitong;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\guanli_xitong\DiquModel;

/**
 * DiquSearch represents the model behind the search form about `common\models\guanli_xitong\DiquModel`.
 */
class DiquSearch extends DiquModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region_id', 'parent_id', 'region_type', 'agency_id'], 'integer'],
            [['region_name'], 'safe'],
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
        $query = DiquModel::find();

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
            'region_id' => $this->region_id,
            'parent_id' => $this->parent_id,
            'region_type' => $this->region_type,
            'agency_id' => $this->agency_id,
        ]);

        $query->andFilterWhere(['like', 'region_name', $this->region_name]);

        return $dataProvider;
    }

    /**
     * 获取省市县区数据 默认是省数据
     * @return mixed|string
     */
    public static function getAllJson(){

        //获取$parent_id(父项)，$region_type(区域)
        $post=Yii::$app->request->post();
        //判断是否为null 默认是1
        $parent_id=!isset($post['parent_id'])|| $post['parent_id']==''?1:$post['parent_id'];
        $region_type=!isset($post['region_type'])|| $post['region_type']==''?1:$post['region_type'];

        //根据 parent等取地区json数据
         $query=DiquModel::find();
         $diqu_model= $query->select(['region_id','parent_id','region_name','region_type'])
             ->where(['region_type'=>$region_type,'parent_id'=>$parent_id])->asArray()->all();
         return json_encode($diqu_model,JSON_UNESCAPED_UNICODE);
    }


}
