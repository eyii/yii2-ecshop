<!--姓名-->
<tr>
    <td bgColor=#ffffff>收货人姓名:</td>
    <td bgColor=#ffffff><input id=consignee_0 class=inputBg name=consignee>
        (必填) </td>
    <!--       电子邮件地址-->
    <td bgColor=#ffffff>电子邮件地址:</td>
    <td bgColor=#ffffff><input id=email_0 class=inputBg name=email> (必填)</td>
</tr>
<!--  详细地址-->
<tr>
    <td bgColor=#ffffff>详细地址:</td>
    <td bgColor=#ffffff><input id=address_0 class=inputBg name=address>
        (必填)</td>
    <td bgColor=#ffffff>邮政编码:</td>
    <td bgColor=#ffffff><input id=zipcode_0 class=inputBg name=zipcode></td></tr>
<!--电话-->
<tr>
    <td bgColor=#ffffff>电话:</td>
    <td bgColor=#ffffff><input id=tel_0 class=inputBg name=tel> (必填)</td>
    <!-- 手机-->
    <td bgColor=#ffffff>手机:</td>
    <td bgColor=#ffffff><input id=mobile_0 class=inputBg name=mobile></td></tr>
<!-- 标志建筑-->
<tr>
    <td bgColor=#ffffff>标志建筑:</td>
    <td bgColor=#ffffff>
        <input id=sign_building_0 class=inputBg  name=sign_building>
    </td>
    <td bgColor=#ffffff>最佳送货时间:</td>
    <td bgColor=#ffffff><input id='best_time_0' class='inputBg' name=best_time></td>
</tr>
<!-- 配送至这个地址-->
<tr>
    <td bgColor=#ffffff colSpan=4 align=middle><input class=bnt_blue_2 value=配送至这个地址 type=submit name=Submit>
        <input value=consignee type=hidden name=step>
        <input value=checkout type=hidden name=act> <input type=hidden name=address_id>
    </td>
</tr>