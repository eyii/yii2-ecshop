<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://ec.com/admin/convert.php?act=main -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 转换数据 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./zhuanhuan-shuju_files/general.css" rel="stylesheet" type="text/css">
<link href="./zhuanhuan-shuju_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./zhuanhuan-shuju_files/transport.js"></script><script type="text/javascript" src="./zhuanhuan-shuju_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var check_your_db = "正在检查您的系统的数据库...";
var act_ok = "恭喜您，操作成功！";
var no_system = "没有可用的转换程序";
var host_not_null = "主机名称或地址不能为空";
var db_not_null = "数据库名称不能为空";
var user_not_null = "登录帐号不能为空";
var path_not_null = "原商城根目录不能为空";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 转换数据 </span>
<div style="clear:both"></div>
</h1>
<div class="list-div">
<form name="theForm">
<table cellpadding="3" cellspacing="1">
  <tbody><tr>
    <td colspan="4"><span style="color:#FF0000;"><strong>注意：执行转换程序将会使现有数据丢失，请您三思而行！！！</strong></span><br>
    如果现有数据对您可能还有价值，请您先做好备份。<a href="http://ec.com/admin/database.php?act=backup"><strong>现在就去备份</strong></a></td>
  </tr>
  <tr>
    <td colspan="4">请选择您要转换的系统：      <select name="selModule" id="selModule">
                  <option value="shopex46">shopex Single V4.6</option>
                  <option value="shopex47">shopex Single V4.7</option>
                  <option value="shopex48">shopex Single V4.8 （支持到4.8.4版本）</option>
              </select>
      （如果您的系统不在左边的列表中，您可以到<a href="http://www.ecshop.com/" target="_blank"><strong>我们的网站</strong></a>寻求帮助）</td>
    </tr>
  <tr>
    <td colspan="4">请选择您要转换的系统使用的字符集：      <select name="selCharset" id="selCharset">
        <option value="UTF8">UTF-8</option><option value="GB2312">GB2312/GBK</option><option value="BIG5">BIG5</option>      </select>
      （如果你的系统使用的不是 UTF-8 字符集，转换可能需要较长时间）</td>
  </tr>
  <tr>
    <td colspan="4"><strong>请设置原系统的配置信息：</strong><br>请注意原商城的根目录路径请使用相对于admin目录的路径。<br>例如：原商城的目录在根目录下的shop，而ecshop放在根目录下，则该路径为 ../shop</td>
    </tr>
  <tr>
    <td><div align="right"><strong>主机名称或地址：</strong></div></td>
    <td><input name="host" type="text" id="host" value=""></td>
    <td><div align="right"><strong>数据库名称：</strong></div></td>
  <td><input name="db" type="text" id="db" value=""></td>
  </tr>
  <tr>
    <td><div align="right"><strong>登录帐号：</strong></div></td>
    <td><input name="user" type="text" id="user" value=""></td>
    <td><div align="right"><strong>登录密码：</strong></div></td>
    <td><input name="pass" type="password" id="pass" value=""></td>
  </tr>
  <tr>
    <td><div align="right"><strong>数据库表前缀：</strong></div></td>
    <td><input name="prefix" type="text" id="prefix" value="sdb_"></td>
    <td><div align="right"><strong>原商城根目录：</strong></div></td>
    <td><input name="path" type="text" id="path" value=""></td>
  </tr>
  <tr>
    <td colspan="4"><div align="center">
        <input name="convert" type="button" class="button" id="convert" onclick="convertData()" value="转换数据">
    </div></td>
    </tr>
  <tr>
    <td colspan="4"><span id="status_1"></span><br><span id="status_2"></span><br><span id="status_3"></span></td>
  </tr>
  <tr>
    <td colspan="4"><strong>备注：</strong><br><ul><li>对于特价的商品，您需要编辑其原价（本店售价）和促销期；</li><li>请重新设置水印；</li><li>请重新设置广告；</li><li>请重新设置配送方式；</li><li>请重新设置支付方式；</li><li>请把原来不属于末级分类的商品转移到末级分类；</li></ul></td>
  </tr>
</tbody></table>
</form>
</div>
<script type="text/javascript" src="./zhuanhuan-shuju_files/utils.js"></script><script type="text/javascript" src="./zhuanhuan-shuju_files/validator.js"></script>
<script language="javascript">
  /**
   * 检查可选系统
   */
  function checkSystem()
  {
    var sel = document.forms['theForm'].elements['selModule'];
    if (sel.options.length <= 0)
    {
      alert(no_system);
      return false;
    }
    return true;
  }

  /**
   * 检查设置
   */
  function checkConfig()
  {
    if (!checkSystem())
    {
      return false;
    }
    var validator = new Validator('theForm');
    validator.required('host', host_not_null);
    validator.required('db', db_not_null);
    validator.required('user', user_not_null);
    validator.required('path', path_not_null);
    return validator.passed();
  }

  /**
   * 转换
   */
  function convertData()
  {
    // 检查设置
    if (!checkConfig())
    {
      return;
    }

    // 取得设置
    var config = new Object();
    var ele = document.forms['theForm'].elements;
    config.host    = ele['host'].value;
    config.db      = ele['db'].value;
    config.user    = ele['user'].value;
    config.pass    = ele['pass'].value;
    config.prefix  = ele['prefix'].value;
    config.code    = ele['selModule'].value;
    config.path    = ele['path'].value;
    config.charset = ele['selCharset'].value;

    // 测试数据库链接，检查表，检查目录
    output(check_your_db);
    Ajax.call('convert.php?is_ajax=1&act=check', config, response, 'POST', 'JSON');
  }

  function response(result)
  {
    if (!result.error)
    {
      if (result.content.length > 0)
      {
        output(result.message);
        Ajax.call('convert.php?is_ajax=1&act=process', 'step=' + result.content, response, 'POST', 'JSON');
      }
      else
      {
        output(act_ok);
        alert(act_ok);
      }
    }
    else
    {
      output(result.message);
      alert(result.message);
    }
  }

  /**
   * 输出信息
   * @param string msg
   */
  function output(msg)
  {
    today = new Date();
    msg = today.getHours() + ':' + today.getMinutes() + ':' + today.getSeconds() + '   ' + msg;
    for (i = 3; i > 1; i--)
    {
      document.getElementById('status_' + i).innerHTML = document.getElementById('status_' + (i - 1)).innerHTML;
    }
    document.getElementById('status_1').innerHTML = msg;
  }
</script>

<div id="footer">
共执行 1 个查询，用时 0.021001 秒，Gzip 已禁用，内存占用 1.386 MB<br>
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