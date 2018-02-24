<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0042)http://ec.com/admin/template.php?act=setup -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 设置模板 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./shezhi-moban_files/general.css" rel="stylesheet" type="text/css">
<link href="./shezhi-moban_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./shezhi-moban_files/transport.js"></script><script type="text/javascript" src="./shezhi-moban_files/common.js"></script><script language="JavaScript">
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
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 设置模板 </span>
<div style="clear:both"></div>
</h1>

<div class="form-div">
  <form method="post" action="http://ec.com/admin/template.php">
  请选择一个模板：  <select name="template_file">
    <option value="article">文章内容模板</option><option value="article_cat">文章分类模板</option><option value="brand">商品品牌页</option><option value="category">商品分类页模板</option><option value="flow">购物流程模板</option><option value="goods">商品详情模板</option><option value="group_buy_goods">团购商品详情模板</option><option value="group_buy_list">团购商品列表模板</option><option value="index" selected="">首页模板</option><option value="search">商品搜索模板</option><option value="compare">商品比较模板</option><option value="snatch">夺宝奇兵</option><option value="tag_cloud">标签云模板</option><option value="auction_list">拍卖活动列表</option><option value="auction">拍卖活动详情</option><option value="message_board">留言板</option><option value="exchange_list">积分商城列表</option>  </select>
  <input type="submit" value=" 确定 " class="button">
  <input type="hidden" name="act" value="setup">
  </form>
</div>

