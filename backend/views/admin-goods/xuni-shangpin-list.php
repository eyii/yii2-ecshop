<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0066)http://ec.com/admin/goods.php?act=list&extension_code=virtual_card -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 虚拟商品列表 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./xunishangpinlist_files/general.css" rel="stylesheet" type="text/css">
<link href="./xunishangpinlist_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./xunishangpinlist_files/transport.js"></script><script type="text/javascript" src="./xunishangpinlist_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var goods_name_not_null = "商品名称不能为空。";
var goods_cat_not_null = "商品分类必须选择。";
var category_cat_not_null = "分类名称不能为空";
var brand_cat_not_null = "品牌名称不能为空";
var goods_cat_not_leaf = "您选择的商品分类不是底级分类，请选择底级分类。";
var shop_price_not_null = "本店售价不能为空。";
var shop_price_not_number = "本店售价不是数值。";
var select_please = "请选择...";
var button_add = "添加";
var button_del = "删除";
var spec_value_not_null = "规格不能为空";
var spec_price_not_number = "加价不是数字";
var market_price_not_number = "市场价格不是数字";
var goods_number_not_int = "商品库存不是整数";
var warn_number_not_int = "库存警告不是整数";
var promote_not_lt = "促销开始日期不能大于结束日期";
var promote_start_not_null = "促销开始时间不能为空";
var promote_end_not_null = "促销结束时间不能为空";
var drop_img_confirm = "您确实要删除该图片吗？";
var batch_no_on_sale = "您确实要将选定的商品下架吗？";
var batch_trash_confirm = "您确实要把选中的商品放入回收站吗？";
var go_category_page = "本页数据将丢失，确认要去商品分类页添加分类吗？";
var go_brand_page = "本页数据将丢失，确认要去商品品牌页添加品牌吗？";
var volume_num_not_null = "请输入优惠数量";
var volume_num_not_number = "优惠数量不是数字";
var volume_price_not_null = "请输入优惠价格";
var volume_price_not_number = "优惠价格不是数字";
var cancel_color = "无样式";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span"><a href="http://ec.com/admin/goods.php?act=add&amp;extension_code=virtual_card">添加虚拟商品</a></span>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 虚拟商品列表 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="./xunishangpinlist_files/utils.js"></script><script type="text/javascript" src="./xunishangpinlist_files/listtable.js"></script>
<!-- 商品搜索 -->
<!-- $Id: goods_search.htm 16790 2009-11-10 08:56:15Z wangleisvn $ -->
<div class="form-div">
  <form action="javascript:searchGoods()" name="searchForm">
    <img src="./xunishangpinlist_files/icon_search.gif" width="26" height="22" border="0" alt="SEARCH">
        <!-- 分类 -->
    <select name="cat_id"><option value="0">所有分类</option><option value="6">手机配件</option><option value="9">&nbsp;&nbsp;&nbsp;&nbsp;电池</option><option value="11">&nbsp;&nbsp;&nbsp;&nbsp;读卡器和内存卡</option><option value="7">&nbsp;&nbsp;&nbsp;&nbsp;充电器</option><option value="8">&nbsp;&nbsp;&nbsp;&nbsp;耳机</option><option value="1">手机类型</option><option value="3">&nbsp;&nbsp;&nbsp;&nbsp;GSM手机</option><option value="4">&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option><option value="5">&nbsp;&nbsp;&nbsp;&nbsp;双模手机</option><option value="2">&nbsp;&nbsp;&nbsp;&nbsp;CDMA手机</option><option value="12">充值卡</option><option value="14">&nbsp;&nbsp;&nbsp;&nbsp;移动手机充值卡</option><option value="15">&nbsp;&nbsp;&nbsp;&nbsp;联通手机充值卡</option><option value="13">&nbsp;&nbsp;&nbsp;&nbsp;小灵通/固话充值卡</option></select>
    <!-- 品牌 -->
    <select name="brand_id"><option value="0">所有品牌</option><option value="1">诺基亚</option><option value="10">金立</option><option value="9">联想</option><option value="8">LG</option><option value="7">索爱</option><option value="6">三星</option><option value="5">夏新</option><option value="4">飞利浦</option><option value="3">多普达</option><option value="2">摩托罗拉</option><option value="11">  恒基伟业</option></select>
    <!-- 推荐 -->
    <select name="intro_type"><option value="0">全部</option><option value="is_best">精品</option><option value="is_new">新品</option><option value="is_hot">热销</option><option value="is_promote">特价</option><option value="all_type">全部推荐</option></select>
         
      <!-- 供货商 -->
      <select name="suppliers_id"><option value="0">全部</option><option value="1">北京供货商</option><option value="2">上海供货商</option></select>
            <!-- 上架 -->
      <select name="is_on_sale"><option value="">全部</option><option value="1">上架</option><option value="0">下架</option></select>
        <!-- 关键字 -->
    关键字 <input type="text" name="keyword" size="15">
    <input type="submit" value=" 搜索 " class="button">
  </form>
