<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0038)http://ec.com/admin/bonus.php?act=list -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 红包类型 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./hongbao-leixing_files/general.css" rel="stylesheet" type="text/css">
<link href="./hongbao-leixing_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./hongbao-leixing_files/transport.js"></script><script type="text/javascript" src="./hongbao-leixing_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var type_name_empty = "请输入红包类型名称!";
var type_money_empty = "请输入红包类型价格!";
var order_money_empty = "请输入订单金额!";
var type_money_isnumber = "类型金额必须为数字格式!";
var order_money_isnumber = "订单金额必须为数字格式!";
var bonus_sn_empty = "请输入红包的序列号!";
var bonus_sn_number = "红包的序列号必须是数字!";
var bonus_sum_empty = "请输入您要发放的红包数量!";
var bonus_sum_number = "红包的发放数量必须是一个整数!";
var bonus_type_empty = "请选择红包的类型金额!";
var user_rank_empty = "您没有指定会员等级!";
var user_name_empty = "您至少需要选择一个会员!";
var invalid_min_amount = "请输入订单下限（大于0的数字）";
var send_start_lt_end = "红包发放开始日期不能大于结束日期";
var use_start_lt_end = "红包使用开始日期不能大于结束日期";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span"><a href="http://ec.com/admin/bonus.php?act=add">添加红包类型</a></span>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 红包类型 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="./hongbao-leixing_files/utils.js"></script><script type="text/javascript" src="./hongbao-leixing_files/listtable.js"></script><!-- start bonus_type list -->
<form method="post" action="" name="listForm">
<div class="list-div" id="listDiv">

  <table cellpadding="3" cellspacing="1">
    <tbody><tr>
      <th><a href="javascript:listTable.sort(&#39;type_name&#39;); ">类型名称</a></th>
      <th><a href="javascript:listTable.sort(&#39;send_type&#39;); ">发放类型</a></th>
      <th><a href="javascript:listTable.sort(&#39;type_money&#39;); ">红包金额</a></th>
      <th><a href="javascript:listTable.sort(&#39;min_amount&#39;); ">订单下限</a></th>
      <th>发放数量</th>
      <th>使用数量</th>
      <th>操作</th>
    </tr>
        <tr>
      <td class="first-cell" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_type_name&#39;, 4)">线下红包</span></td>
      <td style="background-color: rgb(255, 255, 255);">线下发放的红包</td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_type_money&#39;, 4)">5.00</span></td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_min_amount&#39;, 4)">0.00</span></td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span>10</span></td>
      <td align="right" style="background-color: rgb(255, 255, 255);">1</td>
      <td align="right" style="background-color: rgb(255, 255, 255);">
                <a href="http://ec.com/admin/bonus.php?act=gen_excel&amp;tid=4">报表</a> |
                        <a href="http://ec.com/admin/bonus.php?act=send&amp;id=4&amp;send_by=3">发放</a> |
                <a href="http://ec.com/admin/bonus.php?act=bonus_list&amp;bonus_type=4">查看</a> |
        <a href="http://ec.com/admin/bonus.php?act=edit&amp;type_id=4">编辑</a> |
        <a href="javascript:;" onclick="listTable.remove(4, &#39;您确认要删除这条记录吗?&#39;)">移除</a></td>
    </tr>
          <tr>
      <td class="first-cell" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_type_name&#39;, 3)">订单红包</span></td>
      <td style="background-color: rgb(255, 255, 255);">按订单金额发放</td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_type_money&#39;, 3)">20.00</span></td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_min_amount&#39;, 3)">1500.00</span></td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span>9</span></td>
      <td align="right" style="background-color: rgb(255, 255, 255);">1</td>
      <td align="right" style="background-color: rgb(255, 255, 255);">
                        <a href="http://ec.com/admin/bonus.php?act=bonus_list&amp;bonus_type=3">查看</a> |
        <a href="http://ec.com/admin/bonus.php?act=edit&amp;type_id=3">编辑</a> |
        <a href="javascript:;" onclick="listTable.remove(3, &#39;您确认要删除这条记录吗?&#39;)">移除</a></td>
    </tr>
          <tr>
      <td class="first-cell" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_type_name&#39;, 2)">商品红包</span></td>
      <td style="background-color: rgb(255, 255, 255);">按商品发放</td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_type_money&#39;, 2)">10.00</span></td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_min_amount&#39;, 2)">0.00</span></td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span>0</span></td>
      <td align="right" style="background-color: rgb(255, 255, 255);">0</td>
      <td align="right" style="background-color: rgb(255, 255, 255);">
                        <a href="http://ec.com/admin/bonus.php?act=send&amp;id=2&amp;send_by=1">发放</a> |
                <a href="http://ec.com/admin/bonus.php?act=bonus_list&amp;bonus_type=2">查看</a> |
        <a href="http://ec.com/admin/bonus.php?act=edit&amp;type_id=2">编辑</a> |
        <a href="javascript:;" onclick="listTable.remove(2, &#39;您确认要删除这条记录吗?&#39;)">移除</a></td>
    </tr>
          <tr>
      <td class="first-cell" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_type_name&#39;, 1)">用户红包</span></td>
      <td style="background-color: rgb(255, 255, 255);">按用户发放</td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_type_money&#39;, 1)">2.00</span></td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_min_amount&#39;, 1)">0.00</span></td>
      <td align="right" style="background-color: rgb(255, 255, 255);"><span>0</span></td>
      <td align="right" style="background-color: rgb(255, 255, 255);">0</td>
      <td align="right" style="background-color: rgb(255, 255, 255);">
                        <a href="http://ec.com/admin/bonus.php?act=send&amp;id=1&amp;send_by=0">发放</a> |
                <a href="http://ec.com/admin/bonus.php?act=bonus_list&amp;bonus_type=1">查看</a> |
        <a href="http://ec.com/admin/bonus.php?act=edit&amp;type_id=1">编辑</a> |
        <a href="javascript:;" onclick="listTable.remove(1, &#39;您确认要删除这条记录吗?&#39;)">移除</a></td>
    </tr>
          <tr>
      <td align="right" nowrap="true" colspan="8" style="background-color: rgb(255, 255, 255);">      <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
            <div id="turn-page">
        总计  <span id="totalRecords">4</span>
        个记录分为 <span id="totalPages">1</span>
        页当前第 <span id="pageCurrent">1</span>
        页，每页 <input type="text" size="3" id="pageSize" value="15" onkeypress="return listTable.changePageSize(event)">
        <span id="page-link">
          <a href="javascript:listTable.gotoPageFirst()">第一页</a>
          <a href="javascript:listTable.gotoPagePrev()">上一页</a>
          <a href="javascript:listTable.gotoPageNext()">下一页</a>
          <a href="javascript:listTable.gotoPageLast()">最末页</a>
          <select id="gotoPage" onchange="listTable.gotoPage(this.value)">
            <option value="1">1</option>          </select>
        </span>
      </div>
</td>
    </tr>
  </tbody></table>

</div>
</form>
<!-- end bonus_type list -->

<script type="text/javascript" language="JavaScript">
<!--
  listTable.recordCount = 4;
  listTable.pageCount = 1;

    listTable.filter.sort_by = 'type_id';
    listTable.filter.sort_order = 'DESC';
    listTable.filter.record_count = '4';
    listTable.filter.page_size = '15';
    listTable.filter.page = '1';
    listTable.filter.page_count = '1';
    listTable.filter.start = '0';
  
  
  onload = function()
  {
     // 开始检查订单
     startCheckOrder();
  }
  
//-->
</script>
<div id="footer">
共执行 5 个查询，用时 0.038002 秒，Gzip 已禁用，内存占用 1.184 MB<br>
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