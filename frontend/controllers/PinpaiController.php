<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/1
 * Time: 23:22
 */

namespace frontend\controllers;





use frontend\controllers\interfaces\three_week\PinpaiInterface;

class PinpaiController extends BaseController implements PinpaiInterface
{
    public function actionIndex(){

        return $this->render('index');
    }

    //所有品牌
    public function actionSuoyouPinpai()
    {
        // TODO: Implement actionSuoyouPinpai() method.
    }
    //单个品牌
    public function actionDangePinpai($id=1)
    {
        return $this->render('dange-pinpai');

    }
}