<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/5
 * Time: 17:38
 */

namespace frontend\controllers\interfaces\four_week;


/**
 * Interface 购物车
 * @package frontend\controllers\interfaces
 */
interface GouwucheInterface
{

    /**
     * 查看购物车
     * @return mixed
     */
    public function actionIndex();

    /**
     * 步骤1 加入购物车
     * @return mixed
     */
    public function actionJiaruGouwuche();


    /**
     * 步骤3填写物流信息  //如果登录且有地址 就让有默认地址 否则新建
     * @return mixed
     */
    public function actionDizhi();


    /**
     * 步骤4 提交订单
     * @return mixed
     */
    public function actionTijiaoDingdan();

    /**
     * 检查订单中商品库存
     * @return mixed
     */
    public function actionJianchaKucun();

    /**
     * 更新购物车
     *
     * @return mixed
     */
    public function actionGengxinGouwuche();


    /**
     * 删除购物车中的商品
     *
     * @return mixed
     */
    public function actionQingkongGouwuche();
}