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
         
                  
         
                   <h5><span>我的留言</span></h5>
          <div class="blank"></div>
                               <div class="blank"></div>
          <form action="http://ec.com/user.php" method="post" enctype="multipart/form-data" name="formMsg" onsubmit="return submitMsg()">
                  <table width="100%" border="0" cellpadding="3">
                                        <tbody><tr>
                      <td align="right">留言类型：</td>
                      <td><input name="msg_type" type="radio" value="0" checked="checked">
                        留言                        <input type="radio" name="msg_type" value="1">
                        投诉                        <input type="radio" name="msg_type" value="2">
                        询问                        <input type="radio" name="msg_type" value="3">
                        售后                        <input type="radio" name="msg_type" value="4">
                        求购 </td>
                    </tr>
                                        <tr>
                      <td align="right">主题：</td>
                      <td><input name="msg_title" type="text" size="30" class="inputBg"></td>
                    </tr>
                    <tr>
                      <td align="right" valign="top">留言内容：</td>
                      <td><textarea name="msg_content" cols="50" rows="4" wrap="virtual" class="B_blue"></textarea></td>
                    </tr>
                    <tr>
                      <td align="right">上传文件：</td>
                      <td><input type="file" name="message_img" size="45" class="inputBg"></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><input type="hidden" name="act" value="act_add_message">
                        <input type="submit" value="提 交" class="bnt_bonus">
                      </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>
                      <font color="red">小提示：</font><br>
                      您可以上传以下格式的文件：<br>gif、jpg、png、word、excel、txt、zip、ppt、pdf                      </td>
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

