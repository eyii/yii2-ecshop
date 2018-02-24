<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/9
 * Time: 3:45
 */

namespace backend\controllers\interfaces\t_week;


interface YidongYingyongInterface
{

    /**
     * 百宝箱
     * @return mixed
     */
    public function actionBaibaoxiang();


    /**
     * 移动设备
     * @return mixed
     */
    public function actionYidongShebei();

    /**
     * 客户端管理
     * @return mixed
     */
    public function actionKehuduanGuanli();

}