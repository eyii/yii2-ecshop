<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0047)http://ec.com/admin/sms.php?act=display_send_ui -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 注册或启用短信账号 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./fasong-duanxin_files/general.css" rel="stylesheet" type="text/css">
<link href="./fasong-duanxin_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./fasong-duanxin_files/transport.js"></script><script type="text/javascript" src="./fasong-duanxin_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var password_empty_error = "密码不能为空。";
var username_empty_error = "用户名不能为空。";
var username_format_error = "用户名格式不对。";
var domain_empty_error = "域名不能为空。";
var domain_format_error = "域名格式不对。";
var send_empty_error = "发送手机号与发送等级至少填写一项！";
var phone_empty_error = "请填写手机号。";
var phone_format_error = "手机号码格式不对。";
var msg_empty_error = "请填写消息内容。";
var send_date_format_error = "定时发送时间格式不对。";
var start_date_format_error = "开始日期格式不对。";
var end_date_format_error = "结束日期格式不对。";
var money_empty_error = "请输入您要充值的金额。";
var money_format_error = "金额格式不对。";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 注册或启用短信账号 </span>
<div style="clear:both"></div>
</h1>

<div id="main-div">
<div class="main-div">
<!--<form name="sms-register-form" action="sms.php?act=register" method="POST" onsubmit="return validate_register();">-->
<table cellspacing="1" cellpadding="3" width="100%">
  <tbody><tr>
    <th colspan="2">请在商店设置-&gt;短信设置，先注册短信服务并正确配置短信服务！</th>
  </tr>
  <!--<tr>
    <td class="label">电子邮箱:</td>
    <td><input type="text" name="email" maxlength="60" size="20" value="" /><span class="require-field">*</span></td>
  </tr>
  <tr>
    <td class="label">登录密码:</td>
    <td><input type="password" name="password" maxlength="20" size="20" value="" /><span class="require-field">*</span></td>
  </tr>
  <tr>
    <td class="label">网店域名:</td>
    <td><input type="text" name="domain" maxlength="60" size="40" value="http://ec.com" /><span class="require-field">*</span></td>
  </tr>
  <tr>
    <td class="label">接收手机号码:</td>
    <td><input type="text" name="phone" maxlength="60" size="20" value="" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="submit" name="submit" value=" 确定 " class="button" />
      <input type="reset" value=" 重置 " class="button" />
    </td>
  </tr>-->
</tbody></table>
<!--</form>-->
</div>
<!--<div class="main-div">
<form name="sms-enable-form" action="sms.php?act=enable" method="POST" onsubmit="return validate_enable();">
<table cellspacing="1" cellpadding="3" width="100%">
  <tr>
    <th colspan="2">启用已有账号</th>
  </tr>
  <tr>
    <td class="label">电子邮箱:</td>
    <td><input type="text" name="email" maxlength="60" size="20" value="" /><span class="require-field">*</span></td>
  </tr>
  <tr>
    <td class="label">登录密码:</td>
    <td><input type="password" name="password" maxlength="20" size="20" value="" /><span class="require-field">*</span></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="submit" name="submit" value=" 确定 " class="button" />
      <input type="reset" value=" 重置 " class="button" />
    </td>
  </tr>
</table>
</form>
</div>-->
</div>

<!--<script type="text/javascript" language="JavaScript">
<!--

function validate(formName) {
  var f = document[formName],
      email = f.email.value,
      password = f.password.value;

  var reEmpty = /^\s*$/,
      reEmailFormat = /^[^@]+@.+$/,
      errorStr = '';

  if (reEmpty.test(email)) {
    errorStr += username_empty_error + "\n";
  }

  if (!reEmailFormat.test(email)) {
    errorStr += username_format_error + "\n";
  }

  if (reEmpty.test(password)) {
    errorStr +=  password_empty_error + "\n";
  }

  return errorStr;
}

function validate_register() {
  var errorStr = validate("sms-register-form"),
    domain = document["sms-register-form"].domain.value,
    reEmpty = /^\s*$/,
    reDomainFormat = /^(?:[^.]+\.)*\w+\/?$/;

  if (reEmpty.test(domain)) {
    errorStr += domain_empty_error + "\n";
  }
  if (!reDomainFormat.test(domain)) {
    errorStr += domain_format_error + "\n";
  }

  if (errorStr === '') {
    return true;
  } else {
    alert(errorStr);
    return false;
  }
}

function validate_enable() {
  var errorStr = validate("sms-enable-form");

  if (errorStr === '') {
    return true;
  } else {
    alert(errorStr);
    return false;
  }
}

