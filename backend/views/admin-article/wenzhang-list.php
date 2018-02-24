<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://ec.com/admin/article.php?act=list -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 文章列表 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./wenzhang-list_files/general.css" rel="stylesheet" type="text/css">
<link href="./wenzhang-list_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./wenzhang-list_files/transport.js"></script><script type="text/javascript" src="./wenzhang-list_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var no_title = "没有文章标题";
var no_cat = "没有选择文章分类";
var not_allow_add = "系统保留分类，不允许在该分类添加文章";
var drop_confirm = "您确定要删除文章吗？";
//-->
</script>
</head>
<body style="cursor: auto;">

<h1>
<span class="action-span"><a href="http://ec.com/admin/article.php?act=add">添加新文章</a></span>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 文章列表 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="./wenzhang-list_files/utils.js"></script><script type="text/javascript" src="./wenzhang-list_files/listtable.js"></script><div class="form-div">
  <form action="javascript:searchArticle()" name="searchForm">
    <img src="./wenzhang-list_files/icon_search.gif" width="26" height="22" border="0" alt="SEARCH">
    <select name="cat_id">
      <option value="0">全部分类</option>
        <option value="11" cat_type="1">手机促销</option><option value="1" cat_type="2">系统分类</option><option value="2" cat_type="3">&nbsp;&nbsp;&nbsp;&nbsp;网店信息</option><option value="3" cat_type="4">&nbsp;&nbsp;&nbsp;&nbsp;网店帮助分类</option><option value="5" cat_type="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;新手上路 </option><option value="6" cat_type="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;手机常识 </option><option value="7" cat_type="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;配送与支付 </option><option value="8" cat_type="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;服务保证 </option><option value="9" cat_type="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系我们 </option><option value="10" cat_type="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;会员中心</option><option value="12" cat_type="1">站内快讯</option><option value="4" cat_type="1">3G资讯</option>    </select>
    文章标题 <input type="text" name="keyword" id="keyword">
    <input type="submit" value=" 搜索 " class="button">
  </form>
</div>

<form method="POST" action="http://ec.com/admin/article.php?act=batch_remove" name="listForm">
<!-- start cat list -->
<div class="list-div" id="listDiv">

