<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0042)http://ec.com/admin/flashplay.php?act=list -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 首页主广告管理 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./shouyezhu-guanggao-guanli_files/general.css" rel="stylesheet" type="text/css">
<link href="./shouyezhu-guanggao-guanli_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./shouyezhu-guanggao-guanli_files/transport.js"></script><script type="text/javascript" src="./shouyezhu-guanggao-guanli_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var setupConfirm = "启用新的Flash样式将覆盖原来的样式。\n您确定要启用选定的样式吗？";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 首页主广告管理 </span>
<div style="clear:both"></div>
</h1>
<div class="tab-div">
  <!-- tab bar -->
  <div id="custabbar-div">
    <p>
                  <span class="custab-front" id="sys-tab">系统默认</span>
                        <span class="custab-back" id="cus-tab" onclick="javascript:location.href=&#39;flashplay.php?act=custom_list&#39;;">自定义</span>
                </p>
  </div>

  <script language="javascript">
  /**
   * 标签上鼠标移动事件的处理函数
   * @return
   */
  document.getElementById("custabbar-div").onmouseover = function(e)
  {
    var obj = Utils.srcElement(e);

    if (obj.className == "custab-back")
    {
      obj.className = "custab-hover";
    }
  }

  document.getElementById("custabbar-div").onmouseout = function(e)
  {
    var obj = Utils.srcElement(e);

    if (obj.className == "custab-hover")
    {
      obj.className = "custab-back";
    }
  }
  </script>  <!-- body -->
  <div class="tab-body">
  <div class="list-div list-div-ad" id="listDiv">
  <table cellspacing="1" cellpadding="3" id="list-table" width="70%">
    <tbody><tr>
      <th width="400px">轮播图片地址</th>
    <th>轮播图片链接</th>
      <th>图片说明</th>
      <th>排序</th>
    <th width="70px">操作</th>
    </tr>
      </tbody></table>
  <table cellspacing="0">
    <tbody><tr>
      <td>
        <input name="add" type="submit" id="btnSubmit" value="添加图片" onclick="location.href=&#39;flashplay.php?act=add&#39;;" class="button">
      </td>
    </tr>
  </tbody></table>
  </div>
  <div class="list-div list-div-ad" style="margin-top:15px;">
  <table>
  <tbody><tr><th>可用Flash轮播图片样式</th></tr>
  <tr>
      <td>  <table style="float:left;width: 220px;">
  <tbody><tr>
    <td><strong><center>Default&nbsp;</center></strong></td>
  </tr>
  <tr>
    <td><img src="./shouyezhu-guanggao-guanli_files/preview.jpg" border="0" style="cursor:pointer" onclick="setupFlashTpl(&#39;default&#39;, this)"></td>
  </tr>
  <tr>
    <td valign="top">The default flash cycle.</td>
  </tr>
  </tbody></table>
    <table style="float:left;width: 220px;">
  <tbody><tr>
    <td><strong><center>Dynamic Focus&nbsp;<span style="color:red;" id="current_theme">当前样式</span></center></strong></td>
  </tr>
  <tr>
    <td><img src="./shouyezhu-guanggao-guanli_files/preview(1).jpg" border="0" style="cursor:pointer" onclick="setupFlashTpl(&#39;dynfocus&#39;, this)"></td>
  </tr>
  <tr>
    <td valign="top">动感聚焦Flash图片轮播</td>
  </tr>
  </tbody></table>
    <table style="float:left;width: 220px;">
  <tbody><tr>
    <td><strong><center>Pink Focus&nbsp;</center></strong></td>
  </tr>
  <tr>
    <td><img src="./shouyezhu-guanggao-guanli_files/preview(2).jpg" border="0" style="cursor:pointer" onclick="setupFlashTpl(&#39;pinkfocus&#39;, this)"></td>
  </tr>
  <tr>
    <td valign="top">粉红聚焦Flash图片轮播</td>
  </tr>
  </tbody></table>
    <table style="float:left;width: 220px;">
  <tbody><tr>
    <td><strong><center>Red Focus&nbsp;</center></strong></td>
  </tr>
  <tr>
    <td><img src="./shouyezhu-guanggao-guanli_files/preview(3).jpg" border="0" style="cursor:pointer" onclick="setupFlashTpl(&#39;redfocus&#39;, this)"></td>
  </tr>
  <tr>
    <td valign="top">红色聚焦Flash图片轮播</td>
  </tr>
  </tbody></table>
  </td>
  </tr>
  </tbody></table>
  </div>
  </div>

</div>
<script language="JavaScript">
<!--
onload = function()
{
    // 开始检查订单
    startCheckOrder();
}
function check_del()
{
  if (confirm('您要删除这张轮播图片么？'))
  {
    return true;
  }
  else
  {
    return false;
  }
}

/**
 * 安装Flash样式模板
 */
function setupFlashTpl(tpl, obj)
{
    window.current_tpl_obj = obj;
    if (confirm(setupConfirm))
    {
        Ajax.call('flashplay.php?is_ajax=1&act=install', 'flashtpl=' + tpl, setupFlashTplResponse, 'GET', 'JSON');
    }
}

function setupFlashTplResponse(result)
{
    if (result.message.length > 0)
    {
        alert(result.message);
    }

    if (result.error == 0)
    {
        var tmp_obj = window.current_tpl_obj.parentNode.parentNode.previousSibling;
        while (tmp_obj.nodeName.toLowerCase() != 'tr')
        {
            tmp_obj = tmp_obj.previousSibling;
        }
        tmp_obj = tmp_obj.getElementsByTagName('center');
        tmp_obj[0].appendChild(document.getElementById('current_theme'));
    }
    
}
//-->
</script>

<div id="footer">
共执行 1 个查询，用时 0.007000 秒，Gzip 已禁用，内存占用 1.154 MB<br>
版权所有 © 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
<script type="text/javascript" src="./shouyezhu-guanggao-guanli_files/utils.js"></script><!-- 新订单提示信息 -->
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