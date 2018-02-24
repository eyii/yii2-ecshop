<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/17
 * Time: 16:09
 */

namespace backend\controllers\interfaces\t_week;


/**
 * Interface 虚拟团购管理
 * @package backend\controllers\interfaces\t_week
 */
interface XuniTuangouInterface
{
    /**
     * 虚拟券订单列表
      * @return mixed
      */
    public function actionList();

    /**
     * 虚拟劵商品分类管理
     * @return mixed
     */
    public function actionAddShangPin();

    /**
     * 入驻商商圈管理
     * @return mixed
     */
    public function actionList();

    /**
     * 添加虚拟商品
     * @return mixed
     */
    public function actionAddShangPin();

    /**
     * 自营虚拟商品列表
     * @return mixed
     */
    public function actionList();

    /**
     * 入驻商虚拟商品列表
     * @return mixed
     */
    public function actionAddShangPin();

    /**
     * 虚拟券验证
     * @return mixed
     */
    public function actionList();


}