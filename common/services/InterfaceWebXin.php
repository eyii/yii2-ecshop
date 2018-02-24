<?php
namespace common\services;



Interface  InterfaceWebXin
{
    //生成微信支付订单
     public function actionPay();

    //微信支付结果回调通知函数
     public function actionNotify();

}