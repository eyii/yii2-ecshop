<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0042)http://ec.com/admin/navigator.php?act=list -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 自定义导航栏 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./zidingyi-daohanglan_files/general.css" rel="stylesheet" type="text/css">
<link href="./zidingyi-daohanglan_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./zidingyi-daohanglan_files/transport.js"></script><script type="text/javascript" src="./zidingyi-daohanglan_files/common.js"></script><script language="JavaScript">
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
<span class="action-span"><a href="http://ec.com/admin/navigator.php?act=add">添加导航</a></span>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 自定义导航栏 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="./zidingyi-daohanglan_files/utils.js"></script><script type="text/javascript" src="./zidingyi-daohanglan_files/listtable.js"></script><form method="post" action="" name="listForm">
<div class="list-div" id="listDiv">
<table cellspacing="1" cellpadding="3" id="list-table">
<tbody><tr>
	<th>名称</th><th>是否显示</th><th>是否新窗口</th><th>排序</th><th>位置</th><th width="60px">操作</th>
</tr>
<tr>
	<td align="center"><!--  -->查看购物车<!--  --></td>
  <td align="center">
   <!--  -->
   <img src="./zidingyi-daohanglan_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_ifshow&#39;, 3)">
   <!--  --></td>
  <td align="center">
   <!--  -->
    <img src="./zidingyi-daohanglan_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_opennew&#39;, 3)">
   <!--  --></td>
  <td align="center"><!--  --><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 3)">0</span><!--  --></td>
  <td align="center"><!--  -->顶部<!--  --></td>
  <td align="center"><!--  --><a href="http://ec.com/admin/navigator.php?act=edit&amp;id=3" title="编辑"><img src="./zidingyi-daohanglan_files/icon_edit.gif" width="16" height="16" border="0"></a>
  <a href="http://ec.com/admin/navigator.php?act=del&amp;id=3" onclick="return confirm(&#39;确定删除?&#39;);" title="确定删除?"><img src="./zidingyi-daohanglan_files/no.gif" width="16" height="16" border="0"><!--  --></a>
  </td>
</tr>
<tr>
	<td align="center"><!--  -->选购中心<!--  --></td>
  <td align="center">
   <!--  -->
   <img src="./zidingyi-daohanglan_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_ifshow&#39;, 2)">
   <!--  --></td>
  <td align="center">
   <!--  -->
    <img src="./zidingyi-daohanglan_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_opennew&#39;, 2)">
   <!--  --></td>
  <td align="center"><!--  --><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 2)">2</span><!--  --></td>
  <td align="center"><!--  -->顶部<!--  --></td>
  <td align="center"><!--  --><a href="http://ec.com/admin/navigator.php?act=edit&amp;id=2" title="编辑"><img src="./zidingyi-daohanglan_files/icon_edit.gif" width="16" height="16" border="0"></a>
  <a href="http://ec.com/admin/navigator.php?act=del&amp;id=2" onclick="return confirm(&#39;确定删除?&#39;);" title="确定删除?"><img src="./zidingyi-daohanglan_files/no.gif" width="16" height="16" border="0"><!--  --></a>
  </td>
</tr>
<tr>
	<td align="center"><!--  -->标签云<!--  --></td>
  <td align="center">
   <!--  -->
   <img src="./zidingyi-daohanglan_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_ifshow&#39;, 6)">
   <!--  --></td>
  <td align="center">
   <!--  -->
    <img src="./zidingyi-daohanglan_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_opennew&#39;, 6)">
   <!--  --></td>
  <td align="center"><!--  --><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 6)">5</span><!--  --></td>
  <td align="center"><!--  -->顶部<!--  --></td>
  <td align="center"><!--  --><a href="http://ec.com/admin/navigator.php?act=edit&amp;id=6" title="编辑"><img src="./zidingyi-daohanglan_files/icon_edit.gif" width="16" height="16" border="0"></a>
  <a href="http://ec.com/admin/navigator.php?act=del&amp;id=6" onclick="return confirm(&#39;确定删除?&#39;);" title="确定删除?"><img src="./zidingyi-daohanglan_files/no.gif" width="16" height="16" border="0"><!--  --></a>
  </td>
