<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0043)http://ec.com/admin/order.php?act=templates -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 编辑订单打印模板 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./dingdan-dayin_files/general.css" rel="stylesheet" type="text/css">
<link href="./dingdan-dayin_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./dingdan-dayin_files/transport.js"></script><script type="text/javascript" src="./dingdan-dayin_files/common.js"></script><script language="JavaScript">
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
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 编辑订单打印模板 </span>
<div style="clear:both"></div>
</h1>
<form action="http://ec.com/admin/order.php" method="post">
<div class="main-div">
    <table width="100%">
     <tbody><tr><td><input type="hidden" id="FCKeditor1" name="FCKeditor1" value="{literal}
&lt;style type=&quot;text/css&quot;&gt;
body,td { font-size:13px; }
&lt;/style&gt;
{/literal}
&lt;h1 align=&quot;center&quot;&gt;{$lang.order_info}&lt;/h1&gt;
&lt;table width=&quot;100%&quot; cellpadding=&quot;1&quot;&gt;
    &lt;tr&gt;
        &lt;td width=&quot;8%&quot;&gt;{$lang.print_buy_name}&lt;/td&gt;
        &lt;td&gt;{if $order.user_name}{$order.user_name}{else}{$lang.anonymous}{/if}&lt;!-- 购货人姓名 --&gt;&lt;/td&gt;
        &lt;td align=&quot;right&quot;&gt;{$lang.label_order_time}&lt;/td&gt;&lt;td&gt;{$order.order_time}&lt;!-- 下订单时间 --&gt;&lt;/td&gt;
        &lt;td align=&quot;right&quot;&gt;{$lang.label_payment}&lt;/td&gt;&lt;td&gt;{$order.pay_name}&lt;!-- 支付方式 --&gt;&lt;/td&gt;
        &lt;td align=&quot;right&quot;&gt;{$lang.print_order_sn}&lt;/td&gt;&lt;td&gt;{$order.order_sn}&lt;!-- 订单号 --&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;{$lang.label_pay_time}&lt;/td&gt;&lt;td&gt;{$order.pay_time}&lt;/td&gt;&lt;!-- 付款时间 --&gt;
        &lt;td align=&quot;right&quot;&gt;{$lang.label_shipping_time}&lt;/td&gt;&lt;td&gt;{$order.shipping_time}&lt;!-- 发货时间 --&gt;&lt;/td&gt;
        &lt;td align=&quot;right&quot;&gt;{$lang.label_shipping}&lt;/td&gt;&lt;td&gt;{$order.shipping_name}&lt;!-- 配送方式 --&gt;&lt;/td&gt;
        &lt;td align=&quot;right&quot;&gt;{$lang.label_invoice_no}&lt;/td&gt;&lt;td&gt;{$order.invoice_no} &lt;!-- 发货单号 --&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;{$lang.label_consignee_address}&lt;/td&gt;
        &lt;td colspan=&quot;7&quot;&gt;
        [{$order.region}]&amp;nbsp;{$order.address}&amp;nbsp;&lt;!-- 收货人地址 --&gt;
        {$lang.label_consignee}{$order.consignee}&amp;nbsp;&lt;!-- 收货人姓名 --&gt;
        {if $order.zipcode}{$lang.label_zipcode}{$order.zipcode}&amp;nbsp;{/if}&lt;!-- 邮政编码 --&gt;
        {if $order.tel}{$lang.label_tel}{$order.tel}&amp;nbsp; {/if}&lt;!-- 联系电话 --&gt;
        {if $order.mobile}{$lang.label_mobile}{$order.mobile}{/if}&lt;!-- 手机号码 --&gt;
        &lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;
