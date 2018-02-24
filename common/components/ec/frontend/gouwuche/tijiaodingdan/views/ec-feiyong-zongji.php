
<?php
$url=Yii::getAlias('@all');
?>
<div class="flowBox">
    <h6><span>费用总计2</span></h6>
    <div id="ECS_ORDERTOTAL">

        <div id="ECS_ORDERTOTAL">
            <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                <tbody><tr>
                    <td align="right" bgcolor="#ffffff">
                        该订单完成后，您将获得
                        <font class="f4_b">359</font> 积分            ，以及价值             <font class="f4_b">￥0.00元</font>的红包。
                    </td>
                </tr>
                <tr>
                    <td align="right" bgcolor="#ffffff">
                        商品总价: <font class="f4_b">￥359.10元</font>
                        + 配送费用: <font class="f4_b">￥15.00元</font>
                    </td>
                </tr>
                <tr>
                    <td align="right" bgcolor="#ffffff"> 应付款金额: <font class="f4_b">￥374.10元</font>
                    </td>
                </tr>
                </tbody></table>
        </div></div>           <div align="center" style="margin:8px auto;">
        <input type="image" src="<?=$url?>/images/ec/gouwuche/bnt_subOrder.gif">
        <input type="hidden" name="step" value="done">
    </div>
</div>