<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/5
 * Time: 15:56
 */

namespace backend\controllers\interfaces\t_week;


/**
 * Interface 推荐管理 http://demo.ecshoptemplate.com/admin/index.php
 * @package backend\controllers\interfaces
 */
interface TuiJianInterface
{
  //推荐设置
    /*
     * @return mixed
     */
    public function actionTuijianGuanli();

    //分成管理
    /*
     * @return mixed
     */
    public function actionFenchengGuanli();
}