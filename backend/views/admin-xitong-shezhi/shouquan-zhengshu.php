<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0045)http://ec.com/admin/license.php?act=list_edit -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - license证书 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./shouquan-zhengshu_files/general.css" rel="stylesheet" type="text/css">
<link href="./shouquan-zhengshu_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./shouquan-zhengshu_files/transport.js"></script><script type="text/javascript" src="./shouquan-zhengshu_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var del_confirm = "确认删除错误的证书吗？";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - license证书 </span>
<div style="clear:both"></div>
</h1>
<div class="main-div">
<p style="padding: 0 10px">ECShop证书是您享受ECShop软件服务的唯一标识，它记录了您的网店的授权信息、购买官方服务记录、短信帐户等重要信息。您需要通过“证书下载备份”功能备份证书，并妥善保管。在您遇到商店系统需要重新安装时，可以在新安装的系统中使用“证书上传恢复”功能将之前备份的证书恢复，这样新系统就可以继续使用证书内的重要信息。</p>
</div>
<div class="main-div">
<table width="100%">
<form method="POST" action="http://ec.com/admin/license.php?act=download" name="theForm"></form>
<tbody><tr>
    <td class="label">ECshop证书下载备份</td>
    <td></td>
</tr>
<tr>
    <td class="label">授权码：</td>
    <td>1796345239</td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" value="下载证书" class="button"></td>
</tr>

</tbody></table>
</div>
<div class="main-div">
<table width="100%">
<form method="POST" action="http://ec.com/admin/license.php" enctype="multipart/form-data" name="theForm"></form>
<tbody><tr>
    <td class="label">ECshop证书上传恢复</td>
    <td></td>
</tr>
<tr>
    <td class="label">选择上传证书：</td>
    <td><input type="file" name="license" size="50"></td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" value="上传证书" class="button"><input type="reset" value=" 重置 " class="button"></td>
</tr>
<input type="hidden" name="act" value="upload">

</tbody></table>
</div>

<div class="main-div">
<table width="100%">
<form method="POST" action="http://ec.com/admin/license.php?act=del" name="theForm" onsubmit="return del_check();"></form>
<tbody><tr>
    <td class="label">错误证书删除</td>
    <td></td>
</tr>
<tr>
    <td colspan="2">当您上传了错误的ECshop证书导致证书功能失效时，请先在此处清空错误的证书，再使用证书上传恢复功能恢复正确的证书。</td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" value="删除" class="button"></td>
</tr>

</tbody></table>
</div>

<script type="text/javascript" language="JavaScript">
<!--
onload = function()
{

}

function del_check()
{
  if (confirm(del_confirm))
  {
    return true;
  }
  else
  {
    return false;
  }
}
//-->
</script>

<div id="footer">
<br>
版权所有 © 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
<script type="text/javascript" src="./shouquan-zhengshu_files/utils.js"></script><!-- 新订单提示信息 -->
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