<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0037)http://ec.com/admin/order.php?act=add -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 添加订单 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./tianjia-dingdan_files/general.css" rel="stylesheet" type="text/css">
<link href="./tianjia-dingdan_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./tianjia-dingdan_files/transport.js"></script><script type="text/javascript" src="./tianjia-dingdan_files/common.js"></script><script language="JavaScript">
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
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 添加订单 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="./tianjia-dingdan_files/utils.js"></script><script type="text/javascript" src="./tianjia-dingdan_files/validator.js"></script>
<form name="theForm" action="http://ec.com/admin/order.php?act=step_post&amp;step=user&amp;order_id=0&amp;step_act=add" method="post" onsubmit="return checkUser()">
<div class="main-div" style="padding: 15px">
  <label><input type="radio" name="anonymous" value="1" checked=""> 匿名用户</label><br>
  <label><input type="radio" name="anonymous" value="0" id="user_useridname"> 按会员编号或会员名搜索</label>
  <input name="keyword" type="text" value="">
  <input type="button" class="button" name="search" value=" 搜索 " onclick="searchUser();">
  <select name="user"></select>
  <p><strong>注意：</strong>搜索结果只显示前20条记录，如果没有找到相应会员，请更精确地查找。另外，如果该会员是从论坛注册的且没有在商城登录过，也无法找到，需要先在商城登录。</p>
</div>
<div style="text-align:center">
  <p>
    <input name="submit" type="submit" class="button" value="下一步">
    <input type="button" value="取消" class="button" onclick="location.href=&#39;order.php?act=process&amp;func=cancel_order&amp;order_id=0&amp;step_act=add&#39;">
  </p>
</div>
</form>


