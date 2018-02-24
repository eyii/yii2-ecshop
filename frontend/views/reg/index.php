<?php
$url=Yii::getAlias('all');
?>

<div class="usBox">
  <div class="usBox_2 clearfix">
   <div class="regtitle"></div>
    <form action="http://ec.com/user.php" method="post" name="formUser" onsubmit="return register();">
      <table width="100%" border="0" align="left" cellpadding="5" cellspacing="3">
        <tbody>
        <!--用户名-->
        <tr>
          <td width="13%" align="right">用户名</td>
          <td width="87%">
          <input name="username" type="text" size="25" id="username" onblur="is_registered(this.value);" class="inputBg">
            <span id="username_notice" style="color:#FF0000"> *</span>
          </td>
        </tr>
        <!--email-->
        <tr>
          <td align="right">email</td>
          <td>
          <input name="email" type="text" size="25" id="email" onblur="checkEmail(this.value);" class="inputBg">
            <span id="email_notice" style="color:#FF0000"> *</span>
          </td>
        </tr>
        <!--密码-->
        <tr>
          <td align="right">密码</td>
          <td>
          <input name="password" type="password" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)" class="inputBg" style="width:179px;">
            <span style="color:#FF0000" id="password_notice"> *</span>
          </td>
        </tr>
        <!--密码强度-->
        <tr>
          <td align="right">密码强度</td>
          <td>
            <table width="145" border="0" cellspacing="0" cellpadding="1">
              <tbody><tr align="center">
                <td width="33%" id="pwd_lower">弱</td>
                <td width="33%" id="pwd_middle">中</td>
                <td width="33%" id="pwd_high">强</td>
              </tr>
            </tbody></table>
          </td>
        </tr>
        <!--确认密码-->
        <tr>
          <td align="right">确认密码</td>
          <td>
          <input name="confirm_password" type="password" id="conform_password" onblur="check_conform_password(this.value);" class="inputBg" style="width:179px;">
            <span style="color:#FF0000" id="conform_password_notice"> *</span>
          </td>
        </tr>
        <!--MSN-->
        <tr>
          <td align="right" id="extend_field1i">MSN          </td><td>
          <input name="extend_field1" type="text" size="25" class="inputBg"><span style="color:#FF0000"> *</span>          </td>
        </tr>
        <!--QQ-->
		<tr>
          <td align="right" id="extend_field2i">QQ          </td><td>
          <input name="extend_field2" type="text" size="25" class="inputBg"><span style="color:#FF0000"> *</span>          </td>
        </tr>
        <!--办公电话-->
		<tr>
          <td align="right" id="extend_field3i">办公电话          </td><td>
          <input name="extend_field3" type="text" size="25" class="inputBg"><span style="color:#FF0000"> *</span>          </td>
        </tr>
        <!--家庭电话-->
		<tr>
          <td align="right" id="extend_field4i">家庭电话          </td><td>
          <input name="extend_field4" type="text" size="25" class="inputBg"><span style="color:#FF0000"> *</span>          </td>
        </tr>
        <!--手机-->
		<tr>
          <td align="right" id="extend_field5i">手机          </td><td>
          <input name="extend_field5" type="text" size="25" class="inputBg"><span style="color:#FF0000"> *</span>          </td>
        </tr>
     <!--   密码问题-->
		<tr>
          <td align="right">密码提示问题</td>
          <td>
          <select name="sel_question">
	  <option value="0">请选择密码提示问题</option>
	  <option value="friend_birthday">我最好朋友的生日？</option><option value="old_address">我儿时居住地的地址？</option><option value="motto">我的座右铭是？</option><option value="favorite_movie">我最喜爱的电影？</option><option value="favorite_song">我最喜爱的歌曲？</option><option value="favorite_food">我最喜爱的食物？</option><option value="interest">我最大的爱好？</option><option value="favorite_novel">我最喜欢的小说？</option><option value="favorite_equipe">我最喜欢的运动队？</option>	  </select>
          </td>
        </tr>
      <!--  密码答案-->
        <tr>
          <td align="right" id="passwd_quesetion">密码问题答案</td>
          <td>
	  <input name="passwd_answer" type="text" size="25" class="inputBg" maxlengt="20"><span style="color:#FF0000"> *</span>          </td>
        </tr>
       <!-- 用户协议-->
		<tr>
          <td>&nbsp;</td>
          <td><label>
            <input name="agreement" type="checkbox" value="1" checked="checked">
            我已看过并接受《<a href="http://ec.com/article.php?cat_id=-1" style="color:blue" target="_blank">用户协议</a>》</label></td>
        </tr>
        <!--提交按钮-->
        <tr>
          <td>&nbsp;</td>
          <td align="left">
          <input name="act" type="hidden" value="act_register">
          <input type="hidden" name="back_act" value="">
          <input name="Submit" type="submit" value="" class="us_Submit_reg">
          </td>
        </tr>
        <!--空格-->
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <!--登录连接 忘记密码连接-->
        <tr>
          <td>&nbsp;</td>
          <td class="actionSub">
          <a href="<?=\yii\helpers\Url::toRoute(['login/index'])?>">我已有账号，我要登录</a><br>
          <a href="<?=\yii\helpers\Url::toRoute(['user/zhuce-youjian-zhaohuimima'])?>">您忘记密码了吗？</a>
          </td>
        </tr>
      </tbody>
      </table>
    </form>
  </div>
</div>
