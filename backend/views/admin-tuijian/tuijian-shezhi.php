<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0042)http://ec.com/admin/affiliate.php?act=list -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 推荐设置 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./tuijian-shezhi_files/general.css" rel="stylesheet" type="text/css">
<link href="./tuijian-shezhi_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./tuijian-shezhi_files/transport.js"></script><script type="text/javascript" src="./tuijian-shezhi_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var lang_removeconfirm = "您确定要删除这个等级么？";
var save = "保存";
var cancel = "取消";
//-->
</script>
</head>
<body style="cursor: auto;">

<h1>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 推荐设置 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="./tuijian-shezhi_files/utils.js"></script><script type="text/javascript" src="./tuijian-shezhi_files/listtable.js"></script><script type="text/javascript" src="./tuijian-shezhi_files/validator.js"></script><div class="form-div">
<form method="post" action="http://ec.com/admin/affiliate.php">
<input type="radio" name="on" value="1" checked="true" onclick="javascript:actDiv(&#39;separate&#39;,&#39;&#39;);actDiv(&#39;btnon&#39;,&#39;none&#39;);">开启<input type="radio" name="on" value="0" onclick="javascript:actDiv(&#39;separate&#39;,&#39;none&#39;);actDiv(&#39;btnon&#39;,&#39;&#39;);">关闭<br><br>
<input type="hidden" name="act" value="on">
<input type="submit" value=" 确定 " class="button" id="btnon" style="display: none;">
</form>
</div>
<div id="separate">
<div class="form-div">
<form method="post" action="http://ec.com/admin/affiliate.php">
            <table width="100%" border="0" cellspacing="0" cellpadding="4">
                <tbody><tr>
                    <td colspan="2" style="border-bottom:1px dashed #dadada;"><input type="radio" name="separate_by" value="0" checked="true" onclick="actDiv(&#39;listDiv&#39;,&#39;&#39;);">
                    推荐注册分成<input type="radio" name="separate_by" value="1" onclick="actDiv(&#39;listDiv&#39;,&#39;none&#39;);">
                        推荐订单分成</td>
                </tr>
                <tr>
                    <td width="20%" align="right" class="label"><a href="javascript:showNotice(&#39;notice1&#39;);" title="点击此处查看提示信息"><img src="./tuijian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>推荐时效： </td>
                    <td><input type="text" name="expire" maxlength="150" size="10" value="24">
                        <select name="expire_unit">
                            <option value="hour" selected="">小时</option><option value="day">天</option><option value="week">周</option>                        </select>
                        <br>
                        <span class="notice-span" style="display:block" id="notice1">访问者点击某推荐人的网址后，在此时间段内注册、下单，均认为是该推荐人的所介绍的。</span>                        
                        </td>
                </tr>
                <tr>
                    <td align="right" class="label"><a href="javascript:showNotice(&#39;notice2&#39;);" title="点击此处查看提示信息"><img src="./tuijian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>积分分成总额百分比： </td>
                    <td><input type="text" name="level_point_all" maxlength="150" size="10" value="5%">
                    <br>
                    <span class="notice-span" style="display:block" id="notice2">订单积分的此百分比部分作为分成用积分。</span></td>
                </tr>
                <tr>
                    <td align="right" class="label"><a href="javascript:showNotice(&#39;notice3&#39;);" title="点击此处查看提示信息"><img src="./tuijian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>现金分成总额百分比： </td>
                    <td><input type="text" name="level_money_all" maxlength="150" size="10" value="1%">
                    <br>
                    <span class="notice-span" style="display:block" id="notice3">订单金额的此百分比部分作为分成用金额。</span></td>
                </tr>
                <tr>
                    <td align="right" class="label"><a href="javascript:showNotice(&#39;notice4&#39;);" title="点击此处查看提示信息"><img src="./tuijian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>注册积分分成数：</td>
                    <td><input type="text" name="level_register_all" maxlength="150" size="10" value="2">
                    <br>
                    <span class="notice-span" style="display:block" id="notice4">介绍会员注册，介绍人所能获得的等级积分。</span></td>
                </tr>
                <tr>
                    <td align="right" class="label"><a href="javascript:showNotice(&#39;notice5&#39;);" title="点击此处查看提示信息"><img src="./tuijian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>等级积分分成上限：</td>
                    <td><input type="text" name="level_register_up" maxlength="150" size="10" value="60">
                    <br>
                    <span class="notice-span" style="display:block" id="notice5">等级积分到此上限则不再奖励介绍注册积分。</span></td>
                </tr><tr><td></td>
                    <td><input type="hidden" name="act" value="updata"><input type="submit" value=" 确定 " class="button"></td>
                </tr>
                
            </tbody></table>
    </form>