<script language="JavaScript">
  var step = 'user';
  var orderId = 0;
  var act = 'add';

  function checkUser()
  {
    var eles = document.forms['theForm'].elements;

    /* 如果搜索会员，检查是否找到 */
    if (document.getElementById('user_useridname').checked && eles['user'].options.length == 0)
    {
      alert(pls_search_user);
      return false;
    }
    return true;
  }

  function checkGoods()
  {
    var eles = document.forms['theForm'].elements;

    if (eles['goods_count'].value <= 0)
    {
      alert(pls_search_goods);
      return false;
    }
    return true;
  }

  function checkConsignee()
  {
    var eles = document.forms['theForm'].elements;

    if (eles['country'].value <= 0)
    {
      alert(pls_select_area);
      return false;
    }
    if (eles['province'].options.length > 1 && eles['province'].value <= 0)
    {
      alert(pls_select_area);
      return false;
    }
    if (eles['city'].options.length > 1 && eles['city'].value <= 0)
    {
      alert(pls_select_area);
      return false;
    }
    if (eles['district'].options.length > 1 && eles['district'].value <= 0)
    {
      alert(pls_select_area);
      return false;
    }
    return true;
  }

  function checkShipping()
  {
    if (!radioChecked('shipping'))
    {
      alert(pls_select_shipping);
      return false;
    }
    return true;
  }

  function checkPayment()
  {
    if (!radioChecked('payment'))
    {
      alert(pls_select_payment);
      return false;
    }
    return true;
  }

  /**
   * 返回某 radio 是否被选中一个
   * @param string radioName
   */
  function radioChecked(radioName)
  {
    var eles = document.forms['theForm'].elements;

    for (var i = 0; i < eles.length; i++)
    {
      if (eles[i].name == radioName && eles[i].checked)
      {
        return true;
      }
    }
    return false;
  }

  /**
   * 按用户编号或用户名搜索用户
   */
  function searchUser()
  {
    var eles = document.forms['theForm'].elements;

    /* 填充列表 */
    var idName = Utils.trim(eles['keyword'].value);
    if (idName != '')
    {
      Ajax.call('order.php?act=search_users&id_name=' + idName, '', searchUserResponse, 'GET', 'JSON');
    }
  }

  function searchUserResponse(result)
  {
    if (result.message.length > 0)
    {
      alert(result.message);
    }

    if (result.error == 0)
    {
      var eles = document.forms['theForm'].elements;

      /* 清除列表 */
      var selLen = eles['user'].options.length;
      for (var i = selLen - 1; i >= 0; i--)
      {
        eles['user'].options[i] = null;
      }
      var arr = result.userlist;
      var userCnt = arr.length;

      for (var i = 0; i < userCnt; i++)
      {
        var opt = document.createElement('OPTION');
        opt.value = arr[i].user_id;
        opt.text = arr[i].user_name;
        eles['user'].options.add(opt);
      }
    }
  }

  /**
   * 按商品编号或商品名称或商品货号搜索商品
   */
  function searchGoods()
  {
    var eles = document.forms['goodsForm'].elements;

    /* 填充列表 */
    var keyword = Utils.trim(eles['keyword'].value);
    if (keyword != '')
    {
      Ajax.call('order.php?act=search_goods&keyword=' + keyword, '', searchGoodsResponse, 'GET', 'JSON');
    }
  }

  function searchGoodsResponse(result)
  {
    if (result.message.length > 0)
    {
      alert(result.message);
    }

    if (result.error == 0)
    {
      var eles = document.forms['goodsForm'].elements;

      /* 清除列表 */
      var selLen = eles['goodslist'].options.length;
      for (var i = selLen - 1; i >= 0; i--)
      {
        eles['goodslist'].options[i] = null;
      }

      var arr = result.goodslist;
      var goodsCnt = arr.length;
      if (goodsCnt > 0)
      {
        for (var i = 0; i < goodsCnt; i++)
        {
          var opt = document.createElement('OPTION');
          opt.value = arr[i].goods_id;
          opt.text = arr[i].name;
          eles['goodslist'].options.add(opt);
        }
        getGoodsInfo(arr[0].goods_id);
      }
      else
      {
        getGoodsInfo(0);
      }
    }
  }

  /**
   * 取得某商品信息
   * @param int goodsId 商品id
   */
  function getGoodsInfo(goodsId)
  {
    if (goodsId > 0)
    {
      Ajax.call('order.php?act=json&func=get_goods_info', 'goods_id=' + goodsId, getGoodsInfoResponse, 'get', 'json');
    }
    else
    {
      document.getElementById('goods_name').innerHTML = '';
      document.getElementById('goods_sn').innerHTML = '';
      document.getElementById('goods_cat').innerHTML = '';
      document.getElementById('goods_brand').innerHTML = '';
      document.getElementById('add_price').innerHTML = '';
      document.getElementById('goods_attr').innerHTML = '';
    }
  }
  function getGoodsInfoResponse(result)
  {
    var eles = document.forms['goodsForm'].elements;

    // 显示商品名称、货号、分类、品牌
    document.getElementById('goods_name').innerHTML = result.goods_name;
    document.getElementById('goods_sn').innerHTML = result.goods_sn;
    document.getElementById('goods_cat').innerHTML = result.cat_name;
    document.getElementById('goods_brand').innerHTML = result.brand_name;

    // 显示价格：包括市场价、本店价（促销价）、会员价
    var priceHtml = '<input type="radio" name="add_price" value="' + result.market_price + '" />市场价 [' + result.market_price + ']<br />' +
      '<input type="radio" name="add_price" value="' + result.goods_price + '" checked />本店价 [' + result.goods_price + ']<br />';
    for (var i = 0; i < result.user_price.length; i++)
    {
      priceHtml += '<input type="radio" name="add_price" value="' + result.user_price[i].user_price + '" />' + result.user_price[i].rank_name + ' [' + result.user_price[i].user_price + ']<br />';
    }
    priceHtml += '<input type="radio" name="add_price" value="user_input" />' + input_price + '<input type="text" name="input_price" value="" /><br />';
    document.getElementById('add_price').innerHTML = priceHtml;

    // 显示属性
    var specCnt = 0; // 规格的数量
    var attrHtml = '';
    var attrType = '';
    var attrTypeArray = '';
    var attrCnt = result.attr_list.length;
    for (i = 0; i < attrCnt; i++)
    {
      var valueCnt = result.attr_list[i].length;

      // 规格
      if (valueCnt > 1)
      {
        attrHtml += result.attr_list[i][0].attr_name + ': ';
        for (var j = 0; j < valueCnt; j++)
        {
          switch (result.attr_list[i][j].attr_type)
          {
            case '0' :
            case '1' :
              attrType = 'radio';
              attrTypeArray = '';
            break;

            case '2' :
              attrType = 'checkbox';
              attrTypeArray = '[]';
            break;
          }
          attrHtml += '<input type="' + attrType + '" name="spec_' + specCnt + attrTypeArray + '" value="' + result.attr_list[i][j].goods_attr_id + '"';
          if (j == 0)
          {
            attrHtml += ' checked';
          }
          attrHtml += ' />' + result.attr_list[i][j].attr_value;
          if (result.attr_list[i][j].attr_price > 0)
          {
            attrHtml += ' [+' + result.attr_list[i][j].attr_price + ']';
          }
          else if (result.attr_list[i][j].attr_price < 0)
          {
            attrHtml += ' [-' + Math.abs(result.attr_list[i][j].attr_price) + ']';
          }
        }
        attrHtml += '<br />';
        specCnt++;
      }
      // 属性
      else
      {
        attrHtml += result.attr_list[i][0].attr_name + ': ' + result.attr_list[i][0].attr_value + '<br />';
      }
    }
    eles['spec_count'].value = specCnt;
    document.getElementById('goods_attr').innerHTML = attrHtml;
  }

  /**
   * 把商品加入订单
   */
  function addToOrder()
  {
    var eles = document.forms['goodsForm'].elements;

    // 检查是否选择了商品
    if (eles['goodslist'].options.length <= 0)
    {
      alert(pls_search_goods);
      return false;
    }
    return true;
  }

  /**
   * 载入收货地址
   * @param int addressId 收货地址id
   */
  function loadAddress(addressId)
  {

    location.href += 'order.php?act=add&order_id=&step=&address_id=' + addressId;

  }
</script>


<div id="footer">
共执行 1 个查询，用时 0.009000 秒，Gzip 已禁用，内存占用 2.537 MB<br>
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