<!-- start template options list -->
<div class="list-div">
<form name="theForm" action="http://ec.com/admin/template.php" method="post">
  <table width="100%" cellpadding="3" cellspacing="1">
  <tbody><tr>
    <th>库项目</th>
    <th>区域</th>
    <th>序号</th>
    <th>内容</th>
    <th>数量</th>
    <th>显示</th>
  </tr>
    <tr>
    <td class="first-cell">当前位置</td>
    <td><select name="regions[ur_here]"><option value="">非可编辑区库文件无选择项</option></select></td>
    <td><input type="text" name="sort_order[ur_here]" value="0" size="4" disabled=""></td>
    <td><input type="hidden" name="map[ur_here]" value="/library/ur_here.lbi"></td>
    <td>&nbsp;</td>
    <td align="center"><input type="checkbox" name="display[ur_here]" value="1" disabled=""></td>
  </tr>
    <tr>
    <td class="first-cell">搜索表单</td>
    <td><select name="regions[search_form]"><option value="">非可编辑区库文件无选择项</option></select></td>
    <td><input type="text" name="sort_order[search_form]" value="0" size="4" disabled=""></td>
    <td><input type="hidden" name="map[search_form]" value="/library/search_form.lbi"></td>
    <td>&nbsp;</td>
    <td align="center"><input type="checkbox" name="display[search_form]" value="1" disabled=""></td>
  </tr>
    <tr>
    <td class="first-cell">会员区</td>
    <td><select name="regions[member]"><option value="">非可编辑区库文件无选择项</option></select></td>
    <td><input type="text" name="sort_order[member]" value="0" size="4" disabled=""></td>
    <td><input type="hidden" name="map[member]" value="/library/member.lbi"></td>
    <td>&nbsp;</td>
    <td align="center"><input type="checkbox" name="display[member]" value="1" disabled=""></td>
  </tr>
    <tr>
    <td class="first-cell">最新文章</td>
    <td><select name="regions[new_articles]"><option value="">非可编辑区库文件无选择项</option></select></td>
    <td><input type="text" name="sort_order[new_articles]" value="0" size="4" disabled=""></td>
    <td><input type="hidden" name="map[new_articles]" value="/library/new_articles.lbi"></td>
    <td>&nbsp;</td>
    <td align="center"><input type="checkbox" name="display[new_articles]" value="1" disabled=""></td>
  </tr>
    <tr>
    <td class="first-cell">商品分类树</td>
    <td><select name="regions[category_tree]"><option value="">请选择...</option><option value="左边区域" selected="">左边区域</option><option value="站内快讯上广告位（宽：210px）">站内快讯上广告位（宽：210px）</option><option value="右边主区域">右边主区域</option></select></td>
    <td><input type="text" name="sort_order[category_tree]" value="1" size="4"></td>
    <td><input type="hidden" name="map[category_tree]" value="/library/category_tree.lbi"></td>
    <td>&nbsp;</td>
    <td align="center"><input type="checkbox" name="display[category_tree]" value="1" checked="true"></td>
  </tr>
    <tr>
    <td class="first-cell">销售排行</td>
    <td><select name="regions[top10]"><option value="">请选择...</option><option value="左边区域" selected="">左边区域</option><option value="站内快讯上广告位（宽：210px）">站内快讯上广告位（宽：210px）</option><option value="右边主区域">右边主区域</option></select></td>
    <td><input type="text" name="sort_order[top10]" value="2" size="4"></td>
    <td><input type="hidden" name="map[top10]" value="/library/top10.lbi"></td>
    <td>&nbsp;</td>
    <td align="center"><input type="checkbox" name="display[top10]" value="1" checked="true"></td>
  </tr>
    <tr>
    <td class="first-cell">发货单查询</td>
    <td><select name="regions[invoice_query]"><option value="">请选择...</option><option value="左边区域" selected="">左边区域</option><option value="站内快讯上广告位（宽：210px）">站内快讯上广告位（宽：210px）</option><option value="右边主区域">右边主区域</option></select></td>
    <td><input type="text" name="sort_order[invoice_query]" value="5" size="4"></td>
    <td><input type="hidden" name="map[invoice_query]" value="/library/invoice_query.lbi"></td>
    <td>&nbsp;</td>
    <td align="center"><input type="checkbox" name="display[invoice_query]" value="1" checked="true"></td>
  </tr>
    <tr>
    <td class="first-cell">精品推荐</td>
    <td><select name="regions[recommend_best]"><option value="">请选择...</option><option value="左边区域">左边区域</option><option value="站内快讯上广告位（宽：210px）">站内快讯上广告位（宽：210px）</option><option value="右边主区域" selected="">右边主区域</option></select></td>
    <td><input type="text" name="sort_order[recommend_best]" value="0" size="4"></td>
    <td><input type="hidden" name="map[recommend_best]" value="/library/recommend_best.lbi"></td>
    <td><input type="text" name="number[recommend_best]" value="10" size="4"></td>
    <td align="center"><input type="checkbox" name="display[recommend_best]" value="1" checked="true"></td>
  </tr>
    <tr>
    <td class="first-cell">新品上架</td>
    <td><select name="regions[recommend_new]"><option value="">请选择...</option><option value="左边区域">左边区域</option><option value="站内快讯上广告位（宽：210px）">站内快讯上广告位（宽：210px）</option><option value="右边主区域" selected="">右边主区域</option></select></td>
    <td><input type="text" name="sort_order[recommend_new]" value="1" size="4"></td>
    <td><input type="hidden" name="map[recommend_new]" value="/library/recommend_new.lbi"></td>
    <td><input type="text" name="number[recommend_new]" value="10" size="4"></td>
    <td align="center"><input type="checkbox" name="display[recommend_new]" value="1" checked="true"></td>
  </tr>
    <tr>
    <td class="first-cell">热卖商品</td>
    <td><select name="regions[recommend_hot]"><option value="">请选择...</option><option value="左边区域">左边区域</option><option value="站内快讯上广告位（宽：210px）">站内快讯上广告位（宽：210px）</option><option value="右边主区域" selected="">右边主区域</option></select></td>
    <td><input type="text" name="sort_order[recommend_hot]" value="2" size="4"></td>
    <td><input type="hidden" name="map[recommend_hot]" value="/library/recommend_hot.lbi"></td>
    <td><input type="text" name="number[recommend_hot]" value="10" size="4"></td>
    <td align="center"><input type="checkbox" name="display[recommend_hot]" value="1" checked="true"></td>
  </tr>
    <tr>
    <td class="first-cell">促销商品</td>
    <td><select name="regions[recommend_promotion]"><option value="">非可编辑区库文件无选择项</option></select></td>
    <td><input type="text" name="sort_order[recommend_promotion]" value="0" size="4" disabled=""></td>
    <td><input type="hidden" name="map[recommend_promotion]" value="/library/recommend_promotion.lbi"></td>
    <td><input type="text" name="number[recommend_promotion]" value="4" size="4"></td>
    <td align="center"><input type="checkbox" name="display[recommend_promotion]" value="1" disabled=""></td>
  </tr>
    <tr>
    <td class="first-cell">团购商品</td>
    <td><select name="regions[group_buy]"><option value="">请选择...</option><option value="左边区域">左边区域</option><option value="站内快讯上广告位（宽：210px）">站内快讯上广告位（宽：210px）</option><option value="右边主区域" selected="">右边主区域</option></select></td>
    <td><input type="text" name="sort_order[group_buy]" value="4" size="4"></td>
    <td><input type="hidden" name="map[group_buy]" value="/library/group_buy.lbi"></td>
    <td><input type="text" name="number[group_buy]" value="3" size="4"></td>
    <td align="center"><input type="checkbox" name="display[group_buy]" value="1" checked="true"></td>
  </tr>
    <tr>
    <td class="first-cell">拍卖商品</td>
    <td><select name="regions[auction]"><option value="">请选择...</option><option value="左边区域">左边区域</option><option value="站内快讯上广告位（宽：210px）">站内快讯上广告位（宽：210px）</option><option value="右边主区域" selected="">右边主区域</option></select></td>
    <td><input type="text" name="sort_order[auction]" value="3" size="4"></td>
    <td><input type="hidden" name="map[auction]" value="/library/auction.lbi"></td>
    <td><input type="text" name="number[auction]" value="3" size="4"></td>
    <td align="center"><input type="checkbox" name="display[auction]" value="1" checked="true"></td>
  </tr>
    <tr>
    <td class="first-cell">品牌专区</td>
    <td><select name="regions[brands]"><option value="">非可编辑区库文件无选择项</option></select></td>
    <td><input type="text" name="sort_order[brands]" value="0" size="4" disabled=""></td>
    <td><input type="hidden" name="map[brands]" value="/library/brands.lbi"></td>
    <td><input type="text" name="number[brands]" value="11" size="4"></td>
    <td align="center"><input type="checkbox" name="display[brands]" value="1" disabled=""></td>
  </tr>
    <tr>
    <td class="first-cell">促销信息</td>
    <td><select name="regions[promotion_info]"><option value="">请选择...</option><option value="左边区域" selected="">左边区域</option><option value="站内快讯上广告位（宽：210px）">站内快讯上广告位（宽：210px）</option><option value="右边主区域">右边主区域</option></select></td>
    <td><input type="text" name="sort_order[promotion_info]" value="3" size="4"></td>
    <td><input type="hidden" name="map[promotion_info]" value="/library/promotion_info.lbi"></td>
    <td>&nbsp;</td>
    <td align="center"><input type="checkbox" name="display[promotion_info]" value="1" checked="true"></td>
  </tr>
    <tr>
    <td class="first-cell">购物车</td>
    <td><select name="regions[cart]"><option value="">请选择...</option><option value="左边区域" selected="">左边区域</option><option value="站内快讯上广告位（宽：210px）">站内快讯上广告位（宽：210px）</option><option value="右边主区域">右边主区域</option></select></td>
    <td><input type="text" name="sort_order[cart]" value="0" size="4"></td>
    <td><input type="hidden" name="map[cart]" value="/library/cart.lbi"></td>
    <td>&nbsp;</td>
    <td align="center"><input type="checkbox" name="display[cart]" value="1" checked="true"></td>
  </tr>
    <tr>
    <td class="first-cell">前台订单状态查询</td>
    <td><select name="regions[order_query]"><option value="">请选择...</option><option value="左边区域" selected="">左边区域</option><option value="站内快讯上广告位（宽：210px）">站内快讯上广告位（宽：210px）</option><option value="右边主区域">右边主区域</option></select></td>
    <td><input type="text" name="sort_order[order_query]" value="4" size="4"></td>
    <td><input type="hidden" name="map[order_query]" value="/library/order_query.lbi"></td>
    <td>&nbsp;</td>
    <td align="center"><input type="checkbox" name="display[order_query]" value="1" checked="true"></td>
  </tr>
    <tr>
    <td class="first-cell">前台邮件订阅</td>
    <td><select name="regions[email_list]"><option value="">请选择...</option><option value="左边区域" selected="">左边区域</option><option value="站内快讯上广告位（宽：210px）">站内快讯上广告位（宽：210px）</option><option value="右边主区域">右边主区域</option></select></td>
    <td><input type="text" name="sort_order[email_list]" value="7" size="4"></td>
    <td><input type="hidden" name="map[email_list]" value="/library/email_list.lbi"></td>
    <td>&nbsp;</td>
    <td align="center"><input type="checkbox" name="display[email_list]" value="1" checked="true"></td>
  </tr>
    <tr>
    <td class="first-cell">在线调查</td>
    <td><select name="regions[vote_list]"><option value="">请选择...</option><option value="左边区域" selected="">左边区域</option><option value="站内快讯上广告位（宽：210px）">站内快讯上广告位（宽：210px）</option><option value="右边主区域">右边主区域</option></select></td>
    <td><input type="text" name="sort_order[vote_list]" value="6" size="4"></td>
    <td><input type="hidden" name="map[vote_list]" value="/library/vote_list.lbi"></td>
    <td>&nbsp;</td>
    <td align="center"><input type="checkbox" name="display[vote_list]" value="1" checked="true"></td>
  </tr>
  
  <!-- cateogry goods list -->
  <tr>
    <td colspan="6" style="background-color: #F4FBFB; font-weight: bold" align="left"><a href="javascript:;" onclick="addCatGoods(this)">[+]</a> 分类下的商品 </td>
  </tr>
  
  <tr>
    <td colspan="6" style="background-color: #F4FBFB; font-weight: bold" align="left"><a href="javascript:;" onclick="addBrandGoods(this)">[+]</a> 品牌的商品 </td>
  </tr>
  
  <tr>
    <td colspan="6" style="background-color: #F4FBFB; font-weight: bold" align="left"><a href="javascript:;" onclick="addArticles(this)">[+]</a> 文章列表 </td>
  </tr>
  
  <tr>
    <td colspan="6" style="background-color: #F4FBFB; font-weight: bold" align="left"><a href="javascript:;" onclick="addAdPosition(this)">[+]</a> 广告位 </td>
  </tr>
  
  </tbody></table>
  <div class="button-div ">
    <input type="submit" value=" 确定 " class="button">
    <input type="reset" value=" 重置 " class="button">
    <input type="hidden" name="act" value="setting">
    <input type="hidden" name="template_file" value="index">
  </div>
