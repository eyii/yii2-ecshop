<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0044)http://ec.com/admin/guest_stats.php?act=list -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 客户统计 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./kehu-tongji_files/general.css" rel="stylesheet" type="text/css">
<link href="./kehu-tongji_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./kehu-tongji_files/transport.js"></script><script type="text/javascript" src="./kehu-tongji_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span"><a href="http://ec.com/admin/guest_stats.php?flag=download">客户统计报表下载</a></span>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 客户统计 </span>
<div style="clear:both"></div>
</h1>

<div class="list-div">
  <table width="100%" cellspacing="1" cellpadding="3">
    <tbody><tr>
    <th colspan="5" align="left" style="padding-left:10px;">
    会员购买率 <span style="font:12px;color:#777;">（会员购买率 = 有订单会员数 ÷ 会员总数）</span>
    </th>
    </tr>
    <tr align="center">
      <td>会员总数</td>
      <td>有订单会员数</td>
      <td>会员订单总数</td>
      <td>会员购买率 </td>
    </tr>
    <tr align="center">
      <td>4</td>
      <td>1</td>
      <td>3</td>
      <td>25.00%</td>
    </tr>
  </tbody></table>
</div>
<div class="list-div">
  <table width="100%" cellspacing="1" cellpadding="3">
    <tbody><tr>
    <th colspan="5" align="left" style="padding-left:10px;">
    每会员平均订单数及购物额<span style="font:12px;color:#777;">（每会员订单数 = 会员订单总数 ÷ 会员总数）    （每会员购物额 = 会员购物总额 ÷ 会员总数）</span>
    </th>
    </tr>
    <tr align="center">
      <td>会员购物总额</td>
      <td>每会员订单数</td>
      <td>每会员购物额</td>
    </tr>
    <tr align="center">
      <td>￥20032.70元</td>
      <td>0.75</td>
      <td>￥5008.18元</td>
    </tr>
  </tbody></table>
</div>
<div class="list-div">
  <table width="100%" cellspacing="1" cellpadding="3">
    <tbody><tr><th colspan="5" align="left" style="padding-left:10px;">
    匿名会员平均订单额及购物总额<span style="font:12px;color:#777;">（匿名会员平均订单额 =  匿名会员购物总额 ÷ 匿名会员订单总数）</span>
    </th>
    </tr>
    <tr align="center">
      <td>匿名会员购物总额</td>
      <td>匿名会员订单总数</td>
      <td>匿名会员平均订单额</td>
    </tr>
    <tr align="center">
      <td>￥0.00元</td>
      <td>0</td>
      <td>0</td>
    </tr>
  </tbody></table>
</div>

<script type="Text/Javascript" language="JavaScript">
<!--

onload = function()
{
    // &#64138;&#53036;&#10870;鵥
    startCheckOrder();
}

//-->
</script>
<div id="footer">
共执行 5 个查询，用时 0.035002 秒，Gzip 已禁用，内存占用 1.487 MB<br>
版权所有 © 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
<script type="text/javascript" src="./kehu-tongji_files/utils.js"></script><!-- 新订单提示信息 -->
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