</div>


<script language="JavaScript">
    function searchGoods()
    {

                listTable.filter['cat_id'] = document.forms['searchForm'].elements['cat_id'].value;
        listTable.filter['brand_id'] = document.forms['searchForm'].elements['brand_id'].value;
        listTable.filter['intro_type'] = document.forms['searchForm'].elements['intro_type'].value;
                    listTable.filter['suppliers_id'] = document.forms['searchForm'].elements['suppliers_id'].value;
                  listTable.filter['is_on_sale'] = document.forms['searchForm'].elements['is_on_sale'].value;
        
        listTable.filter['keyword'] = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
        listTable.filter['page'] = 1;

        listTable.loadList();
    }
</script>
<!-- 商品列表 -->
<form method="post" action="" name="listForm" onsubmit="return confirmSubmit(this)">
  <!-- start goods list -->
  <div class="list-div" id="listDiv">
<table cellpadding="3" cellspacing="1">
  <tbody><tr>
    <th>
      <input onclick="listTable.selectAll(this, &quot;checkboxes&quot;)" type="checkbox">
      <a href="javascript:listTable.sort(&#39;goods_id&#39;); ">编号</a><img src="./xunishangpinlist_files/sort_desc.gif">    </th>
    <th><a href="javascript:listTable.sort(&#39;goods_name&#39;); ">商品名称</a></th>
    <th><a href="javascript:listTable.sort(&#39;goods_sn&#39;); ">货号</a></th>
    <th><a href="javascript:listTable.sort(&#39;shop_price&#39;); ">价格</a></th>
    <th><a href="javascript:listTable.sort(&#39;is_on_sale&#39;); ">上架</a></th>
    <th><a href="javascript:listTable.sort(&#39;is_best&#39;); ">精品</a></th>
    <th><a href="javascript:listTable.sort(&#39;is_new&#39;); ">新品</a></th>
    <th><a href="javascript:listTable.sort(&#39;is_hot&#39;); ">热销</a></th>
    <th><a href="javascript:listTable.sort(&#39;sort_order&#39;); ">推荐排序</a></th>
        <th><a href="javascript:listTable.sort(&#39;goods_number&#39;); ">库存</a></th>
        <th>操作</th>
  </tr><tr>
    </tr><tr>
    <td><input type="checkbox" name="checkboxes[]" value="30">30</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, &#39;edit_goods_name&#39;, 30)">移动20元充值卡</span></td>
    <td><span onclick="listTable.edit(this, &#39;edit_goods_sn&#39;, 30)">ECS000030</span></td>
    <td align="right"><span onclick="listTable.edit(this, &#39;edit_goods_price&#39;, 30)">18.00
    </span></td>
    <td align="center"><img src="./xunishangpinlist_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_on_sale&#39;, 30)"></td>
    <td align="center"><img src="./xunishangpinlist_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_best&#39;, 30)"></td>
    <td align="center"><img src="./xunishangpinlist_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_new&#39;, 30)"></td>
    <td align="center"><img src="./xunishangpinlist_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_hot&#39;, 30)"></td>
    <td align="center"><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 30)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, &#39;edit_goods_number&#39;, 30)">9</span></td>
        <td align="center">
      <a href="http://ec.com/goods.php?id=30" target="_blank" title="查看"><img src="./xunishangpinlist_files/icon_view.gif" width="16" height="16" border="0"></a>
      <a href="http://ec.com/admin/goods.php?act=edit&amp;goods_id=30&amp;extension_code=virtual_card" title="编辑"><img src="./xunishangpinlist_files/icon_edit.gif" width="16" height="16" border="0"></a>
      <a href="http://ec.com/admin/goods.php?act=copy&amp;goods_id=30&amp;extension_code=virtual_card" title="复制"><img src="./xunishangpinlist_files/icon_copy.gif" width="16" height="16" border="0"></a>
      <a href="javascript:;" onclick="listTable.remove(30, &#39;您确实要把该商品放入回收站吗？&#39;)" title="回收站"><img src="./xunishangpinlist_files/icon_trash.gif" width="16" height="16" border="0"></a>
      <img src="./xunishangpinlist_files/empty.gif" width="16" height="16" border="0">              |
                <a href="http://ec.com/admin/virtual_card.php?act=card&amp;goods_id=30" title="查看虚拟卡信息"><img src="./xunishangpinlist_files/icon_send_bonus.gif" width="16" height="16" border="0"></a>
                <a href="http://ec.com/admin/virtual_card.php?act=replenish&amp;goods_id=30" title="补货"><img src="./xunishangpinlist_files/icon_add.gif" width="16" height="16" border="0"></a>
                <a href="http://ec.com/admin/virtual_card.php?act=batch_card_add&amp;goods_id=30" title="批量补货"><img src="./xunishangpinlist_files/icon_output.gif" width="16" height="16" border="0"></a>
                  </td>
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="29">29</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, &#39;edit_goods_name&#39;, 29)">移动100元充值卡</span></td>
    <td><span onclick="listTable.edit(this, &#39;edit_goods_sn&#39;, 29)">ECS000029</span></td>
    <td align="right"><span onclick="listTable.edit(this, &#39;edit_goods_price&#39;, 29)">90.00
    </span></td>
    <td align="center"><img src="./xunishangpinlist_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_on_sale&#39;, 29)"></td>
    <td align="center"><img src="./xunishangpinlist_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_best&#39;, 29)"></td>
    <td align="center"><img src="./xunishangpinlist_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_new&#39;, 29)"></td>
    <td align="center"><img src="./xunishangpinlist_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_hot&#39;, 29)"></td>
    <td align="center"><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 29)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, &#39;edit_goods_number&#39;, 29)">0</span></td>
        <td align="center">
      <a href="http://ec.com/goods.php?id=29" target="_blank" title="查看"><img src="./xunishangpinlist_files/icon_view.gif" width="16" height="16" border="0"></a>
      <a href="http://ec.com/admin/goods.php?act=edit&amp;goods_id=29&amp;extension_code=virtual_card" title="编辑"><img src="./xunishangpinlist_files/icon_edit.gif" width="16" height="16" border="0"></a>
      <a href="http://ec.com/admin/goods.php?act=copy&amp;goods_id=29&amp;extension_code=virtual_card" title="复制"><img src="./xunishangpinlist_files/icon_copy.gif" width="16" height="16" border="0"></a>
      <a href="javascript:;" onclick="listTable.remove(29, &#39;您确实要把该商品放入回收站吗？&#39;)" title="回收站"><img src="./xunishangpinlist_files/icon_trash.gif" width="16" height="16" border="0"></a>
      <img src="./xunishangpinlist_files/empty.gif" width="16" height="16" border="0">              |
                <a href="http://ec.com/admin/virtual_card.php?act=card&amp;goods_id=29" title="查看虚拟卡信息"><img src="./xunishangpinlist_files/icon_send_bonus.gif" width="16" height="16" border="0"></a>
                <a href="http://ec.com/admin/virtual_card.php?act=replenish&amp;goods_id=29" title="补货"><img src="./xunishangpinlist_files/icon_add.gif" width="16" height="16" border="0"></a>
                <a href="http://ec.com/admin/virtual_card.php?act=batch_card_add&amp;goods_id=29" title="批量补货"><img src="./xunishangpinlist_files/icon_output.gif" width="16" height="16" border="0"></a>
                  </td>
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="28">28</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, &#39;edit_goods_name&#39;, 28)">联通50元充值卡</span></td>
    <td><span onclick="listTable.edit(this, &#39;edit_goods_sn&#39;, 28)">ECS000028</span></td>
    <td align="right"><span onclick="listTable.edit(this, &#39;edit_goods_price&#39;, 28)">45.00
    </span></td>
    <td align="center"><img src="./xunishangpinlist_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_on_sale&#39;, 28)"></td>
    <td align="center"><img src="./xunishangpinlist_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_best&#39;, 28)"></td>
    <td align="center"><img src="./xunishangpinlist_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_new&#39;, 28)"></td>
    <td align="center"><img src="./xunishangpinlist_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_hot&#39;, 28)"></td>
    <td align="center"><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 28)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, &#39;edit_goods_number&#39;, 28)">0</span></td>
        <td align="center">
      <a href="http://ec.com/goods.php?id=28" target="_blank" title="查看"><img src="./xunishangpinlist_files/icon_view.gif" width="16" height="16" border="0"></a>
      <a href="http://ec.com/admin/goods.php?act=edit&amp;goods_id=28&amp;extension_code=virtual_card" title="编辑"><img src="./xunishangpinlist_files/icon_edit.gif" width="16" height="16" border="0"></a>
      <a href="http://ec.com/admin/goods.php?act=copy&amp;goods_id=28&amp;extension_code=virtual_card" title="复制"><img src="./xunishangpinlist_files/icon_copy.gif" width="16" height="16" border="0"></a>
      <a href="javascript:;" onclick="listTable.remove(28, &#39;您确实要把该商品放入回收站吗？&#39;)" title="回收站"><img src="./xunishangpinlist_files/icon_trash.gif" width="16" height="16" border="0"></a>
      <img src="./xunishangpinlist_files/empty.gif" width="16" height="16" border="0">              |
                <a href="http://ec.com/admin/virtual_card.php?act=card&amp;goods_id=28" title="查看虚拟卡信息"><img src="./xunishangpinlist_files/icon_send_bonus.gif" width="16" height="16" border="0"></a>
                <a href="http://ec.com/admin/virtual_card.php?act=replenish&amp;goods_id=28" title="补货"><img src="./xunishangpinlist_files/icon_add.gif" width="16" height="16" border="0"></a>
                <a href="http://ec.com/admin/virtual_card.php?act=batch_card_add&amp;goods_id=28" title="批量补货"><img src="./xunishangpinlist_files/icon_output.gif" width="16" height="16" border="0"></a>
                  </td>
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="27">27</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, &#39;edit_goods_name&#39;, 27)">联通100元充值卡</span></td>
    <td><span onclick="listTable.edit(this, &#39;edit_goods_sn&#39;, 27)">ECS000027</span></td>
    <td align="right"><span onclick="listTable.edit(this, &#39;edit_goods_price&#39;, 27)">95.00
    </span></td>
    <td align="center"><img src="./xunishangpinlist_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_on_sale&#39;, 27)"></td>
    <td align="center"><img src="./xunishangpinlist_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_best&#39;, 27)"></td>
    <td align="center"><img src="./xunishangpinlist_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_new&#39;, 27)"></td>
    <td align="center"><img src="./xunishangpinlist_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_hot&#39;, 27)"></td>
    <td align="center"><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 27)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, &#39;edit_goods_number&#39;, 27)">2</span></td>
        <td align="center">
      <a href="http://ec.com/goods.php?id=27" target="_blank" title="查看"><img src="./xunishangpinlist_files/icon_view.gif" width="16" height="16" border="0"></a>
      <a href="http://ec.com/admin/goods.php?act=edit&amp;goods_id=27&amp;extension_code=virtual_card" title="编辑"><img src="./xunishangpinlist_files/icon_edit.gif" width="16" height="16" border="0"></a>
      <a href="http://ec.com/admin/goods.php?act=copy&amp;goods_id=27&amp;extension_code=virtual_card" title="复制"><img src="./xunishangpinlist_files/icon_copy.gif" width="16" height="16" border="0"></a>
      <a href="javascript:;" onclick="listTable.remove(27, &#39;您确实要把该商品放入回收站吗？&#39;)" title="回收站"><img src="./xunishangpinlist_files/icon_trash.gif" width="16" height="16" border="0"></a>
      <img src="./xunishangpinlist_files/empty.gif" width="16" height="16" border="0">              |
                <a href="http://ec.com/admin/virtual_card.php?act=card&amp;goods_id=27" title="查看虚拟卡信息"><img src="./xunishangpinlist_files/icon_send_bonus.gif" width="16" height="16" border="0"></a>
                <a href="http://ec.com/admin/virtual_card.php?act=replenish&amp;goods_id=27" title="补货"><img src="./xunishangpinlist_files/icon_add.gif" width="16" height="16" border="0"></a>
                <a href="http://ec.com/admin/virtual_card.php?act=batch_card_add&amp;goods_id=27" title="批量补货"><img src="./xunishangpinlist_files/icon_output.gif" width="16" height="16" border="0"></a>
                  </td>
  </tr>
    <tr>
    <td style="background-color: rgb(255, 255, 255);"><input type="checkbox" name="checkboxes[]" value="26">26</td>
    <td class="first-cell" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_goods_name&#39;, 26)">小灵通/固话20元充值卡</span></td>
    <td style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_goods_sn&#39;, 26)">ECS000026</span></td>
    <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_goods_price&#39;, 26)">19.00
    </span></td>
    <td align="center" style="background-color: rgb(255, 255, 255);"><img src="./xunishangpinlist_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_on_sale&#39;, 26)"></td>
    <td align="center" style="background-color: rgb(255, 255, 255);"><img src="./xunishangpinlist_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_best&#39;, 26)"></td>
    <td align="center" style="background-color: rgb(255, 255, 255);"><img src="./xunishangpinlist_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_new&#39;, 26)"></td>
    <td align="center" style="background-color: rgb(255, 255, 255);"><img src="./xunishangpinlist_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_hot&#39;, 26)"></td>
    <td align="center" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 26)">100</span></td>
        <td align="right" style="background-color: rgb(255, 255, 255);"><span onclick="listTable.edit(this, &#39;edit_goods_number&#39;, 26)">2</span></td>
        <td align="center" style="background-color: rgb(255, 255, 255);">
      <a href="http://ec.com/goods.php?id=26" target="_blank" title="查看"><img src="./xunishangpinlist_files/icon_view.gif" width="16" height="16" border="0"></a>
      <a href="http://ec.com/admin/goods.php?act=edit&amp;goods_id=26&amp;extension_code=virtual_card" title="编辑"><img src="./xunishangpinlist_files/icon_edit.gif" width="16" height="16" border="0"></a>
      <a href="http://ec.com/admin/goods.php?act=copy&amp;goods_id=26&amp;extension_code=virtual_card" title="复制"><img src="./xunishangpinlist_files/icon_copy.gif" width="16" height="16" border="0"></a>
      <a href="javascript:;" onclick="listTable.remove(26, &#39;您确实要把该商品放入回收站吗？&#39;)" title="回收站"><img src="./xunishangpinlist_files/icon_trash.gif" width="16" height="16" border="0"></a>
      <img src="./xunishangpinlist_files/empty.gif" width="16" height="16" border="0">              |
                <a href="http://ec.com/admin/virtual_card.php?act=card&amp;goods_id=26" title="查看虚拟卡信息"><img src="./xunishangpinlist_files/icon_send_bonus.gif" width="16" height="16" border="0"></a>
                <a href="http://ec.com/admin/virtual_card.php?act=replenish&amp;goods_id=26" title="补货"><img src="./xunishangpinlist_files/icon_add.gif" width="16" height="16" border="0"></a>
                <a href="http://ec.com/admin/virtual_card.php?act=batch_card_add&amp;goods_id=26" title="批量补货"><img src="./xunishangpinlist_files/icon_output.gif" width="16" height="16" border="0"></a>
                  </td>
  </tr>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" value="25">25</td>
    <td class="first-cell" style=""><span onclick="listTable.edit(this, &#39;edit_goods_name&#39;, 25)">小灵通/固话50元充值卡</span></td>
    <td><span onclick="listTable.edit(this, &#39;edit_goods_sn&#39;, 25)">ECS000025</span></td>
    <td align="right"><span onclick="listTable.edit(this, &#39;edit_goods_price&#39;, 25)">48.00
    </span></td>
    <td align="center"><img src="./xunishangpinlist_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_on_sale&#39;, 25)"></td>
    <td align="center"><img src="./xunishangpinlist_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_best&#39;, 25)"></td>
    <td align="center"><img src="./xunishangpinlist_files/no.gif" onclick="listTable.toggle(this, &#39;toggle_new&#39;, 25)"></td>
    <td align="center"><img src="./xunishangpinlist_files/yes.gif" onclick="listTable.toggle(this, &#39;toggle_hot&#39;, 25)"></td>
    <td align="center"><span onclick="listTable.edit(this, &#39;edit_sort_order&#39;, 25)">100</span></td>
        <td align="right"><span onclick="listTable.edit(this, &#39;edit_goods_number&#39;, 25)">2</span></td>
        <td align="center">
      <a href="http://ec.com/goods.php?id=25" target="_blank" title="查看"><img src="./xunishangpinlist_files/icon_view.gif" width="16" height="16" border="0"></a>
      <a href="http://ec.com/admin/goods.php?act=edit&amp;goods_id=25&amp;extension_code=virtual_card" title="编辑"><img src="./xunishangpinlist_files/icon_edit.gif" width="16" height="16" border="0"></a>
      <a href="http://ec.com/admin/goods.php?act=copy&amp;goods_id=25&amp;extension_code=virtual_card" title="复制"><img src="./xunishangpinlist_files/icon_copy.gif" width="16" height="16" border="0"></a>
      <a href="javascript:;" onclick="listTable.remove(25, &#39;您确实要把该商品放入回收站吗？&#39;)" title="回收站"><img src="./xunishangpinlist_files/icon_trash.gif" width="16" height="16" border="0"></a>
      <img src="./xunishangpinlist_files/empty.gif" width="16" height="16" border="0">              |
                <a href="http://ec.com/admin/virtual_card.php?act=card&amp;goods_id=25" title="查看虚拟卡信息"><img src="./xunishangpinlist_files/icon_send_bonus.gif" width="16" height="16" border="0"></a>
                <a href="http://ec.com/admin/virtual_card.php?act=replenish&amp;goods_id=25" title="补货"><img src="./xunishangpinlist_files/icon_add.gif" width="16" height="16" border="0"></a>
                <a href="http://ec.com/admin/virtual_card.php?act=batch_card_add&amp;goods_id=25" title="批量补货"><img src="./xunishangpinlist_files/icon_output.gif" width="16" height="16" border="0"></a>
                  </td>
  </tr>
  </tbody></table>
