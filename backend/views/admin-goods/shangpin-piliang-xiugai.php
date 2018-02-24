<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0046)http://ec.com/admin/goods_batch.php?act=select -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 商品批量修改 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./shangpin-piliang-xiugai_files/general.css" rel="stylesheet" type="text/css">
<link href="./shangpin-piliang-xiugai_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./shangpin-piliang-xiugai_files/transport.js"></script><script type="text/javascript" src="./shangpin-piliang-xiugai_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var please_select_goods = "请您选择商品";
var please_input_sn = "请您输入商品货号";
var goods_cat_not_leaf = "请选择底级分类";
var please_select_cat = "请您选择所属分类";
var please_upload_file = "请您上传批量csv文件";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品批量修改 </span>
<div style="clear:both"></div>
</h1>
<div class="main-div">
  <form name="theForm" method="post" action="http://ec.com/admin/goods_batch.php?act=edit" onsubmit="return getGoodsIDs()">
  <table cellspacing="1" cellpadding="3" width="100%">
  <tbody><tr>
    <td class="narrow-label">选择商品的方式：</td>
    <td>
      <label><input name="select_method" id="sm_cat" type="radio" value="cat" checked="" onclick="toggleSelectMethod(this.value)">根据商品分类、品牌</label>
      <label><input name="select_method" id="sm_sn" type="radio" value="sn" onclick="toggleSelectMethod(this.value)">根据商品货号</label>    </td>
  </tr>
  <tr id="cat_1">
    <td class="narrow-label" id="cat_2">选择商品分类：</td>
    <td id="cat_3">&nbsp;<select name="cat" id="cat" onchange="getGoods()">
      <option value="0" selected="">请选择...</option><option value="6">手机配件</option><option value="9">&nbsp;&nbsp;&nbsp;&nbsp;电池</option><option value="11">&nbsp;&nbsp;&nbsp;&nbsp;读卡器和内存卡</option><option value="7">&nbsp;&nbsp;&nbsp;&nbsp;充电器</option><option value="8">&nbsp;&nbsp;&nbsp;&nbsp;耳机</option><option value="1">手机类型</option><option value="3">&nbsp;&nbsp;&nbsp;&nbsp;GSM手机</option><option value="4">&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option><option value="5">&nbsp;&nbsp;&nbsp;&nbsp;双模手机</option><option value="2">&nbsp;&nbsp;&nbsp;&nbsp;CDMA手机</option><option value="12">充值卡</option><option value="14">&nbsp;&nbsp;&nbsp;&nbsp;移动手机充值卡</option><option value="15">&nbsp;&nbsp;&nbsp;&nbsp;联通手机充值卡</option><option value="13">&nbsp;&nbsp;&nbsp;&nbsp;小灵通/固话充值卡</option>    </select></td>
  </tr>
  <tr id="cat_7">
    <td class="narrow-label" id="cat_8">选择商品品牌：</td>
    <td id="cat_9">&nbsp;<select name="brand" id="brand" onchange="getGoods()">
      <option value="0" selected="">请选择...</option>
      <option value="1">诺基亚</option><option value="10">金立</option><option value="9">联想</option><option value="8">LG</option><option value="7">索爱</option><option value="6">三星</option><option value="5">夏新</option><option value="4">飞利浦</option><option value="3">多普达</option><option value="2">摩托罗拉</option><option value="11">  恒基伟业</option>    </select></td>
  </tr>
  <tr id="cat_4">
    <td class="narrow-label" id="cat_5">商品列表：</td>
    <td valign="middle" id="cat_6">
      <table border="0" cellspacing="1" cellpadding="3">
      <tbody><tr>
        <td>待选列表：</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td>选定列表：</td>
      </tr>
      <tr>
        <td width="45%">
          <select name="srcList" size="10" multiple="" id="srcList" style="width: 100%" ondblclick="addGoods()"></select>
        </td>
        <td align="center" valign="middle"><input name="add" type="button" class="button" id="add" value="&gt;&gt;" onclick="addGoods()"><br>
          <input name="del" class="button" type="button" id="del" value="&lt;&lt;" onclick="delGoods()"></td>
        <td width="45%">
          <select name="destList" size="10" multiple="" id="destList" style="width: 100%" ondblclick="delGoods()"></select>
        </td>
      </tr>
      </tbody></table>
    </td>
  </tr>
  <tr style="display:none" id="sn_1">
    <td class="narrow-label" style="display:none" id="sn_2">输入商品货号：<br>（每行一个）</td>
    <td style="display:none" id="sn_3"><textarea name="sn_list" rows="10" cols="40" id="sn_list"></textarea></td>
  </tr>
  <tr>
    <td class="narrow-label">编辑方式：</td>
    <td>
      <label><input name="edit_method" type="radio" value="each" checked="">
      逐个编辑</label>
      <label><input type="radio" name="edit_method" value="all">统一编辑</label>    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" value="进入编辑" class="button">
      <input type="hidden" name="goods_ids" value=""></td>
  </tr>
  </tbody></table>
  </form>

