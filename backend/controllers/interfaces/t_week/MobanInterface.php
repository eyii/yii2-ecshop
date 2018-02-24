<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/31
 * Time: 2:53
 */

namespace backend\controllers\interfaces\t_week;


interface MobanInterface
{
    //模板选择
    /*
     * @return mixed
     */
    public function actionMobanXuanze();

    //设置模板
    /*
     * @return mixed
     */
    public function actionShezhiMoban();
    //库项目管理
    /*
     * @return mixed
     */
    public function actionKuXiangmuGuanli();
    //语言项编辑
    /*
     * @return mixed
     */
    public function actionYuyanxiangBianji();
    //模板设置备份
    /*
     * @return mixed
     */
    public function actionMobanShezhiBeifen();
    //邮件模板
    /*
     * @return mixed
     */
    public function actionYoujianMoban();
}