<?php
use \yii\helpers\Url;
use \common\utils\CommonFun;
?>

<h6><span>用户登录：</span></h6>
<form action="<?=Url::toRoute('site/login')?>" method="post" name="loginForm" id="loginForm" >
    <table width="90%" border="0" cellpadding="8" cellspacing="1" bgcolor="#B0D8FF" class="table">
        <tbody>
        <!--csrf-->
        <?=CommonFun::getInputCsrf()?>
        <!--用户名-->
        <tr>
            <td class="white"><div align="right"><strong>用户名</strong></div></td>
            <td class="white"><input name="LoginForm[username]" type="text" class="inputBg" id="username"></td>
        </tr>
        <!--密码-->
        <tr>
            <td class="white"><div align="right"><strong>密码</strong></div></td>
            <td class="white"><input name="LoginForm[password]" class="inputBg" type="password"></td>
        </tr>
        <!--记住我-->
        <tr>
            <td colspan="2" class="white">
                <input type="checkbox" value="1" name="LoginForm[rememberMe]" id="loginform-rememberme" checked="checked">
                <label for="remember">请保存我这次的登录信息。</label>
            </td>
        </tr>
        <!--忘记密码-->
        <tr>
            <td class="white" colspan="2" align="center"><a href="<?=Url::toRoute('user/mima-wenti')?>" class="f6">密码问题找回密码</a>&nbsp;&nbsp;&nbsp;
                <a href="<?=Url::toRoute(['/user/zhuce-youjian-zhaohuimima'])?>" class="f6">注册邮件找回密码</a></td>
        </tr>
        <!--不登陆直接购买-->
        <tr>
            <td class="white" colspan="2">
                <div align="center">
                    <input type="submit" class="bnt_blue" name="login" value="登录">
                    <input type="button" class="bnt_blue_2" value="不打算登录，直接购买" onclick="">
                    <input name="act" type="hidden" value="signin">
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</form>
<style>
    .white{
        background-color: #ffffff;
    }
</style>