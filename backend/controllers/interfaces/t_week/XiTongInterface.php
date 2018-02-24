<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/5
 * Time: 15:55
 */

namespace backend\controllers\interfaces\t_week;


Interface XiTongInterface
{
    //商店设置
    /**
     * @return mixed
     */
    public function actionShangdianShezhi();
    //会员注册项设置
    /*
     * @return mixed
     */
    public function actionHuiyuanRegShezhi();
    //支付方式
    /*
     * @return mixed
     */
    public function actionZhifuFangshi();
    //配送方式
    /*
     * @return mixed
     */
    public function actionPeisongFangshi();

    //邮件服务器设置
    /**
     * @return mixed
     */
    public function actionYoujianFuwuqiShezhi();
    //地区列表
    /*
     * @return mixed
     */
    public function actionDiquLiebiao();
    //计划任务
    /*
     * @return mixed
     */
    public function actionJihuaRenwu();
    //友情链接
    /*
     * @return mixed
     */
    public function actionYouqingLianjie();

    /**
     * @return mixed
     */
    public function actionYanzhengmaGuanli();
    //文件权限检测
    /*
     * @return mixed
     */
    public function actionWenjianQuanxianJianche();
    //文件校验
    /*
     * @return mixed
     */
    public function actionWenjianJiaoyan();
    //首页主广告管理
    /*
     * @return mixed
     */
    public function actionZhuyeZhuguanggaoGuanli();
    //自定义导航栏
    /*
     * @return mixed
     */
    public function actionZidingyiDaohanglan();

    //授权证书
    /*
     * @return mixed
     */
    public function actionShouquanZhengshu();

    //站点地图
    /*
     * @return mixed
     */
    public function actionZhandianMap();
}