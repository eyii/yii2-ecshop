<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0053)http://ec.com/admin/shop_config.php?act=mail_settings -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 邮件服务器设置 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./youjian-fuwuqi-shezhi_files/general.css" rel="stylesheet" type="text/css">
<link href="./youjian-fuwuqi-shezhi_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./youjian-fuwuqi-shezhi_files/transport.js"></script><script type="text/javascript" src="./youjian-fuwuqi-shezhi_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var smtp_host_empty = "您没有填写邮件服务器地址!";
var smtp_port_empty = "您没有填写服务器端口!";
var reply_email_empty = "您没有填写邮件回复地址!";
var test_email_empty = "您没有填写发送测试邮件的地址!";
var email_address_same = "邮件回复地址与发送测试邮件的地址不能相同!";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 邮件服务器设置 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="./youjian-fuwuqi-shezhi_files/validator.js"></script><form method="POST" action="http://ec.com/admin/shop_config.php?act=post" name="theForm">
<div class="main-div"><p style="padding: 0 10px">如果您的服务器支持 Mail 函数（具体信息请咨询您的空间提供商）。我们建议您使用系统的 Mail 函数。<br>当您的服务器不支持 Mail 函数的时候您也可以选用 SMTP 作为邮件服务器。</p></div>

<div class="main-div">
  <table width="100%" id="-table">
              <tbody><tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticemail_service&#39;);" title="点击此处查看提示信息"><img src="./youjian-fuwuqi-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    邮件服务:
        </td>
        <td>
                              <label for="value_507_0"><input type="radio" name="value[507]" id="value_507_0" value="0" checked="true">采用服务器内置的 Mail 服务</label>
                    <label for="value_507_1"><input type="radio" name="value[507]" id="value_507_1" value="1">采用其他的 SMTP 服务</label>
          
                              <br>
          <span class="notice-span" style="display:block" id="noticemail_service">如果您选择了采用服务器内置的 Mail 服务，您不需要填写下面的内容。</span>
                  </td>
      </tr>
              <tr>
        <td class="label" valign="top">
                    邮件服务器是否要求加密连接(SSL):
        </td>
        <td>
                              <label for="value_508_0"><input type="radio" name="value[508]" id="value_508_0" value="0" checked="true">否</label>
                    <label for="value_508_1"><input type="radio" name="value[508]" id="value_508_1" value="1" onclick="return confirm(&#39;此功能要求您的php必须支持OpenSSL模块, 如果您要使用此功能，请联系您的空间商确认支持此模块&#39;);">是</label>
          
                            </td>
      </tr>
              <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticesmtp_host&#39;);" title="点击此处查看提示信息"><img src="./youjian-fuwuqi-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    发送邮件服务器地址(SMTP):
        </td>
        <td>
                    <input name="value[501]" type="text" value="localhost" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticesmtp_host">邮件服务器主机地址。如果本机可以发送邮件则设置为localhost</span>
                  </td>
      </tr>
              <tr>
        <td class="label" valign="top">
                    服务器端口:
        </td>
        <td>
                    <input name="value[502]" type="text" value="25" size="40">

                            </td>
      </tr>
              <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticesmtp_user&#39;);" title="点击此处查看提示信息"><img src="./youjian-fuwuqi-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    邮件发送帐号:
        </td>
        <td>
                    <input name="value[503]" type="text" value="" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticesmtp_user">发送邮件所需的认证帐号，如果没有就为空着</span>
                  </td>
      </tr>
              <tr>
        <td class="label" valign="top">
                    帐号密码:
        </td>
        <td>
                    <input name="value[504]" type="password" value="" size="40">

                            </td>
      </tr>
              <tr>
        <td class="label" valign="top">
                    邮件回复地址:
        </td>
        <td>
                    <input name="value[505]" type="text" value="" size="40">

                            </td>
      </tr>
              <tr>
        <td class="label" valign="top">
                    邮件编码:
        </td>
        <td>
                              <label for="value_506_0"><input type="radio" name="value[506]" id="value_506_0" value="UTF8" checked="true">国际化编码（utf8）</label>
                    <label for="value_506_1"><input type="radio" name="value[506]" id="value_506_1" value="GB2312">简体中文</label>
                    <label for="value_506_2"><input type="radio" name="value[506]" id="value_506_2" value="BIG5">繁体中文</label>
          
                            </td>
      </tr>
        <tr>
      <td class="label">邮件地址:</td>
      <td>
        <input type="text" name="test_mail_address" size="30">
        <input type="button" value="发送测试邮件" onclick="sendTestEmail();" class="button">
      </td>
    </tr>
    <tr>
      <td align="center" colspan="2">
        <input name="submit" type="submit" value=" 确定 " class="button">
        <input name="reset" type="reset" value=" 重置 " class="button">
        <input name="type" type="hidden" value="mail_setting" class="button">
      </td>
    </tr>
  </tbody></table>
</div>
</form>


<script type="text/javascript" language="JavaScript">
<!--
onload = function()
{
    // 开始检查订单
    startCheckOrder();
}

/**
 * 测试邮件的发送
 */
function sendTestEmail()
{
  var eles              = document.forms['theForm'].elements;
  var smtp_host         = eles['value[501]'].value;
  var smtp_port         = eles['value[502]'].value;
  var smtp_user         = eles['value[503]'].value;
  var smtp_pass         = eles['value[504]'].value;
  var reply_email       = eles['value[505]'].value;
  var test_mail_address = eles['test_mail_address'].value;

  var mail_charset = 0;

  for (i = 0; i < eles['value[506]'].length; i++)
  {
    if (eles['value[506]'][i].checked)
    {
      mail_charset = eles['value[506]'][i].value;
    }
  }

  var mail_service = 0;

  for (i = 0; i < eles['value[507]'].length; i++)
  {
    if (eles['value[507]'][i].checked)
    {
      mail_service = eles['value[507]'][i].value;
    }
  }

  Ajax.call('shop_config.php?is_ajax=1&act=send_test_email',
    'email=' + test_mail_address + '&mail_service=' + mail_service + '&smtp_host=' + smtp_host + '&smtp_port=' + smtp_port +
    '&smtp_user=' + smtp_user + '&smtp_pass=' + encodeURIComponent(smtp_pass) + '&reply_email=' + reply_email + '&mail_charset=' + mail_charset,
    emailResponse, 'POST', 'JSON');
}

/**
 * 邮件发送的反馈信息
 */
function emailResponse(result)
{
  alert(result.message);
}
//-->
</script>

<div id="footer">
共执行 2 个查询，用时 0.012001 秒，Gzip 已禁用，内存占用 1.129 MB<br>
版权所有 © 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
<script type="text/javascript" src="./youjian-fuwuqi-shezhi_files/utils.js"></script><!-- 新订单提示信息 -->
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