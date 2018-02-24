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

              <h5><span>跟踪包裹</span></h5>
        <div class="blank"></div>
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="order_table">
        <tbody><tr align="center">
          <td bgcolor="#ffffff">订单号</td>
          <td bgcolor="#ffffff">操作</td>
        </tr>
              </tbody></table>

      <div class="blank5"></div>
      
<form name="selectPageForm" action="http://ec.com/user.php" method="get">


 <div id="pager" class="pagebar">
  <span class="f_l f6" style="margin-right:10px;">总计 <b>0</b>  个记录</span>
      
      </div>


</form>

      </div>
     </div>
    </div>
  </div>
  
</div>
<div class="blank"></div>