</form>
</div>

<!-- end template options list -->

<script language="JavaScript">
<!--
var currTemplateFile = 'index';
var selCategories    = '<option value="6" >手机配件</option><option value="9" >&nbsp;&nbsp;&nbsp;&nbsp;电池</option><option value="11" >&nbsp;&nbsp;&nbsp;&nbsp;读卡器和内存卡</option><option value="7" >&nbsp;&nbsp;&nbsp;&nbsp;充电器</option><option value="8" >&nbsp;&nbsp;&nbsp;&nbsp;耳机</option><option value="1" >手机类型</option><option value="3" >&nbsp;&nbsp;&nbsp;&nbsp;GSM手机</option><option value="4" >&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option><option value="5" >&nbsp;&nbsp;&nbsp;&nbsp;双模手机</option><option value="2" >&nbsp;&nbsp;&nbsp;&nbsp;CDMA手机</option><option value="12" >充值卡</option><option value="14" >&nbsp;&nbsp;&nbsp;&nbsp;移动手机充值卡</option><option value="15" >&nbsp;&nbsp;&nbsp;&nbsp;联通手机充值卡</option><option value="13" >&nbsp;&nbsp;&nbsp;&nbsp;小灵通/固话充值卡</option>';
var selRegions       = new Array();
var selBrands        = new Array();
var selArticleCats   = new Array();
var selAdPositions   = new Array();