//-->
--&gt;
<div id="footer">
共执行 3 个查询，用时 0.008000 秒，Gzip 已禁用，内存占用 1.197 MB<br>
版权所有 © 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
<script type="text/javascript" src="./fasong-duanxin_files/utils.js"></script><!-- 新订单提示信息 -->
<div id="popMsg">
  <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#cfdef4" border="0">
  <tbody><tr>
    <td style="color: #0f2c8c" width="30" height="24"></td>
    <td style="font-weight: normal; color: #1f336b; padding-top: 4px;padding-left: 4px" valign="center" width="100%"> 新订单通知</td>
    <td style="padding-top: 2px;padding-right:2px" valign="center" align="right" width="19"><span title="关闭" style="cursor: hand;cursor:pointer;color:red;font-size:12px;font-weight:bold;margin-right:4px;" onclick="Message.close()">×</span><!-- <img title=关闭 style="cursor: hand" onclick=closediv() hspace=3 src="msgclose.jpg"> --></td>
  </tr>
  <tr>
    <td style="padding-right: 1px; padding-bottom: 1px" colspan="3" height="70">
    <div id="popMsgContent">
      <p>您有 <strong style="color:#ff0000" id="spanNewOrder">1</strong> 个新订单以及       <strong style="color:#ff0000" id="spanNewPaid">0</strong> 个新付款的订单</p>
      <p align="center" style="word-break:break-all"><a href="http://ec.com/admin/order.php?act=list"><span style="color:#ff0000">点击查看新订单</span></a></p>
    </div>
    </td>
  </tr>
  </tbody></table>
</div>

<!--
<embed src="images/online.wav" width="0" height="0" autostart="false" name="msgBeep" id="msgBeep" enablejavascript="true"/>
-->
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="msgBeep" width="1" height="1">
  <param name="movie" value="images/online.swf">
  <param name="quality" value="high">
  <embed src="images/online.swf" name="msgBeep" id="msgBeep" quality="high" width="0" height="0" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?p1_prod_version=shockwaveflash">
  
</object>

<script language="JavaScript">
document.onmousemove=function(e)
{
  var obj = Utils.srcElement(e);
  if (typeof(obj.onclick) == 'function' && obj.onclick.toString().indexOf('listTable.edit') != -1)
  {
    obj.title = '点击修改内容';
    obj.style.cssText = 'background: #278296;';
    obj.onmouseout = function(e)
    {
      this.style.cssText = '';
    }
  }
  else if (typeof(obj.href) != 'undefined' && obj.href.indexOf('listTable.sort') != -1)
  {
    obj.title = '点击对列表排序';
  }
}
<!--


var MyTodolist;
function showTodoList(adminid)
{
  if(!MyTodolist)
  {
    var global = $import("../js/global.js","js");
    global.onload = global.onreadystatechange= function()
    {
      if(this.readyState && this.readyState=="loading")return;
      var md5 = $import("js/md5.js","js");
      md5.onload = md5.onreadystatechange= function()
      {
        if(this.readyState && this.readyState=="loading")return;
        var todolist = $import("js/todolist.js","js");
        todolist.onload = todolist.onreadystatechange = function()
        {
          if(this.readyState && this.readyState=="loading")return;
          MyTodolist = new Todolist();
          MyTodolist.show();
        }
      }
    }
  }
  else
  {
    if(MyTodolist.visibility)
    {
      MyTodolist.hide();
    }
    else
    {
      MyTodolist.show();
    }
  }
}

if (Browser.isIE)
{
  onscroll = function()
  {
    //document.getElementById('calculator').style.top = document.body.scrollTop;
    document.getElementById('popMsg').style.top = (document.body.scrollTop + document.body.clientHeight - document.getElementById('popMsg').offsetHeight) + "px";
  }
}

if (document.getElementById("listDiv"))
{
  document.getElementById("listDiv").onmouseover = function(e)
  {
    obj = Utils.srcElement(e);

    if (obj)
    {
      if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
      else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
      else return;

      for (i = 0; i < row.cells.length; i++)
      {
        if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#F4FAFB';
      }
    }

  }

  document.getElementById("listDiv").onmouseout = function(e)
  {
    obj = Utils.srcElement(e);

    if (obj)
    {
      if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
      else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
      else return;

      for (i = 0; i < row.cells.length; i++)
      {
          if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#FFF';
      }
    }
  }

  document.getElementById("listDiv").onclick = function(e)
  {
    var obj = Utils.srcElement(e);

    if (obj.tagName == "INPUT" && obj.type == "checkbox")
    {
      if (!document.forms['listForm'])
      {
        return;
      }
      var nodes = document.forms['listForm'].elements;
      var checked = false;

      for (i = 0; i < nodes.length; i++)
      {
        if (nodes[i].checked)
        {
           checked = true;
           break;
         }
      }

      if(document.getElementById("btnSubmit"))
      {
        document.getElementById("btnSubmit").disabled = !checked;
      }
      for (i = 1; i <= 10; i++)
      {
        if (document.getElementById("btnSubmit" + i))
        {
          document.getElementById("btnSubmit" + i).disabled = !checked;
        }
      }
    }
  }

}

//-->
</script>

</body></html>