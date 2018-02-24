<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/18
 * Time: 3:53
 */

namespace frontend\controllers;

use common\components\common\CacheWidget;
use common\models\guanli_dingdan\CartModel;


use common\models\guanli_dingdan\CartSearch;
use common\models\guanli_huiyuan\UserAddressModel;
use common\models\guanli_huiyuan\UserAddressSearch;
use common\models\guanli_xitong\DiquModel;
use common\models\guanli_xitong\DiquSearch;
use common\models\guanli_xitong\ShippingSearch;
use frontend\controllers\interfaces\four_week\GouwucheInterface;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Url;

class GouwucheController extends BaseController implements GouwucheInterface
{

    //用户没登录的不让操作
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
              //  'only' => ['login', 'logout', 'signup'],
                'rules' => [
                  /*  [
                        'allow' => true,
                        'actions' => ['login', 'signup'],
                        'roles' => ['?'],
                    ],*/
                    [
                        'allow' => true,
                        'actions' => ['index','jiaru-gouwuche','dizhi','tijiao-dingdan','qingkong-gouwuche'],
                        'roles' => ['@'],
                    ],
                ],
                'denyCallback' => function ($rule, $action) {
                    return $this->redirect(Url::toRoute(['login/index']));
                }
            ],
        ];
    }

    /**
     * 查看购物车
     * @return string
     */
    public function actionIndex(){
        $cartModel=SC(__METHOD__.CartSearch::tableName().Yii::$app->user->id,null,10,[CartSearch::className(),'getGouwuche']);
        return $this->render('index',['cartModel'=>$cartModel]);
      }

    /**
     * 加入购物车
     *暂时不支持商品规格
     *
     * @return string
     */
    public function actionJiaruGouwuche(){
         return C([CartSearch::className(),'JiaruGouwuche']);
    }


    /**
     * //步骤3填写物流信息
     * 如果登录且有地址 就让有默认地址 否则新建
     * @param 父项ID, //省ID
     * @param 地区类型 //1省 2市 3区
     * @return string
     */
    public function actionDizhi()
    {
         if (Yii::$app->request->isPost){
             $shi= SC(__METHOD__.DiquSearch::tableName(),null,3600,[DiquSearch::className(),'getAllJson']);
          return ['操作成功',1,$shi];
        }else{
            $dizhi=SC(__METHOD__.UserAddressModel::tableName(),null,3600,[UserAddressSearch::className(),'getDizhi']);
        }
         return $this->render('dizhi',['dizhi'=>$dizhi]);
    }

    //步骤4 提交订单
    public function actionTijiaoDingdan()
    {
        $cart_model=SC(__METHOD__.CartSearch::tableName(),null,3600,[CartSearch::className(),'getGouwuche']);
        $kuaidi_model=SC(__METHOD__.ShippingSearch::tableName(),null,3600,[ShippingSearch::className(),'getWuliuBiao']);
        $ship=SC(__METHOD__.ShippingSearch::tableName(),null,3600,[ShippingSearch::className(),'getShip']);
        return $this->render('tijiao-dingdan',['cart_model'=>$cart_model,'kuaidi_model'=>$kuaidi_model,'ship'=>$ship]);
    }

    /**
     * 检查订单中商品库存
     * @return mixed
     */
    public function actionJianchaKucun()
    {
        // TODO: Implement actionJianchaKucun() method.
    }


    /**
     * 更新购物车
     *
     * @return mixed
     */
    public function actionGengxinGouwuche()
    {
        // TODO: Implement actionGengxinGouwucheShangpinShu() method.
    }


    /**
     * 删除购物车中的商品
     *
     * @return mixed
     */
    public function actionQingkongGouwuche()
    {
       return   C([CartSearch::className(),'ShanchuGouwuche']);
    }
}