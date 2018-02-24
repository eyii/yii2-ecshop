<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0043)http://ec.com/admin/database.php?act=backup -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 数据备份 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./shuju-beifen_files/general.css" rel="stylesheet" type="text/css">
<link href="./shuju-beifen_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./shuju-beifen_files/transport.js"></script><script type="text/javascript" src="./shuju-beifen_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var remove_confirm = "你确认要删除该备份吗？";
var lang_remove = "移除";
var lang_restore = "恢复备份";
var lang_download = "下载";
var sql_name_not_null = "文件名不能为空";
var vol_size_not_null = "请填入备份大小";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span"><a href="http://ec.com/admin/database.php?act=restore">恢复备份</a></span>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 数据备份 </span>
<div style="clear:both"></div>
</h1>
<form name="theForm" method="post" action="http://ec.com/admin/database.php" onsubmit="return validate()">
<!-- start  list -->
<div class="list-div" id="listDiv">

<table cellspacing="1" cellpadding="3">
  <tbody><tr>
    <th colspan="2">备份类型</th>
  </tr>
  <tr>
    <td style="background-color: rgb(255, 255, 255);"><input type="radio" name="type" value="full" class="radio" onclick="findobj(&#39;showtables&#39;).style.display=&#39;none&#39;">全部备份</td>
    <td style="background-color: rgb(255, 255, 255);">备份数据库所有表</td>
  </tr>
  <tr>
    <td style="background-color: rgb(255, 255, 255);"><input type="radio" name="type" value="stand" class="radio" checked="checked" onclick="findobj(&#39;showtables&#39;).style.display=&#39;none&#39;">标准备份(推荐)</td>
    <td style="background-color: rgb(255, 255, 255);">备份常用的数据表</td>
  </tr>
  <tr>
    <td style="background-color: rgb(255, 255, 255);"><input type="radio" name="type" value="min" class="radio" onclick="findobj(&#39;showtables&#39;).style.display=&#39;none&#39;">最小备份</td>
    <td style="background-color: rgb(255, 255, 255);">仅包括商品表，订单表，用户表</td>
  </tr>
  <tr>
    <td style="background-color: rgb(255, 255, 255);"><input type="radio" name="type" value="custom" class="radio" onclick="findobj(&#39;showtables&#39;).style.display=&#39;&#39;">自定义备份</td>
    <td style="background-color: rgb(255, 255, 255);">根据自行选择备份数据表</td>
  </tr>
  </tbody><tbody id="showtables" style="display:none">
  <tr>
    <td colspan="2">
      <table>
        <tbody><tr>
          <td colspan="4"><input name="chkall" onclick="checkall(this.form, &#39;customtables[]&#39;)" type="checkbox"><b>全选</b></td>
        </tr>
        <tr>
                            <td><input name="customtables[]" value="t_account_log" type="checkbox">t_account_log</td>
                            <td><input name="customtables[]" value="t_ad" type="checkbox">t_ad</td>
                            <td><input name="customtables[]" value="t_ad_custom" type="checkbox">t_ad_custom</td>
                            <td><input name="customtables[]" value="t_ad_position" type="checkbox">t_ad_position</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_admin_action" type="checkbox">t_admin_action</td>
                            <td><input name="customtables[]" value="t_admin_log" type="checkbox">t_admin_log</td>
                            <td><input name="customtables[]" value="t_admin_message" type="checkbox">t_admin_message</td>
                            <td><input name="customtables[]" value="t_admin_shangpin_list" type="checkbox">t_admin_shangpin_list</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_admin_user" type="checkbox">t_admin_user</td>
                            <td><input name="customtables[]" value="t_adsense" type="checkbox">t_adsense</td>
                            <td><input name="customtables[]" value="t_affiliate_log" type="checkbox">t_affiliate_log</td>
                            <td><input name="customtables[]" value="t_agency" type="checkbox">t_agency</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_area_region" type="checkbox">t_area_region</td>
                            <td><input name="customtables[]" value="t_article" type="checkbox">t_article</td>
                            <td><input name="customtables[]" value="t_article_cat" type="checkbox">t_article_cat</td>
                            <td><input name="customtables[]" value="t_attribute" type="checkbox">t_attribute</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_auction_log" type="checkbox">t_auction_log</td>
                            <td><input name="customtables[]" value="t_auth_assignment" type="checkbox">t_auth_assignment</td>
                            <td><input name="customtables[]" value="t_auth_item" type="checkbox">t_auth_item</td>
                            <td><input name="customtables[]" value="t_auth_item_child" type="checkbox">t_auth_item_child</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_auth_rule" type="checkbox">t_auth_rule</td>
                            <td><input name="customtables[]" value="t_auto_manage" type="checkbox">t_auto_manage</td>
                            <td><input name="customtables[]" value="t_back_goods" type="checkbox">t_back_goods</td>
                            <td><input name="customtables[]" value="t_back_order" type="checkbox">t_back_order</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_bonus_type" type="checkbox">t_bonus_type</td>
                            <td><input name="customtables[]" value="t_booking_goods" type="checkbox">t_booking_goods</td>
                            <td><input name="customtables[]" value="t_brand" type="checkbox">t_brand</td>
                            <td><input name="customtables[]" value="t_card" type="checkbox">t_card</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_cart" type="checkbox">t_cart</td>
                            <td><input name="customtables[]" value="t_cat_recommend" type="checkbox">t_cat_recommend</td>
                            <td><input name="customtables[]" value="t_category" type="checkbox">t_category</td>
                            <td><input name="customtables[]" value="t_collect_goods" type="checkbox">t_collect_goods</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_comment" type="checkbox">t_comment</td>
                            <td><input name="customtables[]" value="t_crons" type="checkbox">t_crons</td>
                            <td><input name="customtables[]" value="t_delivery_goods" type="checkbox">t_delivery_goods</td>
                            <td><input name="customtables[]" value="t_delivery_order" type="checkbox">t_delivery_order</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_email_list" type="checkbox">t_email_list</td>
                            <td><input name="customtables[]" value="t_email_sendlist" type="checkbox">t_email_sendlist</td>
                            <td><input name="customtables[]" value="t_error_log" type="checkbox">t_error_log</td>
                            <td><input name="customtables[]" value="t_exchange_goods" type="checkbox">t_exchange_goods</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_favourable_activity" type="checkbox">t_favourable_activity</td>
                            <td><input name="customtables[]" value="t_feedback" type="checkbox">t_feedback</td>
                            <td><input name="customtables[]" value="t_friend_link" type="checkbox">t_friend_link</td>
                            <td><input name="customtables[]" value="t_goods" type="checkbox">t_goods</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_goods_activity" type="checkbox">t_goods_activity</td>
                            <td><input name="customtables[]" value="t_goods_article" type="checkbox">t_goods_article</td>
                            <td><input name="customtables[]" value="t_goods_attr" type="checkbox">t_goods_attr</td>
                            <td><input name="customtables[]" value="t_goods_cat" type="checkbox">t_goods_cat</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_goods_gallery" type="checkbox">t_goods_gallery</td>
                            <td><input name="customtables[]" value="t_goods_type" type="checkbox">t_goods_type</td>
                            <td><input name="customtables[]" value="t_group_goods" type="checkbox">t_group_goods</td>
                            <td><input name="customtables[]" value="t_keywords" type="checkbox">t_keywords</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_link_goods" type="checkbox">t_link_goods</td>
                            <td><input name="customtables[]" value="t_mail_templates" type="checkbox">t_mail_templates</td>
                            <td><input name="customtables[]" value="t_member_price" type="checkbox">t_member_price</td>
                            <td><input name="customtables[]" value="t_migration" type="checkbox">t_migration</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_nav" type="checkbox">t_nav</td>
                            <td><input name="customtables[]" value="t_order_action" type="checkbox">t_order_action</td>
                            <td><input name="customtables[]" value="t_order_goods" type="checkbox">t_order_goods</td>
                            <td><input name="customtables[]" value="t_order_info" type="checkbox">t_order_info</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_pack" type="checkbox">t_pack</td>
                            <td><input name="customtables[]" value="t_package_goods" type="checkbox">t_package_goods</td>
                            <td><input name="customtables[]" value="t_patterns" type="checkbox">t_patterns</td>
                            <td><input name="customtables[]" value="t_pay_log" type="checkbox">t_pay_log</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_payment" type="checkbox">t_payment</td>
                            <td><input name="customtables[]" value="t_plugins" type="checkbox">t_plugins</td>
                            <td><input name="customtables[]" value="t_products" type="checkbox">t_products</td>
                            <td><input name="customtables[]" value="t_reg_extend_info" type="checkbox">t_reg_extend_info</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_reg_fields" type="checkbox">t_reg_fields</td>
                            <td><input name="customtables[]" value="t_region" type="checkbox">t_region</td>
                            <td><input name="customtables[]" value="t_role" type="checkbox">t_role</td>
                            <td><input name="customtables[]" value="t_searchengine" type="checkbox">t_searchengine</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_sessions" type="checkbox">t_sessions</td>
                            <td><input name="customtables[]" value="t_sessions_data" type="checkbox">t_sessions_data</td>
                            <td><input name="customtables[]" value="t_shipping" type="checkbox">t_shipping</td>
                            <td><input name="customtables[]" value="t_shipping_area" type="checkbox">t_shipping_area</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_shop_config" type="checkbox">t_shop_config</td>
                            <td><input name="customtables[]" value="t_snatch_log" type="checkbox">t_snatch_log</td>
                            <td><input name="customtables[]" value="t_stats" type="checkbox">t_stats</td>
                            <td><input name="customtables[]" value="t_suppliers" type="checkbox">t_suppliers</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_tag" type="checkbox">t_tag</td>
                            <td><input name="customtables[]" value="t_template" type="checkbox">t_template</td>
                            <td><input name="customtables[]" value="t_topic" type="checkbox">t_topic</td>
                            <td><input name="customtables[]" value="t_user" type="checkbox">t_user</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_user_account" type="checkbox">t_user_account</td>
                            <td><input name="customtables[]" value="t_user_address" type="checkbox">t_user_address</td>
                            <td><input name="customtables[]" value="t_user_bonus" type="checkbox">t_user_bonus</td>
                            <td><input name="customtables[]" value="t_user_copy" type="checkbox">t_user_copy</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_user_feed" type="checkbox">t_user_feed</td>
                            <td><input name="customtables[]" value="t_user_rank" type="checkbox">t_user_rank</td>
                            <td><input name="customtables[]" value="t_userinfo" type="checkbox">t_userinfo</td>
                            <td><input name="customtables[]" value="t_users" type="checkbox">t_users</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_virtual_card" type="checkbox">t_virtual_card</td>
                            <td><input name="customtables[]" value="t_volume_price" type="checkbox">t_volume_price</td>
                            <td><input name="customtables[]" value="t_vote" type="checkbox">t_vote</td>
                            <td><input name="customtables[]" value="t_vote_log" type="checkbox">t_vote_log</td>
                            </tr><tr>
                    <td><input name="customtables[]" value="t_vote_option" type="checkbox">t_vote_option</td>
                            <td><input name="customtables[]" value="t_wechat_user" type="checkbox">t_wechat_user</td>
                            <td><input name="customtables[]" value="t_wholesale" type="checkbox">t_wholesale</td>
                </tr>
      </tbody></table>
    </td>
  </tr>
  </tbody>
