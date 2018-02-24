<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0045)http://ec.com/admin/database.php?act=optimize -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 数据表优化 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./shujubiao-youhua_files/general.css" rel="stylesheet" type="text/css">
<link href="./shujubiao-youhua_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./shujubiao-youhua_files/transport.js"></script><script type="text/javascript" src="./shujubiao-youhua_files/common.js"></script><script language="JavaScript">
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
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 数据表优化 </span>
<div style="clear:both"></div>
</h1>
<!-- start form -->
<div class="form-div">
<form method="post" action="http://ec.com/admin/database.php" name="theForm">
总碎片数:452984988<input type="submit" value="开始进行数据表优化" class="button">
<input type="hidden" name="num" value="452984988">
<input type="hidden" name="act" value="run_optimize">
</form>
</div>
<!-- end form -->
<!-- start list -->
<div class="list-div" id="listDiv">
<table cellspacing="1" cellpadding="3" id="listTable">
  <tbody><tr>
    <th>数据表</th>
    <th>数据表类型</th>
    <th>记录数</th>
    <th>数据</th>
    <th>碎片</th>
    <th>字符集</th>
    <th>状态</th>
  </tr>
      <tr>
      <td class="first-cell">t_account_log</td>
      <td align="left">MyISAM</td>
      <td align="right">35</td>
      <td align="right"> 2.22 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_ad</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_ad_custom</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_ad_position</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_admin_action</td>
      <td align="left">MyISAM</td>
      <td align="right">109</td>
      <td align="right"> 2.39 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_admin_log</td>
      <td align="left">MyISAM</td>
      <td align="right">463</td>
      <td align="right"> 24.36 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_admin_message</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_admin_shangpin_list</td>
      <td align="left">InnoDB</td>
      <td align="right">0</td>
      <td align="right"> 16.00 KB</td>
      <td align="right">50331648</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_admin_user</td>
      <td align="left">MyISAM</td>
      <td align="right">3</td>
      <td align="right"> 0.77 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_adsense</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_affiliate_log</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_agency</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_area_region</td>
      <td align="left">MyISAM</td>
      <td align="right">9</td>
      <td align="right"> 0.06 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_article</td>
      <td align="left">MyISAM</td>
      <td align="right">35</td>
      <td align="right"> 31.32 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell" style="background-color: rgb(244, 250, 251);">t_article_cat</td>
      <td align="left" style="background-color: rgb(244, 250, 251);">MyISAM</td>
      <td align="right" style="background-color: rgb(244, 250, 251);">12</td>
      <td align="right" style="background-color: rgb(244, 250, 251);"> 0.41 KB</td>
      <td align="right" style="background-color: rgb(244, 250, 251);">0</td>
      <td align="left" style="background-color: rgb(244, 250, 251);">utf8_general_ci</td>
      <td align="left" style="background-color: rgb(244, 250, 251);">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_attribute</td>
      <td align="left">MyISAM</td>
      <td align="right">210</td>
      <td align="right"> 6.55 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_auction_log</td>
      <td align="left">MyISAM</td>
      <td align="right">1</td>
      <td align="right"> 0.02 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_auth_assignment</td>
      <td align="left">InnoDB</td>
      <td align="right">0</td>
      <td align="right"> 16.00 KB</td>
      <td align="right">50331648</td>
      <td align="left">utf8_unicode_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_auth_item</td>
      <td align="left">InnoDB</td>
      <td align="right">2</td>
      <td align="right"> 16.00 KB</td>
      <td align="right">50331648</td>
      <td align="left">utf8_unicode_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_auth_item_child</td>
      <td align="left">InnoDB</td>
      <td align="right">1</td>
      <td align="right"> 16.00 KB</td>
      <td align="right">50331648</td>
      <td align="left">utf8_unicode_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_auth_rule</td>
      <td align="left">InnoDB</td>
      <td align="right">0</td>
      <td align="right"> 16.00 KB</td>
      <td align="right">50331648</td>
      <td align="left">utf8_unicode_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_auto_manage</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_back_goods</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_back_order</td>
      <td align="left">MyISAM</td>
      <td align="right">4</td>
      <td align="right"> 0.80 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_bonus_type</td>
      <td align="left">MyISAM</td>
      <td align="right">4</td>
      <td align="right"> 0.23 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_booking_goods</td>
      <td align="left">MyISAM</td>
      <td align="right">2</td>
      <td align="right"> 0.17 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_brand</td>
      <td align="left">MyISAM</td>
      <td align="right">11</td>
      <td align="right"> 1.77 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_card</td>
      <td align="left">MyISAM</td>
      <td align="right">1</td>
      <td align="right"> 0.08 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_cart</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.15 KB</td>
      <td align="right">156</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_cat_recommend</td>
      <td align="left">MyISAM</td>
      <td align="right">14</td>
      <td align="right"> 0.10 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_category</td>
      <td align="left">MyISAM</td>
      <td align="right">14</td>
      <td align="right"> 0.46 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_collect_goods</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_comment</td>
      <td align="left">MyISAM</td>
      <td align="right">2</td>
      <td align="right"> 0.16 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_crons</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_delivery_goods</td>
      <td align="left">MyISAM</td>
      <td align="right">8</td>
      <td align="right"> 0.42 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_delivery_order</td>
      <td align="left">MyISAM</td>
      <td align="right">5</td>
      <td align="right"> 1.05 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_email_list</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_email_sendlist</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_error_log</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_exchange_goods</td>
      <td align="left">MyISAM</td>
      <td align="right">2</td>
      <td align="right"> 0.02 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_favourable_activity</td>
      <td align="left">MyISAM</td>
      <td align="right">1</td>
      <td align="right"> 0.07 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_feedback</td>
      <td align="left">MyISAM</td>
      <td align="right">1</td>
      <td align="right"> 0.11 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_friend_link</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_goods</td>
      <td align="left">MyISAM</td>
      <td align="right">31</td>
      <td align="right"> 56.33 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_goods_activity</td>
      <td align="left">MyISAM</td>
      <td align="right">8</td>
      <td align="right"> 1.64 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_goods_article</td>
      <td align="left">MyISAM</td>
      <td align="right">11</td>
      <td align="right"> 0.09 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_goods_attr</td>
      <td align="left">MyISAM</td>
      <td align="right">89</td>
      <td align="right"> 2.40 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_goods_cat</td>
      <td align="left">MyISAM</td>
      <td align="right">4</td>
      <td align="right"> 0.03 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_goods_gallery</td>
      <td align="left">MyISAM</td>
      <td align="right">42</td>
      <td align="right"> 6.53 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_goods_type</td>
      <td align="left">MyISAM</td>
      <td align="right">9</td>
      <td align="right"> 0.19 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_group_goods</td>
      <td align="left">MyISAM</td>
      <td align="right">6</td>
      <td align="right"> 0.08 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_keywords</td>
      <td align="left">MyISAM</td>
      <td align="right">14</td>
      <td align="right"> 0.37 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">1 client is using or hasn't closed the table properly</td>
    </tr>
      <tr>
      <td class="first-cell">t_link_goods</td>
      <td align="left">MyISAM</td>
      <td align="right">10</td>
      <td align="right"> 0.09 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_mail_templates</td>
      <td align="left">MyISAM</td>
      <td align="right">14</td>
      <td align="right"> 4.93 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_member_price</td>
      <td align="left">MyISAM</td>
      <td align="right">4</td>
      <td align="right"> 0.05 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_migration</td>
      <td align="left">MyISAM</td>
      <td align="right">3</td>
      <td align="right"> 0.10 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_nav</td>
      <td align="left">MyISAM</td>
      <td align="right">21</td>
      <td align="right"> 0.95 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_order_action</td>
      <td align="left">MyISAM</td>
      <td align="right">27</td>
      <td align="right"> 0.89 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_order_goods</td>
      <td align="left">MyISAM</td>
      <td align="right">31</td>
      <td align="right"> 1.75 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_order_info</td>
      <td align="left">MyISAM</td>
      <td align="right">19</td>
      <td align="right"> 5.31 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_pack</td>
      <td align="left">MyISAM</td>
      <td align="right">1</td>
      <td align="right"> 0.11 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_package_goods</td>
      <td align="left">MyISAM</td>
      <td align="right">6</td>
      <td align="right"> 0.08 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_patterns</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_pay_log</td>
      <td align="left">MyISAM</td>
      <td align="right">18</td>
      <td align="right"> 0.26 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_payment</td>
      <td align="left">MyISAM</td>
      <td align="right">3</td>
      <td align="right"> 0.45 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_plugins</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_products</td>
      <td align="left">MyISAM</td>
      <td align="right">14</td>
      <td align="right"> 0.27 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_reg_extend_info</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_reg_fields</td>
      <td align="left">MyISAM</td>
      <td align="right">6</td>
      <td align="right"> 0.13 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_region</td>
      <td align="left">MyISAM</td>
      <td align="right">3408</td>
      <td align="right"> 68.02 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_role</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_searchengine</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_sessions</td>
      <td align="left">MEMORY</td>
      <td align="right">2</td>
      <td align="right"> 62.70 KB</td>
      <td align="right">Ignore</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">Ignore</td>
    </tr>
      <tr>
      <td class="first-cell">t_sessions_data</td>
      <td align="left">MyISAM</td>
      <td align="right">1</td>
      <td align="right"> 0.29 KB</td>
      <td align="right">Ignore</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">Ignore</td>
    </tr>
      <tr>
      <td class="first-cell">t_shipping</td>
      <td align="left">MyISAM</td>
      <td align="right">7</td>
      <td align="right"> 0.83 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_shipping_area</td>
      <td align="left">MyISAM</td>
      <td align="right">4</td>
      <td align="right"> 1.14 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_shop_config</td>
      <td align="left">MyISAM</td>
      <td align="right">175</td>
      <td align="right"> 7.68 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_snatch_log</td>
      <td align="left">MyISAM</td>
      <td align="right">2</td>
      <td align="right"> 0.03 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_stats</td>
      <td align="left">MyISAM</td>
      <td align="right">57</td>
      <td align="right"> 6.93 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">3 clients are using or haven't closed the table properly</td>
    </tr>
      <tr>
      <td class="first-cell">t_suppliers</td>
      <td align="left">MyISAM</td>
      <td align="right">2</td>
      <td align="right"> 0.09 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_tag</td>
      <td align="left">MyISAM</td>
      <td align="right">7</td>
      <td align="right"> 0.16 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_template</td>
      <td align="left">MyISAM</td>
      <td align="right">22</td>
      <td align="right"> 1.27 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_topic</td>
      <td align="left">MyISAM</td>
      <td align="right">1</td>
      <td align="right"> 0.14 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_user</td>
      <td align="left">InnoDB</td>
      <td align="right">1</td>
      <td align="right"> 16.00 KB</td>
      <td align="right">50331648</td>
      <td align="left">utf8_unicode_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_user_account</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_user_address</td>
      <td align="left">MyISAM</td>
      <td align="right">2</td>
      <td align="right"> 0.18 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_user_bonus</td>
      <td align="left">MyISAM</td>
      <td align="right">19</td>
      <td align="right"> 0.45 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_user_copy</td>
      <td align="left">InnoDB</td>
      <td align="right">1</td>
      <td align="right"> 16.00 KB</td>
      <td align="right">50331648</td>
      <td align="left">utf8_unicode_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_user_feed</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_user_rank</td>
      <td align="left">MyISAM</td>
      <td align="right">3</td>
      <td align="right"> 0.06 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_userinfo</td>
      <td align="left">InnoDB</td>
      <td align="right">0</td>
      <td align="right"> 16.00 KB</td>
      <td align="right">50331648</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_users</td>
      <td align="left">MyISAM</td>
      <td align="right">4</td>
      <td align="right"> 0.43 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_virtual_card</td>
      <td align="left">MyISAM</td>
      <td align="right">15</td>
      <td align="right"> 0.89 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_volume_price</td>
      <td align="left">MyISAM</td>
      <td align="right">5</td>
      <td align="right"> 0.06 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_vote</td>
      <td align="left">MyISAM</td>
      <td align="right">1</td>
      <td align="right"> 0.05 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_vote_log</td>
      <td align="left">MyISAM</td>
      <td align="right">0</td>
      <td align="right"> 0.00 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_vote_option</td>
      <td align="left">MyISAM</td>
      <td align="right">3</td>
      <td align="right"> 0.06 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_wechat_user</td>
      <td align="left">InnoDB</td>
      <td align="right">0</td>
      <td align="right"> 16.00 KB</td>
      <td align="right">50331648</td>
      <td align="left">utf8_unicode_ci</td>
      <td align="left">OK</td>
    </tr>
      <tr>
      <td class="first-cell">t_wholesale</td>
      <td align="left">MyISAM</td>
      <td align="right">1</td>
      <td align="right"> 0.19 KB</td>
      <td align="right">0</td>
      <td align="left">utf8_general_ci</td>
      <td align="left">OK</td>
    </tr>
  </tbody></table>
</div>
<!-- end  list -->

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
共执行 99 个查询，用时 0.480028 秒，Gzip 已禁用，内存占用 1.283 MB<br>
版权所有 © 2005-2012 上海商派网络科技有限公司，并保留所有权利。</div>
<script type="text/javascript" src="./shujubiao-youhua_files/utils.js"></script><!-- 新订单提示信息 -->
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