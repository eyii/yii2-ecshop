<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0045)http://ec.com/admin/order.php?act=order_query -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 订单查询 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./dingdan-chaxun_files/general.css" rel="stylesheet" type="text/css">
<link href="./dingdan-chaxun_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./dingdan-chaxun_files/transport.js"></script><script type="text/javascript" src="./dingdan-chaxun_files/common.js"></script><script language="JavaScript">
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
<span class="action-span"><a href="http://ec.com/admin/order.php?act=list">订单列表</a></span>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 订单查询 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="./dingdan-chaxun_files/calendar.php"></script>
<link href="./dingdan-chaxun_files/calendar.css" rel="stylesheet" type="text/css">
<div class="main-div">
<form action="http://ec.com/admin/order.php?act=list" method="post" enctype="multipart/form-data" name="searchForm">
  <table cellspacing="1" cellpadding="3" width="100%">
    <tbody><tr>
      <td><div align="right"><strong>订单号：</strong></div></td>
      <td colspan="3"><input name="order_sn" type="text" id="order_sn" size="30"></td>
    </tr>
    <tr>
      <td><div align="right"><strong>电子邮件：</strong></div></td>
      <td colspan="3"><input name="email" type="text" id="email" size="40"></td>
    </tr>
    <tr>
      <td><div align="right"><strong>购货人：</strong></div></td>
      <td><input name="user_name" type="text" id="user_name" size="20"></td>
      <td><div align="right"><strong>收货人：</strong></div></td>
      <td><input name="consignee" type="text" id="consignee" size="20"></td>
    </tr>
    <tr>
      <td><div align="right"><strong>地址：</strong></div></td>
      <td><input name="address" type="text" id="address" size="20"></td>
      <td><div align="right"><strong>邮编：</strong></div></td>
      <td><input name="zipcode" type="text" id="zipcode" size="20"></td>
    </tr>
    <tr>
      <td><div align="right"><strong>电话：</strong></div></td>
      <td><input name="tel" type="text" id="tel" size="20"></td>
      <td><div align="right"><strong>手机：</strong></div></td>
      <td><input name="mobile" type="text" id="mobile" size="20"></td>
    </tr>
    <tr>
      <td><div align="right"><strong>所在地区：</strong></div></td>
      <td colspan="3"><select name="country" id="selCountries" onchange="region.changed(this, 1, &#39;selProvinces&#39;)">
          <option value="0">请选择...</option>
                    <option value="1">中国</option>
                </select>
        <select name="province" id="selProvinces" onchange="region.changed(this, 2, &#39;selCities&#39;)">
          <option value="0">请选择...</option>
        </select>
        <select name="city" id="selCities" onchange="region.changed(this, 3, &#39;selDistricts&#39;)">
          <option value="0">请选择...</option>
        </select>
        <select name="district" id="selDistricts">
          <option value="0">请选择...</option>
        </select></td>
      </tr>
    <tr>
      <td><div align="right"><strong>配送方式：</strong></div></td>
      <td><select name="shipping_id" id="select4">
        <option value="0">请选择...</option>
                <option value="1">邮政快递包裹</option>
                <option value="2">圆通速递</option>
                <option value="3">城际快递</option>
                <option value="4">市内快递</option>
                <option value="5">申通快递</option>
                <option value="6">邮局平邮</option>
                <option value="7">运费到付</option>
                    </select></td>
      <td><div align="right"><strong>支付方式：</strong></div></td>
      <td><select name="pay_id" id="select5">
        <option value="0">请选择...</option>
                <option value="1">余额支付</option>
                <option value="2">银行汇款/转帐</option>
                <option value="3">货到付款</option>
                    </select></td>
    </tr>
    <tr>
      <td><div align="right"><strong>下单时间：</strong></div></td>
      <td>
      <input type="text" name="start_time" maxlength="60" size="20" readonly="readonly" id="start_time_id">
      <input name="start_time_btn" type="button" id="start_time_btn" onclick="return showCalendar(&#39;start_time_id&#39;, &#39;%Y-%m-%d %H:%M&#39;, &#39;24&#39;, false, &#39;start_time_btn&#39;);" value="选择" class="button">
      ~      
      <input type="text" name="end_time" maxlength="60" size="20" readonly="readonly" id="end_time_id">
      <input name="end_time_btn" type="button" id="end_time_btn" onclick="return showCalendar(&#39;end_time_id&#39;, &#39;%Y-%m-%d %H:%M&#39;, &#39;24&#39;, false, &#39;end_time_btn&#39;);" value="选择" class="button">  
      </td>
    </tr>
    <tr>
      <td><div align="right"><strong>订单状态：</strong></div></td>
      <td colspan="3">
        <select name="order_status" id="select9">
          <option value="-1">请选择...</option>
          <option value="0">未确认</option><option value="1">已确认</option><option value="2"> 取消</option><option value="3">无效</option><option value="4">退货</option><option value="5">已分单</option><option value="6">部分分单</option>        </select>
        <strong>付款状态：</strong>        <select name="pay_status" id="select11">
          <option value="-1">请选择...</option>
          <option value="0">未付款</option><option value="1">付款中</option><option value="2">已付款</option>        </select>
        <strong>发货状态：</strong>        <select name="shipping_status" id="select10">
          <option value="-1">请选择...</option>
          <option value="0">未发货</option><option value="3">配货中</option><option value="1">已发货</option><option value="2">收货确认</option><option value="4">已发货(部分商品)</option><option value="5">发货中</option>        </select></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center">
        <input name="query" type="submit" class="button" id="query" value=" 搜索 ">
        <input name="reset" type="reset" class="button" value=" 重置 ">
      </div></td>
      </tr>
  </tbody></table>
</form>
</div>
<script type="text/javascript" src="./dingdan-chaxun_files/region.js"></script>
<script language="JavaScript">
region.isAdmin = true;
onload = function()
{
  // 开始检查订单
  startCheckOrder();
}
</script>

<div id="footer">
共执行 4 个查询，用时 0.088005 秒，Gzip 已禁用，内存占用 2.543 MB<br>
版权所有 © 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
<script type="text/javascript" src="./dingdan-chaxun_files/utils.js"></script><!-- 新订单提示信息 -->
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