<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0041)http://ec.com/admin/template.php?act=list -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 模板管理 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./moban-guanli_files/general.css" rel="stylesheet" type="text/css">
<link href="./moban-guanli_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./moban-guanli_files/transport.js"></script><script type="text/javascript" src="./moban-guanli_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var setupConfirm = "启用新的模板将覆盖原来的模板。\n您确定要启用选定的模板吗？";
var reinstall = "重新安装当前模板";
var selectPlease = "请选择...";
var removeConfirm = "您确定要删除选定的内容吗？";
var empty_content = "对不起，库项目的内容不能为空。";
var save_confirm = "您已经修改了模板内容，您确定不保存么？";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 模板管理 </span>
<div style="clear:both"></div>
</h1>
<!-- start templates list -->
<div class="list-div">
  <table width="100%" cellpadding="3" cellspacing="1">
  <tbody><tr><th>当前模板</th></tr>
  <tr><td>
    <table>
      <tbody><tr>
        <td width="250" align="center"><img id="screenshot" src="./moban-guanli_files/screenshot.png"></td>
        <td valign="top"><strong><span id="templateName">ECSHOP Default</span></strong> v<span id="templateVersion">2.7.2</span><br>
          <span id="templateAuthor"><a href="http://www.ecshop.com/" target="_blank">ECSHOP Team</a></span><br>
          <span id="templateDesc">默认升级版2222.</span><br>
          <span><input class="button" onclick="backupTemplate(&#39;default&#39;)" value="备份当前模板" type="button" id="backup"></span>
          <div id="CurrTplStyleList">
                        <span style="cursor:pointer;" onmouseover="javascript:onSOver(&#39;screenshot&#39;, &#39;&#39;, this);" onmouseout="onSOut(&#39;screenshot&#39;, this, &#39;../themes/default/images/screenshot.png&#39;);" onclick="javascript:setupTemplateFG(&#39;default&#39;, &#39;&#39;, &#39;&#39;);" id="templateType_"><img src="./moban-guanli_files/type_1.gif" border="0"></span>
                                <span style="cursor:pointer;" onmouseover="javascript:onSOver(&#39;screenshot&#39;, &#39;coffee&#39;, this);" onmouseout="onSOut(&#39;screenshot&#39;, this, &#39;../themes/default/images/screenshot.png&#39;);" onclick="javascript:setupTemplateFG(&#39;default&#39;, &#39;coffee&#39;, &#39;&#39;);" id="templateType_coffee"><img src="./moban-guanli_files/typecoffee_0.gif" border="0"></span>
                                <span style="cursor:pointer;" onmouseover="javascript:onSOver(&#39;screenshot&#39;, &#39;green&#39;, this);" onmouseout="onSOut(&#39;screenshot&#39;, this, &#39;../themes/default/images/screenshot.png&#39;);" onclick="javascript:setupTemplateFG(&#39;default&#39;, &#39;green&#39;, &#39;&#39;);" id="templateType_green"><img src="./moban-guanli_files/typegreen_0.gif" border="0"></span>
                                <span style="cursor:pointer;" onmouseover="javascript:onSOver(&#39;screenshot&#39;, &#39;pink&#39;, this);" onmouseout="onSOut(&#39;screenshot&#39;, this, &#39;../themes/default/images/screenshot.png&#39;);" onclick="javascript:setupTemplateFG(&#39;default&#39;, &#39;pink&#39;, &#39;&#39;);" id="templateType_pink"><img src="./moban-guanli_files/typepink_0.gif" border="0"></span>
                        </div>
        </td></tr>
    </tbody></table>
  </td></tr>
  <tr><th>可用模板</th></tr>
  <tr><td>
    <div style="display:-moz-inline-stack;display:inline-block;vertical-align:top;zoom:1;*display:inline;">
    <table style="width: 220px;">
      <tbody><tr>
        <td><strong><a href="http://www.ecshop.com/" target="_blank">ECSHOP Default</a></strong></td>
      </tr>
      <tr>
        <td><img src="./moban-guanli_files/screenshot.png" border="0" style="cursor:pointer; float:left; margin:0 2px;display:block;" id="default" onclick="javascript:setupTemplate(&#39;default&#39;)"></td>
      </tr>
      <tr>
        <td valign="top">
                         <img src="./moban-guanli_files/type_0.gif" border="0" style="cursor:pointer; float:left; margin:0 2px;" onmouseover="javascript:onSOver(&#39;default&#39;, &#39;&#39;, this);" onmouseout="onSOut(&#39;default&#39;, this, &#39;&#39;);" onclick="javascript:setupTemplateFG(&#39;default&#39;, &#39;&#39;, this);">
                                 <img src="./moban-guanli_files/typecoffee_0.gif" border="0" style="cursor:pointer; float:left; margin:0 2px;" onmouseover="javascript:onSOver(&#39;default&#39;, &#39;coffee&#39;, this);" onmouseout="onSOut(&#39;default&#39;, this, &#39;&#39;);" onclick="javascript:setupTemplateFG(&#39;default&#39;, &#39;coffee&#39;, this);">
                                 <img src="./moban-guanli_files/typegreen_0.gif" border="0" style="cursor:pointer; float:left; margin:0 2px;" onmouseover="javascript:onSOver(&#39;default&#39;, &#39;green&#39;, this);" onmouseout="onSOut(&#39;default&#39;, this, &#39;&#39;);" onclick="javascript:setupTemplateFG(&#39;default&#39;, &#39;green&#39;, this);">
                                 <img src="./moban-guanli_files/typepink_0.gif" border="0" style="cursor:pointer; float:left; margin:0 2px;" onmouseover="javascript:onSOver(&#39;default&#39;, &#39;pink&#39;, this);" onmouseout="onSOut(&#39;default&#39;, this, &#39;&#39;);" onclick="javascript:setupTemplateFG(&#39;default&#39;, &#39;pink&#39;, this);">
                        </td>
      </tr>
      <tr>
        <td valign="top">默认升级版2222.</td>
      </tr>
    </tbody></table>
    </div>
    <div style="display:-moz-inline-stack;display:inline-block;vertical-align:top;zoom:1;*display:inline;">
    <table style="width: 220px;">
      <tbody><tr>
        <td><strong><a href="http://www.ecshop.com/" target="_blank">ECSHOP Default</a></strong></td>
      </tr>
      <tr>
        <td><img src="./moban-guanli_files/screenshot(1).png" border="0" style="cursor:pointer; float:left; margin:0 2px;display:block;" id="default_old" onclick="javascript:setupTemplate(&#39;default_old&#39;)"></td>
      </tr>
      <tr>
        <td valign="top">
                                </td>
      </tr>
      <tr>
        <td valign="top">The default ECSHOP template.</td>
      </tr>
    </tbody></table>
    </div>
    </td></tr>
  </tbody></table>
