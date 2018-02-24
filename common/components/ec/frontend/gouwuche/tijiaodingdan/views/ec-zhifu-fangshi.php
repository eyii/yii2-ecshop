<div class="flowBox">
    <h6><span>支付方式</span></h6>
    <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="paymentTable">
        <tbody><tr>
            <th width="5%" bgcolor="#ffffff">&nbsp;</th>
            <th width="20%" bgcolor="#ffffff">名称</th>
            <th bgcolor="#ffffff">订购描述</th>
            <th bgcolor="#ffffff" width="15%">手续费</th>
        </tr>

        <tr>
            <td valign="top" bgcolor="#ffffff"><input type="radio" name="payment" value="2" iscod="0" onclick="selectPayment(this)"></td>
            <td valign="top" bgcolor="#ffffff"><strong>银行汇款/转帐</strong></td>
            <td valign="top" bgcolor="#ffffff">银行名称
                收款人信息：全称 ××× ；帐号或地址 ××× ；开户行 ×××。
                注意事项：办理电汇时，请在电汇单“汇款用途”一栏处注明您的订单号。</td>
            <td align="right" bgcolor="#ffffff" valign="top">￥0.00元</td>
        </tr>

        <tr>
            <td valign="top" bgcolor="#ffffff"><input type="radio" name="payment" value="3" iscod="1" onclick="selectPayment(this)" disabled="true"></td>
            <td valign="top" bgcolor="#ffffff"><strong>货到付款</strong></td>
            <td valign="top" bgcolor="#ffffff">开通城市：×××
                货到付款区域：×××</td>
            <td align="right" bgcolor="#ffffff" valign="top"><span id="ECS_CODFEE">￥0.00元</span></td>
        </tr>
        </tbody></table>
</div>