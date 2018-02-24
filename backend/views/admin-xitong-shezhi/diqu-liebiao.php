<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0044)http://ec.com/admin/area_manage.php?act=list -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 地区列表 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./diqu-liebiao_files/general.css" rel="stylesheet" type="text/css">
<link href="./diqu-liebiao_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./diqu-liebiao_files/transport.js"></script><script type="text/javascript" src="./diqu-liebiao_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var region_name_empty = "您必须输入地区的名称!";
var option_name_empty = "必须输入调查选项名称!";
var drop_confirm = "您确定要删除这条记录吗?";
var drop = "删除";
var country = "一级地区";
var province = "二级地区";
var city = "三级地区";
var cantonal = "四级地区";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 地区列表 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="./diqu-liebiao_files/utils.js"></script><script type="text/javascript" src="./diqu-liebiao_files/listtable.js"></script><div class="form-div">
<form method="post" action="http://ec.com/admin/area_manage.php" name="theForm" onsubmit="return add_area()">
新增一级地区:
<input type="text" name="region_name" maxlength="150" size="40">
<input type="hidden" name="region_type" value="0">
<input type="hidden" name="parent_id" value="0">
<input type="submit" value=" 确定 " class="button">
</form>
</div>

<!-- start category list -->
<div class="list-div">
<table cellspacing="1" cellpadding="3" id="listTable">
  <tbody><tr>
    <th>一级地区</th>
  </tr>
</tbody></table>
</div>
<div class="list-div" id="listDiv">

<table cellspacing="1" cellpadding="3" id="listTable">
  <tbody><tr>
                <td class="first-cell" align="left">
       <span onclick="listTable.edit(this, &#39;edit_area_name&#39;, &#39;1&#39;); return false;">中国</span>
       <span class="link-span">
              <a href="http://ec.com/admin/area_manage.php?act=list&amp;type=&amp;pid=1" title="管理">
         管理</a>&nbsp;&nbsp;
              <a href="javascript:listTable.remove(1, &#39;如果订单或用户默认配送方式中使用以下地区，这些地区信息将显示为空。您确认要删除这条记录吗?&#39;, &#39;drop_area&#39;)" title="删除">删除</a>
       </span>
      </td>
      </tr>
</tbody></table>

</div>


<script language="JavaScript">
<!--

onload = function() {
  document.forms['theForm'].elements['region_name'].focus();
  // 开始检查订单
  startCheckOrder();
}

/**
 * 新建区域
 */
function add_area()
{
    var region_name = Utils.trim(document.forms['theForm'].elements['region_name'].value);
    var region_type = Utils.trim(document.forms['theForm'].elements['region_type'].value);
    var parent_id   = Utils.trim(document.forms['theForm'].elements['parent_id'].value);

    if (region_name.length == 0)
    {
        alert(region_name_empty);
    }
    else
    {
      Ajax.call('area_manage.php?is_ajax=1&act=add_area',
        'parent_id=' + parent_id + '&region_name=' + region_name + '&region_type=' + region_type,
        listTable.listCallback, 'POST', 'JSON');
    }

    return false;
}

//-->
</script>


<div id="footer">
共执行 2 个查询，用时 0.013000 秒，Gzip 已禁用，内存占用 1.051 MB<br>
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