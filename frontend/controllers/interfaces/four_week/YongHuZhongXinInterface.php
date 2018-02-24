<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/5
 * Time: 18:36
 */

namespace frontend\controllers\interfaces\four_week;


/**
 * Interface 用户中心
 * @package frontend\controllers\interfaces
 */
Interface YongHuZhongXinInterface
{
    //欢迎页
    /**
     * @return mixed
     */
    public function actionHuanyingye();

    //用户信息
    /**
     * @return mixed
     */
    public function actionYonghuXinxi();

    // 我的订单
    /**
     * @return mixed
     */
    public function actionWodeDingdan();

    // 收货地址

    /**
     * @return mixed
     */
    public function actionShouhuoDizhi();

    // 我的收藏

    /**
     * @return mixed
     */
    public function actionWodeShoucang();

    // 我的留言

    /**
     * @return mixed
     */
    public function actionWodeLiuyan();
    // 我的标签

    /**
     * @return mixed
     */
    public function actionWodeBiaoqian();

    // 缺货登记
    /**
     * @return mixed
     */
    public function actionQuehuoDengji();

    // 我的红包
    /**
     * @return mixed
     */
    public function actionWodeHongbao();

    // 我的推荐
    /**
     * @return mixed
     */
    public function actionWodeTuijian();

    // 我的评论
    /**
     * @return mixed
     */
    public function actionWodePinglun();

    // 跟踪包裹

    /**
     * @return mixed
     */
    public function actionGenzongBaoguo();

    // 资金管理

    /**
     * @return mixed
     */
    public function actionZijinGuanli();

    //密码问题找回密码

    public function actionMimaWenti();

    //注册邮件找回密码

    public function actionZhuceYoujianZhaohuimima();
}