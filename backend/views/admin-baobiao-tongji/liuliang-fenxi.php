<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0043)http://ec.com/admin/flow_stats.php?act=view -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 流量分析 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./liuliang-fenxi_files/general.css" rel="stylesheet" type="text/css">
<link href="./liuliang-fenxi_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./liuliang-fenxi_files/transport.js"></script><script type="text/javascript" src="./liuliang-fenxi_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span"><a href="http://ec.com/admin/flow_stats.php?act=download&amp;filename=2017-03-10_2017-03-17&amp;start_date=1489132800&amp;end_date=1489737600">流量分析报表下载</a></span>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 流量分析 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="./liuliang-fenxi_files/calendar.php"></script>
<link href="./liuliang-fenxi_files/calendar.css" rel="stylesheet" type="text/css">
<div class="form-div">
  <form action="" method="post" id="selectForm" name="selectForm">
    开始日期&nbsp;&nbsp;
    <input name="start_date" value="2017-03-11" style="width:80px;" onclick="return showCalendar(this, &#39;%Y-%m-%d&#39;, false, false, this);">
    结束日期&nbsp;&nbsp;
    <input name="end_date" value="2017-03-18" style="width:80px;" onclick="return showCalendar(this, &#39;%Y-%m-%d&#39;, false, false, this);">
    <input type="submit" name="submit" value="查询" class="button">
  </form>
    <form action="" method="post" id="selectForm" name="selectForm">
    查询年月&nbsp;&nbsp;
    <!---->
        <input name="year_month[]" value="2017-03" style="width:60px;" onclick="return showCalendar(this, &#39;%Y-%m&#39;, false, false, this);">
    <!---->
        &nbsp;+&nbsp;
        <input name="year_month[]" value="" style="width:60px;" onclick="return showCalendar(this, &#39;%Y-%m&#39;, false, false, this);">
    <!---->
        &nbsp;+&nbsp;
        <input name="year_month[]" value="" style="width:60px;" onclick="return showCalendar(this, &#39;%Y-%m&#39;, false, false, this);">
    <!---->
        &nbsp;+&nbsp;
        <input name="year_month[]" value="" style="width:60px;" onclick="return showCalendar(this, &#39;%Y-%m&#39;, false, false, this);">
    <!---->
        &nbsp;+&nbsp;
        <input name="year_month[]" value="" style="width:60px;" onclick="return showCalendar(this, &#39;%Y-%m&#39;, false, false, this);">
    <!----><input type="hidden" name="is_multi" value="1">
    <input type="submit" name="submit" value="查询" class="button">
  </form>