</table>

<table cellspacing="1" cellpadding="3">
  <tbody><tr>
    <th colspan="2">其他选项</th>
  </tr>
  <tr>
    <td style="background-color: rgb(255, 255, 255);">使用扩展插入(Extended Insert)方式</td>
    <td style="background-color: rgb(255, 255, 255);"><input type="radio" name="ext_insert" class="radio" value="1">是&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ext_insert" class="radio" value="0" checked="checked">否</td>
  </tr>
  <tr>
    <td style="background-color: rgb(255, 255, 255);">分卷备份 - 文件长度限制(kb)</td>
    <td style="background-color: rgb(255, 255, 255);"><input type="text" name="vol_size" value="2048"></td>
  </tr>
  <tr>
    <td style="background-color: rgb(255, 255, 255);">备份文件名</td>
    <td style="background-color: rgb(255, 255, 255);"><input type="text" name="sql_file_name" value="20170318yjzywa.sql"></td>
  </tr>
</tbody></table>
<input type="hidden" name="act" value="dumpsql">

<input type="hidden" name="act" value="dumpsql">
<input type="hidden" name="token" value="36b1353f0ce89701897075d6411bbc151e3a5ee29c927b4e65cd61df740f08d5">

<center><input type="submit" value="开始备份" class="button"></center>
</div>
<!-- end  list -->
</form>