</tr>
<tr>
	<td align="center"><!--  -->报价单<!--  --></td>
  <td align="center">
   <!--  -->
   <img src="./zidingyi-daohanglan_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_ifshow&#39;, 23)">
   <!--  --></td>
  <td align="center">
   <!--  -->
    <img src="./zidingyi-daohanglan_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_opennew&#39;, 23)">
   <!--  --></td>
  <td align="center"><!--  --><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 23)">6</span><!--  --></td>
  <td align="center"><!--  -->顶部<!--  --></td>
  <td align="center"><!--  --><a href="http://ec.com/admin/navigator.php?act=edit&amp;id=23" title="编辑"><img src="./zidingyi-daohanglan_files/icon_edit.gif" width="16" height="16" border="0"></a>
  <a href="http://ec.com/admin/navigator.php?act=del&amp;id=23" onclick="return confirm(&#39;确定删除?&#39;);" title="确定删除?"><img src="./zidingyi-daohanglan_files/no.gif" width="16" height="16" border="0"><!--  --></a>
  </td>
</tr>
<tr>
	<td align="center"><!--  -->&nbsp;<!--  --></td>
  <td align="center">
   <!--  --></td>
  <td align="center">
   <!--  --></td>
  <td align="center"><!--  --></td>
  <td align="center"><!--  --></td>
  <td align="center"><!--  -->
  </td>
</tr>
<tr>
	<td align="center"><!--  -->GSM手机<!--  --></td>
  <td align="center">
   <!--  -->
   <img src="./zidingyi-daohanglan_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_ifshow&#39;, 26)">
   <!--  --></td>
  <td align="center">
   <!--  -->
    <img src="./zidingyi-daohanglan_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_opennew&#39;, 26)">
   <!--  --></td>
  <td align="center"><!--  --><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 26)">13</span><!--  --></td>
  <td align="center"><!--  -->中间<!--  --></td>
  <td align="center"><!--  --><a href="http://ec.com/admin/navigator.php?act=edit&amp;id=26" title="编辑"><img src="./zidingyi-daohanglan_files/icon_edit.gif" width="16" height="16" border="0"></a>
  <a href="http://ec.com/admin/navigator.php?act=del&amp;id=26" onclick="return confirm(&#39;确定删除?&#39;);" title="确定删除?"><img src="./zidingyi-daohanglan_files/no.gif" width="16" height="16" border="0"><!--  --></a>
  </td>
</tr>
<tr>
	<td align="center" style="background-color: rgb(244, 250, 251);"><!--  -->双模手机<!--  --></td>
  <td align="center" style="background-color: rgb(244, 250, 251);">
   <!--  -->
   <img src="./zidingyi-daohanglan_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_ifshow&#39;, 18)">
   <!--  --></td>
  <td align="center" style="background-color: rgb(244, 250, 251);">
   <!--  -->
    <img src="./zidingyi-daohanglan_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_opennew&#39;, 18)">
   <!--  --></td>
  <td align="center" style="background-color: rgb(244, 250, 251);"><!--  --><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 18)">14</span><!--  --></td>
  <td align="center" style="background-color: rgb(244, 250, 251);"><!--  -->中间<!--  --></td>
  <td align="center" style="background-color: rgb(244, 250, 251);"><!--  --><a href="http://ec.com/admin/navigator.php?act=edit&amp;id=18" title="编辑"><img src="./zidingyi-daohanglan_files/icon_edit.gif" width="16" height="16" border="0"></a>
  <a href="http://ec.com/admin/navigator.php?act=del&amp;id=18" onclick="return confirm(&#39;确定删除?&#39;);" title="确定删除?"><img src="./zidingyi-daohanglan_files/no.gif" width="16" height="16" border="0"><!--  --></a>
  </td>
