<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/5
 * Time: 15:50
 */

namespace backend\controllers\interfaces\o_week;


/**
 * Interface 订单管理 http://demo.ecshoptemplate.com/admin/index.php
 * @package backend\controllers\interfaces
 */
interface DingDanInterface
{
     //订单列表
    /*
     * @return mixed
     */
    public function actionDingdanList();
    //订单查询
    /*
     * @return mixed
     */
    public function actionDingdanQuery();
    //合并订单
    /*
     * @return mixed
     */
    public function actionHebingOrder();
    //订单打印
    /*
     * @return mixed
     */
    public function actionDingdanDayin();
    //缺货登记
    /*
     * @return mixed
     */
    public function actionQuehuoDengji();
    //添加订单
    /*
     * @return mixed
     */
    public function actionTianjiaDingdan();
    //发货单列表
    /*
     * @return mixed
     */
    public function actionFahuodanLiebiao();
    //退货单列表
    /*
     * @return mixed
     */
    public function actionTuihuodanLiebiao();

}