<!-- end goods list -->

<!-- 分页 -->
<table id="page-table" cellspacing="0">
  <tbody><tr>
    <td align="right" nowrap="true">
          <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
            <div id="turn-page">
        总计  <span id="totalRecords">6</span>
        个记录分为 <span id="totalPages">1</span>
        页当前第 <span id="pageCurrent">1</span>
        页，每页 <input type="text" size="3" id="pageSize" value="15" onkeypress="return listTable.changePageSize(event)">
        <span id="page-link">
          <a href="javascript:listTable.gotoPageFirst()">第一页</a>
          <a href="javascript:listTable.gotoPagePrev()">上一页</a>
          <a href="javascript:listTable.gotoPageNext()">下一页</a>
          <a href="javascript:listTable.gotoPageLast()">最末页</a>
          <select id="gotoPage" onchange="listTable.gotoPage(this.value)">
            <option value="1">1</option>          </select>
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
    <option value="trash">回收站</option>
    <option value="on_sale">上架</option>
    <option value="not_on_sale">下架</option>
    <option value="best">精品</option>
    <option value="not_best">取消精品</option>
    <option value="new">新品</option>
    <option value="not_new">取消新品</option>
    <option value="hot">热销</option>
    <option value="not_hot">取消热销</option>
    <option value="move_to">转移到分类</option>
	    <option value="suppliers_move_to">转移到供货商</option>
	    
  </select>
  <select name="target_cat" style="display:none">
    <option value="0">请选择...</option><option value="6">手机配件</option><option value="9">&nbsp;&nbsp;&nbsp;&nbsp;电池</option><option value="11">&nbsp;&nbsp;&nbsp;&nbsp;读卡器和内存卡</option><option value="7">&nbsp;&nbsp;&nbsp;&nbsp;充电器</option><option value="8">&nbsp;&nbsp;&nbsp;&nbsp;耳机</option><option value="1">手机类型</option><option value="3">&nbsp;&nbsp;&nbsp;&nbsp;GSM手机</option><option value="4">&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option><option value="5">&nbsp;&nbsp;&nbsp;&nbsp;双模手机</option><option value="2">&nbsp;&nbsp;&nbsp;&nbsp;CDMA手机</option><option value="12">充值卡</option><option value="14">&nbsp;&nbsp;&nbsp;&nbsp;移动手机充值卡</option><option value="15">&nbsp;&nbsp;&nbsp;&nbsp;联通手机充值卡</option><option value="13">&nbsp;&nbsp;&nbsp;&nbsp;小灵通/固话充值卡</option>  </select>
	  <!--二级主菜单：转移供货商-->
  <select name="suppliers_id" style="display:none">
    <option value="-1">请选择...</option>
    <option value="0">转移到网店</option>
          <option value="1">北京供货商</option>
          <option value="2">上海供货商</option>
      </select>
  <!--end!-->
	  
    <input type="hidden" name="extension_code" value="virtual_card">
    <input type="submit" value=" 确定 " id="btnSubmit" name="btnSubmit" class="button" disabled="true">