&nbsp;
    <table cellspacing="1" cellpadding="3" id="list-table">
  <tbody><tr>
    <th><input onclick="listTable.selectAll(this, &quot;checkboxes&quot;)" type="checkbox">
      <a href="javascript:listTable.sort(&#39;article_id&#39;); ">编号</a><img src="./wenzhang-list_files/sort_desc.gif"></th>
    <th><a href="javascript:listTable.sort(&#39;title&#39;); ">文章标题</a></th>
    <th><a href="javascript:listTable.sort(&#39;cat_id&#39;); ">文章分类</a></th>
    <th><a href="javascript:listTable.sort(&#39;article_type&#39;); ">文章重要性</a></th>
    <th><a href="javascript:listTable.sort(&#39;is_open&#39;); ">是否显示</a></th>
    <th><a href="javascript:listTable.sort(&#39;add_time&#39;); ">添加日期</a></th>
    <th>操作</th>
  </tr>
    <tr>
    <td><span><input name="checkboxes[]" type="checkbox" value="35">35</span></td>
    <td class="first-cell">
    <span onclick="javascript:listTable.edit(this, &#39;edit_title&#39;, 35)">“沃”的世界我做主</span></td>
    <td align="left"><span><!--  -->3G资讯<!--  --></span></td>
    <td align="center"><span>普通</span></td>
    <td align="center"><span>
    <img src="./wenzhang-list_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_show&#39;, 35)"></span></td>
    <td align="center"><span>2009-05-22 22:43:33</span></td>
    <td align="center" nowrap="true"><span>
      <a href="http://ec.com/article.php?id=35" target="_blank" title="查看"><img src="./wenzhang-list_files/icon_view.gif" border="0" height="16" width="16"></a>&nbsp;
      <a href="http://ec.com/admin/article.php?act=edit&amp;id=35" title="编辑"><img src="./wenzhang-list_files/icon_edit.gif" border="0" height="16" width="16"></a>&nbsp;
     <!--  --><a href="javascript:;" onclick="listTable.remove(35, &#39;您确认要删除这篇文章吗？&#39;)" title="移除"><img src="./wenzhang-list_files/icon_drop.gif" border="0" height="16" width="16"></a><!--  --></span>
    </td>
   </tr>
     <tr>
    <td><span><input name="checkboxes[]" type="checkbox" value="34">34</span></td>
    <td class="first-cell">
    <span onclick="javascript:listTable.edit(this, &#39;edit_title&#39;, 34)">3G知识普及</span></td>
    <td align="left"><span><!--  -->站内快讯<!--  --></span></td>
    <td align="center"><span>普通</span></td>
    <td align="center"><span>
    <img src="./wenzhang-list_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_show&#39;, 34)"></span></td>
    <td align="center"><span>2009-05-18 09:06:53</span></td>
    <td align="center" nowrap="true"><span>
      <a href="http://ec.com/article.php?id=34" target="_blank" title="查看"><img src="./wenzhang-list_files/icon_view.gif" border="0" height="16" width="16"></a>&nbsp;
      <a href="http://ec.com/admin/article.php?act=edit&amp;id=34" title="编辑"><img src="./wenzhang-list_files/icon_edit.gif" border="0" height="16" width="16"></a>&nbsp;
     <!--  --><a href="javascript:;" onclick="listTable.remove(34, &#39;您确认要删除这篇文章吗？&#39;)" title="移除"><img src="./wenzhang-list_files/icon_drop.gif" border="0" height="16" width="16"></a><!--  --></span>
    </td>
   </tr>
     <tr>
    <td><span><input name="checkboxes[]" type="checkbox" value="33">33</span></td>
    <td class="first-cell">
    <span onclick="javascript:listTable.edit(this, &#39;edit_title&#39;, 33)">三星SGHU308说明书下载</span></td>
    <td align="left"><span><!--  -->站内快讯<!--  --></span></td>
    <td align="center"><span>置顶</span></td>
    <td align="center"><span>
    <img src="./wenzhang-list_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_show&#39;, 33)"></span></td>
    <td align="center"><span>2009-05-18 08:59:19</span></td>
    <td align="center" nowrap="true"><span>
      <a href="http://ec.com/article.php?id=33" target="_blank" title="查看"><img src="./wenzhang-list_files/icon_view.gif" border="0" height="16" width="16"></a>&nbsp;
      <a href="http://ec.com/admin/article.php?act=edit&amp;id=33" title="编辑"><img src="./wenzhang-list_files/icon_edit.gif" border="0" height="16" width="16"></a>&nbsp;
     <!--  --><a href="javascript:;" onclick="listTable.remove(33, &#39;您确认要删除这篇文章吗？&#39;)" title="移除"><img src="./wenzhang-list_files/icon_drop.gif" border="0" height="16" width="16"></a><!--  --></span>
    </td>
   </tr>
     <tr>
    <td><span><input name="checkboxes[]" type="checkbox" value="32">32</span></td>
    <td class="first-cell">
    <span onclick="javascript:listTable.edit(this, &#39;edit_title&#39;, 32)">手机游戏下载</span></td>
    <td align="left"><span><!--  -->站内快讯<!--  --></span></td>
    <td align="center"><span>置顶</span></td>
    <td align="center"><span>
    <img src="./wenzhang-list_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_show&#39;, 32)"></span></td>
    <td align="center"><span>2009-05-18 08:53:09</span></td>
    <td align="center" nowrap="true"><span>
      <a href="http://ec.com/article.php?id=32" target="_blank" title="查看"><img src="./wenzhang-list_files/icon_view.gif" border="0" height="16" width="16"></a>&nbsp;
      <a href="http://ec.com/admin/article.php?act=edit&amp;id=32" title="编辑"><img src="./wenzhang-list_files/icon_edit.gif" border="0" height="16" width="16"></a>&nbsp;
     <!--  --><a href="javascript:;" onclick="listTable.remove(32, &#39;您确认要删除这篇文章吗？&#39;)" title="移除"><img src="./wenzhang-list_files/icon_drop.gif" border="0" height="16" width="16"></a><!--  --></span>
    </td>
   </tr>
     <tr>
    <td><span><input name="checkboxes[]" type="checkbox" value="31">31</span></td>
    <td class="first-cell">
    <span onclick="javascript:listTable.edit(this, &#39;edit_title&#39;, 31)">诺基亚6681手机广告欣赏</span></td>
    <td align="left"><span><!--  -->站内快讯<!--  --></span></td>
    <td align="center"><span>普通</span></td>
    <td align="center"><span>
    <img src="./wenzhang-list_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_show&#39;, 31)"></span></td>
    <td align="center"><span>2009-05-18 08:51:09</span></td>
    <td align="center" nowrap="true"><span>
      <a href="http://ec.com/article.php?id=31" target="_blank" title="查看"><img src="./wenzhang-list_files/icon_view.gif" border="0" height="16" width="16"></a>&nbsp;
      <a href="http://ec.com/admin/article.php?act=edit&amp;id=31" title="编辑"><img src="./wenzhang-list_files/icon_edit.gif" border="0" height="16" width="16"></a>&nbsp;
     <!--  --><a href="javascript:;" onclick="listTable.remove(31, &#39;您确认要删除这篇文章吗？&#39;)" title="移除"><img src="./wenzhang-list_files/icon_drop.gif" border="0" height="16" width="16"></a><!--  --></span>
    </td>
   </tr>
     <tr>
    <td><span><input name="checkboxes[]" type="checkbox" value="30">30</span></td>
    <td class="first-cell">
    <span onclick="javascript:listTable.edit(this, &#39;edit_title&#39;, 30)">促销诺基亚N96</span></td>
    <td align="left"><span><!--  -->手机促销<!--  --></span></td>
    <td align="center"><span>置顶</span></td>
    <td align="center"><span>
    <img src="./wenzhang-list_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_show&#39;, 30)"></span></td>
    <td align="center"><span>2009-05-18 08:47:06</span></td>
    <td align="center" nowrap="true"><span>
      <a href="http://ec.com/article.php?id=30" target="_blank" title="查看"><img src="./wenzhang-list_files/icon_view.gif" border="0" height="16" width="16"></a>&nbsp;
      <a href="http://ec.com/admin/article.php?act=edit&amp;id=30" title="编辑"><img src="./wenzhang-list_files/icon_edit.gif" border="0" height="16" width="16"></a>&nbsp;
     <!--  --><a href="javascript:;" onclick="listTable.remove(30, &#39;您确认要删除这篇文章吗？&#39;)" title="移除"><img src="./wenzhang-list_files/icon_drop.gif" border="0" height="16" width="16"></a><!--  --></span>
    </td>
   </tr>
     <tr>
    <td><span><input name="checkboxes[]" type="checkbox" value="29">29</span></td>
    <td class="first-cell">
    <span onclick="javascript:listTable.edit(this, &#39;edit_title&#39;, 29)">诺基亚5320 促销</span></td>
    <td align="left"><span><!--  -->手机促销<!--  --></span></td>
    <td align="center"><span>置顶</span></td>
    <td align="center"><span>
    <img src="./wenzhang-list_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_show&#39;, 29)"></span></td>
    <td align="center"><span>2009-05-18 08:44:36</span></td>
    <td align="center" nowrap="true"><span>
      <a href="http://ec.com/article.php?id=29" target="_blank" title="查看"><img src="./wenzhang-list_files/icon_view.gif" border="0" height="16" width="16"></a>&nbsp;
      <a href="http://ec.com/admin/article.php?act=edit&amp;id=29" title="编辑"><img src="./wenzhang-list_files/icon_edit.gif" border="0" height="16" width="16"></a>&nbsp;
     <!--  --><a href="javascript:;" onclick="listTable.remove(29, &#39;您确认要删除这篇文章吗？&#39;)" title="移除"><img src="./wenzhang-list_files/icon_drop.gif" border="0" height="16" width="16"></a><!--  --></span>
    </td>
   </tr>
     <tr>
    <td><span><input name="checkboxes[]" type="checkbox" value="28">28</span></td>
    <td class="first-cell">
    <span onclick="javascript:listTable.edit(this, &#39;edit_title&#39;, 28)">飞利浦9@9促销</span></td>
    <td align="left"><span><!--  -->手机促销<!--  --></span></td>
    <td align="center"><span>普通</span></td>
    <td align="center"><span>
    <img src="./wenzhang-list_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_show&#39;, 28)"></span></td>
    <td align="center"><span>2009-05-18 08:36:39</span></td>
    <td align="center" nowrap="true"><span>
      <a href="http://ec.com/article.php?id=28" target="_blank" title="查看"><img src="./wenzhang-list_files/icon_view.gif" border="0" height="16" width="16"></a>&nbsp;
      <a href="http://ec.com/admin/article.php?act=edit&amp;id=28" title="编辑"><img src="./wenzhang-list_files/icon_edit.gif" border="0" height="16" width="16"></a>&nbsp;
     <!--  --><a href="javascript:;" onclick="listTable.remove(28, &#39;您确认要删除这篇文章吗？&#39;)" title="移除"><img src="./wenzhang-list_files/icon_drop.gif" border="0" height="16" width="16"></a><!--  --></span>
    </td>
   </tr>
     <tr>
    <td><span><input name="checkboxes[]" type="checkbox" value="27">27</span></td>
    <td class="first-cell">
    <span onclick="javascript:listTable.edit(this, &#39;edit_title&#39;, 27)">800万像素超强拍照机 LG Viewty Smart再曝光</span></td>
    <td align="left"><span><!--  -->3G资讯<!--  --></span></td>
    <td align="center"><span>普通</span></td>
    <td align="center"><span>
    <img src="./wenzhang-list_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_show&#39;, 27)"></span></td>
    <td align="center"><span>2009-05-18 08:28:22</span></td>
    <td align="center" nowrap="true"><span>
      <a href="http://ec.com/article.php?id=27" target="_blank" title="查看"><img src="./wenzhang-list_files/icon_view.gif" border="0" height="16" width="16"></a>&nbsp;
      <a href="http://ec.com/admin/article.php?act=edit&amp;id=27" title="编辑"><img src="./wenzhang-list_files/icon_edit.gif" border="0" height="16" width="16"></a>&nbsp;
     <!--  --><a href="javascript:;" onclick="listTable.remove(27, &#39;您确认要删除这篇文章吗？&#39;)" title="移除"><img src="./wenzhang-list_files/icon_drop.gif" border="0" height="16" width="16"></a><!--  --></span>
    </td>
   </tr>
     <tr>
    <td><span><input name="checkboxes[]" type="checkbox" value="26">26</span></td>
    <td class="first-cell">
    <span onclick="javascript:listTable.edit(this, &#39;edit_title&#39;, 26)">投诉与建议 </span></td>
    <td align="left"><span><!--  -->联系我们 <!--  --></span></td>
    <td align="center"><span>普通</span></td>
    <td align="center"><span>
    <img src="./wenzhang-list_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_show&#39;, 26)"></span></td>
    <td align="center"><span>2009-05-18 08:24:19</span></td>
    <td align="center" nowrap="true"><span>
      <a href="http://ec.com/article.php?id=26" target="_blank" title="查看"><img src="./wenzhang-list_files/icon_view.gif" border="0" height="16" width="16"></a>&nbsp;
      <a href="http://ec.com/admin/article.php?act=edit&amp;id=26" title="编辑"><img src="./wenzhang-list_files/icon_edit.gif" border="0" height="16" width="16"></a>&nbsp;
     <!--  --><a href="javascript:;" onclick="listTable.remove(26, &#39;您确认要删除这篇文章吗？&#39;)" title="移除"><img src="./wenzhang-list_files/icon_drop.gif" border="0" height="16" width="16"></a><!--  --></span>
    </td>
   </tr>
     <tr>
    <td><span><input name="checkboxes[]" type="checkbox" value="25">25</span></td>
    <td class="first-cell">
    <span onclick="javascript:listTable.edit(this, &#39;edit_title&#39;, 25)">选机咨询 </span></td>
    <td align="left"><span><!--  -->联系我们 <!--  --></span></td>
    <td align="center"><span>普通</span></td>
    <td align="center"><span>
    <img src="./wenzhang-list_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_show&#39;, 25)"></span></td>
    <td align="center"><span>2009-05-18 08:24:08</span></td>
    <td align="center" nowrap="true"><span>
      <a href="http://ec.com/article.php?id=25" target="_blank" title="查看"><img src="./wenzhang-list_files/icon_view.gif" border="0" height="16" width="16"></a>&nbsp;
      <a href="http://ec.com/admin/article.php?act=edit&amp;id=25" title="编辑"><img src="./wenzhang-list_files/icon_edit.gif" border="0" height="16" width="16"></a>&nbsp;
     <!--  --><a href="javascript:;" onclick="listTable.remove(25, &#39;您确认要删除这篇文章吗？&#39;)" title="移除"><img src="./wenzhang-list_files/icon_drop.gif" border="0" height="16" width="16"></a><!--  --></span>
    </td>
   </tr>
     <tr>
    <td><span><input name="checkboxes[]" type="checkbox" value="24">24</span></td>
    <td class="first-cell">
    <span onclick="javascript:listTable.edit(this, &#39;edit_title&#39;, 24)">网站故障报告</span></td>
    <td align="left"><span><!--  -->联系我们 <!--  --></span></td>
    <td align="center"><span>普通</span></td>
    <td align="center"><span>
    <img src="./wenzhang-list_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_show&#39;, 24)"></span></td>
    <td align="center"><span>2009-05-18 08:23:52</span></td>
    <td align="center" nowrap="true"><span>
      <a href="http://ec.com/article.php?id=24" target="_blank" title="查看"><img src="./wenzhang-list_files/icon_view.gif" border="0" height="16" width="16"></a>&nbsp;
      <a href="http://ec.com/admin/article.php?act=edit&amp;id=24" title="编辑"><img src="./wenzhang-list_files/icon_edit.gif" border="0" height="16" width="16"></a>&nbsp;
     <!--  --><a href="javascript:;" onclick="listTable.remove(24, &#39;您确认要删除这篇文章吗？&#39;)" title="移除"><img src="./wenzhang-list_files/icon_drop.gif" border="0" height="16" width="16"></a><!--  --></span>
    </td>
   </tr>
     <tr>
    <td style="background-color: rgb(244, 250, 251);"><span><input name="checkboxes[]" type="checkbox" value="23">23</span></td>
    <td class="first-cell" style="background-color: rgb(244, 250, 251);">
    <span onclick="javascript:listTable.edit(this, &#39;edit_title&#39;, 23)">产品质量保证 </span></td>
    <td align="left" style="background-color: rgb(244, 250, 251);"><span><!--  -->服务保证 <!--  --></span></td>
    <td align="center" style="background-color: rgb(244, 250, 251);"><span>置顶</span></td>
    <td align="center" style="background-color: rgb(244, 250, 251);"><span>
    <img src="./wenzhang-list_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_show&#39;, 23)"></span></td>
    <td align="center" style="background-color: rgb(244, 250, 251);"><span>2009-05-18 08:22:06</span></td>
    <td align="center" nowrap="true" style="background-color: rgb(244, 250, 251);"><span>
      <a href="http://ec.com/article.php?id=23" target="_blank" title="查看"><img src="./wenzhang-list_files/icon_view.gif" border="0" height="16" width="16"></a>&nbsp;
      <a href="http://ec.com/admin/article.php?act=edit&amp;id=23" title="编辑"><img src="./wenzhang-list_files/icon_edit.gif" border="0" height="16" width="16"></a>&nbsp;
     <!--  --><a href="javascript:;" onclick="listTable.remove(23, &#39;您确认要删除这篇文章吗？&#39;)" title="移除"><img src="./wenzhang-list_files/icon_drop.gif" border="0" height="16" width="16"></a><!--  --></span>
    </td>
   </tr>
     <tr>
    <td><span><input name="checkboxes[]" type="checkbox" value="22">22</span></td>
    <td class="first-cell">
    <span onclick="javascript:listTable.edit(this, &#39;edit_title&#39;, 22)">售后服务保证 </span></td>
    <td align="left"><span><!--  -->服务保证 <!--  --></span></td>
    <td align="center"><span>普通</span></td>
    <td align="center"><span>
    <img src="./wenzhang-list_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_show&#39;, 22)"></span></td>
    <td align="center"><span>2009-05-18 08:21:48</span></td>
    <td align="center" nowrap="true"><span>
      <a href="http://ec.com/article.php?id=22" target="_blank" title="查看"><img src="./wenzhang-list_files/icon_view.gif" border="0" height="16" width="16"></a>&nbsp;
      <a href="http://ec.com/admin/article.php?act=edit&amp;id=22" title="编辑"><img src="./wenzhang-list_files/icon_edit.gif" border="0" height="16" width="16"></a>&nbsp;
     <!--  --><a href="javascript:;" onclick="listTable.remove(22, &#39;您确认要删除这篇文章吗？&#39;)" title="移除"><img src="./wenzhang-list_files/icon_drop.gif" border="0" height="16" width="16"></a><!--  --></span>
    </td>
   </tr>
     <tr>
    <td><span><input name="checkboxes[]" type="checkbox" value="21">21</span></td>
    <td class="first-cell">
    <span onclick="javascript:listTable.edit(this, &#39;edit_title&#39;, 21)">退换货原则</span></td>
    <td align="left"><span><!--  -->服务保证 <!--  --></span></td>
    <td align="center"><span>普通</span></td>
    <td align="center"><span>
    <img src="./wenzhang-list_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_show&#39;, 21)"></span></td>
    <td align="center"><span>2009-05-18 08:21:33</span></td>
    <td align="center" nowrap="true"><span>
      <a href="http://ec.com/article.php?id=21" target="_blank" title="查看"><img src="./wenzhang-list_files/icon_view.gif" border="0" height="16" width="16"></a>&nbsp;
      <a href="http://ec.com/admin/article.php?act=edit&amp;id=21" title="编辑"><img src="./wenzhang-list_files/icon_edit.gif" border="0" height="16" width="16"></a>&nbsp;
     <!--  --><a href="javascript:;" onclick="listTable.remove(21, &#39;您确认要删除这篇文章吗？&#39;)" title="移除"><img src="./wenzhang-list_files/icon_drop.gif" border="0" height="16" width="16"></a><!--  --></span>
    </td>
   </tr>
     <tr><td align="right" nowrap="true" colspan="8">      <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
            <div id="turn-page">
        总计  <span id="totalRecords">35</span>
        个记录分为 <span id="totalPages">3</span>
        页当前第 <span id="pageCurrent">1</span>
        页，每页 <input type="text" size="3" id="pageSize" value="15" onkeypress="return listTable.changePageSize(event)">
        <span id="page-link">
          <a href="javascript:listTable.gotoPageFirst()">第一页</a>
          <a href="javascript:listTable.gotoPagePrev()">上一页</a>
          <a href="javascript:listTable.gotoPageNext()">下一页</a>
          <a href="javascript:listTable.gotoPageLast()">最末页</a>
          <select id="gotoPage" onchange="listTable.gotoPage(this.value)">
            <option value="1">1</option><option value="2">2</option><option value="3">3</option>          </select>
        </span>
      </div>
