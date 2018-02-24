<?php
$url=Yii::getAlias('all');
?>

<div class="blank"></div>
<div class="block">
 <form action="http://ec.com/flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkOrderForm(this)">
        <div class="flowBox">
        <h6><span>商品列表1111</span><a href="http://ec.com/flow.php" class="f6">修改</a></h6>
        <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tbody><tr>
              <th bgcolor="#ffffff">商品名称</th>
              <th bgcolor="#ffffff">属性</th>
                            <th bgcolor="#ffffff">市场价</th>
                            <th bgcolor="#ffffff">本店价</th>
              <th bgcolor="#ffffff">购买数量</th>
              <th bgcolor="#ffffff">小计</th>
            </tr>
                        <tr>
              <td bgcolor="#ffffff">
                        <a href="http://ec.com/goods.php?id=9" target="_blank" class="f6">诺基亚E66</a>
                                                  </td>
              <td bgcolor="#ffffff">颜色:白色 <br>
</td>
                            <td align="right" bgcolor="#ffffff">￥2757.60元</td>
                            <td bgcolor="#ffffff" align="right">￥2183.10元</td>
              <td bgcolor="#ffffff" align="right">1</td>
              <td bgcolor="#ffffff" align="right">￥2183.10元</td>
            </tr>
                                    <tr>
              <td bgcolor="#ffffff" colspan="7">
                            购物金额小计 ￥2183.10元，比市场价 ￥2757.60元 节省了 ￥574.50元 (21%)              </td>
            </tr>
                      </tbody></table>
      </div>
      <div class="blank"></div>
      <div class="flowBox">
      <h6><span>收货人信息</span><a href="http://ec.com/flow.php?step=consignee" class="f6">修改</a></h6>
      <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tbody><tr>
              <td bgcolor="#ffffff">收货人姓名:</td>
              <td bgcolor="#ffffff">刘先生</td>
              <td bgcolor="#ffffff">电子邮件地址:</td>
              <td bgcolor="#ffffff">ecshop@ecshop.com</td>
            </tr>
                        <tr>
              <td bgcolor="#ffffff">详细地址:</td>
              <td bgcolor="#ffffff">海兴大厦 </td>
              <td bgcolor="#ffffff">邮政编码:</td>
              <td bgcolor="#ffffff"></td>
            </tr>
                        <tr>
              <td bgcolor="#ffffff">电话:</td>
              <td bgcolor="#ffffff">010-25851234 </td>
              <td bgcolor="#ffffff">手机:</td>
              <td bgcolor="#ffffff">13986765412</td>
            </tr>
                         <tr>
              <td bgcolor="#ffffff">标志建筑:</td>
              <td bgcolor="#ffffff"> </td>
              <td bgcolor="#ffffff">最佳送货时间:</td>
              <td bgcolor="#ffffff"></td>
            </tr>
                      </tbody></table>
      </div>
     <div class="blank"></div>
        <div class="flowBox">
    <h6><span>配送方式</span></h6>
    <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="shippingTable">
            <tbody><tr>
              <th bgcolor="#ffffff" width="5%">&nbsp;</th>
              <th bgcolor="#ffffff" width="25%">名称</th>
              <th bgcolor="#ffffff">订购描述</th>
              <th bgcolor="#ffffff" width="15%">费用</th>
              <th bgcolor="#ffffff" width="15%">免费额度</th>
              <th bgcolor="#ffffff" width="15%">保价费用</th>
            </tr>
                        <tr>
              <td bgcolor="#ffffff" valign="top"><input name="shipping" type="radio" value="5" supportcod="0" insure="0" onclick="selectShipping(this)">
              </td>
              <td bgcolor="#ffffff" valign="top"><strong>申通快递</strong></td>
              <td bgcolor="#ffffff" valign="top">江、浙、沪地区首重为15元/KG，其他地区18元/KG， 续重均为5-6元/KG， 云南地区为8元</td>
              <td bgcolor="#ffffff" align="right" valign="top">￥15.00元</td>
              <td bgcolor="#ffffff" align="right" valign="top">￥0.00元</td>
              <td bgcolor="#ffffff" align="right" valign="top">不支持保价</td>
            </tr>
                        <tr>
              <td bgcolor="#ffffff" valign="top"><input name="shipping" type="radio" value="3" checked="true" supportcod="1" insure="0" onclick="selectShipping(this)">
              </td>
              <td bgcolor="#ffffff" valign="top"><strong>城际快递</strong></td>
              <td bgcolor="#ffffff" valign="top">配送的运费是固定的</td>
              <td bgcolor="#ffffff" align="right" valign="top">￥10.00元</td>
              <td bgcolor="#ffffff" align="right" valign="top">￥100000.00元</td>
              <td bgcolor="#ffffff" align="right" valign="top">不支持保价</td>
            </tr>
                        <tr>
              <td bgcolor="#ffffff" valign="top"><input name="shipping" type="radio" value="6" supportcod="0" insure="0" onclick="selectShipping(this)">
              </td>
              <td bgcolor="#ffffff" valign="top"><strong>邮局平邮</strong></td>
              <td bgcolor="#ffffff" valign="top">邮局平邮的描述内容。</td>
              <td bgcolor="#ffffff" align="right" valign="top">￥3.50元</td>
              <td bgcolor="#ffffff" align="right" valign="top">￥50000.00元</td>
              <td bgcolor="#ffffff" align="right" valign="top">不支持保价</td>
            </tr>
                        <tr>
              <td colspan="6" bgcolor="#ffffff" align="right"><label for="ECS_NEEDINSURE">
                <input name="need_insure" id="ECS_NEEDINSURE" type="checkbox" onclick="selectInsure(this.checked)" value="1" disabled="true">
                配送是否需要保价 </label></td>
            </tr>
          </tbody></table>
    </div>
    <div class="blank"></div>
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
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="payment" value="1" checked="" iscod="0" onclick="selectPayment(this)"></td>
              <td valign="top" bgcolor="#ffffff"><strong>余额支付</strong></td>
              <td valign="top" bgcolor="#ffffff">使用帐户余额支付。只有会员才能使用，通过设置信用额度，可以透支。</td>
              <td align="right" bgcolor="#ffffff" valign="top">￥0.00元</td>
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
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="payment" value="3" iscod="1" onclick="selectPayment(this)"></td>
              <td valign="top" bgcolor="#ffffff"><strong>货到付款</strong></td>
              <td valign="top" bgcolor="#ffffff">开通城市：×××
