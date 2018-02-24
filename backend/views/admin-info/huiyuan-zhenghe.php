<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0042)http://ec.com/admin/integrate.php?act=list -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 会员整合 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./huiyuan-zhenghe_files/general.css" rel="stylesheet" type="text/css">
<link href="./huiyuan-zhenghe_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./huiyuan-zhenghe_files/transport.js"></script><script type="text/javascript" src="./huiyuan-zhenghe_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var no_host = "数据库服务器主机名不能为空。";
var no_user = "数据库帐号不能为空。";
var no_name = "数据库名不能为空。";
var no_integrate_url = "请输入整合对象的完整 URL";
var install_confirm = "请不要在系统运行中随意的更换整合对象。\r\n您确定要安装该会员数据整合插件吗？";
var num_invalid = "同步数据的记录数不是一个整数";
var start_invalid = "同步数据的起始位置不是一个整数";
var sync_confirm = "同步会员数据会将目标数据表重建。请在执行同步之前备份好您的数据。\r\n您确定要开始同步会员数据吗？";
var no_method = "请选择一种默认处理方法";
var rate_not_null = "比例不能为空";
var rate_not_int = "比例只能填整数";
var rate_invailed = "你填写了一个无效的比例";
var user_importing = "正在导入用户到UCenter中...";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 会员整合 </span>
<div style="clear:both"></div>
</h1>
<!-- start integrate plugins list -->
<div class="form-div">
  <pre>使用方法：
         1:如果需要整合其他的用户系统，可以安装适当的版本号插件进行整合。
         2:如果需要更换整合的用户系统，直接安装目标插件即可完成整合，同时自动卸载上一次整合插件。
         3:如果不需要整合任何用户系统，请选择安装 ecshop 插件，即可卸载所有的整合插件。
                           </pre></div>
<div class="list-div" id="listDiv">
<table cellspacing="1" cellpadding="3">
  <tbody><tr>
    <th>名称</th>
    <th>版本</th>
    <th>作者</th>
    <th>操作</th>
  </tr>
    <tr>
    <td class="first-cell" style="background-color: rgb(255, 255, 255);">Discuz!</td>
    <td style="background-color: rgb(255, 255, 255);">5.5/6.0</td>
    <td style="background-color: rgb(255, 255, 255);"><a href="http://www.ecshop.com/">ECSHOP R&amp;D TEAM</a></td>
    <td align="center" style="background-color: rgb(255, 255, 255);">
            <a href="javascript:confirm_redirect(&#39;您确定要安装该会员数据整合插件吗？&#39;, &#39;integrate.php?act=install&amp;code=discuz55&#39;)">安装</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell">DVBBS for PHP</td>
    <td>1.0.x/2.0</td>
    <td><a href="http://www.ecshop.com/">ECSHOP R&amp;D TEAM</a></td>
    <td align="center">
            <a href="javascript:confirm_redirect(&#39;您确定要安装该会员数据整合插件吗？&#39;, &#39;integrate.php?act=install&amp;code=dvbbs&#39;)">安装</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" style="background-color: rgb(244, 250, 251);">ECSHOP</td>
    <td style="background-color: rgb(244, 250, 251);">2.0</td>
    <td style="background-color: rgb(244, 250, 251);"><a href="http://www.ecshop.com/">ECSHOP R&amp;D TEAM</a></td>
    <td align="center" style="background-color: rgb(244, 250, 251);">
            <a href="http://ec.com/admin/integrate.php?act=setup&amp;code=ecshop">设置</a>          </td>
  </tr>
    <tr>
    <td class="first-cell">phpBB</td>
    <td>2.0.x</td>
    <td><a href="http://www.ecshop.com/">ECSHOP R&amp;D TEAM</a></td>
    <td align="center">
            <a href="javascript:confirm_redirect(&#39;您确定要安装该会员数据整合插件吗？&#39;, &#39;integrate.php?act=install&amp;code=phpbb&#39;)">安装</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell">PHPWind</td>
    <td>6.32/7.0</td>
    <td><a href="http://www.ecshop.com/">ECSHOP R&amp;D TEAM</a></td>
    <td align="center">
            <a href="javascript:confirm_redirect(&#39;您确定要安装该会员数据整合插件吗？&#39;, &#39;integrate.php?act=install&amp;code=phpwind6&#39;)">安装</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell">UCenter</td>
    <td>1.x</td>
    <td><a href="http://www.ecshop.com/">ECSHOP R&amp;D TEAM</a></td>
    <td align="center">
            <a href="javascript:confirm_redirect(&#39;您确定要安装该会员数据整合插件吗？&#39;, &#39;integrate.php?act=install&amp;code=ucenter&#39;)">安装</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell">vBulletin</td>
    <td>3.x</td>
    <td><a href="http://www.ecshop.com/">ECSHOP R&amp;D TEAM</a></td>
    <td align="center">
            <a href="javascript:confirm_redirect(&#39;您确定要安装该会员数据整合插件吗？&#39;, &#39;integrate.php?act=install&amp;code=vbb&#39;)">安装</a>
          </td>
  </tr>
  </tbody></table>
</div>
<!-- end integrate plugins list -->

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
共执行 1 个查询，用时 0.037002 秒，Gzip 已禁用，内存占用 1.600 MB<br>
版权所有 © 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
<script type="text/javascript" src="./huiyuan-zhenghe_files/utils.js"></script><!-- 新订单提示信息 -->
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