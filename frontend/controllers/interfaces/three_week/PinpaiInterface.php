<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/4
 * Time: 17:20
 */

namespace frontend\controllers\interfaces\three_week;


interface PinpaiInterface
{
    //所有品牌
    public function actionSuoyouPinpai();

    //单个品牌
    public function actionDangePinpai($id=1);
}