<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/1
 * Time: 20:42
 */

namespace backend\controllers;




use common\models\guanli_shangpin\GoodsModel;

class AdminGouwucheController extends BaseController
{
    public function actionCart($id){
        //获取添加到购物车的商品的信息
        $gm=new GoodsModel();
        $goodInfo=$gm->findOne($id);
        //信息为空或者数量<0,则不存在要购买的商品,否则把要购买的商品添加到session中
        if(empty($goodInfo) || count($goodInfo)<0){
            exit("No Goods");
        }else{
            $goodInfo['num']=1;
//判断购物车中是否已经存在该商品，存在的话数量叠加，
            if(isset($_SESSION["shoplist"][$goodInfo['goods_id']])){
                //若存在数量叠加
                $num=$_SESSION["shoplist"][$goodInfo['goods_id']]['num'];
                $num++;
                $_SESSION["shoplist"][$goodInfo['goods_id']]['num']=$num;
                //$_SESSION["shoplist"][$good_info['goods_id']]['num'] ++;
            }else{
                //若不存在，作为新购买的商品添加到购物车中
                $_SESSION["shoplist"][$goodInfo['goods_id']]=$goodInfo;
            }
        // $_SESSION['shoplist'][]=$good_info;
            return $this->redirect('./index.php?r=cart/list');
        }
    }
    public function actionGouwucheList(){
        $cart_list=$_SESSION['shoplist'];
        return $this->render('list',['cart_list'=>$cart_list]);
    }
    /**
     * 购物车中的单一商品删除
     */
    public function actionGouwucheDelete(){
        $cart_list=$_SESSION['shoplist'];
//判断是删除一个商品还是请空购物车
        if($_GET['id']){
//从session中删除指定的商品信息
            unset($_SESSION["shoplist"][$_GET['id']]);
        }else{
//清空session中商品,清空购物车
            unset($_SESSION["shoplist"]);
        }
        return $this->redirect("./index.php?r=cart/list");
    }
}