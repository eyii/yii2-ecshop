<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0043)http://ec.com/admin/order.php?act=back_list -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 退货单列表 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./tuihuodan-list_files/general.css" rel="stylesheet" type="text/css">
<link href="./tuihuodan-list_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./tuihuodan-list_files/transport.js"></script><script type="text/javascript" src="./tuihuodan-list_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var remove_confirm = "删除订单将清除该订单的所有信息。您确定要这么做吗？";
var confirm_merge = "您确实要合并这两个订单吗？";
var input_price = "自定义价格";
var pls_search_user = "请搜索并选择会员";
var confirm_drop = "确认要删除该商品吗？";
var invalid_goods_number = "商品数量不正确";
var pls_search_goods = "请搜索并选择商品";
var pls_select_area = "请完整选择所在地区";
var pls_select_shipping = "请选择配送方式";
var pls_select_payment = "请选择支付方式";
var pls_select_pack = "请选择包装";
var pls_select_card = "请选择贺卡";
var pls_input_note = "请您填写备注！";
var pls_input_cancel = "请您填写取消原因！";
var pls_select_refund = "请选择退款方式！";
var pls_select_agency = "请选择办事处！";
var pls_select_other_agency = "该订单现在就属于这个办事处，请选择其他办事处！";
var loading = "加载中...";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 退货单列表 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="./tuihuodan-list_files/utils.js"></script><script type="text/javascript" src="./tuihuodan-list_files/listtable.js"></script><!-- 订单搜索 -->
<div class="form-div">
  <form action="javascript:searchOrder()" name="searchForm">
    <img src="./tuihuodan-list_files/icon_search.gif" width="26" height="22" border="0" alt="SEARCH">
    发货单流水号<input name="delivery_sn" type="text" id="delivery_sn" size="15">
    订单号<input name="order_sn" type="text" id="order_sn" size="15">
    收货人<input name="consignee" type="text" id="consignee" size="15">
    <input type="submit" value=" 搜索 " class="button">
  </form>
</div>

<!-- 订单列表 -->
<form method="post" action="http://ec.com/admin/order.php?act=operate" name="listForm" onsubmit="return check()">
  <div class="list-div" id="listDiv">

