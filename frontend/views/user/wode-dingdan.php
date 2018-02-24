
<div class="blank"></div>
<div class="block clearfix">
  
<?=\common\components\ec\frontend\EcYonghuZhongxinZuoquWidget::widget()?>
  
  
  <div class="AreaR">
    <div class="box">
     <div class="box_1">
      <div class="userCenterBox boxCenterList clearfix" style="_height:1%;">
         
              
        
      
              <h5><span>我的订单</span></h5>
       <div class="blank"></div>
       <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tbody><tr align="center">
            <td bgcolor="#ffffff">订单号</td>
            <td bgcolor="#ffffff">下单时间</td>
            <td bgcolor="#ffffff">订单总金额</td>
            <td bgcolor="#ffffff">订单状态</td>
            <td bgcolor="#ffffff">操作</td>
          </tr>
                    </tbody></table>
        <div class="blank5"></div>
       
<form name="selectPageForm" action="http://ec.com/user.php" method="get">


 <div id="pager" class="pagebar">
  <span class="f_l f6" style="margin-right:10px;">总计 <b>0</b>  个记录</span>
      
      </div>


</form>

       <div class="blank5"></div>
       <h5><span>合并订单</span></h5>
       <div class="blank"></div>
        <script type="text/javascript">
                  var from_order_empty = "请选择要合并的从订单";
                  var to_order_empty = "请选择要合并的主订单";
                  var order_same = "主订单和从订单相同，请重新选择";
                  var confirm_merge = "您确实要合并这两个订单吗？";
                </script>
        <form action="http://ec.com/user.php" method="post" name="formOrder" onsubmit="return mergeOrder()">
          <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
            <tbody><tr>
              <td width="22%" align="right" bgcolor="#ffffff">主订单:</td>
              <td width="12%" align="left" bgcolor="#ffffff"><select name="to_order">
              <option value="0">请选择...</option>

                  
                </select></td>
              <td width="19%" align="right" bgcolor="#ffffff">从订单:</td>
              <td width="11%" align="left" bgcolor="#ffffff"><select name="from_order">
              <option value="0">请选择...</option>

                  
                </select></td>
              <td width="36%" bgcolor="#ffffff">&nbsp;<input name="act" value="merge_order" type="hidden">
              <input type="submit" name="Submit" class="bnt_blue_1" style="border:none;" value="合并订单"></td>
            </tr>
            <tr>
              <td bgcolor="#ffffff">&nbsp;</td>
              <td colspan="4" align="left" bgcolor="#ffffff">订单合并是在发货前将相同状态的订单合并成一新的订单。<br>收货地址，送货方式等以主定单为准。</td>
            </tr>
          </tbody></table>
        </form>
             
       
          
     
          
    
                                                   
      
          
      
               




      </div>
     </div>
    </div>
  </div>
  
</div>
<div class="blank"></div>
