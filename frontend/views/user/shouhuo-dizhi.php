<?php
use common\components\ec\frontend\EcYonghuZhongxinZuoquWidget;
?>
<div class="blank"></div>
<div class="block clearfix">

    <?=EcYonghuZhongxinZuoquWidget::widget()?>

  <div class="AreaR">
    <div class="box">
     <div class="box_1">
      <div class="userCenterBox boxCenterList clearfix" style="_height:1%;">
         
              
        
      
             
       
          
     
          
    
                                                   
      
              <h5><span>收货人信息</span></h5>
        <div class="blank"></div>
         

                        <form action="http://ec.com/user.php" method="post" name="theForm" onsubmit="return checkConsignee(this)">
              <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                <tbody><tr>
                  <td align="right" bgcolor="#ffffff">配送区域：</td>
                  <td colspan="3" align="left" bgcolor="#ffffff"><select name="country" id="selCountries_0" onchange="region.changed(this, 1, &#39;selProvinces_0&#39;)">
                      <option value="0">请选择国家</option>
                                            <option value="1" selected="">中国</option>
                                          </select>
                    <select name="province" id="selProvinces_0" onchange="region.changed(this, 2, &#39;selCities_0&#39;)">
                      <option value="0">请选择省</option>
                                            <option value="2">北京</option>
                                            <option value="3">安徽</option>
                                            <option value="4">福建</option>
                                            <option value="5">甘肃</option>
                                            <option value="6">广东</option>
                                            <option value="7">广西</option>
                                            <option value="8">贵州</option>
                                            <option value="9">海南</option>
                                            <option value="10">河北</option>
                                            <option value="11">河南</option>
                                            <option value="12">黑龙江</option>
                                            <option value="13">湖北</option>
                                            <option value="14">湖南</option>
                                            <option value="15">吉林</option>
                                            <option value="16">江苏</option>
                                            <option value="17">江西</option>
                                            <option value="18">辽宁</option>
                                            <option value="19">内蒙古</option>
                                            <option value="20">宁夏</option>
                                            <option value="21">青海</option>
                                            <option value="22">山东</option>
                                            <option value="23">山西</option>
                                            <option value="24">陕西</option>
                                            <option value="25">上海</option>
                                            <option value="26">四川</option>
                                            <option value="27">天津</option>
                                            <option value="28">西藏</option>
                                            <option value="29">新疆</option>
                                            <option value="30">云南</option>
                                            <option value="31">浙江</option>
                                            <option value="32">重庆</option>
                                            <option value="33">香港</option>
                                            <option value="34">澳门</option>
                                            <option value="35">台湾</option>
                                          </select>
                    <select name="city" id="selCities_0" onchange="region.changed(this, 3, &#39;selDistricts_0&#39;)">
                      <option value="0">请选择市</option>
                                          </select>
                    <select name="district" id="selDistricts_0" style="display:none">
                      <option value="0">请选择区</option>
                                          </select>
                  (必填) </td>
                </tr>
                <tr>
                  <td align="right" bgcolor="#ffffff">收货人姓名：</td>
                  <td align="left" bgcolor="#ffffff"><input name="consignee" type="text" class="inputBg" id="consignee_0" value="">
                  (必填) </td>
                  <td align="right" bgcolor="#ffffff">电子邮件地址：</td>
                  <td align="left" bgcolor="#ffffff"><input name="email" type="text" class="inputBg" id="email_0" value="1@qq.com">
                  (必填)</td>
                </tr>
                <tr>
                  <td align="right" bgcolor="#ffffff">详细地址：</td>
                  <td align="left" bgcolor="#ffffff"><input name="address" type="text" class="inputBg" id="address_0" value="">
                  (必填)</td>
                  <td align="right" bgcolor="#ffffff">邮政编码：</td>
                  <td align="left" bgcolor="#ffffff"><input name="zipcode" type="text" class="inputBg" id="zipcode_0" value=""></td>
                </tr>
                <tr>
                  <td align="right" bgcolor="#ffffff">电话：</td>
                  <td align="left" bgcolor="#ffffff"><input name="tel" type="text" class="inputBg" id="tel_0" value="">
                  (必填)</td>
                  <td align="right" bgcolor="#ffffff">手机：</td>
                  <td align="left" bgcolor="#ffffff"><input name="mobile" type="text" class="inputBg" id="mobile_0" value=""></td>
                </tr>
                <tr>
                  <td align="right" bgcolor="#ffffff">标志建筑：</td>
                  <td align="left" bgcolor="#ffffff"><input name="sign_building" type="text" class="inputBg" id="sign_building_0" value=""></td>
                  <td align="right" bgcolor="#ffffff">最佳送货时间：</td>
                  <td align="left" bgcolor="#ffffff"><input name="best_time" type="text" class="inputBg" id="best_time_0" value=""></td>
                </tr>
                <tr>
                  <td align="right" bgcolor="#ffffff">&nbsp;</td>
                  <td colspan="3" align="center" bgcolor="#ffffff">                    <input type="submit" name="submit" class="bnt_blue_2" value="新增收货地址">
                                        <input type="hidden" name="act" value="act_edit_address">
                    <input name="address_id" type="hidden" value="">
                  </td>
                </tr>
              </tbody></table>
            </form>
                      
      
               




      </div>
     </div>
    </div>
  </div>
  
</div>
<div class="blank"></div>
