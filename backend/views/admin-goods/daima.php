<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0050)http://ec.com/admin/gen_goods_script.php?act=setup -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 生成商品代码 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./daima_files/general.css" rel="stylesheet" type="text/css">
<link href="./daima_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./daima_files/transport.js"></script><script type="text/javascript" src="./daima_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var goods_num_must_be_int = "商品数量应该是整数";
var goods_num_must_over_0 = "商品数量应该大于0";
var rows_num_must_be_int = "排列显示条目数应该是整数";
var rows_num_must_over_0 = "排列显示条目数应该大于0";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 生成商品代码 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="./daima_files/utils.js"></script><div class="main-div">
<form name="theForm" method="post" action="">
  <table cellspacing="1" cellpadding="3" width="100%">
    <tbody><tr>
      <td class="label">选择商品分类：</td>
      <td><select name="category" id="category">
        <option value="0" selected="">所有分类</option>
        <option value="6">手机配件</option><option value="9">&nbsp;&nbsp;&nbsp;&nbsp;电池</option><option value="11">&nbsp;&nbsp;&nbsp;&nbsp;读卡器和内存卡</option><option value="7">&nbsp;&nbsp;&nbsp;&nbsp;充电器</option><option value="8">&nbsp;&nbsp;&nbsp;&nbsp;耳机</option><option value="1">手机类型</option><option value="3">&nbsp;&nbsp;&nbsp;&nbsp;GSM手机</option><option value="4">&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option><option value="5">&nbsp;&nbsp;&nbsp;&nbsp;双模手机</option><option value="2">&nbsp;&nbsp;&nbsp;&nbsp;CDMA手机</option><option value="12">充值卡</option><option value="14">&nbsp;&nbsp;&nbsp;&nbsp;移动手机充值卡</option><option value="15">&nbsp;&nbsp;&nbsp;&nbsp;联通手机充值卡</option><option value="13">&nbsp;&nbsp;&nbsp;&nbsp;小灵通/固话充值卡</option>      </select></td>
    </tr>
    <tr>
      <td class="label">选择商品品牌：</td>
      <td><select name="brand" id="brand">
        <option value="0" selected="">所有品牌</option>
        <option value="1">诺基亚</option><option value="10">金立</option><option value="9">联想</option><option value="8">LG</option><option value="7">索爱</option><option value="6">三星</option><option value="5">夏新</option><option value="4">飞利浦</option><option value="3">多普达</option><option value="2">摩托罗拉</option><option value="11">  恒基伟业</option>      </select></td>
    </tr>
    <tr>
      <td class="label">选择推荐类型：</td>
      <td><select name="intro_type" id="intro_type">
        <option value="all" selected="">所有推荐类型</option>
        <option value="is_best">精品</option><option value="is_new">新品</option><option value="is_hot">热销</option><option value="is_promote">特价</option><option value="is_random">随机</option>      </select></td>
    </tr>
    <tr>
      <td class="label">是否显示商品图片：</td>
      <td>        <label>
        <select name="need_image" id="need_image">
          <option value="true" selected="">显示</option>
          <option value="false">不显示</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td class="label">显示商品数量：</td>
      <td><input name="goods_num" type="text" id="goods_num" value="1"></td>
    </tr>
    <tr>
      <td class="label">选择商品排列方式：</td>
      <td><select name="arrange" id="arrange">
        <option value="h" selected="">横排</option>
        <option value="v">竖排</option>
      </select></td>
    </tr>
    <tr>
      <td class="label">排列显示条目数：</td>
      <td><input name="rows_num" type="text" id="rows_num" value="1"></td>
    </tr>
    <tr>
      <td class="label">选择编码：</td>
      <td><select name="charset" id="charset">
        <option value="UTF8">国际化编码（utf8）</option><option value="GB2312">简体中文</option><option value="BIG5">繁体中文</option>      </select></td>
    </tr>
    <tr>
      <td class="label">引用站点名称：</td>
      <td><input name="sitename" type="text" id="sitename"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="button" class="button" name="gen_code" value="生成代码" onclick="genCode()">        </td>
      </tr>
    <tr>
      <td colspan="2" align="center"><textarea name="code" cols="80" rows="5" id="code"></textarea></td>
      </tr>
  </tbody></table>
</form>
</div>
<script language="JavaScript">
    var elements = document.forms['theForm'].elements;
    var url = 'http://ec.com/';

    onload = function()
    {
      // 开始检查订单
      startCheckOrder();
    }
    /**
     * 生成代码
     */
    function genCode()
    {
        // 检查输入
        if (isNaN(parseInt(elements['goods_num'].value)))
        {
            alert(goods_num_must_be_int);
            return;
        }
        if (elements['goods_num'].value < 1)
        {
            alert(goods_num_must_over_0);
            return;
        }
        if (isNaN(parseInt(elements['rows_num'].value)))
        {
            alert(rows_num_must_be_int);
            return;
        }
        if (elements['rows_num'].value < 1)
        {
            alert(rows_num_must_over_0);
            return;
        }

        // 生成代码
        var code = '\<script src=\"' + url + 'goods_script.php?';
        if (elements['category'].value > 0)
        {
            code += 'cat_id=' + elements['category'].value + '&';
        }
        if (elements['brand'].value > 0)
        {
            code += 'brand_id=' + elements['brand'].value + '&';
        }
        if (elements['intro_type'].value != 'all')
        {
            code += 'intro_type=' + elements['intro_type'].value + '&';
        }
        code += 'need_image=' + elements['need_image'].value + '&';
        code += 'goods_num=' + elements['goods_num'].value + '&';
        code += 'arrange=' + elements['arrange'].value + '&';
        code += 'rows_num=' + elements['rows_num'].value + '&';
        code += 'charset=' + elements['charset'].value + '&';
        code += 'sitename=' + encodeURI(elements['sitename'].value);
        code += '\"\>\</script\>';
        elements['code'].value = code;
        elements['code'].select();
        if (Browser.isIE)
        {
            window.clipboardData.setData("Text",code);
        }
    }
</script>

<div id="footer">
共执行 2 个查询，用时 0.040002 秒，Gzip 已禁用，内存占用 1.058 MB<br>
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