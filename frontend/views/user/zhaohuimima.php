
<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="http://ec.com/user.php" method="post" name="getPassword" onsubmit="return submitPwdInfo();">
        <br>
        <table width="70%" border="0" align="center">
          <tbody><tr>
            <td colspan="2" align="center"><strong>请输入您注册的用户名和注册时填写的电子邮件地址。</strong></td>
          </tr>
          <tr>
            <td width="29%" align="right">用户名</td>
            <td width="61%"><input name="user_name" type="text" size="30" class="inputBg"></td>
          </tr>
          <tr>
            <td align="right">电子邮件地址</td>
            <td><input name="email" type="text" size="30" class="inputBg"></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="hidden" name="act" value="send_pwd_email">
              <input type="submit" name="submit" value="提 交" class="bnt_blue" style="border:none;">
              <input name="button" type="button" onclick="history.back()" value="返回上一页" style="border:none;" class="bnt_blue_1">
	    </td>
          </tr>
        </tbody></table>
        <br>
      </form>
  </div>
</div>
