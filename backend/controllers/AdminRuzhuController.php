<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/9
 * Time: 4:10
 */

namespace backend\controllers;


use backend\controllers\interfaces\t_week\RuzhuInterface;

class AdminRuzhuController extends BaseController implements RuzhuInterface
{

    /**
     * 入驻商家
     * @return mixed
     */
    public function actionRuzhuShangjia()
    {
        // TODO: Implement actionRuzhuShangjia() method.
    }

    /**
     * 待审核商家
     * @return mixed
     */
    public function actionDaishenheShangjia()
    {
        // TODO: Implement actionDaishenheShangjia() method.
    }

    /**
     * 商家分类
     * @return mixed
     */
    public function actionShangjiaFenlei()
    {
        // TODO: Implement actionShangjiaFenlei() method.
    }

    /**
     * 佣金比例
     * @return mixed
     */
    public function actionYongjinBili()
    {
        // TODO: Implement actionYongjinBili() method.
    }
}