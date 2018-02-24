<?php
namespace common\services;


use common\models\AdminWechatUser;
use common\models\weixinpay\Wxpay;
use Yii;

class AdminWechatUserService extends AdminWechatUser{

    public function actionNotify(){
        $Wxpay = new Wxpay();
        $verify_result = $Wxpay->verifyNotify();
        if (isset($verify_result['result_code']) && $verify_result['result_code']=='SUCCESS') {
            $requestReturnData = file_get_contents("php://input");
            //商户订单号
            $out_trade_no = $verify_result['out_trade_no'];
            //交易号
            $trade_no     = $verify_result['transaction_id'];
            //交易状态
            $trade_status = $verify_result['result_code'];
            //支付金额
            $total_fee 	  = $verify_result['total_fee']/100;
            //支付过期时间
            $pay_date 	  = $verify_result['time_end'];
            //IP
            $pay_ip 	  = $verify_result['attach'];
            /*
                @todo
                1.更改订单状态为已支付。(需自己完善)
                2.添加付款信息到数据库,方便对账。(需自己完善)
            */
            $pay_arr = array(
                'pay_type' 			=> isset($_REQUEST['pay_type']) ? $_REQUEST['pay_type'] : '',
                'action' 			=> 'notify',
                'domain_type' 		=> isset($_REQUEST['domain_type']) ? $_REQUEST['domain_type'] : '',
                'out_trade_no' 		=> $out_trade_no,
                'trade_no' 			=> $trade_no,
                'trade_status' 		=> $trade_status,
                'trade_return_data' => $requestReturnData,
                'create_ip' 		=> $pay_ip,
            );
            //处理后同步返回给微信
           return '<xml><return_code><![CDATA[SUCCESS]]></return_code><return_msg><![CDATA[OK]]></return_msg></xml>';
        }
        return '<xml><return_code><![CDATA[FAIL]]></return_code><return_msg><![CDATA[ERROR]]></return_msg></xml>';
    }
    //接口输出
    private function echoResult($errorCode = 0, $errorMsg = 'success', $responseData = array())
    {
        $arr = array(
            'errorCode' => $errorCode,
            'errorMsg' => $errorMsg,
            'responseData' => $responseData,
        );
        return json_encode($arr);
    }
    public function actionWxPay($total_fee,$body,$notify_url){
        $Wxpay = new Wxpay();
        $Wxpay->total_fee = intval($total_fee*100);//订单的金额 1元
        $Wxpay->out_trade_no = date('YmdHis') . substr(time(), - 5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));//订单号
        $Wxpay->body = $body;//支付描述信息
        $Wxpay->time_expire = date('YmdHis', time()+86400);//订单支付的过期时间(eg:一天过期)
        $Wxpay->notify_url =$notify_url;//异步通知URL(更改支付状态)

//数据以JSON的形式返回给APP
        $app_response = $Wxpay->doPay();
        if (isset($app_response['return_code']) && $app_response['return_code']=='FAIL') {
            $errorCode = 100;
            $errorMsg = $app_response['return_msg'];
         return  $this->echoResult($errorCode, $errorMsg);
        } else {
            $errorCode = 0;
            $errorMsg = 'success';
            $responseData = array(
                'notify_url' => $Wxpay->notify_url,
                'app_response' => $app_response,
            );
            return $this->echoResult($errorCode, $errorMsg, $responseData);
        }
    }


}