selRegions[0] = '左边区域';
selRegions[1] = '站内快讯上广告位（宽：210px）';
selRegions[2] = '右边主区域';

selBrands[1] = '诺基亚';
selBrands[10] = '金立';
selBrands[9] = '联想';
selBrands[8] = 'LG';
selBrands[7] = '索爱';
selBrands[6] = '三星';
selBrands[5] = '夏新';
selBrands[4] = '飞利浦';
selBrands[3] = '多普达';
selBrands[2] = '摩托罗拉';
selBrands[11] = '  恒基伟业';

selArticleCats[0] = '<option value="11"  cat_type="1" >手机促销</option><option value="1"  cat_type="2" >系统分类</option><option value="2"  cat_type="3" >&nbsp;&nbsp;&nbsp;&nbsp;网店信息</option><option value="3"  cat_type="4" >&nbsp;&nbsp;&nbsp;&nbsp;网店帮助分类</option><option value="5"  cat_type="5" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;新手上路 </option><option value="6"  cat_type="5" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;手机常识 </option><option value="7"  cat_type="5" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;配送与支付 </option><option value="8"  cat_type="5" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;服务保证 </option><option value="9"  cat_type="5" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系我们 </option><option value="10"  cat_type="5" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;会员中心</option><option value="12"  cat_type="1" >站内快讯</option><option value="4"  cat_type="1" >3G资讯</option>';




