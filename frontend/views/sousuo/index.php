<?php
$url=Yii::getAlias('all');
use \common\components\ec\frontend\EcZuoquWidget;
?>
<div class="block clearfix">

<?=\common\components\ec\frontend\EcZuoquWidget::widget()?>
  
  
  <div class="AreaR">
    
  <div class="box">
   <div class="box_1">
    <h3><span>高级搜索</span></h3>
    <div class="boxCenterList">
      <form action="http://ec.com/search.php" method="get" name="advancedSearchForm" id="advancedSearchForm">
    <table border="0" align="center" cellpadding="3">
      <tbody><tr>
        <td valign="top">关键字：</td>
        <td>
          <input name="keywords" id="keywords" type="text" size="40" maxlength="120" class="inputBg" value="">
          <label for="sc_ds"><input type="checkbox" name="sc_ds" value="1" id="sc_ds">搜索简介</label>
          <br>匹配多个关键字全部，可用 "空格" 或 "AND" 连接。如 win32 AND unix<br>匹配多个关键字其中部分，可用"+"或 "OR" 连接。如 win32 OR unix        </td>
      </tr>
      <tr>
        <td>分类：</td>
        <td><select name="category" id="select" style="border:1px solid #ccc;">
            <option value="0">所有分类</option><option value="1">手机类型</option><option value="4">&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option><option value="5">&nbsp;&nbsp;&nbsp;&nbsp;双模手机</option><option value="2">&nbsp;&nbsp;&nbsp;&nbsp;CDMA手机</option><option value="3">&nbsp;&nbsp;&nbsp;&nbsp;GSM手机</option><option value="12">充值卡</option><option value="14">&nbsp;&nbsp;&nbsp;&nbsp;移动手机充值卡</option><option value="15">&nbsp;&nbsp;&nbsp;&nbsp;联通手机充值卡</option><option value="13">&nbsp;&nbsp;&nbsp;&nbsp;小灵通/固话充值卡</option><option value="6">手机配件</option><option value="11">&nbsp;&nbsp;&nbsp;&nbsp;读卡器和内存卡</option><option value="7">&nbsp;&nbsp;&nbsp;&nbsp;充电器</option><option value="8">&nbsp;&nbsp;&nbsp;&nbsp;耳机</option><option value="9">&nbsp;&nbsp;&nbsp;&nbsp;电池</option></select>
        </td>
      </tr>
      <tr>
        <td>品牌：</td>
        <td><select name="brand" id="brand" style="border:1px solid #ccc;">
            <option value="0">所有品牌</option>
            <option value="1">诺基亚</option><option value="10">金立</option><option value="9">联想</option><option value="8">LG</option><option value="7">索爱</option><option value="6">三星</option><option value="5">夏新</option><option value="4">飞利浦</option><option value="3">多普达</option><option value="2">摩托罗拉</option><option value="11">  恒基伟业</option>          </select>
        </td>
      </tr>
      <tr>
        <td>价格：</td>
        <td><input name="min_price" type="text" id="min_price" class="inputBg" value="" size="10" maxlength="8">
          -
          <input name="max_price" type="text" id="max_price" class="inputBg" value="" size="10" maxlength="8">
        </td>
      </tr>
            <tr>
        <td>扩展选项：</td>
        <td><select name="goods_type" onchange="this.form.submit()" style="border:1px solid #ccc;">
            <option value="0">请选择</option>
            <option value="9">精品手机</option>          </select>
        </td>
      </tr>
            
            <tr>
        <td>&nbsp;</td>
        <td><label for="outstock"><input type="checkbox" name="outstock" value="1" id="outstock"> 隐藏已脱销的商品</label>
        </td>
      </tr>
      
      <tr>
        <td colspan="4" align="center"><input type="hidden" name="action" value="form">
          <input type="submit" name="Submit" class="bnt_blue_1" value="立即搜索"></td>
      </tr>
    </tbody></table>
  </form>
    </div>
   </div>
  </div>
  <div class="blank5"></div>
  
   
  </div>
  
</div>