<table cellpadding="3" cellspacing="1">
  <tbody><tr>
    <th>
      <input onclick="listTable.selectAll(this, &quot;back_id&quot;)" type="checkbox"><a href="javascript:listTable.sort(&#39;delivery_sn&#39;, &#39;DESC&#39;); ">发货单流水号</a>    </th>
    <th><a href="javascript:listTable.sort(&#39;order_sn&#39;, &#39;DESC&#39;); ">订单号</a></th>
    <th><a href="javascript:listTable.sort(&#39;add_time&#39;, &#39;DESC&#39;); ">下单时间</a></th>
    <th><a href="javascript:listTable.sort(&#39;consignee&#39;, &#39;DESC&#39;); ">收货人</a></th>
    <th><a href="javascript:listTable.sort(&#39;update_time&#39;, &#39;DESC&#39;); ">发货时间</a><img src="./tuihuodan-list_files/sort_desc.gif"></th>
    <th>退货时间</th>
    <th>操作人</th>
    <th>操作</th>
  </tr><tr>
    </tr><tr>
    <td valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);"><input type="checkbox" name="back_id[]" value="4">20090615064331475</td>
    <td style="background-color: rgb(255, 255, 255);">2009061503335<br></td>
    <td align="center" valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);">2009-06-15 22:39:38</td>
    <td align="left" valign="top" style="background-color: rgb(255, 255, 255);"><a href="mailto:ecshop@ecshop.com"> 刘先生</a></td>
    <td align="center" valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);">2009-06-15 22:43:09</td>
    <td align="center" valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);">2009-06-15 22:43:32</td>
    <td align="center" valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);">admin</td>
    <td align="center" valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);">
     <a href="http://ec.com/admin/order.php?act=back_info&amp;back_id=4">查看</a>
     <a onclick="{if(confirm(&#39;您确定要删除吗？&#39;)){return true;}return false;}" href="http://ec.com/admin/order.php?act=operate&amp;remove_back=1&amp;back_id=4">移除</a>
    </td>
  </tr>
    <tr>
    <td valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);"><input type="checkbox" name="back_id[]" value="3">20090615055780744</td>
    <td style="background-color: rgb(255, 255, 255);">2009061585887<br></td>
    <td align="center" valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);">2009-06-15 21:42:13</td>
    <td align="left" valign="top" style="background-color: rgb(255, 255, 255);"><a href="mailto:ecshop@ecshop.com"> 刘先生</a></td>
    <td align="center" valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);">2009-06-15 21:57:23</td>
    <td align="center" valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);">2009-06-15 21:58:35</td>
    <td align="center" valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);">admin</td>
    <td align="center" valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);">
     <a href="http://ec.com/admin/order.php?act=back_info&amp;back_id=3">查看</a>
     <a onclick="{if(confirm(&#39;您确定要删除吗？&#39;)){return true;}return false;}" href="http://ec.com/admin/order.php?act=operate&amp;remove_back=1&amp;back_id=3">移除</a>
    </td>
  </tr>
    <tr>
    <td valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);"><input type="checkbox" name="back_id[]" value="2">20090615055104671</td>
    <td style="background-color: rgb(255, 255, 255);">2009061585887<br></td>
    <td align="center" valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);">2009-06-15 21:42:13</td>
    <td align="left" valign="top" style="background-color: rgb(255, 255, 255);"><a href="mailto:ecshop@ecshop.com"> 刘先生</a></td>
    <td align="center" valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);">2009-06-15 21:51:01</td>
    <td align="center" valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);">2009-06-15 21:58:35</td>
    <td align="center" valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);">admin</td>
    <td align="center" valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);">
     <a href="http://ec.com/admin/order.php?act=back_info&amp;back_id=2">查看</a>
     <a onclick="{if(confirm(&#39;您确定要删除吗？&#39;)){return true;}return false;}" href="http://ec.com/admin/order.php?act=operate&amp;remove_back=1&amp;back_id=2">移除</a>
    </td>
  </tr>
    <tr>
    <td valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);"><input type="checkbox" name="back_id[]" value="1">20090615054961769</td>
    <td style="background-color: rgb(255, 255, 255);">2009061585887<br></td>
    <td align="center" valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);">2009-06-15 21:42:13</td>
    <td align="left" valign="top" style="background-color: rgb(255, 255, 255);"><a href="mailto:ecshop@ecshop.com"> 刘先生</a></td>
    <td align="center" valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);">2009-06-15 21:49:24</td>
    <td align="center" valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);">2009-06-15 21:58:35</td>
    <td align="center" valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);">admin</td>
    <td align="center" valign="top" nowrap="nowrap" style="background-color: rgb(255, 255, 255);">
     <a href="http://ec.com/admin/order.php?act=back_info&amp;back_id=1">查看</a>
     <a onclick="{if(confirm(&#39;您确定要删除吗？&#39;)){return true;}return false;}" href="http://ec.com/admin/order.php?act=operate&amp;remove_back=1&amp;back_id=1">移除</a>
    </td>
  </tr>
  </tbody></table>

<!-- 分页 -->
<table id="page-table" cellspacing="0">
  <tbody><tr>
    <td align="right" nowrap="true">
          <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
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
  <div>
    <input name="remove_back" type="submit" id="btnSubmit3" value="移除" class="button" disabled="true" onclick="{if(confirm(&#39;您确定要删除吗？&#39;)){return true;}return false;}">
  </div>
</form>
<script language="JavaScript">
listTable.recordCount = 4;
listTable.pageCount = 1;

listTable.filter.delivery_sn = '';
listTable.filter.order_sn = '';
listTable.filter.order_id = '0';
listTable.filter.consignee = '';
listTable.filter.sort_by = 'update_time';
listTable.filter.sort_order = 'DESC';
listTable.filter.page = '1';
listTable.filter.page_size = '15';
listTable.filter.record_count = '4';
listTable.filter.page_count = '1';


    onload = function()
    {
        // 开始检查订单
        startCheckOrder();
                
        //
        listTable.query = "back_query";
    }

    /**
     * 搜索订单
     */
    function searchOrder()
    {
        listTable.filter['order_sn'] = Utils.trim(document.forms['searchForm'].elements['order_sn'].value);
        listTable.filter['consignee'] = Utils.trim(document.forms['searchForm'].elements['consignee'].value);
                listTable.filter['delivery_sn'] = document.forms['searchForm'].elements['delivery_sn'].value;
        listTable.filter['page'] = 1;
                listTable.query = "back_query";
        listTable.loadList();
    }

    function check()
    {
      var snArray = new Array();
      var eles = document.forms['listForm'].elements;
      for (var i=0; i<eles.length; i++)
      {
        if (eles[i].tagName == 'INPUT' && eles[i].type == 'checkbox' && eles[i].checked && eles[i].value != 'on')
        {
          snArray.push(eles[i].value);
        }
      }
      if (snArray.length == 0)
      {
        return false;
      }
      else
      {
        eles['order_id'].value = snArray.toString();
        return true;
      }
    }
</script>


<div id="footer">
共执行 4 个查询，用时 0.078004 秒，Gzip 已禁用，内存占用 2.545 MB<br>
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