</tr>
<tr>
	<td align="center"><!--  -->手机配件<!--  --></td>
  <td align="center">
   <!--  -->
   <img src="./zidingyi-daohanglan_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_ifshow&#39;, 27)">
   <!--  --></td>
  <td align="center">
   <!--  -->
    <img src="./zidingyi-daohanglan_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_opennew&#39;, 27)">
   <!--  --></td>
  <td align="center"><!--  --><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 27)">15</span><!--  --></td>
  <td align="center"><!--  -->中间<!--  --></td>
  <td align="center"><!--  --><a href="http://ec.com/admin/navigator.php?act=edit&amp;id=27" title="编辑"><img src="./zidingyi-daohanglan_files/icon_edit.gif" width="16" height="16" border="0"></a>
  <a href="http://ec.com/admin/navigator.php?act=del&amp;id=27" onclick="return confirm(&#39;确定删除?&#39;);" title="确定删除?"><img src="./zidingyi-daohanglan_files/no.gif" width="16" height="16" border="0"><!--  --></a>
  </td>
</tr>
<tr>
	<td align="center"><!--  -->团购商品<!--  --></td>
  <td align="center">
   <!--  -->
   <img src="./zidingyi-daohanglan_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_ifshow&#39;, 4)">
   <!--  --></td>
  <td align="center">
   <!--  -->
    <img src="./zidingyi-daohanglan_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_opennew&#39;, 4)">
   <!--  --></td>
  <td align="center"><!--  --><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 4)">20</span><!--  --></td>
  <td align="center"><!--  -->中间<!--  --></td>
  <td align="center"><!--  --><a href="http://ec.com/admin/navigator.php?act=edit&amp;id=4" title="编辑"><img src="./zidingyi-daohanglan_files/icon_edit.gif" width="16" height="16" border="0"></a>
  <a href="http://ec.com/admin/navigator.php?act=del&amp;id=4" onclick="return confirm(&#39;确定删除?&#39;);" title="确定删除?"><img src="./zidingyi-daohanglan_files/no.gif" width="16" height="16" border="0"><!--  --></a>
  </td>
</tr>
<tr>
	<td align="center"><!--  -->优惠活动<!--  --></td>
  <td align="center">
   <!--  -->
   <img src="./zidingyi-daohanglan_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_ifshow&#39;, 21)">
   <!--  --></td>
  <td align="center">
   <!--  -->
    <img src="./zidingyi-daohanglan_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_opennew&#39;, 21)">
   <!--  --></td>
  <td align="center"><!--  --><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 21)">21</span><!--  --></td>
  <td align="center"><!--  -->中间<!--  --></td>
  <td align="center"><!--  --><a href="http://ec.com/admin/navigator.php?act=edit&amp;id=21" title="编辑"><img src="./zidingyi-daohanglan_files/icon_edit.gif" width="16" height="16" border="0"></a>
  <a href="http://ec.com/admin/navigator.php?act=del&amp;id=21" onclick="return confirm(&#39;确定删除?&#39;);" title="确定删除?"><img src="./zidingyi-daohanglan_files/no.gif" width="16" height="16" border="0"><!--  --></a>
  </td>
</tr>
<tr>
	<td align="center"><!--  -->夺宝奇兵<!--  --></td>
  <td align="center">
   <!--  -->
   <img src="./zidingyi-daohanglan_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_ifshow&#39;, 5)">
   <!--  --></td>
  <td align="center">
   <!--  -->
    <img src="./zidingyi-daohanglan_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_opennew&#39;, 5)">
   <!--  --></td>
  <td align="center"><!--  --><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 5)">22</span><!--  --></td>
  <td align="center"><!--  -->中间<!--  --></td>
  <td align="center"><!--  --><a href="http://ec.com/admin/navigator.php?act=edit&amp;id=5" title="编辑"><img src="./zidingyi-daohanglan_files/icon_edit.gif" width="16" height="16" border="0"></a>
  <a href="http://ec.com/admin/navigator.php?act=del&amp;id=5" onclick="return confirm(&#39;确定删除?&#39;);" title="确定删除?"><img src="./zidingyi-daohanglan_files/no.gif" width="16" height="16" border="0"><!--  --></a>
  </td>
