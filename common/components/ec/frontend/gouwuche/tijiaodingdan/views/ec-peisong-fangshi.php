<div class="flowBox" id="peisong_fangshi">
    <h6><span>配送方式</span></h6>
    <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="shippingTable">
        <tbody>
        <tr>
            <th bgcolor="#ffffff" width="5%">&nbsp;</th>
            <th bgcolor="#ffffff" width="25%">名称</th>
            <th bgcolor="#ffffff">订购描述</th>
            <th bgcolor="#ffffff" width="15%">费用</th>
            <th bgcolor="#ffffff" width="15%">免费额度</th>
            <th bgcolor="#ffffff" width="15%">保价费用</th>
        </tr>
        <tr v-for="item in items">
            <td bgcolor="#ffffff" valign="top">
                <input name="shipping" type="radio" value="5" supportcod="0" insure="0" onclick="selectShipping(this)">
            </td>
            <td bgcolor="#ffffff" valign="top"><strong>{{item.shipping_name}}</strong></td>
            <td bgcolor="#ffffff" valign="top">{{item.shipping_name}}</td>
            <td bgcolor="#ffffff" align="right" valign="top">￥15.00元</td>
            <td bgcolor="#ffffff" align="right" valign="top">￥0.00元</td>
            <td bgcolor="#ffffff" align="right" valign="top">{{item.insure===0?'不支持保价':item.insure}}</td>
        </tr>

        </tbody></table>
</div>
<script>
    new Vue({
        el:'#peisong_fangshi',
        data:{
            items:<?=$kuaidi_model?>
        }
    })
</script>