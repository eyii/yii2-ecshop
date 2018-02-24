<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0046)http://ec.com/admin/mail_template.php?act=list -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 邮件模板 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./youjian-moban_files/general.css" rel="stylesheet" type="text/css">
<link href="./youjian-moban_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./youjian-moban_files/transport.js"></script><script type="text/javascript" src="./youjian-moban_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var save_confirm = "您已经修改了模板内容，您确定不保存么？";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 邮件模板 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="./youjian-moban_files/utils.js"></script><script type="text/javascript" src="./youjian-moban_files/listtable.js"></script>
<div class="form-div" id="conent_area">

<form method="post" name="theForm" action="http://ec.com/admin/mail_template.php?act=save_template">

  <table id="general-table" align="center">
  <tbody><tr>
    <td style="font-weight: bold; " width="15%">请选择邮件模版：</td>
    <td>
      <select id="selTemplate" onchange="loadTemplate()">
        <option value="1" selected="">发送密码模板 [send_password]</option><option value="2">订单确认模板 [order_confirm]</option><option value="3">发货通知模板 [deliver_notice]</option><option value="4">订单取消模板 [order_cancel]</option><option value="5">订单无效模板 [order_invalid]</option><option value="6">发送红包模板 [send_bonus]</option><option value="7">团购商品模板 [group_buy]</option><option value="8">邮件验证模板 [register_validate]</option><option value="9">虚拟卡片模板 [virtual_card]</option><option value="10">关注管理&nbsp;&nbsp;&nbsp; [attention_list]</option><option value="11">新订单提醒模板 [remind_of_new_order]</option><option value="12">缺货回复模板 [goods_booking]</option><option value="13">留言回复模板 [user_message]</option><option value="14">用户评论回复模板 [recomment]</option>      </select>
    </td>
  </tr>
  <tr>
    <td style="font-weight: bold; " width="15%">邮件主题:</td>
    <td><input type="text" name="subject" id="subject" style="width: 300px" value="密码找回"></td>
  </tr>
  <tr>
    <td style="font-weight: bold">邮件类型:</td>
    <td>
      <input type="radio" name="mail_type" value="0" onclick="javascript:change_editor();">纯文本邮件      <input type="radio" name="mail_type" value="1" checked="true" onclick="javascript:change_editor();">HTML 邮件
      <input type="hidden" name="tpl" value="1">
    </td>
  </tr>
  <tr>
    <td colspan="2">                      <input type="hidden" id="content" name="content" value="{$user_name}您好！&lt;br&gt;
&lt;br&gt;
您已经进行了密码重置的操作，请点击以下链接(或者复制到您的浏览器):&lt;br&gt;
&lt;br&gt;
&lt;a href=&quot;{$reset_email}&quot; target=&quot;_blank&quot;&gt;{$reset_email}&lt;/a&gt;&lt;br&gt;
&lt;br&gt;
以确认您的新密码重置操作！&lt;br&gt;
&lt;br&gt;
{$shop_name}&lt;br&gt;
{$send_date}" style="display:none"><input type="hidden" id="content___Config" value="" style="display:none"><iframe id="content___Frame" src="./youjian-moban_files/fckeditor.html" width="100%" height="320" frameborder="0" scrolling="no" style="margin: 0px; padding: 0px; border: 0px; width: 100%; height: 320px; background-image: none; background-color: transparent;"></iframe>                    </td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" value=" 确定 " class="button"></td>
  </tr>
  </tbody></table>
</form>


</div>

<script language="JavaScript">


var orgContent = '';

/* 定义页面状态变量 */
var STATUS_is_html = 1; //文本邮件|HTML邮件

/**
 * 修改页面状态变量
 */
function update_page_status_variables()
{
  var em = document.forms['theForm'].elements;

  /* STATUS_is_html */
  var em_radio = em['mail_type'];

  for (i = 0; i < em_radio.length; i++)
  {
    if (em_radio[i].checked)
    {
      STATUS_is_html = em_radio[i].value;

      break;
    }
  }
}

onload = function()
{
    document.getElementById('selTemplate').focus();
    document.forms['theForm'].reset();
    // 开始检查订单
    startCheckOrder();
}

/**
 * 载入模板
 */
function loadTemplate()
{
  curContent = document.getElementById('content').value;

  if (orgContent != curContent && orgContent != '')
  {
    if (!confirm(save_confirm))
    {
      return;
    }
  }

  var tpl = document.getElementById('selTemplate').value;

  Ajax.call('mail_template.php?is_ajax=1&act=loat_template', 'tpl=' + tpl, loadTemplateResponse, "GET", "JSON");
}

