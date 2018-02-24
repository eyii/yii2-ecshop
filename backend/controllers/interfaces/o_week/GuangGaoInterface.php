<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/5
 * Time: 15:51
 */

namespace backend\controllers\interfaces\o_week;


/**
 * Interface 广告管理 http://demo.ecshoptemplate.com/admin/index.php
 * @package backend\controllers\interfaces
 */
interface GuangGaoInterface
{
     //广告列表
    /*
     * @return mixed
     */
    public function actionGuanggaoList();
    //广告位置
    /*
     * @return mixed
     */
    public function actionGuanggaoWeizhi();
}