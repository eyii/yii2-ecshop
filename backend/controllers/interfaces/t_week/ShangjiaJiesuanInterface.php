<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/9
 * Time: 4:05
 */

namespace backend\controllers\interfaces\t_week;


/**
 * 接口 商家结算
 * @package backend\controllers\interfaces\t_week
 */
interface ShangjiaJiesuanInterface
{


    /**
     * 结算账单
     * @return mixed
     */
    public function actionJiesuanZhangdan();


    /**
     * 订单分成
     * @return mixed
     */
    public function actionDingdanFencheng();
}