<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0047)http://ec.com/admin/exchange_goods.php?act=list -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 积分商城商品列表 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./jifen-shangcheng_files/general.css" rel="stylesheet" type="text/css">
<link href="./jifen-shangcheng_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./jifen-shangcheng_files/transport.js"></script><script type="text/javascript" src="./jifen-shangcheng_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var no_goods_id = "没有选择商品";
var invalid_exchange_integral = "积分值为空或不是数字";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span"><a href="http://ec.com/admin/exchange_goods.php?act=add">添加新商品</a></span>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 积分商城商品列表 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="./jifen-shangcheng_files/utils.js"></script><script type="text/javascript" src="./jifen-shangcheng_files/listtable.js"></script><div class="form-div">
  <form action="javascript:searchArticle()" name="searchForm">
    <img src="./jifen-shangcheng_files/icon_search.gif" width="26" height="22" border="0" alt="SEARCH">
    关键字 <input type="text" name="keyword" id="keyword">
    <input type="submit" value=" 搜索 " class="button">
  </form>
</div>

<form method="POST" action="http://ec.com/admin/exchange_goods.php?act=batch_remove" name="listForm">
<!-- start cat list -->
<div class="list-div" id="listDiv">

<table cellspacing="1" cellpadding="3" id="list-table">
  <tbody><tr>
    <th><input onclick="listTable.selectAll(this, &quot;checkboxes&quot;)" type="checkbox">
      <a href="javascript:listTable.sort(&#39;goods_id&#39;); ">编号</a><img src="./jifen-shangcheng_files/sort_desc.gif"></th>
    <th><a href="javascript:listTable.sort(&#39;goods_name&#39;); ">商品</a></th>
    <th><a href="javascript:listTable.sort(&#39;exchange_integral&#39;); ">使用积分值</a></th>
    <th><a href="javascript:listTable.sort(&#39;is_exchange&#39;); ">是否可兑换</a></th>
    <th><a href="javascript:listTable.sort(&#39;is_hot&#39;); ">是否热销</a></th>
    <th>操作</th>
  </tr>
    <tr>
    <td style="background-color: rgb(255, 255, 255);"><span><input name="checkboxes[]" type="checkbox" value="24">24</span></td>
    <td class="first-cell" style="background-color: rgb(255, 255, 255);"><span>P806</span></td>
    <td align="center" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_exchange_integral&#39;, 24)">17000</span></td>
    <td align="center" style="background-color: rgb(255, 255, 255);"><img src="./jifen-shangcheng_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_exchange&#39;, 24)"></td>
    <td align="center" style="background-color: rgb(255, 255, 255);"><img src="./jifen-shangcheng_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_hot&#39;, 24)"></td>
    <td align="center" nowrap="true" style="background-color: rgb(255, 255, 255);"><span>
      <a href="http://ec.com/exchange.php?id=24&amp;act=view" target="_blank" title="查看"><img src="./jifen-shangcheng_files/icon_view.gif" border="0" height="16" width="16"></a>&nbsp;
      <a href="http://ec.com/admin/exchange_goods.php?act=edit&amp;id=24" title="编辑"><img src="./jifen-shangcheng_files/icon_edit.gif" border="0" height="16" width="16"></a>&nbsp;
      <a href="javascript:;" onclick="listTable.remove(24, &#39;您确认要删除这件商品吗？&#39;)" title="移除"><img src="./jifen-shangcheng_files/icon_drop.gif" border="0" height="16" width="16"></a></span>
    </td>
   </tr>
     <tr>
    <td style="background-color: rgb(255, 255, 255);"><span><input name="checkboxes[]" type="checkbox" value="19">19</span></td>
    <td class="first-cell" style="background-color: rgb(255, 255, 255);"><span>三星SGH-F258</span></td>
    <td align="center" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_exchange_integral&#39;, 19)" title="点击修改内容">80000</span></td>
    <td align="center" style="background-color: rgb(255, 255, 255);"><img src="./jifen-shangcheng_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_exchange&#39;, 19)"></td>
    <td align="center" style="background-color: rgb(255, 255, 255);"><img src="./jifen-shangcheng_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_hot&#39;, 19)"></td>
    <td align="center" nowrap="true" style="background-color: rgb(255, 255, 255);"><span>
      <a href="http://ec.com/exchange.php?id=19&amp;act=view" target="_blank" title="查看"><img src="./jifen-shangcheng_files/icon_view.gif" border="0" height="16" width="16"></a>&nbsp;
      <a href="http://ec.com/admin/exchange_goods.php?act=edit&amp;id=19" title="编辑"><img src="./jifen-shangcheng_files/icon_edit.gif" border="0" height="16" width="16"></a>&nbsp;
      <a href="javascript:;" onclick="listTable.remove(19, &#39;您确认要删除这件商品吗？&#39;)" title="移除"><img src="./jifen-shangcheng_files/icon_drop.gif" border="0" height="16" width="16"></a></span>
    </td>
   </tr>
     <tr>
    <td colspan="2" style="background-color: rgb(255, 255, 255);"><input type="submit" class="button" id="btnSubmit" value="批量删除" disabled="true"></td>
    <td align="right" nowrap="true" colspan="8" style="background-color: rgb(255, 255, 255);">      <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
            <div id="turn-page">
        总计  <span id="totalRecords">2</span>
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
<!-- end cat list -->
<script type="text/javascript" language="JavaScript">
  listTable.recordCount = 2;
  listTable.pageCount = 1;

    listTable.filter.keyword = '';
    listTable.filter.sort_by = 'eg.goods_id';
    listTable.filter.sort_order = 'DESC';
    listTable.filter.record_count = '2';
    listTable.filter.page_size = '15';
    listTable.filter.page = '1';
    listTable.filter.page_count = '1';
    listTable.filter.start = '0';
    

  onload = function()
  {
    // 开始检查订单
    startCheckOrder();
  }

 /* 搜索文章 */
 function searchArticle()
 {
    listTable.filter.keyword = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
    listTable.filter.page = 1;
    listTable.loadList();
 }
 
</script>
<div id="footer">
共执行 3 个查询，用时 0.023001 秒，Gzip 已禁用，内存占用 1.077 MB<br>
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

</form></body></html>