&lt;table width=&quot;100%&quot; border=&quot;1&quot; style=&quot;border-collapse:collapse;border-color:#000;&quot;&gt;
    &lt;tr align=&quot;center&quot;&gt;
        &lt;td bgcolor=&quot;#cccccc&quot;&gt;{$lang.goods_name}  &lt;!-- 商品名称 --&gt;&lt;/td&gt;
        &lt;td bgcolor=&quot;#cccccc&quot;&gt;{$lang.goods_sn}    &lt;!-- 商品货号 --&gt;&lt;/td&gt;
        &lt;td bgcolor=&quot;#cccccc&quot;&gt;{$lang.goods_attr}  &lt;!-- 商品属性 --&gt;&lt;/td&gt;
        &lt;td bgcolor=&quot;#cccccc&quot;&gt;{$lang.goods_price} &lt;!-- 商品单价 --&gt;&lt;/td&gt;
        &lt;td bgcolor=&quot;#cccccc&quot;&gt;{$lang.goods_number}&lt;!-- 商品数量 --&gt;&lt;/td&gt;
        &lt;td bgcolor=&quot;#cccccc&quot;&gt;{$lang.subtotal}    &lt;!-- 价格小计 --&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;!-- {foreach from=$goods_list item=goods key=key} --&gt;
    &lt;tr&gt;
        &lt;td&gt;&amp;nbsp;{$goods.goods_name}&lt;!-- 商品名称 --&gt;
        {if $goods.is_gift}{if $goods.goods_price gt 0}{$lang.remark_favourable}{else}{$lang.remark_gift}{/if}{/if}
        {if $goods.parent_id gt 0}{$lang.remark_fittings}{/if}
        &lt;/td&gt;
        &lt;td&gt;&amp;nbsp;{$goods.goods_sn} &lt;!-- 商品货号 --&gt;&lt;/td&gt;
        &lt;td&gt;&lt;!-- 商品属性 --&gt;
        &lt;!-- {foreach key=key from=$goods_attr[$key] item=attr} --&gt;
        &lt;!-- {if $attr.name} --&gt; {$attr.name}:{$attr.value} &lt;!-- {/if} --&gt;
        &lt;!-- {/foreach} --&gt;
        &lt;/td&gt;
        &lt;td align=&quot;right&quot;&gt;{$goods.formated_goods_price}&amp;nbsp;&lt;!-- 商品单价 --&gt;&lt;/td&gt;
        &lt;td align=&quot;right&quot;&gt;{$goods.goods_number}&amp;nbsp;&lt;!-- 商品数量 --&gt;&lt;/td&gt;
        &lt;td align=&quot;right&quot;&gt;{$goods.formated_subtotal}&amp;nbsp;&lt;!-- 商品金额小计 --&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;!-- {/foreach} --&gt;
    &lt;tr&gt;
        &lt;!-- 发票抬头和发票内容 --&gt;
        &lt;td colspan=&quot;4&quot;&gt;
        {if $order.inv_payee}
        {$lang.label_inv_payee}{$order.inv_payee}&amp;nbsp;&amp;nbsp;&amp;nbsp;
        {$lang.label_inv_content}{$order.inv_content}
        {/if}
        &lt;/td&gt;
        &lt;!-- 商品总金额 --&gt;
        &lt;td colspan=&quot;2&quot; align=&quot;right&quot;&gt;{$lang.label_goods_amount}{$order.formated_goods_amount}&lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;