</tr>
<tr>
	<td align="center"><!--  -->拍卖活动<!--  --></td>
  <td align="center">
   <!--  -->
   <img src="./zidingyi-daohanglan_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_ifshow&#39;, 24)">
   <!--  --></td>
  <td align="center">
   <!--  -->
    <img src="./zidingyi-daohanglan_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_opennew&#39;, 24)">
   <!--  --></td>
  <td align="center"><!--  --><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 24)">23</span><!--  --></td>
  <td align="center"><!--  -->中间<!--  --></td>
  <td align="center"><!--  --><a href="http://ec.com/admin/navigator.php?act=edit&amp;id=24" title="编辑"><img src="./zidingyi-daohanglan_files/icon_edit.gif" width="16" height="16" border="0"></a>
  <a href="http://ec.com/admin/navigator.php?act=del&amp;id=24" onclick="return confirm(&#39;确定删除?&#39;);" title="确定删除?"><img src="./zidingyi-daohanglan_files/no.gif" width="16" height="16" border="0"><!--  --></a>
  </td>
</tr>
<tr>
	<td align="center"><!--  -->积分商城<!--  --></td>
  <td align="center">
   <!--  -->
   <img src="./zidingyi-daohanglan_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_ifshow&#39;, 25)">
   <!--  --></td>
  <td align="center">
   <!--  -->
    <img src="./zidingyi-daohanglan_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_opennew&#39;, 25)">
   <!--  --></td>
  <td align="center"><!--  --><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 25)">24</span><!--  --></td>
  <td align="center"><!--  -->中间<!--  --></td>
  <td align="center"><!--  --><a href="http://ec.com/admin/navigator.php?act=edit&amp;id=25" title="编辑"><img src="./zidingyi-daohanglan_files/icon_edit.gif" width="16" height="16" border="0"></a>
  <a href="http://ec.com/admin/navigator.php?act=del&amp;id=25" onclick="return confirm(&#39;确定删除?&#39;);" title="确定删除?"><img src="./zidingyi-daohanglan_files/no.gif" width="16" height="16" border="0"><!--  --></a>
  </td>
</tr>
<tr>
	<td align="center"><!--  -->留言板<!--  --></td>
  <td align="center">
   <!--  -->
   <img src="./zidingyi-daohanglan_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_ifshow&#39;, 15)">
   <!--  --></td>
  <td align="center">
   <!--  -->
    <img src="./zidingyi-daohanglan_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_opennew&#39;, 15)">
   <!--  --></td>
  <td align="center"><!--  --><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 15)">99</span><!--  --></td>
  <td align="center"><!--  -->中间<!--  --></td>
  <td align="center"><!--  --><a href="http://ec.com/admin/navigator.php?act=edit&amp;id=15" title="编辑"><img src="./zidingyi-daohanglan_files/icon_edit.gif" width="16" height="16" border="0"></a>
  <a href="http://ec.com/admin/navigator.php?act=del&amp;id=15" onclick="return confirm(&#39;确定删除?&#39;);" title="确定删除?"><img src="./zidingyi-daohanglan_files/no.gif" width="16" height="16" border="0"><!--  --></a>
  </td>