</div>
<div class="list-div" id="listDiv"><table cellspacing="1" cellpadding="3">
	<tbody><tr>
		<th name="levels" readonly="true" width="10%">推荐人级别</th>
		<th name="level_point" type="TextBox">积分分成百分比</th>
		<th name="level_money" type="TextBox">现金分成百分比</th>
		<th type="Button">操作</th>
	</tr>
<tr align="center">
	<td>1</td>
	<td><span onclick="listTable.edit(this, &#39;edit_point&#39;, &#39;1&#39;); return false;">60%</span></td>
	<td><span onclick="listTable.edit(this, &#39;edit_money&#39;, &#39;1&#39;); return false;">60%</span></td>
	<td><a href="javascript:confirm_redirect(lang_removeconfirm, &#39;affiliate.php?act=del&amp;id=1&#39;)"><img style="border:0px;" src="./tuijian-shezhi_files/no.gif"></a></td>
</tr>
<tr align="center">
	<td>2</td>
	<td><span onclick="listTable.edit(this, &#39;edit_point&#39;, &#39;2&#39;); return false;">30%</span></td>
	<td><span onclick="listTable.edit(this, &#39;edit_money&#39;, &#39;2&#39;); return false;">30%</span></td>
	<td><a href="javascript:confirm_redirect(lang_removeconfirm, &#39;affiliate.php?act=del&amp;id=2&#39;)"><img style="border:0px;" src="./tuijian-shezhi_files/no.gif"></a></td>
</tr>
<tr align="center">
	<td>3</td>
	<td><span onclick="listTable.edit(this, &#39;edit_point&#39;, &#39;3&#39;); return false;">7%</span></td>
	<td><span onclick="listTable.edit(this, &#39;edit_money&#39;, &#39;3&#39;); return false;">7%</span></td>
	<td><a href="javascript:confirm_redirect(lang_removeconfirm, &#39;affiliate.php?act=del&amp;id=3&#39;)"><img style="border:0px;" src="./tuijian-shezhi_files/no.gif"></a></td>
</tr>
<tr align="center">
	<td>4</td>
	<td><span onclick="listTable.edit(this, &#39;edit_point&#39;, &#39;4&#39;); return false;">3%</span></td>
	<td><span onclick="listTable.edit(this, &#39;edit_money&#39;, &#39;4&#39;); return false;">3%</span></td>
	<td><a href="javascript:confirm_redirect(lang_removeconfirm, &#39;affiliate.php?act=del&amp;id=4&#39;)"><img style="border:0px;" src="./tuijian-shezhi_files/no.gif"></a></td>
</tr>
<tr align="center"><td></td><td><input type="text" style="width: 50px;"></td><td><input type="text" style="width: 50px;"></td><td><input type="image" src="./tuijian-shezhi_files/icon_add.gif" value="保存"></td></tr></tbody></table></div>
</div>
<script type="Text/Javascript" language="JavaScript">
<!--
actDiv('btnon','none');

var all_null = '不能全为空';

onload = function()
{
  // 开始检查订单
  startCheckOrder();
  cleanWhitespace(document.getElementById("listDiv"));
  if (document.getElementById("listDiv").childNodes[0].rows.length<6)
  {
    listTable.addRow(check);
  }
  
}
function check(frm)
{
  if (frm['level_point'].value == "" && frm['level_money'].value == "")
  {
     frm['level_point'].focus();
     alert(all_null);
     return false;  
  }
  
  return true;
}
function actDiv(divname, flag)
{
    document.getElementById(divname).style.display = flag;
}

//-->
</script>
<div id="footer">
共执行 1 个查询，用时 0.008000 秒，Gzip 已禁用，内存占用 1.055 MB<br>
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