<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0047)http://ec.com/admin/captcha_manage.php?act=main -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 验证码设置 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./yanzhengma-shezhi_files/general.css" rel="stylesheet" type="text/css">
<link href="./yanzhengma-shezhi_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./yanzhengma-shezhi_files/transport.js"></script><script type="text/javascript" src="./yanzhengma-shezhi_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var width_number = "图片宽度请输入数字!";
var proper_width = "图片宽度要在40到145之间!";
var height_number = "图片高度请输入数字!";
var proper_height = "图片高度要在15到50之间!";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 验证码设置 </span>
<div style="clear:both"></div>
</h1>

<div class="list-div">
<form method="post" action="http://ec.com/admin/captcha_manage.php" name="theForm" onsubmit="return validate()">
<table cellpadding="3" cellspacing="1">
<tbody><tr>
  <th colspan="2">验证码设置</th>
</tr>
<tr>
  <td width="60%">
  <strong>启用验证码</strong><br>
  图片验证码可以避免恶意批量评论或提交信息，推荐打开验证码功能。注意: 启用验证码会使得部分操作变得繁琐，建议仅在必需时打开<br>
  <img src="./yanzhengma-shezhi_files/captcha.php" alt="captcha" style="vertical-align: middle;cursor: pointer;" onclick="this.src=&#39;../captcha.php?&#39;+Math.random()">
  </td>
  <td>
  <input type="checkbox" name="captcha_register" value="1">新用户注册<br>
  <input type="checkbox" name="captcha_login" value="2">用户登录<br>
  <input type="checkbox" name="captcha_comment" value="4" checked="checked">发表评论<br>
  <input type="checkbox" name="captcha_admin" value="8">后台管理员登录<br>
  <input type="checkbox" name="captcha_message" value="32" checked="checked">留言板留言<br>
  </td>
</tr>
<tr>
  <td>
  <strong>登录失败时显示验证码</strong><br>
  选择“是”将在用户登录失败 3 次后才显示验证码，选择“否”将始终在登录时显示验证码。注意: 只有在启用了用户登录验证码时本设置才有效  </td>
  <td><input type="radio" name="captcha_login_fail" value="32">是<input type="radio" name="captcha_login_fail" value="0" checked="checked">否</td>
</tr>
<tr>
  <td>
  <strong>验证码图片宽度</strong><br>
  验证码图片的宽度，范围在 40～145 之间  </td>
  <td><input type="text" name="captcha_width" value="100"></td>
</tr>
<tr>
  <td>
  <strong>验证码图片高度</strong><br>
  验证码图片的高度，范围在 15～50 之间  </td>
  <td><input type="text" name="captcha_height" value="20"></td>
</tr>
<tr>
  <td colspan="2" align="center"><input type="hidden" name="act" value="save_config"><input type="submit" value="保存设置" class="button"></td>
</tr>
</tbody></table>
</form>
</div>
<script type="text/javascript" src="./yanzhengma-shezhi_files/utils.js"></script>
<script type="text/javascript" language="JavaScript">
<!--
onload = function() {startCheckOrder();}

function validate()
{
  var width = document.forms["theForm"].elements["captcha_width"].value;
  var height = document.forms["theForm"].elements["captcha_height"].value;
  if(!Utils.isNumber(width))
  {
    alert(width_number);
    return false;
  }

  if(parseInt(width) > 145 || parseInt(width) < 40)
  {
    alert(proper_width);
    return false;
  }

  if(!Utils.isNumber(height))
  {
    alert(height_number);
    return false;
  }

  if(parseInt(height) > 50 || parseInt(height) < 15)
  {
    alert(proper_height);
    return false;
  }

  return true;
}
//-->
</script>

<div id="footer">
共执行 1 个查询，用时 0.005001 秒，Gzip 已禁用，内存占用 1.101 MB<br>
版权所有 © 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
<!-- 新订单提示信息 -->
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