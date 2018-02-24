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
         
                  
         
                  
         
              
    
        
    
          <h5><span>我的收藏</span></h5>
    <div class="blank"></div>
     <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
      <tbody><tr align="center">
        <th width="35%" bgcolor="#ffffff">商品名称</th>
        <th width="30%" bgcolor="#ffffff">价格</th>
        <th width="35%" bgcolor="#ffffff">操作</th>
      </tr>
          </tbody></table>
    
<form name="selectPageForm" action="http://ec.com/user.php" method="get">


 <div id="pager" class="pagebar">
  <span class="f_l f6" style="margin-right:10px;">总计 <b>0</b>  个记录</span>
      
      </div>


</form>
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>
     <div class="blank5"></div>

    <h5><span>我的推荐</span></h5>
    <div class="blank"></div>
     <form name="theForm" method="post" action="">
     <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
    <tbody><tr>
      <td align="right" bgcolor="#ffffff">是否显示商品图片：</td>
      <td bgcolor="#ffffff">
        <select name="need_image" id="need_image" class="inputBg">
          <option value="true" selected="">显示</option>
          <option value="false">不显示</option>
        </select>
      </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ffffff">显示商品数量：</td>
      <td bgcolor="#ffffff"><input name="goods_num" type="text" id="goods_num" value="6" class="inputBg"></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ffffff">选择商品排列方式：</td>
      <td bgcolor="#ffffff"><select name="arrange" id="arrange" class="inputBg">
        <option value="h" selected="">横排</option>
        <option value="v">竖排</option>
      </select></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ffffff">排列显示条目数：</td>
      <td bgcolor="#ffffff"><input name="rows_num" type="text" id="rows_num" value="1" class="inputBg"></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ffffff">选择编码：</td>
      <td bgcolor="#ffffff"><select name="charset" id="charset">
        <option value="UTF8">国际化编码（utf8）</option><option value="GB2312">简体中文</option><option value="BIG5">繁体中文</option>      </select></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#ffffff"><input type="button" name="gen_code" value="生成代码" onclick="genCode()" class="bnt_blue_1">
			</td>
  </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#ffffff"><textarea name="code" cols="80" rows="5" id="code" class="B_blue"></textarea></td>
  </tr>
  </tbody></table>
     </form>

      
    
        <div class="blank5"></div>
   
      
         
    
  
      </div>
     </div>
    </div>
  </div>
</div>
<div class="blank"></div>