<script type="text/javascript" src="./shuju-beifen_files/utils.js"></script><script type="text/javascript" src="./shuju-beifen_files/validator.js"></script>
<script language="JavaScript">
<!--
/**
 * 检查表单输入的数据
 */
function validate()
{
  validator = new Validator("theForm");
  validator.required("sql_file_name", sql_name_not_null);
  validator.required("vol_size", vol_size_not_null);
  return validator.passed();
}

onload = function()
{
  // 开始检查订单
  startCheckOrder();
}

function findobj(str)
{
    return document.getElementById(str);
}

function checkall(frm, chk)
{
    for (i = 0; i < frm.elements.length; i++)
    {
        if (frm.elements[i].name == chk)
        {
            frm.elements[i].checked = frm.elements['chkall'].checked;
        }
    }
}

function radioClicked(n)
{
    if (n > 0)
    {
        document.forms['theForm'].elements["vol_size"].disabled = false;
        var str = document.forms['theForm'].elements["sql_name"].value ;
        document.forms['theForm'].elements["sql_name"].value = str.slice(0, -4) + '.zip' ;
    }
    else
    {
        document.forms['theForm'].elements["vol_size"].disabled = true;
        var str = document.forms['theForm'].elements["sql_name"].value ;
        document.forms['theForm'].elements["sql_name"].value = str.slice(0, -4) + '.sql' ;
    }
}

/**
 * 切换显示表前缀
 * @param bool display 是否显示
 */
function toggleTablePre(display)
{
    var disp = display ? '' : 'none';
    for (var i = 1; i <= 9; i++)
    {
        document.getElementById('pre_' + i).style.display = disp;
    }
}
//-->
</script>

<div id="footer">
共执行 2 个查询，用时 0.030001 秒，Gzip 已禁用，内存占用 1.151 MB<br>
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