</div>
</form>

<script type="text/javascript">
  listTable.recordCount = 6;
  listTable.pageCount = 1;

    listTable.filter.cat_id = '0';
    listTable.filter.intro_type = '';
    listTable.filter.is_promote = '0';
    listTable.filter.stock_warning = '0';
    listTable.filter.brand_id = '0';
    listTable.filter.keyword = '';
    listTable.filter.suppliers_id = '';
    listTable.filter.is_on_sale = '';
    listTable.filter.sort_by = 'goods_id';
    listTable.filter.sort_order = 'DESC';
    listTable.filter.extension_code = 'virtual_card';
    listTable.filter.is_delete = '0';
    listTable.filter.real_goods = '0';
    listTable.filter.record_count = '6';
    listTable.filter.page_size = '15';
    listTable.filter.page = '1';
    listTable.filter.page_count = '1';
    listTable.filter.start = '0';
  
  
  onload = function()
  {
    startCheckOrder(); // 开始检查订单
    document.forms['listForm'].reset();
  }

  /**
   * @param: bool ext 其他条件：用于转移分类
   */
  function confirmSubmit(frm, ext)
  {
      if (frm.elements['type'].value == 'trash')
      {
          return confirm(batch_trash_confirm);
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
			
			      frm.elements['suppliers_id'].style.display = frm.elements['type'].value == 'suppliers_move_to' ? '' : 'none';
			
      if (!document.getElementById('btnSubmit').disabled &&
          confirmSubmit(frm, false))
      {
          frm.submit();
      }
  }

</script>
<div id="footer">
共执行 7 个查询，用时 0.013001 秒，Gzip 已禁用，内存占用 1.675 MB<br>
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