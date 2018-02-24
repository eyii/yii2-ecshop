
<?php
$url=Yii::getAlias('all');
?>
<div class="usBox clearfix">
  <div class="usBox_1 f_l">
   <div class="logtitle"></div>
   <form name="formLogin" action="http://ec.com/user.php" method="post" onsubmit="return userLogin()">
        <table width="100%" border="0" align="left" cellpadding="3" cellspacing="5">
          <tbody><tr>
            <td width="15%" align="right">用户名</td>
            <td width="85%"><input name="username" type="text" size="25" class="inputBg"></td>
          </tr>
          <tr>
            <td align="right">密码</td>
            <td>
            <input name="password" type="password" size="15" class="inputBg">
            </td>
          </tr>
                    <tr>
            <td colspan="2"><input type="checkbox" value="1" name="remember" id="remember"><label for="remember">请保存我这次的登录信息。</label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="left">
            <input type="hidden" name="act" value="act_login">
            <input type="hidden" name="back_act" value="http://www.yiiec.com/index.php?r=baojiadan/index">
            <input type="submit" name="submit" value="" class="us_Submit">
            </td>
          </tr>
	  <tr><td></td><td><a href="http://ec.com/user.php?act=qpassword_name" class="f3">密码问题找回密码</a>&nbsp;&nbsp;&nbsp;<a href="http://ec.com/user.php?act=get_password" class="f3">注册邮件找回密码</a></td></tr>
      </tbody></table>
    </form>
  </div>
  <div class="usTxt">
    <strong>如果您不是会员，请注册</strong>  <br>
    <strong class="f4">友情提示：</strong><br>
        不注册为会员也可在本店购买商品<br>
            但注册之后您可以：<br>
    1. 保存您的个人资料<br>
    2. 收藏您关注的商品<br>
    3. 享受会员积分制度<br>
    4. 订阅本店商品信息  <br>
    <a href="http://ec.com/user.php?act=register"><img src="<?=$url?>/images/home/bnt_ur_reg.gif"></a>
  </div>
</div>
