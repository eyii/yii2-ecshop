<?php
use \yii\helpers\Url;
use \common\utils\CommonFun;
?>
<h6><span>用户注册：</span></h6>
<form action="<?=Url::toRoute('site/signup')?>" method="post" name="formUser" id="form-signup" >
    <table width="98%" border="0" cellpadding="8" cellspacing="1" bgcolor="#B0D8FF" class="table">
        <tbody>

        <?=CommonFun::getInputCsrf()?>
        <!--用户名-->
        <tr>
            <td bgcolor="#ffffff" align="right" width="25%"><strong>用户名</strong></td>
            <td bgcolor="#ffffff"><input name="SignupForm[username]" type="text" class="inputBg" id="username" onblur="is_registered(this.value);"><br>
                <span id="username_notice" style="color:#FF0000"></span></td>
        </tr>
        <!--电子邮件地址-->
        <tr>
            <td bgcolor="#ffffff" align="right"><strong>电子邮件地址</strong></td>
            <td bgcolor="#ffffff"><input name="SignupForm[email]" type="text" class="inputBg" id="email" onblur="checkEmail(this.value);"><br>
                <span id="email_notice" style="color:#FF0000"></span></td>
        </tr>
        <!--密码-->
        <tr>
            <td bgcolor="#ffffff" align="right"><strong>密码</strong></td>
            <td bgcolor="#ffffff"><input name="SignupForm[password]" class="inputBg" type="password" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)"><br>
                <span style="color:#FF0000" id="password_notice"></span></td>
        </tr>
    <!--确认密码-->
        <tr>
            <td bgcolor="#ffffff" align="right"><strong>确认密码</strong></td>
            <td bgcolor="#ffffff"><input name="confirm_password" class="inputBg" type="password" id="confirm_password" onblur="check_conform_password(this.value);"><br>
                <span style="color:#FF0000" id="conform_password_notice"></span></td>
        </tr>
        <!--注册新用户按钮-->
        <tr>
            <td colspan="2" bgcolor="#ffffff" align="center">
                <input type="submit" name="Submit" class="bnt_blue_1" value="注册新用户">
                <input name="act" type="hidden" value="signup">
            </td>
        </tr>
       </tbody>
    </table>
</form>