</td>
  </tr>
</tbody></table>

</div>

<div>
  <input type="hidden" name="act" value="batch">
  <select name="type" id="selAction" onchange="changeAction()">
    <option value="">请选择...</option>
    <option value="button_remove">批量删除</option>
    <option value="button_hide">批量隐藏</option>
    <option value="button_show">批量显示</option>
    <option value="move_to">转移到分类</option>
  </select>
  <select name="target_cat" style="display:none">
    <option value="0">请选择...</option>
    <option value="11" cat_type="1">手机促销</option><option value="1" cat_type="2">系统分类</option><option value="2" cat_type="3">&nbsp;&nbsp;&nbsp;&nbsp;网店信息</option><option value="3" cat_type="4">&nbsp;&nbsp;&nbsp;&nbsp;网店帮助分类</option><option value="5" cat_type="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;新手上路 </option><option value="6" cat_type="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;手机常识 </option><option value="7" cat_type="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;配送与支付 </option><option value="8" cat_type="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;服务保证 </option><option value="9" cat_type="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系我们 </option><option value="10" cat_type="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;会员中心</option><option value="12" cat_type="1">站内快讯</option><option value="4" cat_type="1">3G资讯</option>  </select>

  <input type="submit" value=" 确定 " id="btnSubmit" name="btnSubmit" class="button" disabled="true">
