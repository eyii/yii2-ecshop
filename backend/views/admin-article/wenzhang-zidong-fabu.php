<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0045)http://ec.com/admin/article_auto.php?act=list -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 文章自动发布 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./wenzhang-zidong-fabu_files/general.css" rel="stylesheet" type="text/css">
<link href="./wenzhang-zidong-fabu_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./wenzhang-zidong-fabu_files/transport.js"></script><script type="text/javascript" src="./wenzhang-zidong-fabu_files/common.js"></script><script language="JavaScript">
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
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 文章自动发布 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="./wenzhang-zidong-fabu_files/utils.js"></script><script type="text/javascript" src="./wenzhang-zidong-fabu_files/listtable.js"></script><script type="text/javascript" src="./wenzhang-zidong-fabu_files/calendar.php"></script>
<script>
var thisfile = 'article_auto.php';
var deleteck = '确定删除此文章的自动发布/取消发布处理么?此操作不会影响文章本身';
var deleteid = '撤销';
</script>
<link href="./wenzhang-zidong-fabu_files/calendar.css" rel="stylesheet" type="text/css">
<div class="form-div">
<ul style="padding:0; margin: 0; list-style-type:none; color: #CC0000;">
  <li style="border: 1px solid #CC0000; background: #FFFFCC; padding: 10px; margin-bottom: 5px;">您需要到系统设置-&gt;计划任务中开启该功能后才能使用。</li>
</ul>
<form action="http://ec.com/admin/article_auto.php" method="post">
  文章名称  <input type="hidden" name="act" value="list">
  <input name="goods_name" type="text" size="25"> <input type="submit" value=" 搜索 " class="button">
</form>
</div>
<form method="post" action="" name="listForm">
<div class="list-div" id="listDiv">
  
<table cellspacing="1" cellpadding="3">
<tbody><tr>
  <th width="5%"><input onclick="listTable.selectAll(this, &quot;checkboxes&quot;)" type="checkbox">编号</th>
  <th>文章名称</th>
  <th width="25%">发布时间</th>
  <th width="25%">取消时间</th>
  <th width="10%">操作</th>
</tr>
<tr>
  <td><input name="checkboxes[]" type="checkbox" value="1">1</td>
  <td>免责条款</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_starttime&#39;, &#39;1&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_endtime&#39;, &#39;1&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
  </td>
  <td align="center"><span id="del1">
      -
  </span>
  </td>
</tr>
    <tr>
  <td style="background-color: rgb(255, 255, 255);"><input name="checkboxes[]" type="checkbox" value="2">2</td>
  <td style="background-color: rgb(255, 255, 255);">隐私保护</td>
  <td align="center" style="background-color: rgb(255, 255, 255);">
  <span onclick="listTable.edit(this, &#39;edit_starttime&#39;, &#39;2&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
</td>
  <td align="center" style="background-color: rgb(255, 255, 255);">
  <span onclick="listTable.edit(this, &#39;edit_endtime&#39;, &#39;2&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
  </td>
  <td align="center" style="background-color: rgb(255, 255, 255);"><span id="del2">
      -
  </span>
  </td>
</tr>
    <tr>
  <td style="background-color: rgb(255, 255, 255);"><input name="checkboxes[]" type="checkbox" value="3">3</td>
  <td style="background-color: rgb(255, 255, 255);">咨询热点</td>
  <td align="center" style="background-color: rgb(255, 255, 255);">
  <span onclick="listTable.edit(this, &#39;edit_starttime&#39;, &#39;3&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
</td>
  <td align="center" style="background-color: rgb(255, 255, 255);">
  <span onclick="listTable.edit(this, &#39;edit_endtime&#39;, &#39;3&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
  </td>
  <td align="center" style="background-color: rgb(255, 255, 255);"><span id="del3">
      -
  </span>
  </td>
</tr>
    <tr>
  <td><input name="checkboxes[]" type="checkbox" value="4">4</td>
  <td>联系我们</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_starttime&#39;, &#39;4&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_endtime&#39;, &#39;4&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
  </td>
  <td align="center"><span id="del4">
      -
  </span>
  </td>
</tr>
    <tr>
  <td><input name="checkboxes[]" type="checkbox" value="5">5</td>
  <td>公司简介</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_starttime&#39;, &#39;5&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_endtime&#39;, &#39;5&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
  </td>
  <td align="center"><span id="del5">
      -
  </span>
  </td>
</tr>
    <tr>
  <td><input name="checkboxes[]" type="checkbox" value="6">6</td>
  <td>用户协议</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_starttime&#39;, &#39;6&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_endtime&#39;, &#39;6&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
  </td>
  <td align="center"><span id="del6">
      -
  </span>
  </td>
</tr>
    <tr>
  <td><input name="checkboxes[]" type="checkbox" value="35">35</td>
  <td>“沃”的世界我做主</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_starttime&#39;, &#39;35&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_endtime&#39;, &#39;35&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
  </td>
  <td align="center"><span id="del35">
      -
  </span>
  </td>
