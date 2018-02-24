

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>天涯社区账号html5手机登陆界面源代码模板【http://www.lanrenmb.com/zt/denglu/】</title>
    <meta name="description" content="天涯社区，全球华人的网上家园。" />
    <meta name="keywords" content="天涯社区，帐号，账号，注册，登录，忘记密码，找回密码，Account，Sign in，登陆，二维码登录，下次自动登录，" />
    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Set a shorter title for iOS6 devices when saved to home screen -->
    <meta name="apple-mobile-web-app-title" content="tianya touch">

    <!-- Set Apple icons for when prototype is saved to home screen -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://static.tianyaui.com/global/m/touch/images/icons/apple-touch-icon-114x114.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://static.tianyaui.com/global/m/touch/images/icons/apple-touch-icon-72x72.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="https://static.tianyaui.com/global/m/touch/images/icons/apple-touch-icon-57x57.png"/>

    <!--<link rel="icon" type="image/x-icon" href="/favicon.ico" />-->

    <!-- Include the CSS -->
    <link rel="stylesheet" href="css/touch-global.css"/>
    <link rel="stylesheet" href="css/main_m_68d4b19.css"/>

</head>
<body style="background:#f8f8f8;">
<!-- header -->
<header class="header-static clearfix" >
    <div class="left">
        <ul class="list-nav">
            <li><a href="javascript:history.go(-1);"><i class="icon-chevron-left"></i></a></li>
        </ul>
    </div>
    <div class="center">
        登录
    </div>
    <div class="right">
        <ul class="list-set">
            <li class="item item-user"><a href="/m/register/default.jsp?fowardURL=http%3A%2F%2Fwww.tianya.cn%2Fm%2F">注册</a></li>
        </ul>
    </div>
</header>

<!-- content -->
<div class="content" id="page_login">
    <form method="post" action="/login">
        <ul class="input-wrapper">
            <li class="i-username">
                <input type="text" name="vwriter" id="user_name" placeholder="请输入天涯用户名/手机号" value="" />
            </li>
            <li class="i-password">
                <input type="password" name="vpassword" id="password" placeholder="请输入密码 懒人模板制作" />
            </li>

        </ul>
        <div class="form-control">
            <button class="btn-login" type="submit">登 录</button>
        </div>
        <div class="form-control clearfix">
            <label class="left auto-login"><input type="checkbox" name="rmflag" value="1" checked />
                <span class="rmflag-ico"></span>下次自动登录
            </label>
            <a class="right" href="http://passport.tianya.cn/fp/index_m.jsp?fowardURL=http%3A%2F%2Fwww.tianya.cn%2Fm%2F">忘记密码</a>
        </div>
        <div class="form-control align-center sms-login">
            <a href="http://passport.tianya.cn/identityin/index_m.jsp?fowardURL=http%3A%2F%2Fwww.tianya.cn%2Fm%2F">短信快捷登录</a>
        </div>

        <input type="hidden" id="__sid" name="__sid" value="1#2#1.0#3046c6b5-8757-4935-b278-8f66f11de68b" />
        <input type="hidden" id="fowardURL" name="fowardURL"  value='http://www.tianya.cn/m/' />
        <input type="hidden" id="returnURL" name="returnURL"  value="" />
        <input type="hidden" id="from" name="from"	value="" />
        <input type="hidden" id="login_m" name="login_m"  value="login_m" />
    </form>
    <div class="other-login-ways">
        <p class="tit"><span>或用其它方式快速登录</span></p>
        <div class="cont">
            <a class="way-weixin" href="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx160fa51254add6be&redirect_uri=https%3A%2F%2Fpassport.tianya.cn%2Flogin%2Fweixin.do%3Fclient%3Dtouch%26fowardURL%3Dhttp%253A%252F%252Fwww.tianya.cn%252Fm%252F&response_type=code&scope=snsapi_login#wechat_redirect" title="微信帐号登录">微信登录</a>
            <a class="way-qq" href="https://graph.qq.com/oauth2.0/authorize?client_id=100253980&response_type=code&redirect_uri=https%3A%2F%2Fpassport.tianya.cn%2Flogin%2Fqq.do%3Fclient%3Dtouch%26fowardURL%3Dhttp%253A%252F%252Fwww.tianya.cn%252Fm%252F" title="QQ帐号登录">QQ登录</a>
            <a class="way-weibo" href="https://api.weibo.com/oauth2/authorize?client_id=482040646&response_type=code&with_offical_account=1&redirect_uri=https%3A%2F%2Fpassport.tianya.cn%2Flogin%2Fsinaweibo.do%3Fclient%3Dtouch%26fowardURL%3Dhttp%253A%252F%252Fwww.tianya.cn%252Fm%252F" title="新浪微博帐号登录">微博登录</a>
        </div>
    </div>
</div>

<!-- Include the JS -->
<script src="https://static.tianyaui.com/global/ty2.0/TY_m_2.0.js"></script>
<script src="https://static.tianyaui.com/global/m/member/static/js/member_m_966fe78.js"></script>
<script type="text/javascript" charset="utf-8" src="//hm.baidu.com/h.js?bc5755e0609123f78d0e816bf7dee255"></script>


<script type="text/javascript">
    function getCookie(name) {
        var cookieValue = null;
        if (document.cookie && document.cookie != '') {
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = cookies[i].replace(/(^\s*)|(\s*$)/g,   "");
                // Does this cookie string begin with the name we want?
                if (cookie.substring(0, name.length + 1) == (name + '=')) {
                    cookieValue = unescape(cookie.substring(name.length + 1));
                    break;
                }
            }
        }
        return cookieValue;
    }
    function getPartCookie(/*String*/name,/*String*/partName){
        var cookie = getCookie(name);
        if(cookie){
            var pairs = cookie.split("&");
            for(var i = 0; i < pairs.length; i++){
                var pair = pairs[i].split("=");
                if(pair[0] == partName){
                    var value = pair[1];
                    value = unescape(value);
                    return value;
                }
            }
        }
        return null;
    }
    function getUserName(){
        var user = getCookie("user");
        if(user==null){
            return null;
        }
        else{
            var userName = getPartCookie("user","w");
            return userName;
        }
    }
    var nameEl = document.getElementById("user_name"),
        pwdEl = document.getElementById("password"),
        name = getUserName();
    if(!name || name === "null"){
        if(nameEl.value == ""){
            nameEl.focus();
        }
    }else{
        if(nameEl.value == ""){
            nameEl.value = name;
            pwdEl.focus();
        }
    }
    //微信入口
    if (/micromessenger/.test(navigator.userAgent.toLowerCase())) {
        $(".way-weixin").css("display", "inline-block");
    }
    //涯门机器人
    TY.loader("TY.util.userActionRl", function () {});
</script>
<script type="text/javascript">
    /*创建于2016-06-14*/

</script>
<script src="http://cpro.baidustatic.com/cpro/ui/cm.js" type="text/javascript"></script>
</body>
</html>