</div>
<!-- end templates list -->

<script language="JavaScript">
<!--


/**
 * 模板风格 全局变量
 */
var T = 0;
var StyleSelected = '';
var StyleCode = '';
var StyleTem = '';
/**
 * 载入页面 初始化
 */
onload = function()
{
  // 开始检查订单
  startCheckOrder();
}

/**
 * 安装模版
 */
function setupTemplate(tpl)
{
  if (tpl != StyleTem)
  {
    StyleCode = '';
  }
  if (confirm(setupConfirm))
  {
    Ajax.call('template.php?is_ajax=1&act=install', 'tpl_name=' + tpl + '&tpl_fg='+ StyleCode, setupTemplateResponse, 'GET', 'JSON');
  }
}

/**
 * 处理安装模版的反馈信息
 */
function setupTemplateResponse(result)
{
    StyleCode = '';
  if (result.message.length > 0)
  {
    alert(result.message);
  }
  if (result.error == 0)
  {
    showTemplateInfo(result.content);
  }
}

/**
 * 备份当前模板
 */
function backupTemplate(tpl)
{
  Ajax.call('template.php?is_ajax=1&act=backup', 'tpl_name=' + tpl, backupTemplateResponse, "GET", "JSON");
}

function backupTemplateResponse(result)
{
  if (result.message.length>0)
  {
    alert(result.message);
  }

  if (result.error == 0)
  {
    location.href = result.content;
  }
}

/**
 * 显示模板信息
 */
function showTemplateInfo(res)
{
  document.getElementById("CurrTplStyleList").innerHTML = res.tpl_style;

  StyleSelected = res.stylename;

  document.getElementById("screenshot").src = res.screenshot;
  document.getElementById("templateName").innerHTML    = res.name;
  document.getElementById("templateDesc").innerHTML    = res.desc;
  document.getElementById("templateVersion").innerHTML = res.version;
  document.getElementById("templateAuthor").innerHTML  = '<a href="' + res.uri + '" target="_blank">' + res.author + '</a>';
  document.getElementById("backup").onclick = function () {backupTemplate(res.code);};
}

/**
 * 模板风格 切换
 */
function onSOver(tplid, fgid, _self)
{
  var re = /(\/|\\)([^\/\\])+\.png$/;
  var img_url = document.getElementById(tplid).src;
  StyleCode = fgid;
  StyleTem = tplid;
    
  T = 0;

  // 模板切换
  if ( tplid != '' && fgid != '')
  {
    document.getElementById(tplid).src = img_url.replace(re, '/screenshot_' + fgid + '.png');
  }
  else 
  {
    document.getElementById(tplid).src = img_url.replace(re, '/screenshot.png');
  }

  return true;
}
//
function onSOut(tplid, _self, def)
{
  if (T == 1)
  {
    return true;
  }

  var re = /(\/|\\)([^\/\\])+\.png$/;
  var img_url = document.getElementById(tplid).src;

  // 模板切换为默认风格
  if ( def != '' )
 {
    document.getElementById(tplid).src = def; 
  }
  else
  {
 //  document.getElementById(tplid).src = img_url.replace(re, '/screenshot.png');
  }

  return true;
}
//
function onTempSelectClear(tplid, _self)
{
  var re = /(\/|\\)([^\/\\])+\.png$/;
  var img_url = document.getElementById(tplid).src;

  // 模板切换为默认风格
  document.getElementById(tplid).src = img_url.replace(re, '/screenshot.png');
    
  T = 0;

  return true;
}

/**
 * 模板风格 AJAX安装
 */
function setupTemplateFG(tplNO, TplFG, _self)
{
  T = 1;

  if ( confirm(setupConfirm) )
  {
    Ajax.call('template.php?is_ajax=1&act=install', 'tpl_name=' + tplNO + '&tpl_fg=' + TplFG, setupTemplateResponse, 'GET', 'JSON');
  }

  if (_self)
  {
    onTempSelectClear(tplNO, _self);
  }

  return true;
}
//-->

</script>
<div id="footer">
共执行 2 个查询，用时 0.074005 秒，Gzip 已禁用，内存占用 1.209 MB<br>
版权所有 © 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
<script type="text/javascript" src="./moban-guanli_files/utils.js"></script><!-- 新订单提示信息 -->
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