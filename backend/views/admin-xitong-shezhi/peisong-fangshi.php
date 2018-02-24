<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0041)http://ec.com/admin/shipping.php?act=list -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 配送方式 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./peisong-fangshi_files/general.css" rel="stylesheet" type="text/css">
<link href="./peisong-fangshi_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./peisong-fangshi_files/transport.js"></script><script type="text/javascript" src="./peisong-fangshi_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var lang_removeconfirm = "您确定要卸载该配送方式吗？";
var shipping_area = "设置区域";
var upload_falid = "错误：文件类型不正确。请上传“%s”类型的文件！";
var upload_del_falid = "错误：删除失败！";
var upload_del_confirm = "提示：您确认删除打印单图片吗？";
var no_select_upload = "错误：您还没有选择打印单图片。请使用“浏览...”按钮选择！";
var no_select_lable = "操作终止！您未选择任何标签。";
var no_add_repeat_lable = "操作失败！不允许添加重复标签。";
var no_select_lable_del = "删除失败！您没有选中任何标签。";
var recovery_default_suer = "您确认恢复默认吗？恢复默认后将显示安装时的内容。";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 配送方式 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="./peisong-fangshi_files/utils.js"></script><script type="text/javascript" src="./peisong-fangshi_files/listtable.js"></script><!-- start payment list -->
<div class="list-div" id="listDiv">
<table cellspacing="1" cellpadding="3">
  <tbody><tr>
    <th>配送方式名称</th>
    <th>配送方式描述</th>
    <th nowrap="true">保价费用</th>
    <th nowrap="true">货到付款？</th>
    <th nowrap="true">插件版本</th>
    <th>插件作者</th>
    <th>排序</th>
    <th>操作</th>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            上门取货          </td>
    <td>
            买家自己到商家指定地点取货          </td>
    <td align="right">
            0          </td>
    <td align="center">是</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com/" target="_blank">ECSHOP TEAM</a></td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" nowrap="true">
            <a href="http://ec.com/admin/shipping.php?act=install&amp;code=cac">安装</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            <span onclick="listTable.edit(this, &#39;edit_name&#39;, &#39;city_express&#39;); return false;">城际快递</span>
          </td>
    <td>
            <span onclick="listTable.edit(this, &#39;edit_desc&#39;, &#39;city_express&#39;); return false;">配送的运费是固定的</span>
          </td>
    <td align="right">
            <span onclick="listTable.edit(this, &#39;edit_insure&#39;, &#39;city_express&#39;); return false;">0</span>
          </td>
    <td align="center">是</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com/" target="_blank">ECSHOP TEAM</a></td>
    <td align="right" valign="top">  <span onclick="listTable.edit(this, &#39;edit_order&#39;, &#39;city_express&#39;); return false;">0</span>  </td>
    <td align="center" nowrap="true">
            <a href="javascript:confirm_redirect(lang_removeconfirm,&#39;shipping.php?act=uninstall&amp;code=city_express&#39;)">卸载</a>
      <a href="http://ec.com/admin/shipping_area.php?act=list&amp;shipping=3">设置区域</a>
      <a href="http://ec.com/admin/shipping.php?act=edit_print_template&amp;shipping=3">编辑打印模板</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            EMS 国内邮政特快专递          </td>
    <td>
            EMS 国内邮政特快专递描述内容          </td>
    <td align="right">
            0          </td>
    <td align="center">否</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com/" target="_blank">ECSHOP TEAM</a></td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" nowrap="true">
            <a href="http://ec.com/admin/shipping.php?act=install&amp;code=ems">安装</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            <span onclick="listTable.edit(this, &#39;edit_name&#39;, &#39;flat&#39;); return false;">市内快递</span>
          </td>
    <td>
            <span onclick="listTable.edit(this, &#39;edit_desc&#39;, &#39;flat&#39;); return false;">固定运费的配送方式内容</span>
          </td>
    <td align="right">
            <span onclick="listTable.edit(this, &#39;edit_insure&#39;, &#39;flat&#39;); return false;">0</span>
          </td>
    <td align="center">是</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com/" target="_blank">ECSHOP TEAM</a></td>
    <td align="right" valign="top">  <span onclick="listTable.edit(this, &#39;edit_order&#39;, &#39;flat&#39;); return false;">0</span>  </td>
    <td align="center" nowrap="true">
            <a href="javascript:confirm_redirect(lang_removeconfirm,&#39;shipping.php?act=uninstall&amp;code=flat&#39;)">卸载</a>
      <a href="http://ec.com/admin/shipping_area.php?act=list&amp;shipping=4">设置区域</a>
      <a href="http://ec.com/admin/shipping.php?act=edit_print_template&amp;shipping=4">编辑打印模板</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            <span onclick="listTable.edit(this, &#39;edit_name&#39;, &#39;fpd&#39;); return false;">运费到付</span>
          </td>
    <td>
            <span onclick="listTable.edit(this, &#39;edit_desc&#39;, &#39;fpd&#39;); return false;">所购商品到达即付运费</span>
          </td>
    <td align="right">
            <span onclick="listTable.edit(this, &#39;edit_insure&#39;, &#39;fpd&#39;); return false;">0</span>
          </td>
    <td align="center">否</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com/" target="_blank">ECSHOP TEAM</a></td>
    <td align="right" valign="top">  <span onclick="listTable.edit(this, &#39;edit_order&#39;, &#39;fpd&#39;); return false;">0</span>  </td>
    <td align="center" nowrap="true">
            <a href="javascript:confirm_redirect(lang_removeconfirm,&#39;shipping.php?act=uninstall&amp;code=fpd&#39;)">卸载</a>
      <a href="http://ec.com/admin/shipping_area.php?act=list&amp;shipping=7">设置区域</a>
      <a href="http://ec.com/admin/shipping.php?act=edit_print_template&amp;shipping=7">编辑打印模板</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            <span onclick="listTable.edit(this, &#39;edit_name&#39;, &#39;post_express&#39;); return false;">邮政快递包裹</span>
          </td>
    <td>
            <span onclick="listTable.edit(this, &#39;edit_desc&#39;, &#39;post_express&#39;); return false;">邮政快递包裹的描述内容。</span>
          </td>
    <td align="right">
            <span onclick="listTable.edit(this, &#39;edit_insure&#39;, &#39;post_express&#39;); return false;">1%</span>
          </td>
    <td align="center">否</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com/" target="_blank">ECSHOP TEAM</a></td>
    <td align="right" valign="top">  <span onclick="listTable.edit(this, &#39;edit_order&#39;, &#39;post_express&#39;); return false;">0</span>  </td>
    <td align="center" nowrap="true">
            <a href="javascript:confirm_redirect(lang_removeconfirm,&#39;shipping.php?act=uninstall&amp;code=post_express&#39;)">卸载</a>
      <a href="http://ec.com/admin/shipping_area.php?act=list&amp;shipping=1">设置区域</a>
      <a href="http://ec.com/admin/shipping.php?act=edit_print_template&amp;shipping=1">编辑打印模板</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            <span onclick="listTable.edit(this, &#39;edit_name&#39;, &#39;post_mail&#39;); return false;">邮局平邮</span>
          </td>
    <td>
            <span onclick="listTable.edit(this, &#39;edit_desc&#39;, &#39;post_mail&#39;); return false;">邮局平邮的描述内容。</span>
          </td>
    <td align="right">
            <span onclick="listTable.edit(this, &#39;edit_insure&#39;, &#39;post_mail&#39;); return false;">0</span>
          </td>
    <td align="center">否</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com/" target="_blank">ECSHOP TEAM</a></td>
    <td align="right" valign="top">  <span onclick="listTable.edit(this, &#39;edit_order&#39;, &#39;post_mail&#39;); return false;">0</span>  </td>
    <td align="center" nowrap="true">
            <a href="javascript:confirm_redirect(lang_removeconfirm,&#39;shipping.php?act=uninstall&amp;code=post_mail&#39;)">卸载</a>
      <a href="http://ec.com/admin/shipping_area.php?act=list&amp;shipping=6">设置区域</a>
      <a href="http://ec.com/admin/shipping.php?act=edit_print_template&amp;shipping=6">编辑打印模板</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            邮政挂号印刷品          </td>
    <td>
            邮政挂号印刷品的描述内容。          </td>
    <td align="right">
            1%          </td>
    <td align="center">否</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com/" target="_blank">ECSHOP TEAM</a></td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" nowrap="true">
            <a href="http://ec.com/admin/shipping.php?act=install&amp;code=presswork">安装</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            顺丰速运          </td>
    <td>
            江、浙、沪地区首重15元/KG，续重2元/KG，其余城市首重20元/KG          </td>
    <td align="right">
            0          </td>
    <td align="center">否</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com/" target="_blank">ECSHOP TEAM</a></td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" nowrap="true">
            <a href="http://ec.com/admin/shipping.php?act=install&amp;code=sf_express">安装</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            <span onclick="listTable.edit(this, &#39;edit_name&#39;, &#39;sto_express&#39;); return false;">申通快递</span>
          </td>
    <td>
            <span onclick="listTable.edit(this, &#39;edit_desc&#39;, &#39;sto_express&#39;); return false;">江、浙、沪地区首重为15元/KG，其他地区18元/KG， 续重均为5-6元/KG， 云南地区为8元</span>
          </td>
    <td align="right">
            <span onclick="listTable.edit(this, &#39;edit_insure&#39;, &#39;sto_express&#39;); return false;">0</span>
          </td>
    <td align="center">否</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com/" target="_blank">ECSHOP TEAM</a></td>
    <td align="right" valign="top">  <span onclick="listTable.edit(this, &#39;edit_order&#39;, &#39;sto_express&#39;); return false;">0</span>  </td>
    <td align="center" nowrap="true">
            <a href="javascript:confirm_redirect(lang_removeconfirm,&#39;shipping.php?act=uninstall&amp;code=sto_express&#39;)">卸载</a>
      <a href="http://ec.com/admin/shipping_area.php?act=list&amp;shipping=5">设置区域</a>
      <a href="http://ec.com/admin/shipping.php?act=edit_print_template&amp;shipping=5">编辑打印模板</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            <span onclick="listTable.edit(this, &#39;edit_name&#39;, &#39;yto&#39;); return false;">圆通速递</span>
          </td>
    <td>
            <span onclick="listTable.edit(this, &#39;edit_desc&#39;, &#39;yto&#39;); return false;">上海圆通物流（速递）有限公司经过多年的网络快速发展，在中国速递行业中一直处于领先地位。为了能更好的发展国际快件市场，加快与国际市场的接轨，强化圆通的整体实力，圆通已在东南亚、欧美、中东、北美洲、非洲等许多城市运作国际快件业务</span>
          </td>
    <td align="right">
            0          </td>
    <td align="center">是</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com/" target="_blank">ECSHOP TEAM</a></td>
    <td align="right" valign="top">  <span onclick="listTable.edit(this, &#39;edit_order&#39;, &#39;yto&#39;); return false;">0</span>  </td>
    <td align="center" nowrap="true">
            <a href="javascript:confirm_redirect(lang_removeconfirm,&#39;shipping.php?act=uninstall&amp;code=yto&#39;)">卸载</a>
      <a href="http://ec.com/admin/shipping_area.php?act=list&amp;shipping=2">设置区域</a>
      <a href="http://ec.com/admin/shipping.php?act=edit_print_template&amp;shipping=2">编辑打印模板</a>
          </td>
  </tr>
    <tr>
    <td class="first-cell" nowrap="true">
            中通速递          </td>
    <td>
            中通快递的相关说明。保价费按照申报价值的2％交纳，但是，保价费不低于100元，保价金额不得高于10000元，保价金额超过10000元的，超过的部分无效          </td>
    <td align="right">
            2%          </td>
    <td align="center">否</td>
    <td nowrap="true">1.0.0</td>
    <td nowrap="true"><a href="http://www.ecshop.com/" target="_blank">蓝色黯然</a></td>
    <td align="right" valign="top">  &nbsp;  </td>
    <td align="center" nowrap="true">
            <a href="http://ec.com/admin/shipping.php?act=install&amp;code=zto">安装</a>
          </td>
  </tr>
  </tbody></table>
</div>
<!-- end payment list -->
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
共执行 13 个查询，用时 0.086005 秒，Gzip 已禁用，内存占用 1.204 MB<br>
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