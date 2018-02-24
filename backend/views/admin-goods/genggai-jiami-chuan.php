<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0047)http://ec.com/admin/virtual_card.php?act=change -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 更改加密串 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./genggai-jiami-chuan_files/general.css" rel="stylesheet" type="text/css">
<link href="./genggai-jiami-chuan_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./genggai-jiami-chuan_files/transport.js"></script><script type="text/javascript" src="./genggai-jiami-chuan_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var no_card_sn = "卡片序号和卡片密码不能都为空。";
var separator_not_null = "分隔符号不能为空。";
var uploadfile_not_null = "请选择要上传的文件。";
var updating_info = "<strong>正在更新</strong>（每次 100 条记录）";
var updated_info = "<strong>已更新</strong> <span id=\"updated\">0</span> 条记录。";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 更改加密串 </span>
<div style="clear:both"></div>
</h1>

<div class="main-div">
  <form name="theForm">
    <table width="100%">
      <tbody><tr>
        <td colspan="2">使用说明：<ol><li>加密串是在加密虚拟卡类商品的卡号和密码时使用的</li><li>加密串保存在文件 data/config.php 中，对应的常量是 AUTH_KEY</li><li>如果要更改加密串在下面的文本框中输入原加密串和新加密串，点'确定'按钮后即可</li></ol></td>
      </tr>
      <tr>
        <td class="label">原加密串</td>
        <td><input name="old_string" type="text" id="old_string"></td>
      </tr>
      <tr>
        <td class="label">新加密串</td>
        <td><input name="new_string" type="text" id="new_string"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="button" class="button" value=" 确定 " onclick="start_change()">
        </div></td>
      </tr>
    </tbody></table>
  </form>
</div>

<div class="list-div">
  <table id="change_log" cellpadding="3" cellspacing="1">
    <tbody><tr>
      <th>更新记录</th>
    </tr>
  </tbody></table>
</div>

<script language="JavaScript" type="text/javascript">
<!--

    /**
     * 开始更新：检查原串和新串
     */
    function start_change()
    {
      var old_key = document.forms['theForm'].elements['old_string'].value;
      var new_key = document.forms['theForm'].elements['new_string'].value;

      Ajax.call("virtual_card.php?is_ajax=1&act=start_change", "old_key=" + old_key + "&new_key=" + new_key, start_change_response, "GET", "JSON");
    }

    function start_change_response(result)
    {
        if (result.error == 0)
        {
            var tbl = document.getElementById('change_log');
            var body = tbl.rows[0].parentNode;
            for (var i = body.childNodes.length - 1; i > 0; i--)
            {
                if (body.childNodes[i].tagName == 'TR')
                {
                    body.deleteRow(body.childNodes[i].rowIndex);
                }
            }

            var row = tbl.insertRow(-1);
            var cell = row.insertCell(-1);
            cell.innerHTML = result.content;

            var row = tbl.insertRow(-1);
            var cell = row.insertCell(-1);
            cell.id = 'updating';
            cell.innerHTML = updating_info;

            var row = tbl.insertRow(-1);
            var cell = row.insertCell(-1);
            //cell.innerHTML = updated_info;

            Ajax.call("virtual_card.php?is_ajax=1&act=on_change", "updated=0", on_change_response, "GET", "JSON");
        }

        if (result.message.length > 0)
        {
          alert(result.message);
        }
    }

    function on_change_response(result)
    {
      if (result.error == 0)
      {
          // 没出错
          if (result.message == '')
          {
              // 未结束
              Ajax.call("virtual_card.php?is_ajax=1&act=on_change", "updated=" + result.content, on_change_response, "GET", "JSON");
          }
          else
          {
              // 已结束
              var tbl = document.getElementById('change_log');
              var row = tbl.insertRow(-1);
              var cell = row.insertCell(-1);
              cell.innerHTML = result.message;
          }
      }
      else
      {
          // 出错了
          var tbl = document.getElementById('change_log');
          var row = tbl.insertRow(-1);
          var cell = row.insertCell(-1);
          cell.innerHTML = result.message;
      }
    }

-->
</script>
<div id="footer">
共执行 1 个查询，用时 0.041003 秒，Gzip 已禁用，内存占用 1.134 MB<br>
版权所有 © 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
<script type="text/javascript" src="./genggai-jiami-chuan_files/utils.js"></script><!-- 新订单提示信息 -->
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