</tr>
<tr>
	<td align="center"><!--  -->EC论坛<!--  --></td>
  <td align="center">
   <!--  -->
   <img src="./zidingyi-daohanglan_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_ifshow&#39;, 20)">
   <!--  --></td>
  <td align="center">
   <!--  -->
    <img src="./zidingyi-daohanglan_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_opennew&#39;, 20)">
   <!--  --></td>
  <td align="center"><!--  --><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 20)">100</span><!--  --></td>
  <td align="center"><!--  -->中间<!--  --></td>
  <td align="center"><!--  --><a href="http://ec.com/admin/navigator.php?act=edit&amp;id=20" title="编辑"><img src="./zidingyi-daohanglan_files/icon_edit.gif" width="16" height="16" border="0"></a>
  <a href="http://ec.com/admin/navigator.php?act=del&amp;id=20" onclick="return confirm(&#39;确定删除?&#39;);" title="确定删除?"><img src="./zidingyi-daohanglan_files/no.gif" width="16" height="16" border="0"><!--  --></a>
  </td>
</tr>
<tr>
	<td align="center"><!--  -->&nbsp;<!--  --></td>
  <td align="center">
   <!--  --></td>
  <td align="center">
   <!--  --></td>
  <td align="center"><!--  --></td>
  <td align="center"><!--  --></td>
  <td align="center"><!--  -->
  </td>
</tr>
<tr>
	<td align="center"><!--  -->免责条款<!--  --></td>
  <td align="center">
   <!--  -->
   <img src="./zidingyi-daohanglan_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_ifshow&#39;, 7)">
   <!--  --></td>
  <td align="center">
   <!--  -->
    <img src="./zidingyi-daohanglan_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_opennew&#39;, 7)">
   <!--  --></td>
  <td align="center"><!--  --><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 7)">1</span><!--  --></td>
  <td align="center"><!--  -->底部 <!--  --></td>
  <td align="center"><!--  --><a href="http://ec.com/admin/navigator.php?act=edit&amp;id=7" title="编辑"><img src="./zidingyi-daohanglan_files/icon_edit.gif" width="16" height="16" border="0"></a>
  <a href="http://ec.com/admin/navigator.php?act=del&amp;id=7" onclick="return confirm(&#39;确定删除?&#39;);" title="确定删除?"><img src="./zidingyi-daohanglan_files/no.gif" width="16" height="16" border="0"><!--  --></a>
  </td>
</tr>
</tbody></table>

  <table cellpadding="4" cellspacing="0">
    <tbody><tr>
      <td align="right">      <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
            <div id="turn-page">
        总计  <span id="totalRecords">21</span>
        个记录分为 <span id="totalPages">2</span>
        页当前第 <span id="pageCurrent">1</span>
        页，每页 <input type="text" size="3" id="pageSize" value="15" onkeypress="return listTable.changePageSize(event)">
        <span id="page-link">
          <a href="javascript:listTable.gotoPageFirst()">第一页</a>
          <a href="javascript:listTable.gotoPagePrev()">上一页</a>
          <a href="javascript:listTable.gotoPageNext()">下一页</a>
          <a href="javascript:listTable.gotoPageLast()">最末页</a>
          <select id="gotoPage" onchange="listTable.gotoPage(this.value)">
            <option value="1">1</option><option value="2">2</option>          </select>
        </span>
      </div>
</td>
    </tr>
  </tbody></table>
</div>
</form>
<script type="Text/Javascript" language="JavaScript">
<!--
listTable.recordCount = 21;
listTable.pageCount = 2;
listTable.filter.sort_by = 'type DESC, vieworder';
listTable.filter.sort_order = 'ASC';
listTable.filter.record_count = '21';
listTable.filter.page_size = '15';
listTable.filter.page = '1';
listTable.filter.page_count = '2';
listTable.filter.start = '0';

onload = function()
{
  // 开始检查订单
  startCheckOrder();
}

//-->
</script>
<div id="footer">
共执行 3 个查询，用时 0.039002 秒，Gzip 已禁用，内存占用 1.107 MB<br>
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