</div>
<div class="tab-div">
    <!-- tab bar -->
    <div id="tabbar-div">
      <p>
        <span class="tab-front" id="general-tab">综合访问量</span><span class="tab-back" id="area-tab">地区分布</span><span class="tab-back" id="from-tab">来源网站</span>
      </p>
    </div>

    <!-- tab body -->
    <div id="tabbody-div">
        <!-- 综合流量 -->
        <table width="90%" id="general-table">
          <tbody><tr><td align="center">
            <!---->
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="565" height="420" id="FCColumn2" align="middle">
              <param name="FlashVars" value="&amp;dataXML=&lt;graph caption=&#39;综合访问量统计&#39; shownames=&#39;1&#39; showvalues=&#39;1&#39; decimalPrecision=&#39;0&#39; yaxisminvalue=&#39;0&#39; yaxismaxvalue=&#39;5&#39; animation=&#39;1&#39; outCnvBaseFontSize=&#39;12&#39; baseFontSize=&#39;12&#39; xaxisname=&#39;日期&#39; yaxisname=&#39;访问量&#39; &gt;&lt;set name=&#39;03-16&#39; value=&#39;3&#39; color=&#39;33FF66&#39; /&gt;&lt;set name=&#39;03-17&#39; value=&#39;5&#39; color=&#39;FF6600&#39; /&gt;&lt;/graph&gt;">
              <param name="movie" value="images/charts/line.swf?chartWidth=650&amp;chartHeight=400">
              <param name="quality" value="high">
              <param name="bgcolor" value="#FFFFFF">
              <param name="wmode" value="opaque">
              <embed src="images/charts/line.swf?chartWidth=650&amp;chartHeight=400" flashvars="&amp;dataXML=&lt;graph caption=&#39;综合访问量统计&#39; shownames=&#39;1&#39; showvalues=&#39;1&#39; decimalPrecision=&#39;0&#39; yaxisminvalue=&#39;0&#39; yaxismaxvalue=&#39;5&#39; animation=&#39;1&#39; outCnvBaseFontSize=&#39;12&#39; baseFontSize=&#39;12&#39; xaxisname=&#39;日期&#39; yaxisname=&#39;访问量&#39; &gt;&lt;set name=&#39;03-16&#39; value=&#39;3&#39; color=&#39;33FF66&#39; /&gt;&lt;set name=&#39;03-17&#39; value=&#39;5&#39; color=&#39;FF6600&#39; /&gt;&lt;/graph&gt;" quality="high" bgcolor="#FFFFFF" width="650" height="400" name="FCColumn2" wmode="opaque" align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
            </object>
            <!---->
          </td></tr>
        </tbody></table>
        <!-- 地区分布 -->

        <table width="90%" id="area-table" style="display:none">
          <tbody><tr><td align="center">
          <!---->
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="465" height="320" id="General" align="middle">
              <param name="FlashVars" value="&amp;dataXML=&lt;graph caption=&#39;地区分布统计&#39; shownames=&#39;1&#39; showvalues=&#39;1&#39; decimalPrecision=&#39;2&#39; outCnvBaseFontSize=&#39;13&#39; baseFontSize=&#39;13&#39; pieYScale=&#39;45&#39;  pieBorderAlpha=&#39;40&#39; pieFillAlpha=&#39;70&#39; pieSliceDepth=&#39;15&#39; pieRadius=&#39;100&#39; bgAngle=&#39;460&#39;&gt;&lt;set name=&#39;LAN&#39; value=&#39;8&#39; color=&#39;33FF66&#39; /&gt;&lt;/graph&gt;">
              <param name="movie" value="images/charts/pie3d.swf?chartWidth=650&amp;chartHeight=400">
              <param name="quality" value="high">
              <param name="bgcolor" value="#FFFFFF">
              <param name="wmode" value="opaque">
              <embed src="images/charts/pie3d.swf?chartWidth=650&amp;chartHeight=400" flashvars="&amp;dataXML=&lt;graph caption=&#39;地区分布统计&#39; shownames=&#39;1&#39; showvalues=&#39;1&#39; decimalPrecision=&#39;2&#39; outCnvBaseFontSize=&#39;13&#39; baseFontSize=&#39;13&#39; pieYScale=&#39;45&#39;  pieBorderAlpha=&#39;40&#39; pieFillAlpha=&#39;70&#39; pieSliceDepth=&#39;15&#39; pieRadius=&#39;100&#39; bgAngle=&#39;460&#39;&gt;&lt;set name=&#39;LAN&#39; value=&#39;8&#39; color=&#39;33FF66&#39; /&gt;&lt;/graph&gt;" quality="high" bgcolor="#FFFFFF" width="650" height="400" name="General" align="middle" wmode="opaque" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
              </object>
          <!---->
          </td></tr>
        </tbody></table>

        <!-- 来源网站 -->
        <table width="90%" id="from-table" style="display:none">
          <tbody><tr><td align="center">
          <!---->
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="465" height="320" align="middle">
              <param name="FlashVars" value="&amp;dataXML=&lt;graph caption=&#39;来源网站统计&#39; shownames=&#39;1&#39; showvalues=&#39;1&#39; decimalPrecision=&#39;2&#39; outCnvBaseFontSize=&#39;12&#39; baseFontSize=&#39;12&#39; pieYScale=&#39;45&#39; pieBorderAlpha=&#39;40&#39; pieFillAlpha=&#39;70&#39; pieSliceDepth=&#39;15&#39; pieRadius=&#39;100&#39; bgAngle=&#39;460&#39;&gt;&lt;set name=&#39;直接输入地址&#39; value=&#39;6&#39; color=&#39;33FF66&#39; /&gt;&lt;set name=&#39;ec.com&#39; value=&#39;1&#39; color=&#39;FF6600&#39; /&gt;&lt;set name=&#39;www.yiiec.com&#39; value=&#39;1&#39; color=&#39;3399FF&#39; /&gt;&lt;/graph&gt;">
              <param name="movie" value="images/charts/pie3d.swf?chartWidth=650&amp;chartHeight=400">
              <param name="quality" value="high">
              <param name="bgcolor" value="#FFFFFF">
              <param name="wmode" value="opaque">
              <embed src="images/charts/pie3d.swf?chartWidth=650&amp;chartHeight=400" flashvars="&amp;dataXML=&lt;graph caption=&#39;来源网站统计&#39; shownames=&#39;1&#39; showvalues=&#39;1&#39; decimalPrecision=&#39;2&#39; outCnvBaseFontSize=&#39;12&#39; baseFontSize=&#39;12&#39; pieYScale=&#39;45&#39; pieBorderAlpha=&#39;40&#39; pieFillAlpha=&#39;70&#39; pieSliceDepth=&#39;15&#39; pieRadius=&#39;100&#39; bgAngle=&#39;460&#39;&gt;&lt;set name=&#39;直接输入地址&#39; value=&#39;6&#39; color=&#39;33FF66&#39; /&gt;&lt;set name=&#39;ec.com&#39; value=&#39;1&#39; color=&#39;FF6600&#39; /&gt;&lt;set name=&#39;www.yiiec.com&#39; value=&#39;1&#39; color=&#39;3399FF&#39; /&gt;&lt;/graph&gt;" quality="high" bgcolor="#FFFFFF" width="650" height="400" wmode="opaque" align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
              
            </object>
          <!---->
          </td></tr>
        </tbody></table>
    </div>
</div>


<script type="text/javascript" src="./liuliang-fenxi_files/tab.js"></script>

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
共执行 4 个查询，用时 0.008000 秒，Gzip 已禁用，内存占用 1.095 MB<br>
版权所有 © 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
<script type="text/javascript" src="./liuliang-fenxi_files/utils.js"></script><!-- 新订单提示信息 -->
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