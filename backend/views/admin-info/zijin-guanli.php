<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0052)http://ec.com/admin/user_account_manage.php?act=list -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 资金管理 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./zijin-guanli_files/general.css" rel="stylesheet" type="text/css">
<link href="./zijin-guanli_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./zijin-guanli_files/transport.js"></script><script type="text/javascript" src="./zijin-guanli_files/common.js"></script><script language="JavaScript">
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
<body style="cursor: auto;">

<h1>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 资金管理 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="./zijin-guanli_files/utils.js"></script><script type="text/javascript" src="./zijin-guanli_files/listtable.js"></script><script type="text/javascript" src="./zijin-guanli_files/calendar.php"></script>
<link href="./zijin-guanli_files/calendar.css" rel="stylesheet" type="text/css">
<div class="form-div">
  <form name="TimeInterval" action="http://ec.com/admin/user_account_manage.php" method="post" style="margin:0px">
    开始日期&nbsp;
    <input name="start_date" type="text" id="start_date" size="15" value="2017-03-11" readonly="readonly"><input name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar(&#39;start_date&#39;, &#39;%Y-%m-%d&#39;, false, false, &#39;selbtn1&#39;);" value="选择" class="button">&nbsp;&nbsp;
    结束日期&nbsp;
    <input name="end_date" type="text" id="end_date" size="15" value="2017-03-18" readonly="readonly"><input name="selbtn2" type="button" id="selbtn2" onclick="return showCalendar(&#39;end_date&#39;, &#39;%Y-%m-%d&#39;, false, false, &#39;selbtn2&#39;);" value="选择" class="button">&nbsp;&nbsp;
    <input type="submit" name="submit" value="查询" class="button">
  </form>
</div>
<!-- start charger  -->
<div class="list-div">
<table cellspacing="1" cellpadding="3">
  <tbody><tr>
    <th colspan="4" class="group-title">会员账户信息</th>
  </tr>
  <tr>
    <td width="20%"><a href="http://ec.com/admin/user_account.php?act=list&amp;process_type=0&amp;ispaid=1&amp;start_date=2017-03-11&amp;end_date=2017-03-18">用户充值总额</a></td>
    <td width="30%"><strong>￥0.00元</strong></td>
    <td width="20%"><a href="http://ec.com/admin/user_account.php?act=list&amp;process_type=1&amp;ispaid=1&amp;start_date=2017-03-11&amp;end_date=2017-03-18">提现金额</a></td>
    <td width="30%"><strong>￥0.00元</strong></td>
  </tr>
  <tr>
    <td><a href="http://ec.com/admin/users.php?act=list">用户可用资金</a></td>
    <td><strong>￥0.00元</strong></td>
    <td><a href="http://ec.com/admin/users.php?act=list">用户冻结资金</a></td>
    <td><strong style="color: red">￥0.00元</strong></td>
  </tr>
</tbody></table>
</div>
<!-- end charge -->
<br>
<!-- start -->
<div class="list-div">
<table cellspacing="1" cellpadding="3">
  <tbody><tr>
    <th colspan="4" class="group-title">余额使用信息</th>
  </tr>
  <tr>
    <td width="20%"><a href="http://ec.com/admin/user_account_manage.php?act=surplus&amp;start_date=2017-03-11&amp;end_date=2017-03-18">交易使用余额</a></td>
    <td width="30%"><strong>￥0.00元</strong></td>
    <td width="20%"><a href="http://ec.com/admin/user_account_manage.php?act=surplus&amp;start_date=2017-03-11&amp;end_date=2017-03-18">积分使用余额</a></td>
    <td width="30%"><strong>￥0.00元</strong></td>
  </tr>
  <tr>
    <td><a href="http://ec.com/admin/goods.php?act=list&amp;intro_type=is_new"></a></td>
    <td><strong></strong></td>
    <td><a href="http://ec.com/admin/goods.php?act=list&amp;intro_type=is_best"></a></td>
    <td><strong></strong></td>
  </tr>
  <tr>
    <td><a href="http://ec.com/admin/goods.php?act=list&amp;intro_type=is_hot"></a></td>
    <td><strong></strong></td>
    <td><a href="http://ec.com/admin/goods.php?act=list&amp;intro_type=is_promote"></a></td>
    <td><strong></strong></td>
  </tr>
</tbody></table>
</div>
<!-- end  -->
<br>

<script type="Text/Javascript" language="JavaScript">
<!--
onload = function()
{
  /* 检查订单 */
  startCheckOrder();
}
//-->
</script>

<div id="footer">
共执行 5 个查询，用时 0.035002 秒，Gzip 已禁用，内存占用 1.406 MB<br>
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