</tr>
    <tr>
  <td><input name="checkboxes[]" type="checkbox" value="34">34</td>
  <td>3G知识普及</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_starttime&#39;, &#39;34&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_endtime&#39;, &#39;34&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
  </td>
  <td align="center"><span id="del34">
      -
  </span>
  </td>
</tr>
    <tr>
  <td><input name="checkboxes[]" type="checkbox" value="33">33</td>
  <td>三星SGHU308说明书下载</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_starttime&#39;, &#39;33&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_endtime&#39;, &#39;33&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
  </td>
  <td align="center"><span id="del33">
      -
  </span>
  </td>
</tr>
    <tr>
  <td><input name="checkboxes[]" type="checkbox" value="32">32</td>
  <td>手机游戏下载</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_starttime&#39;, &#39;32&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_endtime&#39;, &#39;32&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
  </td>
  <td align="center"><span id="del32">
      -
  </span>
  </td>
</tr>
    <tr>
  <td><input name="checkboxes[]" type="checkbox" value="31">31</td>
  <td>诺基亚6681手机广告欣赏</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_starttime&#39;, &#39;31&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_endtime&#39;, &#39;31&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
  </td>
  <td align="center"><span id="del31">
      -
  </span>
  </td>
</tr>
    <tr>
  <td><input name="checkboxes[]" type="checkbox" value="30">30</td>
  <td>促销诺基亚N96</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_starttime&#39;, &#39;30&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_endtime&#39;, &#39;30&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
  </td>
  <td align="center"><span id="del30">
      -
  </span>
  </td>
</tr>
    <tr>
  <td><input name="checkboxes[]" type="checkbox" value="29">29</td>
  <td>诺基亚5320 促销</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_starttime&#39;, &#39;29&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_endtime&#39;, &#39;29&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
  </td>
  <td align="center"><span id="del29">
      -
  </span>
  </td>
</tr>
    <tr>
  <td><input name="checkboxes[]" type="checkbox" value="28">28</td>
  <td>飞利浦9@9促销</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_starttime&#39;, &#39;28&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_endtime&#39;, &#39;28&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
  </td>
  <td align="center"><span id="del28">
      -
  </span>
  </td>
</tr>
    <tr>
  <td><input name="checkboxes[]" type="checkbox" value="27">27</td>
  <td>800万像素超强拍照机 LG Viewty Smart再曝光</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_starttime&#39;, &#39;27&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
</td>
  <td align="center">
  <span onclick="listTable.edit(this, &#39;edit_endtime&#39;, &#39;27&#39;);showCalendar(this.firstChild, &#39;%Y-%m-%d&#39;, false, false, this.firstChild)"><!--  -->0000-00-00<!--  --></span>
  </td>
  <td align="center"><span id="del27">
      -
  </span>
  </td>
</tr>
    </tbody></table>
<table id="page-table" cellspacing="0">
  <tbody><tr>
    <td>
      <input type="hidden" name="act" value="">
      <input name="date" type="text" id="date" size="10" value="0000-00-00" readonly="readonly"><input name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar(&#39;date&#39;, &#39;%Y-%m-%d&#39;, false, false, &#39;selbtn1&#39;);" value="选择" class="button">
      <input type="button" id="btnSubmit1" value="批量发布" disabled="true" class="button" onclick="return validate(&#39;batch_start&#39;)">
      <input type="button" id="btnSubmit2" value="批量取消发布" disabled="true" class="button" onclick="return validate(&#39;batch_end&#39;)">
    </td>
    <td align="right" nowrap="true">
          <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
            <div id="turn-page">
        总计  <span id="totalRecords">35</span>
        个记录分为 <span id="totalPages">3</span>
        页当前第 <span id="pageCurrent">1</span>
        页，每页 <input type="text" size="3" id="pageSize" value="15" onkeypress="return listTable.changePageSize(event)">
        <span id="page-link">
          <a href="javascript:listTable.gotoPageFirst()">第一页</a>
          <a href="javascript:listTable.gotoPagePrev()">上一页</a>
          <a href="javascript:listTable.gotoPageNext()">下一页</a>
          <a href="javascript:listTable.gotoPageLast()">最末页</a>
          <select id="gotoPage" onchange="listTable.gotoPage(this.value)">
            <option value="1">1</option><option value="2">2</option><option value="3">3</option>          </select>
        </span>
      </div>
    </td>
  </tr>
</tbody></table>

</div></form>
<script type="Text/Javascript" language="JavaScript">
listTable.recordCount = 35;
listTable.pageCount = 3;
listTable.filter.record_count = '35';
listTable.filter.page_size = '15';
listTable.filter.page = '1';
listTable.filter.page_count = '3';
listTable.filter.start = '0';
<!--

onload = function()
{
  // 开始检查订单
  startCheckOrder();
}


function validate(name)
{
  if(document.listForm.elements["date"].value == "0000-00-00")
  {
    alert('请选定时间');
    return;	
  }
  else
  {
    document.listForm.act.value=name;
    document.listForm.submit();
  }
}
//-->
</script>
<div id="footer">
共执行 4 个查询，用时 0.012001 秒，Gzip 已禁用，内存占用 1.112 MB<br>
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