</div>


<script language="JavaScript">
  var ele = document.forms['theForm'].elements;

  onload = function()
  {
    // 开始检查订单
      startCheckOrder();
  }

  /**
   * 切换选择商品方式：
   * @param: method 当前方式 cat sn
   */
  function toggleSelectMethod(method)
  {
    if (method == 'cat')
    {
        var catDisplay = '';
        var snDisplay = 'none';
    }
    else
    {
        var catDisplay = 'none';
        var snDisplay = '';
    }

    for (var i = 1; i <= 9; i++)
    {
       document.getElementById('cat_' + i).style.display = catDisplay;
    }
    for (var i = 1; i <= 3; i++)
    {
       document.getElementById('sn_' + i).style.display = snDisplay;
    }
  }

  /**
   * 取得商品
   */
  function getGoods()
  {
      var catId   = ele['cat'].value;
      var brandId = ele['brand'].value;
      if (catId > 0 || brandId > 0)
      {
          Ajax.call('goods_batch.php?is_ajax=1&act=get_goods', "cat_id="+catId+"&brand_id="+brandId, getGoodsResponse, "GET", "JSON");
      }
      else
      {
          ele['srcList'].options.length = 0;
      }
  }

  function getGoodsResponse(result)
  {
    if (result.error == 0)
    {
      ele['srcList'].options.length = 0;

      for (var i = 0; i < result.content.length; i++)
      {
        var opt = document.createElement('OPTION');
        opt.value = result.content[i].goods_id;
        opt.text = result.content[i].goods_name;
        ele['srcList'].options.add(opt);
      }
    }
  }

  /**
   * 添加商品
   */
  function addGoods()
  {
      var src = document.getElementById('srcList');
      var dest = document.getElementById('destList');

      for (var i = 0; i < src.options.length; i++)
      {
          if (src.options[i].selected)
          {
              var exist = false;
              for (var j = 0; j < dest.options.length; j++)
              {
                  if (dest.options[j].value == src.options[i].value)
                  {
                      exist = true;
                      break;
                  }
              }
              if (!exist)
              {
                  var opt = document.createElement('OPTION');
                  opt.value = src.options[i].value;
                  opt.text = src.options[i].text;
                  dest.options.add(opt);
              }
          }
      }
  }

  /**
   * 删除商品
   */
  function delGoods()
  {
      var dest = document.getElementById('destList');

      for (var i = dest.options.length - 1; i >= 0 ; i--)
      {
          if (dest.options[i].selected)
          {
              dest.options[i] = null;
          }
      }
  }

  /**
   * 取得选择的商品id，赋值给隐藏变量。同时检查是否选择或输入了商品
   */
  function getGoodsIDs()
  {
      if (document.getElementById('sm_cat').checked)
      {
          var idArr = new Array();
          var dest = document.getElementById('destList');
          for (var i = 0; i < dest.options.length; i++)
          {
              idArr.push(dest.options[i].value);
          }
          if (idArr.length <= 0)
          {
              alert(please_select_goods);
              return false;
          }
          else
          {
              document.forms['theForm'].elements['goods_ids'].value = idArr.join(',');
              return true;
          }
      }
      else
      {
          if (document.forms['theForm'].elements['sn_list'].value == '')
          {
              alert(please_input_sn);
              return false;
          }
          else
          {
              return true;
          }
      }
  }
</script>

<div id="footer">
共执行 2 个查询，用时 0.008000 秒，Gzip 已禁用，内存占用 1.323 MB<br>
版权所有 © 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
<script type="text/javascript" src="./shangpin-piliang-xiugai_files/utils.js"></script><!-- 新订单提示信息 -->
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