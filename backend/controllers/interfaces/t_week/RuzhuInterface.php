<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/9
 * Time: 4:02
 */

namespace backend\controllers\interfaces\t_week;


/**
 * 接口  入驻商管理
 * @package backend\controllers\interfaces\t_week
 */
interface RuzhuInterface
{
    //入驻商申请列表
    /**
     * 入驻商列表
     * @return mixed
     */
    public function actionRuzhuShangjia();


    /**
     * 待审核商家
     * @return mixed
     */
    public function actionDaishenheShangjia();

    /**
     * 商家分类
     * @return mixed
     */
    public function actionShangjiaFenlei();

    /**
     * 佣金比例
     * @return mixed
     */
    public function actionYongjinBili();


    /**
     * 平台交易统计
     * @return mixed
     */
    public function actionPingtaiJiaoyiTongji();
    //
    /**
     * 店铺街分类
     * @return mixed
     */
    public function actionDianpujieFenlei();


    /**
     * 店铺标签
     * @return mixed
     */
    public function actionDianpuBiaoqian();

    /**
     * 店铺街列表
     * @return mixed
     */
    public function actionDianpujieLiebiao();

    /**
     * 入驻商等级
     * @return mixed
     */
    public function actionRuzhushangDengji();

}