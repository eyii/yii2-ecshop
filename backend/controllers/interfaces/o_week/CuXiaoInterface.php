<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/5
 * Time: 15:50
 */

namespace backend\controllers\interfaces\o_week;


/**
 * Interface 促销管理 http://demo.ecshoptemplate.com/admin/index.php
 * @package backend\controllers\interfaces
 */
interface CuXiaoInterface
{

    //夺宝奇兵
    /*
     * @return mixed
     */
    public function actionDuobaoQibing();
    //红包类型
    /*
     * @return mixed
     */
    public function actionHongbaoLeixing();
    //商品包装
   /*
    * @return mixed
    */
    public function actionShangpinBaozhuang();
    //祝福贺卡
       /*
        * @return mixed
        */
    public function actionZhufuHeka();
    //团购活动
    /*
     * @return mixed
     */
    public function actionTuangouHuodong();
    //专题管理
    /*
     * @return mixed
     */
    public function actionZhuantiGuanli();
    //拍卖活动
    /*
     * @return mixed
     */
    public function actionPaimaiHuodong();
    //优惠活动
    /*
     * @return mixed
     */
    public function actionYouhuiHuodong();
    //批发管理
    /*
     * @return mixed
     */
    public function actionPifaGuanli();
    //超值礼包
    /*
     * @return mixed
     */
    public function actionChaozhiLibao();
    //积分商城商品
    /*
     * @return mixed
     */
    public function actionJifenShangcheng();



}