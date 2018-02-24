<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0065)http://ec.com/admin/goods.php?act=add&extension_code=virtual_card -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 添加新商品 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./tianjia-xuni-shangpin_files/general.css" rel="stylesheet" type="text/css">
<link href="./tianjia-xuni-shangpin_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./tianjia-xuni-shangpin_files/transport.js"></script><script type="text/javascript" src="./tianjia-xuni-shangpin_files/common.js"></script><script language="JavaScript">
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
<span class="action-span"><a href="http://ec.com/admin/goods.php?act=list">商品列表</a></span>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 添加新商品 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="./tianjia-xuni-shangpin_files/utils.js"></script><script type="text/javascript" src="./tianjia-xuni-shangpin_files/selectzone.js"></script><script type="text/javascript" src="./tianjia-xuni-shangpin_files/colorselector.js"></script><script type="text/javascript" src="./tianjia-xuni-shangpin_files/calendar.php"></script>
<link href="./tianjia-xuni-shangpin_files/calendar.css" rel="stylesheet" type="text/css">


<!-- start goods form -->
<div class="tab-div">
    <!-- tab bar -->
    <div id="tabbar-div">
      <p>
        <span class="tab-front" id="general-tab">通用信息</span><span class="tab-back" id="detail-tab">详细描述</span><span class="tab-back" id="mix-tab">其他信息</span><span class="tab-back" id="properties-tab">商品属性</span><span class="tab-back" id="gallery-tab">商品相册</span><span class="tab-back" id="linkgoods-tab">关联商品</span><span class="tab-back" id="groupgoods-tab">配件</span><span class="tab-back" id="article-tab">关联文章</span>
      </p>
    </div>

    <!-- tab body -->
    <div id="tabbody-div">
      <form enctype="multipart/form-data" action="" method="post" name="theForm">
        <!-- 鏈€澶ф枃浠堕檺鍒 -->
        <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
        <!-- 閫氱敤淇℃伅 -->
        <table width="90%" id="general-table" align="center">
          <tbody><tr>
            <td class="label">商品名称：</td>
            <td><input type="text" name="goods_name" value="" style="float:left;color:;" size="30"><div style="background-color:;float:left;margin-left:2px;" id="font_color" onclick="ColorSelecter.Show(this);"><img src="./tianjia-xuni-shangpin_files/color_selecter.gif" style="margin-top:-1px;"></div><input type="hidden" id="goods_name_color" name="goods_name_color" value="">&nbsp;
            <select name="goods_name_style">
              <option value="">字体样式</option>
              <option value="strong">加粗</option><option value="em">斜体</option><option value="u">下划线</option><option value="strike">删除线</option>            </select>
            <span class="require-field">*</span></td>
          </tr>
          <tr>
            <td class="label">
            <a href="javascript:showNotice(&#39;noticeGoodsSN&#39;);" title="点击此处查看提示信息"><img src="./tianjia-xuni-shangpin_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a> 商品货号： </td>
            <td><input type="text" name="goods_sn" value="" size="20" onblur="checkGoodsSn(this.value,&#39;0&#39;)"><span id="goods_sn_notice"></span><br>
            <span class="notice-span" style="display:block" id="noticeGoodsSN">如果您不输入商品货号，系统将自动生成一个唯一的货号。</span></td>
          </tr>
          <tr>
            <td class="label">商品分类：</td>
            <td><select name="cat_id" onchange="hideCatDiv()"><option value="0">请选择...</option><option value="6">手机配件</option><option value="9">&nbsp;&nbsp;&nbsp;&nbsp;电池</option><option value="11">&nbsp;&nbsp;&nbsp;&nbsp;读卡器和内存卡</option><option value="7">&nbsp;&nbsp;&nbsp;&nbsp;充电器</option><option value="8">&nbsp;&nbsp;&nbsp;&nbsp;耳机</option><option value="1">手机类型</option><option value="3">&nbsp;&nbsp;&nbsp;&nbsp;GSM手机</option><option value="4">&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option><option value="5">&nbsp;&nbsp;&nbsp;&nbsp;双模手机</option><option value="2">&nbsp;&nbsp;&nbsp;&nbsp;CDMA手机</option><option value="12">充值卡</option><option value="14">&nbsp;&nbsp;&nbsp;&nbsp;移动手机充值卡</option><option value="15">&nbsp;&nbsp;&nbsp;&nbsp;联通手机充值卡</option><option value="13">&nbsp;&nbsp;&nbsp;&nbsp;小灵通/固话充值卡</option></select>
                            <a href="javascript:void(0)" onclick="rapidCatAdd()" title="添加分类" class="special">添加分类</a>
              <span id="category_add" style="display:none;">
              <input class="text" size="10" name="addedCategoryName">
               <a href="javascript:void(0)" onclick="addCategory()" title=" 确定 " class="special"> 确定 </a>
               <a href="javascript:void(0)" onclick="return goCatPage()" title="分类管理" class="special">分类管理</a>
               <a href="javascript:void(0)" onclick="hideCatDiv()" title="隐藏" class="special">&lt;&lt;</a>
               </span>
                              <span class="require-field">*</span>            </td>
          </tr>
          <tr>
            <td class="label">扩展分类：</td>
            <td>
              <input type="button" value="添加" onclick="addOtherCat(this.parentNode)" class="button">
                          </td>
          </tr>
          <tr>
            <td class="label">商品品牌：</td>
            <td><select name="brand_id" onchange="hideBrandDiv()"><option value="0">请选择...</option><option value="1">诺基亚</option><option value="10">金立</option><option value="9">联想</option><option value="8">LG</option><option value="7">索爱</option><option value="6">三星</option><option value="5">夏新</option><option value="4">飞利浦</option><option value="3">多普达</option><option value="2">摩托罗拉</option><option value="11">  恒基伟业</option></select>
                            <a href="javascript:void(0)" title="添加品牌" onclick="rapidBrandAdd()" class="special">添加品牌</a>
              <span id="brand_add" style="display:none;">
              <input class="text" size="15" name="addedBrandName">
               <a href="javascript:void(0)" onclick="addBrand()" class="special"> 确定 </a>
               <a href="javascript:void(0)" onclick="return goBrandPage()" title="品牌管理" class="special">品牌管理</a>
               <a href="javascript:void(0)" onclick="hideBrandDiv()" title="隐藏" class="special">&lt;&lt;</a>
               </span>
                           </td>
          </tr>
                   <tr>
            <td class="label">选择供货商：</td>
            <td><select name="suppliers_id" id="suppliers_id">
        <option value="0">不指定供货商属于本店商品</option>
        <option value="1">北京供货商</option><option value="2">上海供货商</option>      </select></td>
          </tr>
                   <tr>
            <td class="label">本店售价：</td>
            <td><input type="text" name="shop_price" value="0" size="20" onblur="priceSetted()">
            <input type="button" value="按市场价计算" onclick="marketPriceSetted()">
            <span class="require-field">*</span></td>
          </tr>
                    <tr>
            <td class="label"><a href="javascript:showNotice(&#39;noticeUserPrice&#39;);" title="点击此处查看提示信息"><img src="./tianjia-xuni-shangpin_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>会员价格：</td>
            <td>
                            注册用户<span id="nrank_1"></span><input type="text" id="rank_1" name="user_price[]" value="-1" onkeyup="if(parseInt(this.value)&lt;-1){this.value=&#39;-1&#39;;};set_price_note(1)" size="8">
              <input type="hidden" name="user_rank[]" value="1">
                            代销用户<span id="nrank_3"></span><input type="text" id="rank_3" name="user_price[]" value="-1" onkeyup="if(parseInt(this.value)&lt;-1){this.value=&#39;-1&#39;;};set_price_note(3)" size="8">
              <input type="hidden" name="user_rank[]" value="3">
                            vip<span id="nrank_2"></span><input type="text" id="rank_2" name="user_price[]" value="-1" onkeyup="if(parseInt(this.value)&lt;-1){this.value=&#39;-1&#39;;};set_price_note(2)" size="8">
              <input type="hidden" name="user_rank[]" value="2">
                            <br>
              <span class="notice-span" style="display:block" id="noticeUserPrice">会员价格为-1时表示会员价格按会员等级折扣率计算。你也可以为每个等级指定一个固定价格</span>
            </td>
          </tr>
          
          <!--鍟嗗搧浼樻儬浠锋牸-->
          <tr>
            <td class="label"><a href="javascript:showNotice(&#39;volumePrice&#39;);" title="点击此处查看提示信息"><img src="./tianjia-xuni-shangpin_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>商品优惠价格：</td>
            <td>
              <table width="100%" id="tbody-volume" align="center">
                                <tbody><tr>
                  <td>
                                            <a href="javascript:;" onclick="addVolumePrice(this)">[+]</a>
                                          优惠数量 <input type="text" name="volume_number[]" size="8" value="">
                     优惠价格 <input type="text" name="volume_price[]" size="8" value="">
                  </td>
                </tr>
                              </tbody></table>
              <span class="notice-span" style="display:block" id="volumePrice">购买数量达到优惠数量时享受的优惠价格</span>
            </td>
          </tr>
          <!--鍟嗗搧浼樻儬浠锋牸 end -->

          <tr>
            <td class="label">市场售价：</td>
            <td><input type="text" name="market_price" value="0" size="20">
              <input type="button" value="取整数" onclick="integral_market_price()">
            </td>
          </tr>
          <tr>
            <td class="label"><a href="javascript:showNotice(&#39;giveIntegral&#39;);" title="点击此处查看提示信息"><img src="./tianjia-xuni-shangpin_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a> 赠送消费积分数：</td>
            <td><input type="text" name="give_integral" value="-1" size="20">
            <br><span class="notice-span" style="display:block" id="giveIntegral">购买该商品时赠送消费积分数,-1表示按商品价格赠送</span></td>
          </tr>
          <tr>
            <td class="label"><a href="javascript:showNotice(&#39;rankIntegral&#39;);" title="点击此处查看提示信息"><img src="./tianjia-xuni-shangpin_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a> 赠送等级积分数：</td>
            <td><input type="text" name="rank_integral" value="-1" size="20">
            <br><span class="notice-span" style="display:block" id="rankIntegral">购买该商品时赠送等级积分数,-1表示按商品价格赠送</span></td>
          </tr>
          <tr>
            <td class="label"><a href="javascript:showNotice(&#39;noticPoints&#39;);" title="点击此处查看提示信息"><img src="./tianjia-xuni-shangpin_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a> 积分购买金额：</td>
            <td><input type="text" name="integral" value="0" size="20" onblur="parseint_integral()" ;="">
              <br><span class="notice-span" style="display:block" id="noticPoints">(此处需填写金额)购买该商品时最多可以使用积分的金额</span>
            </td>
          </tr>
          <tr>
            <td class="label"><label for="is_promote"><input type="checkbox" id="is_promote" name="is_promote" value="1" onclick="handlePromote(this.checked);"> 促销价：</label></td>
            <td id="promote_3"><input type="text" id="promote_1" name="promote_price" value="0" size="20" disabled=""></td>
          </tr>
          <tr id="promote_4">
            <td class="label" id="promote_5">促销日期：</td>
            <td id="promote_6">
              <input name="promote_start_date" type="text" id="promote_start_date" size="12" value="2017-03-18" readonly="readonly"><input name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar(&#39;promote_start_date&#39;, &#39;%Y-%m-%d&#39;, false, false, &#39;selbtn1&#39;);" value="选择" class="button" disabled=""> - <input name="promote_end_date" type="text" id="promote_end_date" size="12" value="2017-04-18" readonly="readonly"><input name="selbtn2" type="button" id="selbtn2" onclick="return showCalendar(&#39;promote_end_date&#39;, &#39;%Y-%m-%d&#39;, false, false, &#39;selbtn2&#39;);" value="选择" class="button" disabled="">
            </td>
          </tr>
          <tr>
            <td class="label">上传商品图片：</td>
            <td>
              <input type="file" name="goods_img" size="35">
                              <img src="./tianjia-xuni-shangpin_files/no.gif">
                            <br><input type="text" size="40" value="商品图片外部URL" style="color:#aaa;" onfocus="if (this.value == &#39;商品图片外部URL&#39;){this.value=&#39;http://&#39;;this.style.color=&#39;#000&#39;;}" name="goods_img_url">
            </td>
          </tr>
          <tr id="auto_thumb_1">
            <td class="label"> 上传商品缩略图：</td>
            <td id="auto_thumb_3">
              <input type="file" name="goods_thumb" size="35" disabled="">
                              <img src="./tianjia-xuni-shangpin_files/no.gif">
                            <br><input type="text" size="40" value="商品缩略图外部URL" style="color:#aaa;" onfocus="if (this.value == &#39;商品缩略图外部URL&#39;){this.value=&#39;http://&#39;;this.style.color=&#39;#000&#39;;}" name="goods_thumb_url" disabled="">
                            <br><label for="auto_thumb"><input type="checkbox" id="auto_thumb" name="auto_thumb" checked="true" value="1" onclick="handleAutoThumb(this.checked)">自动生成商品缩略图</label>            </td>
          </tr>
        </tbody></table>

        <!-- 璇︾粏鎻忚堪 -->
        <table width="90%" id="detail-table" style="display:none">
          <tbody><tr>
            <td><input type="hidden" id="goods_desc" name="goods_desc" value="" style="display:none"><input type="hidden" id="goods_desc___Config" value="" style="display:none"><iframe id="goods_desc___Frame" src="./tianjia-xuni-shangpin_files/fckeditor.html" width="100%" height="320" frameborder="0" scrolling="no" style="margin: 0px; padding: 0px; border: 0px; width: 100%; height: 320px; background-image: none; background-color: transparent;"></iframe></td>
          </tr>
        </tbody></table>

        <!-- 鍏朵粬淇℃伅 -->
        <table width="90%" id="mix-table" style="display:none" align="center">
                    <tbody><tr>
            <td class="label">商品重量：</td>
            <td><input type="text" name="goods_weight" value="" size="20"> <select name="weight_unit"><option value="1" selected="">千克</option><option value="0.001">克</option></select></td>
          </tr>
                              <tr>
            <td class="label"><a href="javascript:showNotice(&#39;noticeStorage&#39;);" title="点击此处查看提示信息"><img src="./tianjia-xuni-shangpin_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a> 商品库存数量：</td>
<!--            <td><input type="text" name="goods_number" value="1" size="20"  /><br />-->
            <td><input type="text" name="goods_number" value="1" size="20"><br>
            <span class="notice-span" style="display:block" id="noticeStorage">库存在商品为虚货或商品存在货品时为不可编辑状态，库存数值取决于其虚货数量或货品数量</span></td>
          </tr>
          <tr>
            <td class="label">库存警告数量：</td>
            <td><input type="text" name="warn_number" value="1" size="20"></td>
          </tr>
                    <tr>
            <td class="label">加入推荐：</td>
            <td><input type="checkbox" name="is_best" value="1">精品 <input type="checkbox" name="is_new" value="1">新品 <input type="checkbox" name="is_hot" value="1">热销</td>
          </tr>
          <tr id="alone_sale_1">
            <td class="label" id="alone_sale_2">上架：</td>
            <td id="alone_sale_3"><input type="checkbox" name="is_on_sale" value="1" checked="checked"> 打勾表示允许销售，否则不允许销售。</td>
          </tr>
          <tr>
            <td class="label">能作为普通商品销售：</td>
            <td><input type="checkbox" name="is_alone_sale" value="1" checked="checked"> 打勾表示能作为普通商品销售，否则只能作为配件或赠品销售。</td>
          </tr>
          <tr>
            <td class="label">是否为免运费商品</td>
            <td><input type="checkbox" name="is_shipping" value="1"> 打勾表示此商品不会产生运费花销，否则按照正常运费计算。</td>
          </tr>
          <tr>
            <td class="label">商品关键词：</td>
            <td><input type="text" name="keywords" value="" size="40"> 用空格分隔</td>
          </tr>
          <tr>
            <td class="label">商品简单描述：</td>
            <td><textarea name="goods_brief" cols="40" rows="3"></textarea></td>
          </tr>
          <tr>
            <td class="label">
            <a href="javascript:showNotice(&#39;noticeSellerNote&#39;);" title="点击此处查看提示信息"><img src="./tianjia-xuni-shangpin_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a> 商家备注： </td>
            <td><textarea name="seller_note" cols="40" rows="3"></textarea><br>
            <span class="notice-span" style="display:block" id="noticeSellerNote">仅供商家自己看的信息</span></td>
          </tr>
        </tbody></table>

        <!-- 灞炴€т笌瑙勬牸 -->
                <table width="90%" id="properties-table" style="display:none" align="center">
          <tbody><tr>
              <td class="label"><a href="javascript:showNotice(&#39;noticeGoodsType&#39;);" title="点击此处查看提示信息"><img src="./tianjia-xuni-shangpin_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>商品类型：</td>
              <td>
                <select name="goods_type" onchange="getAttrList(0)">
                  <option value="0">请选择商品类型</option>
                  <option value="1">书</option><option value="2">音乐</option><option value="3">电影</option><option value="4">手机</option><option value="5">笔记本电脑</option><option value="6">数码相机</option><option value="7">数码摄像机</option><option value="8">化妆品</option><option value="9">精品手机</option>                </select><br>
              <span class="notice-span" style="display:block" id="noticeGoodsType">请选择商品的所属类型，进而完善此商品的属性</span></td>
          </tr>
          <tr>
            <td id="tbody-goodsAttr" colspan="2" style="padding:0"><table width="100%" id="attrTable"></table></td>
          </tr>
        </tbody></table>
        
        <!-- 鍟嗗搧鐩稿唽 -->
        <table width="90%" id="gallery-table" style="display:none" align="center">
          <!-- 鍥剧墖鍒楄〃 -->
          <tbody><tr>
            <td>
                          </td>
          </tr>
          <tr><td>&nbsp;</td></tr>
          <!-- 涓婁紶鍥剧墖 -->
          <tr>
            <td>
              <a href="javascript:;" onclick="addImg(this)">[+]</a>
              图片描述 <input type="text" name="img_desc[]" size="20">
              上传文件 <input type="file" name="img_url[]">
              <input type="text" size="40" value="或者输入外部图片链接地址" style="color:#aaa;" onfocus="if (this.value == &#39;或者输入外部图片链接地址&#39;){this.value=&#39;http://&#39;;this.style.color=&#39;#000&#39;;}" name="img_file[]">
            </td>
          </tr>
        </tbody></table>

        <!-- 鍏宠仈鍟嗗搧 -->
        <table width="90%" id="linkgoods-table" style="display:none" align="center">
          <!-- 鍟嗗搧鎼滅储 -->
          <tbody><tr>
            <td colspan="3">
              <img src="./tianjia-xuni-shangpin_files/icon_search.gif" width="26" height="22" border="0" alt="SEARCH">
              <select name="cat_id1"><option value="0">所有分类</option><option value="6">手机配件</option><option value="9">&nbsp;&nbsp;&nbsp;&nbsp;电池</option><option value="11">&nbsp;&nbsp;&nbsp;&nbsp;读卡器和内存卡</option><option value="7">&nbsp;&nbsp;&nbsp;&nbsp;充电器</option><option value="8">&nbsp;&nbsp;&nbsp;&nbsp;耳机</option><option value="1">手机类型</option><option value="3">&nbsp;&nbsp;&nbsp;&nbsp;GSM手机</option><option value="4">&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option><option value="5">&nbsp;&nbsp;&nbsp;&nbsp;双模手机</option><option value="2">&nbsp;&nbsp;&nbsp;&nbsp;CDMA手机</option><option value="12">充值卡</option><option value="14">&nbsp;&nbsp;&nbsp;&nbsp;移动手机充值卡</option><option value="15">&nbsp;&nbsp;&nbsp;&nbsp;联通手机充值卡</option><option value="13">&nbsp;&nbsp;&nbsp;&nbsp;小灵通/固话充值卡</option></select>
              <select name="brand_id1"><option value="0">所有品牌</option><option value="1">诺基亚</option><option value="10">金立</option><option value="9">联想</option><option value="8">LG</option><option value="7">索爱</option><option value="6">三星</option><option value="5">夏新</option><option value="4">飞利浦</option><option value="3">多普达</option><option value="2">摩托罗拉</option><option value="11">  恒基伟业</option></select>
              <input type="text" name="keyword1">
              <input type="button" value=" 搜索 " class="button" onclick="searchGoods(sz1, &#39;cat_id1&#39;,&#39;brand_id1&#39;,&#39;keyword1&#39;)">
            </td>
          </tr>
          <!-- 鍟嗗搧鍒楄〃 -->
          <tr>
            <th>可选商品</th>
            <th>操作</th>
            <th>跟该商品关联的商品</th>
          </tr>
          <tr>
            <td width="42%">
              <select name="source_select1" size="20" style="width:100%" ondblclick="sz1.addItem(false, &#39;add_link_goods&#39;, goodsId, this.form.elements[&#39;is_single&#39;][0].checked)" multiple="true">
              </select>
            </td>
            <td align="center">
              <p><input name="is_single" type="radio" value="1" checked="checked">单向关联<br><input name="is_single" type="radio" value="0">双向关联</p>
              <p><input type="button" value="&gt;&gt;" onclick="sz1.addItem(true, &#39;add_link_goods&#39;, goodsId, this.form.elements[&#39;is_single&#39;][0].checked)" class="button"></p>
              <p><input type="button" value="&gt;" onclick="sz1.addItem(false, &#39;add_link_goods&#39;, goodsId, this.form.elements[&#39;is_single&#39;][0].checked)" class="button"></p>
              <p><input type="button" value="&lt;" onclick="sz1.dropItem(false, &#39;drop_link_goods&#39;, goodsId, elements[&#39;is_single&#39;][0].checked)" class="button"></p>
              <p><input type="button" value="&lt;&lt;" onclick="sz1.dropItem(true, &#39;drop_link_goods&#39;, goodsId, elements[&#39;is_single&#39;][0].checked)" class="button"></p>
            </td>
            <td width="42%">
              <select name="target_select1" size="20" style="width:100%" multiple="" ondblclick="sz1.dropItem(false, &#39;drop_link_goods&#39;, goodsId, elements[&#39;is_single&#39;][0].checked)">
                              </select>
            </td>
          </tr>
        </tbody></table>

        <!-- 閰嶄欢 -->
        <table width="90%" id="groupgoods-table" style="display:none" align="center">
          <!-- 鍟嗗搧鎼滅储 -->
          <tbody><tr>
            <td colspan="3">
              <img src="./tianjia-xuni-shangpin_files/icon_search.gif" width="26" height="22" border="0" alt="SEARCH">
              <select name="cat_id2"><option value="0">所有分类</option><option value="6">手机配件</option><option value="9">&nbsp;&nbsp;&nbsp;&nbsp;电池</option><option value="11">&nbsp;&nbsp;&nbsp;&nbsp;读卡器和内存卡</option><option value="7">&nbsp;&nbsp;&nbsp;&nbsp;充电器</option><option value="8">&nbsp;&nbsp;&nbsp;&nbsp;耳机</option><option value="1">手机类型</option><option value="3">&nbsp;&nbsp;&nbsp;&nbsp;GSM手机</option><option value="4">&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option><option value="5">&nbsp;&nbsp;&nbsp;&nbsp;双模手机</option><option value="2">&nbsp;&nbsp;&nbsp;&nbsp;CDMA手机</option><option value="12">充值卡</option><option value="14">&nbsp;&nbsp;&nbsp;&nbsp;移动手机充值卡</option><option value="15">&nbsp;&nbsp;&nbsp;&nbsp;联通手机充值卡</option><option value="13">&nbsp;&nbsp;&nbsp;&nbsp;小灵通/固话充值卡</option></select>
              <select name="brand_id2"><option value="0">所有品牌</option><option value="1">诺基亚</option><option value="10">金立</option><option value="9">联想</option><option value="8">LG</option><option value="7">索爱</option><option value="6">三星</option><option value="5">夏新</option><option value="4">飞利浦</option><option value="3">多普达</option><option value="2">摩托罗拉</option><option value="11">  恒基伟业</option></select>
              <input type="text" name="keyword2">
              <input type="button" value=" 搜索 " onclick="searchGoods(sz2, &#39;cat_id2&#39;, &#39;brand_id2&#39;, &#39;keyword2&#39;)" class="button">
            </td>
          </tr>
          <!-- 鍟嗗搧鍒楄〃 -->
          <tr>
            <th>可选商品</th>
            <th>操作</th>
            <th>该商品的配件</th>
          </tr>
          <tr>
            <td width="42%">
              <select name="source_select2" size="20" style="width:100%" onchange="sz2.priceObj.value = this.options[this.selectedIndex].id" ondblclick="sz2.addItem(false, &#39;add_group_goods&#39;, goodsId, this.form.elements[&#39;price2&#39;].value)">
              </select>
            </td>
            <td align="center">
              <p>价格<br><input name="price2" type="text" size="6"></p>
              <p><input type="button" value="&gt;" onclick="sz2.addItem(false, &#39;add_group_goods&#39;, goodsId, this.form.elements[&#39;price2&#39;].value)" class="button"></p>
              <p><input type="button" value="&lt;" onclick="sz2.dropItem(false, &#39;drop_group_goods&#39;, goodsId, elements[&#39;is_single&#39;][0].checked)" class="button"></p>
              <p><input type="button" value="&lt;&lt;" onclick="sz2.dropItem(true, &#39;drop_group_goods&#39;, goodsId, elements[&#39;is_single&#39;][0].checked)" class="button"></p>
            </td>
            <td width="42%">
              <select name="target_select2" size="20" style="width:100%" multiple="" ondblclick="sz2.dropItem(false, &#39;drop_group_goods&#39;, goodsId, elements[&#39;is_single&#39;][0].checked)">
                              </select>
            </td>
          </tr>
        </tbody></table>

        <!-- 鍏宠仈鏂囩珷 -->
        <table width="90%" id="article-table" style="display:none" align="center">
          <!-- 鏂囩珷鎼滅储 -->
          <tbody><tr>
            <td colspan="3">
              <img src="./tianjia-xuni-shangpin_files/icon_search.gif" width="26" height="22" border="0" alt="SEARCH">
              文章标题 <input type="text" name="article_title">
              <input type="button" value=" 搜索 " onclick="searchArticle()" class="button">
            </td>
          </tr>
          <!-- 鏂囩珷鍒楄〃 -->
          <tr>
            <th>可选文章</th>
            <th>操作</th>
            <th>跟该商品关联的文章</th>
          </tr>
          <tr>
            <td width="45%">
              <select name="source_select3" size="20" style="width:100%" multiple="" ondblclick="sz3.addItem(false, &#39;add_goods_article&#39;, goodsId, this.form.elements[&#39;price2&#39;].value)">
              </select>
            </td>
            <td align="center">
              <p><input type="button" value="&gt;&gt;" onclick="sz3.addItem(true, &#39;add_goods_article&#39;, goodsId, this.form.elements[&#39;price2&#39;].value)" class="button"></p>
              <p><input type="button" value="&gt;" onclick="sz3.addItem(false, &#39;add_goods_article&#39;, goodsId, this.form.elements[&#39;price2&#39;].value)" class="button"></p>
              <p><input type="button" value="&lt;" onclick="sz3.dropItem(false, &#39;drop_goods_article&#39;, goodsId, elements[&#39;is_single&#39;][0].checked)" class="button"></p>
              <p><input type="button" value="&lt;&lt;" onclick="sz3.dropItem(true, &#39;drop_goods_article&#39;, goodsId, elements[&#39;is_single&#39;][0].checked)" class="button"></p>
            </td>
            <td width="45%">
              <select name="target_select3" size="20" style="width:100%" multiple="" ondblclick="sz3.dropItem(false, &#39;drop_goods_article&#39;, goodsId, elements[&#39;is_single&#39;][0].checked)">
                              </select>
            </td>
          </tr>
        </tbody></table>

        <div class="button-div">
          <input type="hidden" name="goods_id" value="0">
                    <input type="button" value=" 确定 " class="button" onclick="validate(&#39;0&#39;)">
          <input type="reset" value=" 重置 " class="button">
        </div>
        <input type="hidden" name="act" value="insert">
      </form>
    </div>
</div>
<!-- end goods form -->
<script type="text/javascript" src="./tianjia-xuni-shangpin_files/validator.js"></script><script type="text/javascript" src="./tianjia-xuni-shangpin_files/tab.js"></script>
<script language="JavaScript">
  var goodsId = '0';
  var elements = document.forms['theForm'].elements;
  var sz1 = new SelectZone(1, elements['source_select1'], elements['target_select1']);
  var sz2 = new SelectZone(2, elements['source_select2'], elements['target_select2'], elements['price2']);
  var sz3 = new SelectZone(1, elements['source_select3'], elements['target_select3']);
  var marketPriceRate = 1.2;
  var integralPercent = 1;

  
  onload = function()
  {
      handlePromote(document.forms['theForm'].elements['is_promote'].checked);

      if (document.forms['theForm'].elements['auto_thumb'])
      {
          handleAutoThumb(document.forms['theForm'].elements['auto_thumb'].checked);
      }

      // 妫€鏌ユ柊璁㈠崟
      startCheckOrder();
      
            set_price_note(1);
            set_price_note(3);
            set_price_note(2);
            
      document.forms['theForm'].reset();
  }

  function validate(goods_id)
  {
      var validator = new Validator('theForm');
      var goods_sn  = document.forms['theForm'].elements['goods_sn'].value;

      validator.required('goods_name', goods_name_not_null);
      if (document.forms['theForm'].elements['cat_id'].value == 0)
      {
          validator.addErrorMsg(goods_cat_not_null);
      }

      checkVolumeData("1",validator);

      validator.required('shop_price', shop_price_not_null);
      validator.isNumber('shop_price', shop_price_not_number, true);
      validator.isNumber('market_price', market_price_not_number, false);
      if (document.forms['theForm'].elements['is_promote'].checked)
      {
          validator.required('promote_start_date', promote_start_not_null);
          validator.required('promote_end_date', promote_end_not_null);
          validator.islt('promote_start_date', 'promote_end_date', promote_not_lt);
      }

      if (document.forms['theForm'].elements['goods_number'] != undefined)
      {
          validator.isInt('goods_number', goods_number_not_int, false);
          validator.isInt('warn_number', warn_number_not_int, false);
      }

      var callback = function(res)
     {
      if (res.error > 0)
      {
        alert("您输入的货号已存在，请换一个");
      }
      else
      {
         if(validator.passed())
         {
         document.forms['theForm'].submit();
         }
      }
  }
    Ajax.call('goods.php?is_ajax=1&act=check_goods_sn', "goods_sn=" + goods_sn + "&goods_id=" + goods_id, callback, "GET", "JSON");
}

  /**
   * 鍒囨崲鍟嗗搧绫诲瀷
   */
  function getAttrList(goodsId)
  {
      var selGoodsType = document.forms['theForm'].elements['goods_type'];

      if (selGoodsType != undefined)
      {
          var goodsType = selGoodsType.options[selGoodsType.selectedIndex].value;

          Ajax.call('goods.php?is_ajax=1&act=get_attr', 'goods_id=' + goodsId + "&goods_type=" + goodsType, setAttrList, "GET", "JSON");
      }
  }

  function setAttrList(result, text_result)
  {
    document.getElementById('tbody-goodsAttr').innerHTML = result.content;
  }

  /**
   * 鎸夋瘮渚嬭?绠椾环鏍
   * @param   string  inputName   杈撳叆妗嗗悕绉
   * @param   float   rate        姣斾緥
   * @param   string  priceName   浠锋牸杈撳叆妗嗗悕绉帮紙濡傛灉娌℃湁锛屽彇shop_price锛
   */
  function computePrice(inputName, rate, priceName)
  {
      var shopPrice = priceName == undefined ? document.forms['theForm'].elements['shop_price'].value : document.forms['theForm'].elements[priceName].value;
      shopPrice = Utils.trim(shopPrice) != '' ? parseFloat(shopPrice)* rate : 0;
      if(inputName == 'integral')
      {
          shopPrice = parseInt(shopPrice);
      }
      shopPrice += "";

      n = shopPrice.lastIndexOf(".");
      if (n > -1)
      {
          shopPrice = shopPrice.substr(0, n + 3);
      }

      if (document.forms['theForm'].elements[inputName] != undefined)
      {
          document.forms['theForm'].elements[inputName].value = shopPrice;
      }
      else
      {
          document.getElementById(inputName).value = shopPrice;
      }
  }

  /**
   * 璁剧疆浜嗕竴涓?晢鍝佷环鏍硷紝鏀瑰彉甯傚満浠锋牸銆佺Н鍒嗕互鍙婁細鍛樹环鏍
   */
  function priceSetted()
  {
    computePrice('market_price', marketPriceRate);
    computePrice('integral', integralPercent / 100);
    
        set_price_note(1);
        set_price_note(3);
        set_price_note(2);
        
  }

  /**
   * 璁剧疆浼氬憳浠锋牸娉ㄩ噴
   */
  function set_price_note(rank_id)
  {
    var shop_price = parseFloat(document.forms['theForm'].elements['shop_price'].value);

    var rank = new Array();
    
        rank[1] = 100;
        rank[3] = 90;
        rank[2] = 95;
        
    if (shop_price >0 && rank[rank_id] && document.getElementById('rank_' + rank_id) && parseInt(document.getElementById('rank_' + rank_id).value) == -1)
    {
      var price = parseInt(shop_price * rank[rank_id] + 0.5) / 100;
      if (document.getElementById('nrank_' + rank_id))
      {
        document.getElementById('nrank_' + rank_id).innerHTML = '(' + price + ')';
      }
    }
    else
    {
      if (document.getElementById('nrank_' + rank_id))
      {
        document.getElementById('nrank_' + rank_id).innerHTML = '';
      }
    }
  }

  /**
   * 鏍规嵁甯傚満浠锋牸锛岃?绠楀苟鏀瑰彉鍟嗗簵浠锋牸銆佺Н鍒嗕互鍙婁細鍛樹环鏍
   */
  function marketPriceSetted()
  {
    computePrice('shop_price', 1/marketPriceRate, 'market_price');
    computePrice('integral', integralPercent / 100);
    
        set_price_note(1);
        set_price_note(3);
        set_price_note(2);
        
  }

  /**
   * 鏂板?涓€涓??鏍
   */
  function addSpec(obj)
  {
      var src   = obj.parentNode.parentNode;
      var idx   = rowindex(src);
      var tbl   = document.getElementById('attrTable');
      var row   = tbl.insertRow(idx + 1);
      var cell1 = row.insertCell(-1);
      var cell2 = row.insertCell(-1);
      var regx  = /<a([^>]+)<\/a>/i;

      cell1.className = 'label';
      cell1.innerHTML = src.childNodes[0].innerHTML.replace(/(.*)(addSpec)(.*)(\[)(\+)/i, "$1removeSpec$3$4-");
      cell2.innerHTML = src.childNodes[1].innerHTML.replace(/readOnly([^\s|>]*)/i, '');
  }

  /**
   * 鍒犻櫎瑙勬牸鍊
   */
  function removeSpec(obj)
  {
      var row = rowindex(obj.parentNode.parentNode);
      var tbl = document.getElementById('attrTable');

      tbl.deleteRow(row);
  }

  /**
   * 澶勭悊瑙勬牸
   */
  function handleSpec()
  {
      var elementCount = document.forms['theForm'].elements.length;
      for (var i = 0; i < elementCount; i++)
      {
          var element = document.forms['theForm'].elements[i];
          if (element.id.substr(0, 5) == 'spec_')
          {
              var optCount = element.options.length;
              var value = new Array(optCount);
              for (var j = 0; j < optCount; j++)
              {
                  value[j] = element.options[j].value;
              }

              var hiddenSpec = document.getElementById('hidden_' + element.id);
              hiddenSpec.value = value.join(String.fromCharCode(13)); // 鐢ㄥ洖杞﹂敭闅斿紑姣忎釜瑙勬牸
          }
      }
      return true;
  }

  function handlePromote(checked)
  {
      document.forms['theForm'].elements['promote_price'].disabled = !checked;
      document.forms['theForm'].elements['selbtn1'].disabled = !checked;
      document.forms['theForm'].elements['selbtn2'].disabled = !checked;
  }

  function handleAutoThumb(checked)
  {
      document.forms['theForm'].elements['goods_thumb'].disabled = checked;
      document.forms['theForm'].elements['goods_thumb_url'].disabled = checked;
  }

  /**
   * 蹇?€熸坊鍔犲搧鐗
   */
  function rapidBrandAdd(conObj)
  {
      var brand_div = document.getElementById("brand_add");

      if(brand_div.style.display != '')
      {
          var brand =document.forms['theForm'].elements['addedBrandName'];
          brand.value = '';
          brand_div.style.display = '';
      }
  }

  function hideBrandDiv()
  {
      var brand_add_div = document.getElementById("brand_add");
      if(brand_add_div.style.display != 'none')
      {
          brand_add_div.style.display = 'none';
      }
  }

  function goBrandPage()
  {
      if(confirm(go_brand_page))
      {
          window.location.href='brand.php?act=add';
      }
      else
      {
          return;
      }
  }

  function rapidCatAdd()
  {
      var cat_div = document.getElementById("category_add");

      if(cat_div.style.display != '')
      {
          var cat =document.forms['theForm'].elements['addedCategoryName'];
          cat.value = '';
          cat_div.style.display = '';
      }
  }

  function addBrand()
  {
      var brand = document.forms['theForm'].elements['addedBrandName'];
      if(brand.value.replace(/^\s+|\s+$/g, '') == '')
      {
          alert(brand_cat_not_null);
          return;
      }

      var params = 'brand=' + brand.value;
      Ajax.call('brand.php?is_ajax=1&act=add_brand', params, addBrandResponse, 'GET', 'JSON');
  }

  function addBrandResponse(result)
  {
      if (result.error == '1' && result.message != '')
      {
          alert(result.message);
          return;
      }

      var brand_div = document.getElementById("brand_add");
      brand_div.style.display = 'none';

      var response = result.content;

      var selCat = document.forms['theForm'].elements['brand_id'];
      var opt = document.createElement("OPTION");
      opt.value = response.id;
      opt.selected = true;
      opt.text = response.brand;

      if (Browser.isIE)
      {
          selCat.add(opt);
      }
      else
      {
          selCat.appendChild(opt);
      }

      return;
  }

  function addCategory()
  {
      var parent_id = document.forms['theForm'].elements['cat_id'];
      var cat = document.forms['theForm'].elements['addedCategoryName'];
      if(cat.value.replace(/^\s+|\s+$/g, '') == '')
      {
          alert(category_cat_not_null);
          return;
      }

      var params = 'parent_id=' + parent_id.value;
      params += '&cat=' + cat.value;
      Ajax.call('category.php?is_ajax=1&act=add_category', params, addCatResponse, 'GET', 'JSON');
  }

  function hideCatDiv()
  {
      var category_add_div = document.getElementById("category_add");
      if(category_add_div.style.display != null)
      {
          category_add_div.style.display = 'none';
      }
  }

  function addCatResponse(result)
  {
      if (result.error == '1' && result.message != '')
      {
          alert(result.message);
          return;
      }

      var category_add_div = document.getElementById("category_add");
      category_add_div.style.display = 'none';

      var response = result.content;

      var selCat = document.forms['theForm'].elements['cat_id'];
      var opt = document.createElement("OPTION");
      opt.value = response.id;
      opt.selected = true;
      opt.innerHTML = response.cat;

      //鑾峰彇瀛愬垎绫荤殑绌烘牸鏁
      var str = selCat.options[selCat.selectedIndex].text;
      var temp = str.replace(/^\s+/g, '');
      var lengOfSpace = str.length - temp.length;
      if(response.parent_id != 0)
      {
          lengOfSpace += 4;
      }
      for (i = 0; i < lengOfSpace; i++)
      {
          opt.innerHTML = '&nbsp;' + opt.innerHTML;
      }

      for (i = 0; i < selCat.length; i++)
      {
          if(selCat.options[i].value == response.parent_id)
          {
              if(i == selCat.length)
              {
                  if (Browser.isIE)
                  {
                      selCat.add(opt);
                  }
                  else
                  {
                      selCat.appendChild(opt);
                  }
              }
              else
              {
                  selCat.insertBefore(opt, selCat.options[i + 1]);
              }
              //opt.selected = true;
              break;
          }

      }

      return;
  }

    function goCatPage()
    {
        if(confirm(go_category_page))
        {
            window.location.href='category.php?act=add';
        }
        else
        {
            return;
        }
    }


  /**
   * 鍒犻櫎蹇?€熷垎绫
   */
  function removeCat()
  {
      if(!document.forms['theForm'].elements['parent_cat'] || !document.forms['theForm'].elements['new_cat_name'])
      {
          return;
      }

      var cat_select = document.forms['theForm'].elements['parent_cat'];
      var cat = document.forms['theForm'].elements['new_cat_name'];

      cat.parentNode.removeChild(cat);
      cat_select.parentNode.removeChild(cat_select);
  }

  /**
   * 鍒犻櫎蹇?€熷搧鐗
   */
  function removeBrand()
  {
      if (!document.forms['theForm'].elements['new_brand_name'])
      {
          return;
      }

      var brand = document.theForm.new_brand_name;
      brand.parentNode.removeChild(brand);
  }

  /**
   * 娣诲姞鎵╁睍鍒嗙被
   */
  function addOtherCat(conObj)
  {
      var sel = document.createElement("SELECT");
      var selCat = document.forms['theForm'].elements['cat_id'];

      for (i = 0; i < selCat.length; i++)
      {
          var opt = document.createElement("OPTION");
          opt.text = selCat.options[i].text;
          opt.value = selCat.options[i].value;
          if (Browser.isIE)
          {
              sel.add(opt);
          }
          else
          {
              sel.appendChild(opt);
          }
      }
      conObj.appendChild(sel);
      sel.name = "other_cat[]";
      sel.onChange = function() {checkIsLeaf(this);};
  }

  /* 鍏宠仈鍟嗗搧鍑芥暟 */
  function searchGoods(szObject, catId, brandId, keyword)
  {
      var filters = new Object;

      filters.cat_id = elements[catId].value;
      filters.brand_id = elements[brandId].value;
      filters.keyword = Utils.trim(elements[keyword].value);
      filters.exclude = document.forms['theForm'].elements['goods_id'].value;

      szObject.loadOptions('get_goods_list', filters);
  }

  /**
   * 鍏宠仈鏂囩珷鍑芥暟
   */
  function searchArticle()
  {
    var filters = new Object;

    filters.title = Utils.trim(elements['article_title'].value);

    sz3.loadOptions('get_article_list', filters);
  }

  /**
   * 鏂板?涓€涓?浘鐗
   */
  function addImg(obj)
  {
      var src  = obj.parentNode.parentNode;
      var idx  = rowindex(src);
      var tbl  = document.getElementById('gallery-table');
      var row  = tbl.insertRow(idx + 1);
      var cell = row.insertCell(-1);
      cell.innerHTML = src.cells[0].innerHTML.replace(/(.*)(addImg)(.*)(\[)(\+)/i, "$1removeImg$3$4-");
  }

  /**
   * 鍒犻櫎鍥剧墖涓婁紶
   */
  function removeImg(obj)
  {
      var row = rowindex(obj.parentNode.parentNode);
      var tbl = document.getElementById('gallery-table');

      tbl.deleteRow(row);
  }

  /**
   * 鍒犻櫎鍥剧墖
   */
  function dropImg(imgId)
  {
    Ajax.call('goods.php?is_ajax=1&act=drop_image', "img_id="+imgId, dropImgResponse, "GET", "JSON");
  }

  function dropImgResponse(result)
  {
      if (result.error == 0)
      {
          document.getElementById('gallery_' + result.content).style.display = 'none';
      }
  }

  /**
   * 灏嗗競鍦轰环鏍煎彇鏁
   */
  function integral_market_price()
  {
    document.forms['theForm'].elements['market_price'].value = parseInt(document.forms['theForm'].elements['market_price'].value);
  }

   /**
   * 灏嗙Н鍒嗚喘涔伴?搴﹀彇鏁
   */
  function parseint_integral()
  {
    document.forms['theForm'].elements['integral'].value = parseInt(document.forms['theForm'].elements['integral'].value);
  }


  /**
  * 妫€鏌ヨ揣鍙锋槸鍚﹀瓨鍦
  */
  function checkGoodsSn(goods_sn, goods_id)
  {
    if (goods_sn == '')
    {
        document.getElementById('goods_sn_notice').innerHTML = "";
        return;
    }

    var callback = function(res)
    {
      if (res.error > 0)
      {
        document.getElementById('goods_sn_notice').innerHTML = res.message;
        document.getElementById('goods_sn_notice').style.color = "red";
      }
      else
      {
        document.getElementById('goods_sn_notice').innerHTML = "";
      }
    }
    Ajax.call('goods.php?is_ajax=1&act=check_goods_sn', "goods_sn=" + goods_sn + "&goods_id=" + goods_id, callback, "GET", "JSON");
  }

  /**
   * 鏂板?涓€涓?紭鎯犱环鏍
   */
  function addVolumePrice(obj)
  {
    var src      = obj.parentNode.parentNode;
    var tbl      = document.getElementById('tbody-volume');

    var validator  = new Validator('theForm');
    checkVolumeData("0",validator);
    if (!validator.passed())
    {
      return false;
    }

    var row  = tbl.insertRow(tbl.rows.length);
    var cell = row.insertCell(-1);
    cell.innerHTML = src.cells[0].innerHTML.replace(/(.*)(addVolumePrice)(.*)(\[)(\+)/i, "$1removeVolumePrice$3$4-");

    var number_list = document.getElementsByName("volume_number[]");
    var price_list  = document.getElementsByName("volume_price[]");

    number_list[number_list.length-1].value = "";
    price_list[price_list.length-1].value   = "";
  }

  /**
   * 鍒犻櫎浼樻儬浠锋牸
   */
  function removeVolumePrice(obj)
  {
    var row = rowindex(obj.parentNode.parentNode);
    var tbl = document.getElementById('tbody-volume');

    tbl.deleteRow(row);
  }

  /**
   * 鏍￠獙浼樻儬鏁版嵁鏄?惁姝ｇ‘
   */
  function checkVolumeData(isSubmit,validator)
  {
    var volumeNum = document.getElementsByName("volume_number[]");
    var volumePri = document.getElementsByName("volume_price[]");
    var numErrNum = 0;
    var priErrNum = 0;

    for (i = 0 ; i < volumePri.length ; i ++)
    {
      if ((isSubmit != 1 || volumeNum.length > 1) && numErrNum <= 0 && volumeNum.item(i).value == "")
      {
        validator.addErrorMsg(volume_num_not_null);
        numErrNum++;
      }

      if (numErrNum <= 0 && Utils.trim(volumeNum.item(i).value) != "" && ! Utils.isNumber(Utils.trim(volumeNum.item(i).value)))
      {
        validator.addErrorMsg(volume_num_not_number);
        numErrNum++;
      }

      if ((isSubmit != 1 || volumePri.length > 1) && priErrNum <= 0 && volumePri.item(i).value == "")
      {
        validator.addErrorMsg(volume_price_not_null);
        priErrNum++;
      }

      if (priErrNum <= 0 && Utils.trim(volumePri.item(i).value) != "" && ! Utils.isNumber(Utils.trim(volumePri.item(i).value)))
      {
        validator.addErrorMsg(volume_price_not_number);
        priErrNum++;
      }
    }
  }
  
</script>
<div id="footer">
共执行 9 个查询，用时 0.061003 秒，Gzip 已禁用，内存占用 1.716 MB<br>
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

<iframe src="javascript:void(0)" frameborder="0" scrolling="no" style="margin: 0px; padding: 0px; border: 0px; height: 0px; width: 0px; position: absolute; z-index: 10000; background-image: none; background-color: transparent;"></iframe><iframe src="javascript:void(0)" frameborder="0" scrolling="no" style="margin: 0px; padding: 0px; border: 0px; height: 0px; width: 0px; position: absolute; z-index: 10000; background-image: none; background-color: transparent;"></iframe><iframe src="javascript:void(0)" frameborder="0" scrolling="no" style="margin: 0px; padding: 0px; border: 0px; height: 0px; width: 0px; position: absolute; z-index: 10000; background-image: none; background-color: transparent;"></iframe><iframe src="javascript:void(0)" frameborder="0" scrolling="no" style="margin: 0px; padding: 0px; border: 0px; height: 0px; width: 0px; position: absolute; z-index: 10000; background-image: none; background-color: transparent;"></iframe><iframe src="javascript:void(0)" frameborder="0" scrolling="no" style="margin: 0px; padding: 0px; border: 0px; height: 0px; width: 0px; position: absolute; z-index: 10000; background-image: none; background-color: transparent;"></iframe></body><script>window.FCKeditorAPI = {Version : "2.6.3",VersionBuild : "19836",Instances : new Object(),GetInstance : function( name ){return this.Instances[ name ];},_FormSubmit : function(){for ( var name in FCKeditorAPI.Instances ){var oEditor = FCKeditorAPI.Instances[ name ] ;if ( oEditor.GetParentForm && oEditor.GetParentForm() == this )oEditor.UpdateLinkedField() ;}this._FCKOriginalSubmit() ;},_FunctionQueue	: {Functions : new Array(),IsRunning : false,Add : function( f ){this.Functions.push( f );if ( !this.IsRunning )this.StartNext();},StartNext : function(){var aQueue = this.Functions ;if ( aQueue.length > 0 ){this.IsRunning = true;aQueue[0].call();}else this.IsRunning = false;},Remove : function( f ){var aQueue = this.Functions;var i = 0, fFunc;while( (fFunc = aQueue[ i ]) ){if ( fFunc == f )aQueue.splice( i,1 );i++ ;}this.StartNext();}}}</script></html>