onload = function()
{
    // 开始检查订单
    startCheckOrder();
}

/**
 * 创建区域选择的下拉列表
 */
function buildRegionSelect(selName)
{
    var sel = '<select name="' + selName + '">';

    sel += '<option value="">' + selectPlease + '</option>';

    for (i=0; i < selRegions.length; i++)
    {
        sel += '<option value="' + selRegions[i] + '">' + selRegions[i] + '</option>';
    }

    sel += '</select>';

    return sel;
}

/**
 * 创建选择品牌的下拉列表
 */
function buildBrandSelect(selName)
{
    var sel = '<select name="' + selName + '">';

    sel += '<option value="">' + selectPlease + '</option>';

    for (brand in selBrands)
    {
        if (brand != "______array" && brand != "toJSONString")
        {
          sel += '<option value="' + brand + '">' + selBrands[brand] + '</option>';
        }
    }

    sel += '</select>';

    return sel;
}

/**
 * 创建选择文章分类的下拉列表
 */
function buildArticleCatSelect(selName)
{
    var sel = '<select name="' + selName + '">';

    sel += '<option value="">' + selectPlease + '</option>';

    for (cat in selArticleCats)
    {
        if (cat != "______array" && cat != "toJSONString")
        {
          sel += '<option value="' + cat + '">' + selArticleCats[cat] + '</option>';
        }
    }

    sel += '</select>';

    return sel;
}

/**
 * 创建选择广告位置的列表
 */
function buildAdPositionsSelect(selName)
{
    var sel = '<select name="' + selName + '">';

    sel += '<option value="">' + selectPlease + '</option>';

    for (ap in selAdPositions)
    {
        if (ap != "______array" && ap != "toJSONString")
        {
          sel += '<option value="' + ap + '">' + selAdPositions[ap] + '</option>';
        }
    }

    sel += '</select>';

    return sel;
}

/**
 * 增加一个分类的商品
 */
function addCatGoods(obj)
{
    var rowId = rowindex(obj.parentNode.parentNode);

    var table = obj.parentNode.parentNode.parentNode.parentNode;

    var row  = table.insertRow(rowId + 1);
    var cell = row.insertCell(-1);
    cell.innerHTML = '<a href="javascript:;" onclick="removeRow(this)">[-]</a>';
    cell.className = 'first-cell';
    cell.align     = 'right';

    cell           = row.insertCell(-1);
    cell.innerHTML = buildRegionSelect('regions[cat_goods][]');

    cell           = row.insertCell(-1);
    cell.innerHTML = '<input type="text" name="sort_order[cat_goods][]" value="0" size="4" />';

    cell           = row.insertCell(-1);
    cell.innerHTML = '<select name="categories[cat_goods][]"><option value="">' + selectPlease + '</option>' + selCategories + '</select>';

    cell           = row.insertCell(-1);
    cell.innerHTML = '<input type="text" name="number[cat_goods][]" value="5" size="4" />';

    cell           = row.insertCell(-1);
}

