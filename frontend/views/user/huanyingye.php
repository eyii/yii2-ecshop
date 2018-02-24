<?php
$url=Yii::getAlias('all');
use common\components\ec\frontend\EcYonghuZhongxinZuoquWidget;
?>
<div class="blank"></div>
<div class="block clearfix">

    <?=EcYonghuZhongxinZuoquWidget::widget()?>
  
  
  <div class="AreaR">
    <div class="box">
     <div class="box_1">
      <div class="userCenterBox boxCenterList clearfix" style="_height:1%;">
         
                   <font class="f5"><b class="f4">stolen</b> 欢迎您回到 ECSHOP！</font><br>
          <div class="blank"></div>
          您的上一次登录时间: 2017-04-01 11:28:57<br>
          <div class="blank5"></div>
          您的等级是 注册用户  ,您还差 10000 积分达到 vip <br>
          <div class="blank5"></div>
                     您还没有通过邮件认证 <a href="javascript:sendHashMail()" style="color:#006bd0;">点此发送认证邮件</a><br>
                      <div style="margin:5px 0; border:1px solid #a1675a;padding:10px 20px; background-color:#e8d1c9;">
           <img src="<?=$url?>/images/ec/user/note.gif" alt="note">&nbsp;用户中心公告！           </div>
           <br><br>
          <div class="f_l" style="width:350px;">
          <h5><span>您的账户</span></h5>
          <div class="blank"></div>
          余额:<a href="http://ec.com/user.php?act=account_log" style="color:#006bd0;">￥0.00元</a><br>
                    红包:<a href="http://ec.com/user.php?act=bonus" style="color:#006bd0;">共计 0 个,价值 ￥0.00元</a><br>
          积分:0积分<br>
          </div>
          <div class="f_r" style="width:350px;">
          <h5><span>用户提醒</span></h5>
          <div class="blank"></div>
                     您最近30天内提交了0个订单<br>
                    </div>
                  
         
                  
         
              
    
        
    
        
    
        <div class="blank5"></div>
   
      
         
    
  
      </div>
     </div>
    </div>
  </div>
  
</div>
<div class="blank"></div>