货到付款区域：×××</td>
              <td align="right" bgcolor="#ffffff" valign="top"><span id="ECS_CODFEE">￥5.00元</span></td>
            </tr>
                      </tbody></table>
    </div>
        <div class="blank"></div>
                    <div class="flowBox">
          <h6><span>商品包装</span></h6>
          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="packTable">
            <tbody><tr>
              <th width="5%" scope="col" bgcolor="#ffffff">&nbsp;</th>
              <th width="35%" scope="col" bgcolor="#ffffff">名称</th>
              <th width="22%" scope="col" bgcolor="#ffffff">价格</th>
              <th width="22%" scope="col" bgcolor="#ffffff">免费额度</th>
              <th scope="col" bgcolor="#ffffff">图片</th>
            </tr>
            <tr>
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="pack" value="0" checked="true" onclick="selectPack(this)"></td>
              <td valign="top" bgcolor="#ffffff"><strong>不要包装</strong></td>
              <td valign="top" bgcolor="#ffffff">&nbsp;</td>
              <td valign="top" bgcolor="#ffffff">&nbsp;</td>
              <td valign="top" bgcolor="#ffffff">&nbsp;</td>
            </tr>
                        <tr>
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="pack" value="1" onclick="selectPack(this)">
              </td>
              <td valign="top" bgcolor="#ffffff"><strong>精品包装</strong></td>
              <td valign="top" bgcolor="#ffffff" align="right">￥5.00元</td>
              <td valign="top" bgcolor="#ffffff" align="right">￥800.00元</td>
              <td valign="top" bgcolor="#ffffff" align="center">
                                    <a href="http://ec.com/data/packimg/1242108360911825791.jpg" target="_blank" class="f6">查看</a>
                                 </td>
            </tr>
                      </tbody></table>
       </div>
             <div class="blank"></div>
          
                    <div class="flowBox">
          <h6><span>祝福贺卡</span></h6>
          <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="cardTable">
            <tbody><tr>
              <th bgcolor="#ffffff" width="5%" scope="col">&nbsp;</th>
              <th bgcolor="#ffffff" width="35%" scope="col">名称</th>
              <th bgcolor="#ffffff" width="22%" scope="col">价格</th>
              <th bgcolor="#ffffff" width="22%" scope="col">免费额度</th>
              <th bgcolor="#ffffff" scope="col">图片</th>
            </tr>
            <tr>
              <td bgcolor="#ffffff" valign="top"><input type="radio" name="card" value="0" checked="true" onclick="selectCard(this)"></td>
              <td bgcolor="#ffffff" valign="top"><strong>不要贺卡</strong></td>
              <td bgcolor="#ffffff" valign="top">&nbsp;</td>
              <td bgcolor="#ffffff" valign="top">&nbsp;</td>
              <td bgcolor="#ffffff" valign="top">&nbsp;</td>
            </tr>
                        <tr>
              <td valign="top" bgcolor="#ffffff"><input type="radio" name="card" value="1" onclick="selectCard(this)">
              </td>
              <td valign="top" bgcolor="#ffffff"><strong>祝福贺卡</strong></td>
              <td valign="top" align="right" bgcolor="#ffffff">￥5.00元</td>
              <td valign="top" align="right" bgcolor="#ffffff">￥1000.00元</td>
              <td valign="top" align="center" bgcolor="#ffffff">
                                    <a href="http://ec.com/data/cardimg/1242108754847457261.jpg" target="_blank" class="f6">查看</a>
                                  </td>
            </tr>
                        <tr>
              <td bgcolor="#ffffff"></td>
              <td bgcolor="#ffffff" valign="top"><strong>祝福语:</strong></td>
              <td bgcolor="#ffffff" colspan="3"><textarea name="card_message" cols="60" rows="3" style="width:auto; border:1px solid #ccc;"></textarea></td>
            </tr>
          </tbody></table>
        </div>
                <div class="blank"></div>
        
      <div class="flowBox">
    <h6><span>其它信息</span></h6>
      <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                                    <tbody><tr>
              <td bgcolor="#ffffff"><strong>使用积分</strong></td>
              <td bgcolor="#ffffff"><input name="integral" type="text" class="input" id="ECS_INTEGRAL" onblur="changeIntegral(this.value)" value="0" size="10">
              您当前的可用积分为:98388 积分，本订单最多可以使用2200  积分. <span id="ECS_INTEGRAL_NOTICE" class="notice"></span></td>
            </tr>
                                    <tr>
              <td bgcolor="#ffffff"><strong>使用红包:</strong></td>
              <td bgcolor="#ffffff">
                选择已有红包                <select name="bonus" onchange="changeBonus(this.value)" id="ECS_BONUS" style="border:1px solid #ccc;">
                  <option value="0" selected="">请选择</option>
                                  </select>

                或者输入红包序列号                <input name="bonus_sn" type="text" class="inputBg" size="15" value="">
                <input name="validate_bonus" type="button" class="bnt_blue_1" value="验证红包" onclick="validateBonus(document.forms[&#39;theForm&#39;].elements[&#39;bonus_sn&#39;].value)" style="vertical-align:middle;">
              </td>
            </tr>
                                    <tr>
              <td valign="top" bgcolor="#ffffff"><strong>订单附言:</strong></td>
              <td bgcolor="#ffffff"><textarea name="postscript" cols="80" rows="3" id="postscript" style="border:1px solid #ccc;"></textarea></td>
            </tr>
                        <tr>
              <td bgcolor="#ffffff"><strong>缺货处理:</strong></td>
              <td bgcolor="#ffffff">                <label>
                <input name="how_oos" type="radio" value="0" checked="" onclick="changeOOS(this)">
                等待所有商品备齐后再发</label>
                                <label>
                <input name="how_oos" type="radio" value="1" onclick="changeOOS(this)">
                取消订单</label>
                                <label>
                <input name="how_oos" type="radio" value="2" onclick="changeOOS(this)">
                与店主协商</label>
                              </td>
            </tr>
                      </tbody></table>
    </div>
    <div class="blank"></div>
    <div class="flowBox">
    <h6><span>费用总计2</span></h6>
          <div id="ECS_ORDERTOTAL">
<table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
    <tbody><tr>
    <td align="right" bgcolor="#ffffff">
    该订单完成后，您将获得
            <font class="f4_b">2183</font> 积分            ，以及价值             <font class="f4_b">￥0.00元</font>的红包。
          </td>
  </tr>
    <tr>
    <td align="right" bgcolor="#ffffff">
      商品总价: <font class="f4_b">￥2183.10元</font>
                        + 配送费用: <font class="f4_b">￥10.00元</font>
                                  </td>
  </tr>
    <tr>
    <td align="right" bgcolor="#ffffff"> 应付款金额: <font class="f4_b">￥2193.10元</font>
    	</td>
  </tr>
</tbody></table>
</div>           <div align="center" style="margin:8px auto;">
            <input type="image" src="<?=$url?>/images/home/bnt_subOrder.gif">
            <input type="hidden" name="step" value="done">
            </div>
    </div>
    </form>

</div>
<div class="blank5"></div>