/**
 * 增加一个品牌的商品
 */
function addBrandGoods(obj)
{
    var rowId = rowindex(obj.parentNode.parentNode);

    var table = obj.parentNode.parentNode.parentNode.parentNode;

    var row  = table.insertRow(rowId + 1);
    var cell = row.insertCell(-1);
    cell.innerHTML = '<a href="javascript:;" onclick="removeRow(this)">[-]</a>';
    cell.className = 'first-cell';
    cell.align     = 'right';

    cell           = row.insertCell(-1);
    cell.innerHTML = buildRegionSelect('regions[brand_goods][]');

    cell           = row.insertCell(-1);
    cell.innerHTML = '<input type="text" name="sort_order[brand_goods][]" value="0" size="4" />';

    cell           = row.insertCell(-1);
    cell.innerHTML = buildBrandSelect('brands[brand_goods][]');

    cell           = row.insertCell(-1);
    cell.innerHTML = '<input type="text" name="number[brand_goods][]" value="5" size="4" />';

    cell           = row.insertCell(-1);
}

/**
 * 增加一个文章列表
 */
function addArticles(obj)
{
    var rowId = rowindex(obj.parentNode.parentNode);

    var table = obj.parentNode.parentNode.parentNode.parentNode;

    var row  = table.insertRow(rowId + 1);
    var cell = row.insertCell(-1);
    cell.innerHTML = '<a href="javascript:;" onclick="removeRow(this)">[-]</a>';
    cell.className = 'first-cell';
    cell.align     = 'right';

    cell           = row.insertCell(-1);
    cell.innerHTML = buildRegionSelect('regions[cat_articles][]');

    cell           = row.insertCell(-1);
    cell.innerHTML = '<input type="text" name="sort_order[cat_articles][]" value="0" size="4" />';

    cell           = row.insertCell(-1);
    cell.innerHTML = buildArticleCatSelect('article_cat[cat_articles][]');

    cell           = row.insertCell(-1);
    cell.innerHTML = '<input type="text" name="number[cat_articles][]" value="5" size="4" />';

    cell           = row.insertCell(-1);
}

/**
 * 增加一个广告位
 */
function addAdPosition(obj)
{
    var rowId = rowindex(obj.parentNode.parentNode);

    var table = obj.parentNode.parentNode.parentNode.parentNode;

    var row  = table.insertRow(rowId + 1);
    var cell = row.insertCell(-1);
    cell.innerHTML = '<a href="javascript:;" onclick="removeRow(this)">[-]</a>';
    cell.className = 'first-cell';
    cell.align     = 'right';

    cell           = row.insertCell(-1);
    cell.innerHTML = buildRegionSelect('regions[ad_position][]');

    cell           = row.insertCell(-1);
    cell.innerHTML = '<input type="text" name="sort_order[ad_position][]" value="0" size="4" />';

    cell           = row.insertCell(-1);
    cell.innerHTML = buildAdPositionsSelect('ad_position[]');

    cell           = row.insertCell(-1);
    cell.innerHTML = '<input type="text" name="number[ad_position][]" value="1" size="4" />';

    cell           = row.insertCell(-1);
}

/**
 * 删除一行
 */
function removeRow(obj)
{
    if (confirm(removeConfirm))
    {
        var table = obj.parentNode.parentNode.parentNode;
        var row   = obj.parentNode.parentNode;

        for (i = 0; i < table.childNodes.length; i++)
        {
            if (table.childNodes[i] == row)
            {
                table.removeChild(table.childNodes[i]);
            }
        }
    }
}

//-->
</script>
<div id="footer">
共执行 2 个查询，用时 0.085005 秒，Gzip 已禁用，内存占用 1.241 MB<br>
版权所有 © 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
<script type="text/javascript" src="./shezhi-moban_files/utils.js"></script><!-- 新订单提示信息 -->
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