/**
 * 更改邮件类型
 */
function change_editor()
{
  var em = document.forms['theForm'].elements;

  //取单选框 mail_type 的当前选中值
  var em_radio = em['mail_type'];

  for (i = 0; i < em_radio.length; i++)
  {
    if (em_radio[i].checked)
    {
      type = em_radio[i].value;

      break;
    }
  }

  //如果 onclick 是当前选中的单选框
  if (STATUS_is_html == type)
  {
    return; //返回空值
  }

  var tpl = document.getElementById('selTemplate').value;

  Ajax.call('mail_template.php?is_ajax=1&act=loat_template&mail_type=' + type, 'tpl=' + tpl, loadTemplateResponse, "GET", "JSON");
}

/**
 * 将模板的内容载入到文本框中
 */
function loadTemplateResponse(result, textResult)
{
  if (result.error == 0)
  {
    document.getElementById('conent_area').innerHTML = result.content;

    orgContent = '';
  }

  update_page_status_variables();

  if (result.message.length > 0)
  {
    alert(result.message);
  }
}

/**
 * 保存模板内容
 */
function saveTemplate()
{
    var selTemp = document.getElementById('selTemplate').value;
    var subject = document.getElementById('subject').value;
    var content = document.getElementById('content').value;
    var type    = 0;
    var em      = document.forms['theForm'].elements;

    for (i = 0; i < em.length; i++)
    {
        if (em[i].type == 'radio' && em[i].name == 'mail_type' && em[i].checked)
        {
            type = em[i].value;
        }
    }

    Ajax.call('mail_template.php?is_ajax=1&act=save_template', 'tpl=' + selTemp + "&subject=" + subject + "&content=" + content + "&is_html=" + type, saveTemplateResponse, "POST", "JSON");
}

/**
 * 提示用户保存成功或失败
 */
function saveTemplateResponse(result)
{
  if (result.error == 0)
  {
    orgContent = document.getElementById('content').value;
  }
  else
  {
    document.getElementById('content').value = orgContent;
  }

  if (result.message.length > 0)
  {
    alert(result.message);
  }
}

</script>
<div id="footer">
共执行 3 个查询，用时 0.026001 秒，Gzip 已禁用，内存占用 1.075 MB<br>
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


<iframe src="javascript:void(0)" frameborder="0" scrolling="no" style="margin: 0px; padding: 0px; border: 0px; height: 0px; width: 0px; position: absolute; z-index: 10000; background-image: none; background-color: transparent;"></iframe><iframe src="javascript:void(0)" frameborder="0" scrolling="no" style="margin: 0px; padding: 0px; border: 0px; height: 0px; width: 0px; position: absolute; z-index: 10000; background-image: none; background-color: transparent;"></iframe><iframe src="javascript:void(0)" frameborder="0" scrolling="no" style="margin: 0px; padding: 0px; border: 0px; height: 0px; width: 0px; position: absolute; z-index: 10000; background-image: none; background-color: transparent;"></iframe><iframe src="javascript:void(0)" frameborder="0" scrolling="no" style="margin: 0px; padding: 0px; border: 0px; height: 0px; width: 0px; position: absolute; z-index: 10000; background-image: none; background-color: transparent;"></iframe><iframe src="javascript:void(0)" frameborder="0" scrolling="no" style="margin: 0px; padding: 0px; border: 0px; height: 0px; width: 0px; position: absolute; z-index: 10000; background-image: none; background-color: transparent;"></iframe></body><script>window.FCKeditorAPI = {Version : "2.6.3",VersionBuild : "19836",Instances : new Object(),GetInstance : function( name ){return this.Instances[ name ];},_FormSubmit : function(){for ( var name in FCKeditorAPI.Instances ){var oEditor = FCKeditorAPI.Instances[ name ] ;if ( oEditor.GetParentForm && oEditor.GetParentForm() == this )oEditor.UpdateLinkedField() ;}this._FCKOriginalSubmit() ;},_FunctionQueue	: {Functions : new Array(),IsRunning : false,Add : function( f ){this.Functions.push( f );if ( !this.IsRunning )this.StartNext();},StartNext : function(){var aQueue = this.Functions ;if ( aQueue.length > 0 ){this.IsRunning = true;aQueue[0].call();}else this.IsRunning = false;},Remove : function( f ){var aQueue = this.Functions;var i = 0, fFunc;while( (fFunc = aQueue[ i ]) ){if ( fFunc == f )aQueue.splice( i,1 );i++ ;}this.StartNext();}}}</script></html>