</div>
</form>
<!-- end cat list -->
<script type="text/javascript" language="JavaScript">
  listTable.recordCount = 35;
  listTable.pageCount = 3;

    listTable.filter.keyword = '';
    listTable.filter.cat_id = '0';
    listTable.filter.sort_by = 'a.article_id';
    listTable.filter.sort_order = 'DESC';
    listTable.filter.record_count = '35';
    listTable.filter.page_size = '15';
    listTable.filter.page = '1';
    listTable.filter.page_count = '3';
    listTable.filter.start = '0';
    

  onload = function()
  {
    // 开始检查订单
    startCheckOrder();
  }
	/**
   * @param: bool ext 其他条件：用于转移分类
   */
  function confirmSubmit(frm, ext)
  {
      if (frm.elements['type'].value == 'button_remove')
      {
          return confirm(drop_confirm);
      }
      else if (frm.elements['type'].value == 'not_on_sale')
      {
          return confirm(batch_no_on_sale);
      }
      else if (frm.elements['type'].value == 'move_to')
      {
          ext = (ext == undefined) ? true : ext;
          return ext && frm.elements['target_cat'].value != 0;
      }
      else if (frm.elements['type'].value == '')
      {
          return false;
      }
      else
      {
          return true;
      }
  }
	 function changeAction()
  {
		
      var frm = document.forms['listForm'];

      // 切换分类列表的显示
      frm.elements['target_cat'].style.display = frm.elements['type'].value == 'move_to' ? '' : 'none';

      if (!document.getElementById('btnSubmit').disabled &&
          confirmSubmit(frm, false))
      {
          frm.submit();
      }
  }

 /* 搜索文章 */
 function searchArticle()
 {
    listTable.filter.keyword = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
    listTable.filter.cat_id = parseInt(document.forms['searchForm'].elements['cat_id'].value);
    listTable.filter.page = 1;
    listTable.loadList();
 }

 
</script>
<div id="footer">
共执行 3 个查询，用时 0.019001 秒，Gzip 已禁用，内存占用 1.273 MB<br>
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