<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/18
 * Time: 3:53
 */

namespace frontend\controllers;




use common\models\guanli_huiyuan\UserRankModel;
use common\models\guanli_shangpin\AttributeModel;
use common\models\guanli_shangpin\BrandModel;
use common\models\guanli_shangpin\GoodsAttrModel;
use common\models\guanli_shangpin\GoodsModel;
use common\models\guanli_shangpin\GoodsTypeModel;
use common\models\guanli_shangpin\MemberPriceModel;

class ShangpinController extends BaseController
{
        public function actionIndex($id){
            $model=SC(__METHOD__.GoodsModel::tableName().BrandModel::tableName(),null,3600,[GoodsModel::className(),'getShangpinXinxi'],[$id]);
            if ($model==null){
                return $this->goHome();
            }
           $rank_model=SC(__METHOD__.UserRankModel::tableName(),null,3600,[UserRankModel::className(),'getYonghuDengji']);
            /* 获得商品的规格 */
            $guige_model=SC(__METHOD__.GoodsAttrModel::tableName(),null,3600,[GoodsAttrModel::className(),'getShangpinGuige'],[$id]);
            return $this->render('index',[
                'model'=>$model,
                'rank_model'=>$rank_model,
                'guige_model'=>$guige_model
            ]);
        }
}