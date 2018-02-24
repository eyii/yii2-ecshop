<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/26
 * Time: 23:46
 */

namespace backend\controllers;

use common\services\InterfaceWebXin;
use common\services\AdminWechatUserService;

use yii\helpers\Url;


class WeixinController extends BaseController implements InterfaceWebXin
{
    public function actionPay(){
        $webchat=new AdminWechatUserService();
        return $webchat->actionWxPay(1000,'商品描述',Url::toRoute('weixin/pay', true));
    }
    public function actionNotify(){
        $webchat=new AdminWechatUserService();
        return $webchat->actionNotify();
    }
}