<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0044)http://ec.com/admin/template.php?act=library -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 库项目管理 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./kuxiangmu-guanli_files/general.css" rel="stylesheet" type="text/css">
<link href="./kuxiangmu-guanli_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./kuxiangmu-guanli_files/transport.js"></script><script type="text/javascript" src="./kuxiangmu-guanli_files/common.js"></script><script language="JavaScript">
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
<body style="cursor: auto;">

<h1>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 库项目管理 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="./kuxiangmu-guanli_files/utils.js"></script><script type="text/javascript" src="./kuxiangmu-guanli_files/listtable.js"></script><form method="post" onsubmit="return false">
<div class="form-div">
  请选择一个库项目：  <select id="selLib" onchange="loadLibrary()">    <option value="ad_position" selected="">ad_position.lbi - 广告位</option><option value="article_category_tree">article_category_tree.lbi - 文章分类树</option><option value="auction">auction.lbi - 拍卖商品</option><option value="bought_goods">bought_goods.lbi - 购买过此商品的人还买过的商品</option><option value="bought_note_guide">bought_note_guide.lbi - 购买记录</option><option value="bought_notes">bought_notes.lbi - </option><option value="brand_goods">brand_goods.lbi - 品牌的商品</option><option value="brands">brands.lbi - 品牌专区</option><option value="cart">cart.lbi - 购物车</option><option value="cat_articles">cat_articles.lbi - 文章列表</option><option value="cat_goods">cat_goods.lbi - 分类下的商品</option><option value="category_tree">category_tree.lbi - 商品分类树</option><option value="categorys">categorys.lbi - 商品分类</option><option value="comments">comments.lbi - 用户评论列表</option><option value="comments_list">comments_list.lbi - 评论内容</option><option value="consignee">consignee.lbi - 收货地址表单</option><option value="email_list">email_list.lbi - 前台邮件订阅</option><option value="exchange_hot">exchange_hot.lbi - 积分商城热卖商品</option><option value="exchange_list">exchange_list.lbi - 积分商城列表商品</option><option value="filter_attr">filter_attr.lbi - 属性筛选</option><option value="goods_article">goods_article.lbi - 相关文章</option><option value="goods_attrlinked">goods_attrlinked.lbi - 属性关联的商品</option><option value="goods_fittings">goods_fittings.lbi - 相关配件</option><option value="goods_gallery">goods_gallery.lbi - 商品相册</option><option value="goods_list">goods_list.lbi - 商品列表</option><option value="goods_related">goods_related.lbi - 相关商品</option><option value="goods_tags">goods_tags.lbi - 商品标记</option><option value="group_buy">group_buy.lbi - 团购商品</option><option value="help">help.lbi - 帮助内容</option><option value="history">history.lbi - 商品浏览历史</option><option value="index_ad">index_ad.lbi - 首页主广告位</option><option value="invoice_query">invoice_query.lbi - 发货单查询</option><option value="member">member.lbi - 会员区</option><option value="member_info">member_info.lbi - 会员信息</option><option value="message_list">message_list.lbi - 留言列表</option><option value="myship">myship.lbi - 配送方式</option><option value="new_articles">new_articles.lbi - 最新文章</option><option value="online">online.lbi - 统计在线人数</option><option value="order_query">order_query.lbi - 前台订单状态查询</option><option value="order_total">order_total.lbi - 订单费用总计</option><option value="page_footer">page_footer.lbi - 页脚</option><option value="page_footer - ����">page_footer - ����.lbi - </option><option value="page_header">page_header.lbi - 页面顶部</option><option value="pages">pages.lbi - 列表分页</option><option value="price_grade">price_grade.lbi - 价格范围</option><option value="promotion_info">promotion_info.lbi - 促销信息</option><option value="recommend_best">recommend_best.lbi - 精品推荐</option><option value="recommend_hot">recommend_hot.lbi - 热卖商品</option><option value="recommend_new">recommend_new.lbi - 新品上架</option><option value="recommend_promotion">recommend_promotion.lbi - 促销商品</option><option value="relatetag">relatetag.lbi - 其他应用关联标签数据</option><option value="snatch">snatch.lbi - 夺宝奇兵出价</option><option value="snatch_price">snatch_price.lbi - 夺宝奇兵最新出价</option><option value="top10">top10.lbi - 销售排行</option><option value="ur_here">ur_here.lbi - 当前位置</option><option value="user_menu">user_menu.lbi - 用户中心菜单</option><option value="vote">vote.lbi - 调查</option><option value="vote_list">vote_list.lbi - 在线调查</option>  </select>
</div>

<div class="main-div">
  <div class="button-div ">
  <textarea id="libContent" rows="20" style="font-family: Courier New; width:95%">&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8"&gt;
{insert name='ads' id=$ads_id num=$ads_num}</textarea>
    <input type="button" value=" 确定 " class="button" onclick="updateLibrary()">
    <input type="button" value="还原到上一修改" class="button" onclick="restoreLibrary()">
  </div>
</div>
</form>
<script language="JavaScript">
<!--


var currLibrary = "ad_position";
var content = '';
onload = function()
{
    document.getElementById('libContent').focus();
    // 开始检查订单
    startCheckOrder();
}

/**
 * 载入库项目内容
 */
function loadLibrary()
{
    curContent = document.getElementById('libContent').value;

    if (content != curContent && content != '')
    {
        if (!confirm(save_confirm))
        {
            return;
        }
    }

    selLib  = document.getElementById('selLib');
    currLib = selLib.options[selLib.selectedIndex].value;

    Ajax.call('template.php?is_ajax=1&act=load_library', 'lib='+ currLib, loadLibraryResponse, "GET", "JSON");
}

/**
 * 还原库项目内容
 */
function restoreLibrary()
{
    selLib  = document.getElementById('selLib');
    currLib = selLib.options[selLib.selectedIndex].value;

    Ajax.call('template.php?is_ajax=1&act=restore_library', "lib="+currLib, loadLibraryResponse, "GET", "JSON");
}

/**
 * 处理载入的反馈信息
 */
function loadLibraryResponse(result)
{
    if (result.error == 0)
    {
        document.getElementById('libContent').value=result.content;
    }

    if (result.message.length > 0)
    {
      alert(result.message);
    }
}

/**
 * 更新库项目内容
 */
function updateLibrary()
{
    selLib  = document.getElementById('selLib');
    currLib = selLib.options[selLib.selectedIndex].value;
    content = document.getElementById('libContent').value;

    if (Utils.trim(content) == "")
    {
        alert(empty_content);
        return;
    }
    Ajax.call('template.php?act=update_library&is_ajax=1', 'lib=' + currLib + "&html=" + encodeURIComponent(content), updateLibraryResponse, "POST", "JSON");
}

/**
 * 处理更新的反馈信息
 */
function updateLibraryResponse(result)
{
  if (result.message.length > 0)
  {
    alert(result.message);
  }
}

//-->
</script>
<div id="footer">
共执行 2 个查询，用时 0.047003 秒，Gzip 已禁用，内存占用 1.214 MB<br>
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