&lt;table width=&quot;100%&quot; border=&quot;0&quot;&gt;
    &lt;tr align=&quot;right&quot;&gt;
        &lt;td&gt;{if $order.discount gt 0}- {$lang.label_discount}{$order.formated_discount}{/if}{if $order.pack_name and $order.pack_fee neq &#39;0.00&#39;}
         &lt;!-- 包装名称包装费用 --&gt;
        + {$lang.label_pack_fee}{$order.formated_pack_fee}
        {/if}
        {if $order.card_name and $order.card_fee neq &#39;0.00&#39;}&lt;!-- 贺卡名称以及贺卡费用 --&gt;
        + {$lang.label_card_fee}{$order.formated_card_fee}
        {/if}
        {if $order.pay_fee neq &#39;0.00&#39;}&lt;!-- 支付手续费 --&gt;
        + {$lang.label_pay_fee}{$order.formated_pay_fee}
        {/if}
        {if $order.shipping_fee neq &#39;0.00&#39;}&lt;!-- 配送费用 --&gt;
        + {$lang.label_shipping_fee}{$order.formated_shipping_fee}
        {/if}
        {if $order.insure_fee neq &#39;0.00&#39;}&lt;!-- 保价费用 --&gt;
        + {$lang.label_insure_fee}{$order.formated_insure_fee}
        {/if}
        &lt;!-- 订单总金额 --&gt;
        = {$lang.label_order_amount}{$order.formated_total_fee}        &lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr align=&quot;right&quot;&gt;
        &lt;td&gt;
        &lt;!-- 如果已付了部分款项, 减去已付款金额 --&gt;
        {if $order.money_paid neq &#39;0.00&#39;}- {$lang.label_money_paid}{$order.formated_money_paid}{/if}

        &lt;!-- 如果使用了余额支付, 减去已使用的余额 --&gt;
        {if $order.surplus neq &#39;0.00&#39;}- {$lang.label_surplus}{$order.formated_surplus}{/if}

        &lt;!-- 如果使用了积分支付, 减去已使用的积分 --&gt;
        {if $order.integral_money neq &#39;0.00&#39;}- {$lang.label_integral}{$order.formated_integral_money}{/if}

        &lt;!-- 如果使用了红包支付, 减去已使用的红包 --&gt;
        {if $order.bonus neq &#39;0.00&#39;}- {$lang.label_bonus}{$order.formated_bonus}{/if}

        &lt;!-- 应付款金额 --&gt;
        = {$lang.label_money_dues}{$order.formated_order_amount}
        &lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;
&lt;table width=&quot;100%&quot; border=&quot;0&quot;&gt;
    {if $order.to_buyer}
    &lt;tr&gt;&lt;!-- 给购货人看的备注信息 --&gt;
        &lt;td&gt;{$lang.label_to_buyer}{$order.to_buyer}&lt;/td&gt;
    &lt;/tr&gt;
    {/if}
    {if $order.invoice_note}
    &lt;tr&gt; &lt;!-- 发货备注 --&gt;
        &lt;td&gt;{$lang.label_invoice_note} {$order.invoice_note}&lt;/td&gt;
    &lt;/tr&gt;
    {/if}
    {if $order.pay_note}
    &lt;tr&gt; &lt;!-- 支付备注 --&gt;
        &lt;td&gt;{$lang.pay_note} {$order.pay_note}&lt;/td&gt;
    &lt;/tr&gt;
    {/if}

    &lt;tr&gt;&lt;!-- 网店名称, 网店地址, 网店URL以及联系电话 --&gt;
        &lt;td&gt;
        {$shop_name}（{$shop_url}）
        {$lang.label_shop_address}{$shop_address}&amp;nbsp;&amp;nbsp;{$lang.label_service_phone}{$service_phone}
        &lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr align=&quot;right&quot;&gt;&lt;!-- 订单操作员以及订单打印的日期 --&gt;
        &lt;td&gt;{$lang.label_print_time}{$print_time}&amp;nbsp;&amp;nbsp;&amp;nbsp;{$lang.action_user}{$action_user}&lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;" style="display:none"><input type="hidden" id="FCKeditor1___Config" value="" style="display:none"><iframe id="FCKeditor1___Frame" src="./dingdan-dayin_files/fckeditor.html" width="95%" height="500" frameborder="0" scrolling="no" style="margin: 0px; padding: 0px; border: 0px; width: 95%; height: 500px; background-image: none; background-color: transparent;"></iframe></td></tr>
    </tbody></table>
    <div class="button-div ">
    <input type="hidden" name="act" value="edit_templates">
    <input type="submit" value=" 确定 " class="button">
  </div>
</div>
</form>
<script type="Text/Javascript" language="JavaScript">
<!--

onload = function()
{
  // 开始检查订单
  startCheckOrder();
}

//-->
</script>
<div id="footer">
共执行 1 个查询，用时 0.045002 秒，Gzip 已禁用，内存占用 2.571 MB<br>
版权所有 © 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
<script type="text/javascript" src="./dingdan-dayin_files/utils.js"></script><!-- 新订单提示信息 -->
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

<iframe src="javascript:void(0)" frameborder="0" scrolling="no" style="margin: 0px; padding: 0px; border: 0px; height: 0px; width: 0px; position: absolute; z-index: 10000; background-image: none; background-color: transparent;"></iframe><iframe src="javascript:void(0)" frameborder="0" scrolling="no" style="margin: 0px; padding: 0px; border: 0px; height: 0px; width: 0px; position: absolute; z-index: 10000; background-image: none; background-color: transparent;"></iframe><iframe src="javascript:void(0)" frameborder="0" scrolling="no" style="margin: 0px; padding: 0px; border: 0px; height: 0px; width: 0px; position: absolute; z-index: 10000; background-image: none; background-color: transparent;"></iframe><iframe src="javascript:void(0)" frameborder="0" scrolling="no" style="margin: 0px; padding: 0px; border: 0px; height: 0px; width: 0px; position: absolute; z-index: 10000; background-image: none; background-color: transparent;"></iframe><iframe src="javascript:void(0)" frameborder="0" scrolling="no" style="margin: 0px; padding: 0px; border: 0px; height: 0px; width: 0px; position: absolute; z-index: 10000; background-image: none; background-color: transparent;"></iframe></body><script>window.FCKeditorAPI = {Version : "2.6.3",VersionBuild : "19836",Instances : new Object(),GetInstance : function( name ){return this.Instances[ name ];},_FormSubmit : function(){for ( var name in FCKeditorAPI.Instances ){var oEditor = FCKeditorAPI.Instances[ name ] ;if ( oEditor.GetParentForm && oEditor.GetParentForm() == this )oEditor.UpdateLinkedField() ;}this._FCKOriginalSubmit() ;},_FunctionQueue	: {Functions : new Array(),IsRunning : false,Add : function( f ){this.Functions.push( f );if ( !this.IsRunning )this.StartNext();},StartNext : function(){var aQueue = this.Functions ;if ( aQueue.length > 0 ){this.IsRunning = true;aQueue[0].call();}else this.IsRunning = false;},Remove : function( f ){var aQueue = this.Functions;var i = 0, fFunc;while( (fFunc = aQueue[ i ]) ){if ( fFunc == f )aQueue.splice( i,1 );i++ ;}this.StartNext();}}}</script></html>