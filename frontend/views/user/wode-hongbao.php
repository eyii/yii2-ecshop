
<div class="blank"></div>
<div class="block clearfix">

    <?=\common\components\ec\frontend\EcYonghuZhongxinZuoquWidget::widget()?>
  
  
  <div class="AreaR">
    <div class="box">
     <div class="box_1">
      <div class="userCenterBox boxCenterList clearfix" style="_height:1%;">
         
              

      <h5><span>我的红包</span></h5>
      <div class="blank"></div>
       <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <tbody><tr>
          <th align="center" bgcolor="#FFFFFF">红包序号</th>
          <th align="center" bgcolor="#FFFFFF">红包名称</th>
          <th align="center" bgcolor="#FFFFFF">红包金额</th>
          <th align="center" bgcolor="#FFFFFF">最小订单金额</th>
          <th align="center" bgcolor="#FFFFFF">截至使用日期</th>
          <th align="center" bgcolor="#FFFFFF">红包状态</th>
        </tr>
                <tr>
          <td colspan="6" bgcolor="#FFFFFF">您现在还没有红包</td>
        </tr>
              </tbody></table>
      <div class="blank5"></div>
      
<form name="selectPageForm" action="http://ec.com/user.php" method="get">


 <div id="pager" class="pagebar">
  <span class="f_l f6" style="margin-right:10px;">总计 <b>0</b>  个记录</span>
      
      </div>


</form>

      <div class="blank5"></div>
      <h5><span>添加红包</span></h5>
      <div class="blank"></div>
      <form name="addBouns" action="http://ec.com/user.php" method="post" onsubmit="return addBonus()">
        <div style="padding: 15px;">
        红包序列号          <input name="bonus_sn" type="text" size="30" class="inputBg">
          <input type="hidden" name="act" value="act_add_bonus" class="inputBg">
          <input type="submit" class="bnt_blue_1" style="border:none;" value="添加红包">
        </div>
      </form>
       
      
             
       
          
     
          
    
                                                   
      
          
      
               




      </div>
     </div>
    </div>
  </div>
  
</div>
<div class="blank"></div>
