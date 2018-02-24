<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0049)http://ec.com/admin/shop_config.php?act=list_edit -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 商店设置 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./shangdian-shezhi_files/general.css" rel="stylesheet" type="text/css">
<link href="./shangdian-shezhi_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./shangdian-shezhi_files/transport.js"></script><script type="text/javascript" src="./shangdian-shezhi_files/common.js"></script><script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var smtp_host_empty = "您没有填写邮件服务器地址!";
var smtp_port_empty = "您没有填写服务器端口!";
var reply_email_empty = "您没有填写邮件回复地址!";
var test_email_empty = "您没有填写发送测试邮件的地址!";
var email_address_same = "邮件回复地址与发送测试邮件的地址不能相同!";
//-->
</script>
</head>
<body>

<h1>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商店设置 </span>
<div style="clear:both"></div>
</h1>
<script type="text/javascript" src="./shangdian-shezhi_files/utils.js"></script><script type="text/javascript" src="./shangdian-shezhi_files/region.js"></script><div class="tab-div">
  <!-- tab bar -->
  <div id="tabbar-div">
    <p>
      <span class="tab-front" id="shop_info-tab">网店信息</span><span class="tab-back" id="basic-tab">基本设置</span><span class="tab-back" id="display-tab">显示设置</span><span class="tab-back" id="shopping_flow-tab">购物流程</span><span class="tab-back" id="goods-tab">商品显示设置</span><span class="tab-back" id="sms-tab">短信设置</span><span class="tab-back" id="wap-tab">WAP设置</span>    </p>
  </div>
  <!-- tab body -->
  <div id="tabbody-div">
    <form enctype="multipart/form-data" name="theForm" action="http://ec.com/admin/shop_config.php?act=post" method="post">
        <table width="90%" id="shop_info-table">
                  <tbody><tr>
        <td class="label" valign="top">
                    商店名称:
        </td>
        <td>
                    <input name="value[101]" type="text" value="ECSHOP" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticeshop_title&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    商店标题:
        </td>
        <td>
                    <input name="value[102]" type="text" value="ECSHOP演示站" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticeshop_title">商店的标题将显示在浏览器的标题栏</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    商店描述:
        </td>
        <td>
                    <input name="value[103]" type="text" value="ECSHOP演示站" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    商店关键字:
        </td>
        <td>
                    <input name="value[104]" type="text" value="ECSHOP演示站" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    所在国家:
        </td>
        <td>
          
                          <select name="value[105]" id="selCountries" onchange="region.changed(this, 1, &#39;selProvinces&#39;)">
                <option value="">请选择...</option>
                                  <option value="1" selected="">中国</option>
                              </select>
                                              </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    所在省份:
        </td>
        <td>
          
                          <select name="value[106]" id="selProvinces" onchange="region.changed(this, 2, &#39;selCities&#39;)">
                <option value="">请选择...</option>
                                  <option value="2" selected="">北京</option>
                                  <option value="3">安徽</option>
                                  <option value="4">福建</option>
                                  <option value="5">甘肃</option>
                                  <option value="6">广东</option>
                                  <option value="7">广西</option>
                                  <option value="8">贵州</option>
                                  <option value="9">海南</option>
                                  <option value="10">河北</option>
                                  <option value="11">河南</option>
                                  <option value="12">黑龙江</option>
                                  <option value="13">湖北</option>
                                  <option value="14">湖南</option>
                                  <option value="15">吉林</option>
                                  <option value="16">江苏</option>
                                  <option value="17">江西</option>
                                  <option value="18">辽宁</option>
                                  <option value="19">内蒙古</option>
                                  <option value="20">宁夏</option>
                                  <option value="21">青海</option>
                                  <option value="22">山东</option>
                                  <option value="23">山西</option>
                                  <option value="24">陕西</option>
                                  <option value="25">上海</option>
                                  <option value="26">四川</option>
                                  <option value="27">天津</option>
                                  <option value="28">西藏</option>
                                  <option value="29">新疆</option>
                                  <option value="30">云南</option>
                                  <option value="31">浙江</option>
                                  <option value="32">重庆</option>
                                  <option value="33">香港</option>
                                  <option value="34">澳门</option>
                                  <option value="35">台湾</option>
                              </select>
                                        </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    所在城市:
        </td>
        <td>
          
                          <select name="value[107]" id="selCities">
                <option value="">请选择...</option>
                                  <option value="52" selected="">北京</option>
                              </select>
                                        </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    详细地址:
        </td>
        <td>
                    <input name="value[108]" type="text" value="" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticeqq&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    客服QQ号码:
        </td>
        <td>
                    <input name="value[109]" type="text" value="" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticeqq">如果您有多个客服的QQ号码，请在每个号码之间使用半角逗号（,）分隔。</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticeww&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    淘宝旺旺:
        </td>
        <td>
                    <input name="value[110]" type="text" value="" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticeww">如果您有多个客服的淘宝旺旺号码，请在每个号码之间使用半角逗号（,）分隔。</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticeskype&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    Skype:
        </td>
        <td>
                    <input name="value[111]" type="text" value="" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticeskype">如果您有多个客服的Skype号码，请在每个号码之间使用半角逗号（,）分隔。提示：你需要在你的Skype隐私设置中启用状态显示功能</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticeym&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    Yahoo Messenger:
        </td>
        <td>
                    <input name="value[112]" type="text" value="" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticeym">如果您有多个客服的 Yahoo Messenger 号码，请在每个号码之间使用半角逗号（,）分隔。</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticemsn&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    MSN Messenger:
        </td>
        <td>
                    <input name="value[113]" type="text" value="" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticemsn">如果您有多个客服的MSN号码，请在每个号码之间使用半角逗号（,）分隔。</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    客服邮件地址:
        </td>
        <td>
                    <input name="value[114]" type="text" value="" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    客服电话:
        </td>
        <td>
                    <input name="value[115]" type="text" value="" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    暂时关闭网站:
        </td>
        <td>
                              <label for="value_116_0"><input type="radio" name="value[116]" id="value_116_0" value="0" checked="true">否</label>
                    <label for="value_116_1"><input type="radio" name="value[116]" id="value_116_1" value="1">是</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    关闭网店的原因:
        </td>
        <td>
                    <textarea name="value[117]" cols="40" rows="5"></textarea>

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticeshop_logo&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    商店 Logo:
        </td>
        <td>
                    <input name="shop_logo" type="file" size="40">
                                  <img src="./shangdian-shezhi_files/no.gif" alt="no">
                                                    <br>
          <span class="notice-span" style="display:block" id="noticeshop_logo">请在上传前将图片的文件名命名为logo.gif</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    是否显示 Licensed:
        </td>
        <td>
                              <label for="value_119_0"><input type="radio" name="value[119]" id="value_119_0" value="0">否</label>
                    <label for="value_119_1"><input type="radio" name="value[119]" id="value_119_1" value="1" checked="true">是</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticeuser_notice&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    用户中心公告:
        </td>
        <td>
                    <textarea name="value[120]" cols="40" rows="5">用户中心公告！</textarea>

                              <br>
          <span class="notice-span" style="display:block" id="noticeuser_notice">该信息将在用户中心欢迎页面显示</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticeshop_notice&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    商店公告:
        </td>
        <td>
                    <textarea name="value[121]" cols="40" rows="5">欢迎光临手机网,我们的宗旨：诚信经营、服务客户！
&lt;MARQUEE onmouseover=this.stop() onmouseout=this.start() 
scrollAmount=3&gt;&lt;U&gt;&lt;FONT color=red&gt;
&lt;P&gt;咨询电话010-10124444  010-21252454 8465544&lt;/P&gt;&lt;/FONT&gt;&lt;/U&gt;&lt;/MARQUEE&gt;</textarea>

                              <br>
          <span class="notice-span" style="display:block" id="noticeshop_notice">以上内容将显示在首页商店公告中,注意控制公告内容长度不要超过公告显示区域大小。</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    是否关闭注册:
        </td>
        <td>
                              <label for="value_122_0"><input type="radio" name="value[122]" id="value_122_0" value="1">是</label>
                    <label for="value_122_1"><input type="radio" name="value[122]" id="value_122_1" value="0" checked="true">否</label>
          
                            </td>
      </tr>
          </tbody></table>
        <table width="90%" id="basic-table" style="display:none">
                  <tbody><tr>
        <td class="label" valign="top">
                    系统语言:
        </td>
        <td>
          
                              <select name="value[201]">
                  <option value="en_us">en_us</option><option value="zh_cn" selected="">zh_cn</option><option value="zh_tw">zh_tw</option>                  </select>
                                        </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    ICP证书或ICP备案证书号:
        </td>
        <td>
                    <input name="value[202]" type="text" value="" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    ICP 备案证书文件:
        </td>
        <td>
                    <input name="icp_file" type="file" size="40">
                                  <img src="./shangdian-shezhi_files/no.gif" alt="no">
                                                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticewatermark&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    水印文件:
        </td>
        <td>
                    <input name="watermark" type="file" size="40">
                                  <img src="./shangdian-shezhi_files/no.gif" alt="no">
                                                    <br>
          <span class="notice-span" style="display:block" id="noticewatermark">水印文件须为gif格式才可支持透明度设置。</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    水印位置:
        </td>
        <td>
                              <label for="value_205_0"><input type="radio" name="value[205]" id="value_205_0" value="0">无</label>
                    <label for="value_205_1"><input type="radio" name="value[205]" id="value_205_1" value="1" checked="true">左上</label>
                    <label for="value_205_2"><input type="radio" name="value[205]" id="value_205_2" value="2">右上</label>
                    <label for="value_205_3"><input type="radio" name="value[205]" id="value_205_3" value="3">居中</label>
                    <label for="value_205_4"><input type="radio" name="value[205]" id="value_205_4" value="4">左下</label>
                    <label for="value_205_5"><input type="radio" name="value[205]" id="value_205_5" value="5">右下</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticewatermark_alpha&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    水印透明度:
        </td>
        <td>
                    <input name="value[206]" type="text" value="65" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticewatermark_alpha">水印的透明度，可选值为0-100。当设置为100时则为不透明。</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    是否启用库存管理:
        </td>
        <td>
                              <label for="value_207_0"><input type="radio" name="value[207]" id="value_207_0" value="1" checked="true">是</label>
                    <label for="value_207_1"><input type="radio" name="value[207]" id="value_207_1" value="0">否</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticemarket_price_rate&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    市场价格比例:
        </td>
        <td>
                    <input name="value[208]" type="text" value="1.2" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticemarket_price_rate">输入商品售价时将自动根据该比例计算市场价格</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticerewrite&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    URL重写:
        </td>
        <td>
                              <label for="value_209_0"><input type="radio" name="value[209]" id="value_209_0" value="0" checked="true" onclick="return ReWriterConfirm(this);">禁用</label>
                    <label for="value_209_1"><input type="radio" name="value[209]" id="value_209_1" value="1" onclick="return ReWriterConfirm(this);">简单重写</label>
                    <label for="value_209_2"><input type="radio" name="value[209]" id="value_209_2" value="2" onclick="return ReWriterConfirm(this);">复杂重写</label>
          
                              <br>
          <span class="notice-span" style="display:block" id="noticerewrite">URL重写是一种搜索引擎优化技术，可以将动态的地址模拟成静态的HTML文件。需要Apache的支持。</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticeintegral_name&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    消费积分名称:
        </td>
        <td>
                    <input name="value[210]" type="text" value="积分" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticeintegral_name">您可以将消费积分重新命名。例如：烧币</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticeintegral_scale&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    积分换算比例:
        </td>
        <td>
                    <input name="value[211]" type="text" value="1" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticeintegral_scale">每100积分可抵多少元现金</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticeintegral_percent&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    积分支付比例:
        </td>
        <td>
                    <input name="value[212]" type="text" value="1" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticeintegral_percent">每100元商品最多可以使用多少元积分</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    商品货号前缀:
        </td>
        <td>
                    <input name="value[213]" type="text" value="ECS" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    用户评论是否需要审核:
        </td>
        <td>
                              <label for="value_214_0"><input type="radio" name="value[214]" id="value_214_0" value="0">不需要审核</label>
                    <label for="value_214_1"><input type="radio" name="value[214]" id="value_214_1" value="1" checked="true">需要审核</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    商品的默认图片:
        </td>
        <td>
                    <input name="no_picture" type="file" size="40">
                                  <img src="./shangdian-shezhi_files/no.gif" alt="no">
                                                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticestats_code&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    统计代码:
        </td>
        <td>
                    <textarea name="value[218]" cols="40" rows="5"></textarea>

                              <br>
          <span class="notice-span" style="display:block" id="noticestats_code">您可以将其他访问统计服务商提供的代码添加到每一个页面。</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticecache_time&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    缓存存活时间（秒）:
        </td>
        <td>
                    <input name="value[219]" type="text" value="3600" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticecache_time">前台页面缓存的存活时间，以秒为单位。</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    会员注册赠送积分:
        </td>
        <td>
                    <input name="value[220]" type="text" value="0" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticeenable_gzip&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    是否启用Gzip模式:
        </td>
        <td>
                              <label for="value_221_0"><input type="radio" name="value[221]" id="value_221_0" value="0" checked="true">禁用</label>
                    <label for="value_221_1"><input type="radio" name="value[221]" id="value_221_1" value="1" onclick="return confirm(&#39;GZip 功能需要您的服务器支持 zlib 扩展库。\n如果您发现开启Gzip后页面出现乱码，可能是您的服务器已经开启了Gzip，您不需要在 ECSHOP 中再次开启。&#39;);">启用</label>
          
                              <br>
          <span class="notice-span" style="display:block" id="noticeenable_gzip">启用Gzip模式可压缩发送页面大小，加快网页传输。需要php支持Gzip。如果已经用Apache等对页面进行Gzip压缩，请禁止该功能。</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    排行统计的时间:
        </td>
        <td>
                              <label for="value_222_0"><input type="radio" name="value[222]" id="value_222_0" value="0" checked="true">所有</label>
                    <label for="value_222_1"><input type="radio" name="value[222]" id="value_222_1" value="1">一年</label>
                    <label for="value_222_2"><input type="radio" name="value[222]" id="value_222_2" value="2">半年</label>
                    <label for="value_222_3"><input type="radio" name="value[222]" id="value_222_3" value="3">三个月</label>
                    <label for="value_222_4"><input type="radio" name="value[222]" id="value_222_4" value="4">一个月</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    默认时区:
        </td>
        <td>
                    <select name="value[223]" id="value_223_20">
            <option value="-12">(GMT -12:00) Eniwetok, Kwajalein</option><option value="-11">(GMT -11:00) Midway Island, Samoa</option><option value="-10">(GMT -10:00) Hawaii</option><option value="-9">(GMT -09:00) Alaska</option><option value="-8">(GMT -08:00) Pacific Time (US &amp; Canada), Tijuana</option><option value="-7">(GMT -07:00) Mountain Time (US &amp; Canada), Arizona</option><option value="-6">(GMT -06:00) Central Time (US &amp; Canada), Mexico City</option><option value="-5">(GMT -05:00) Eastern Time (US &amp; Canada), Bogota, Lima, Quito</option><option value="-4">(GMT -04:00) Atlantic Time (Canada), Caracas, La Paz</option><option value="-3.5">(GMT -03:30) Newfoundland</option><option value="-3">(GMT -03:00) Brassila, Buenos Aires, Georgetown, Falkland Is</option><option value="-2">(GMT -02:00) Mid-Atlantic, Ascension Is., St. Helena</option><option value="-1">(GMT -01:00) Azores, Cape Verde Islands</option><option value="0">(GMT) Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia</option><option value="1">(GMT +01:00) Amsterdam, Berlin, Brussels, Madrid, Paris, Rome</option><option value="2">(GMT +02:00) Cairo, Helsinki, Kaliningrad, South Africa</option><option value="3">(GMT +03:00) Baghdad, Riyadh, Moscow, Nairobi</option><option value="3.5">(GMT +03:30) Tehran</option><option value="4">(GMT +04:00) Abu Dhabi, Baku, Muscat, Tbilisi</option><option value="4.5">(GMT +04:30) Kabul</option><option value="5">(GMT +05:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option><option value="5.5">(GMT +05:30) Bombay, Calcutta, Madras, New Delhi</option><option value="5.75">(GMT +05:45) Katmandu</option><option value="6">(GMT +06:00) Almaty, Colombo, Dhaka, Novosibirsk</option><option value="6.5">(GMT +06:30) Rangoon</option><option value="7">(GMT +07:00) Bangkok, Hanoi, Jakarta</option><option value="8" selected="">(GMT +08:00) Beijing, Hong Kong, Perth, Singapore, Taipei</option><option value="9">(GMT +09:00) Osaka, Sapporo, Seoul, Tokyo, Yakutsk</option><option value="9.5">(GMT +09:30) Adelaide, Darwin</option><option value="10">(GMT +10:00) Canberra, Guam, Melbourne, Sydney, Vladivostok</option><option value="11">(GMT +11:00) Magadan, New Caledonia, Solomon Islands</option><option value="12">(GMT +12:00) Auckland, Wellington, Fiji, Marshall Island</option>          </select>

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    附件上传大小:
        </td>
        <td>
                    <select name="value[224]" id="value_224_21">
            <option value="-1">服务默认设置</option><option value="0">0KB</option><option value="64" selected="">64KB</option><option value="128">128KB</option><option value="256">256KB</option><option value="512">512KB</option><option value="1024">1MB</option><option value="2048">2MB</option><option value="4096">4MB</option>          </select>

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    是否开启命令行调用计划任务:
        </td>
        <td>
                              <label for="value_226_0"><input type="radio" name="value[226]" id="value_226_0" value="0" checked="true">否</label>
                    <label for="value_226_1"><input type="radio" name="value[226]" id="value_226_1" value="1">是</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticecomment_factor&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    商品评论的条件:
        </td>
        <td>
                              <label for="value_227_0"><input type="radio" name="value[227]" id="value_227_0" value="0" checked="true">所有用户</label>
                    <label for="value_227_1"><input type="radio" name="value[227]" id="value_227_1" value="1">仅登录用户</label>
                    <label for="value_227_2"><input type="radio" name="value[227]" id="value_227_2" value="2">有过一次以上购买行为用户</label>
                    <label for="value_227_3"><input type="radio" name="value[227]" id="value_227_3" value="3">仅购买过该商品用户</label>
          
                              <br>
          <span class="notice-span" style="display:block" id="noticecomment_factor">选取较高的评论条件可以有效的减少垃圾评论的产生。只有用户订单完成后才认为该用户有购买行为</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    是否开启新订单提醒:
        </td>
        <td>
                              <label for="value_228_0"><input type="radio" name="value[228]" id="value_228_0" value="0">否</label>
                    <label for="value_228_1"><input type="radio" name="value[228]" id="value_228_1" value="1" checked="true">是</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    默认库存:
        </td>
        <td>
                    <input name="value[229]" type="text" value="1" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticebgcolor&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    缩略图背景色:
        </td>
        <td>
                    <input name="value[230]" type="text" value="#FFFFFF" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticebgcolor">颜色请以#FFFFFF格式填写</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    站点访问统计:
        </td>
        <td>
                              <label for="value_231_0"><input type="radio" name="value[231]" id="value_231_0" value="on" checked="true">开启</label>
                    <label for="value_231_1"><input type="radio" name="value[231]" id="value_231_1" value="off">关闭</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticesend_mail_on&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    是否开启自动发送邮件:
        </td>
        <td>
                              <label for="value_232_0"><input type="radio" name="value[232]" id="value_232_0" value="on">开启</label>
                    <label for="value_232_1"><input type="radio" name="value[232]" id="value_232_1" value="off" checked="true">关闭</label>
          
                              <br>
          <span class="notice-span" style="display:block" id="noticesend_mail_on">启用该选项登录后台时，会自动发送邮件队列中尚未发送的邮件</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    上传商品是否自动生成相册图:
        </td>
        <td>
                              <label for="value_233_0"><input type="radio" name="value[233]" id="value_233_0" value="1" checked="true">是</label>
                    <label for="value_233_1"><input type="radio" name="value[233]" id="value_233_1" value="0">否</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    上传商品时是否保留原图:
        </td>
        <td>
                              <label for="value_234_0"><input type="radio" name="value[234]" id="value_234_0" value="1" checked="true">是</label>
                    <label for="value_234_1"><input type="radio" name="value[234]" id="value_234_1" value="0" onclick="return confirm(&#39;如果您不保留商品原图，在“图片批量处理”的时候，\n将不会重新生成不包含原图的商品图片。请慎重使用该功能！&#39;);">否</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    是否开启会员邮件验证:
        </td>
        <td>
                              <label for="value_235_0"><input type="radio" name="value[235]" id="value_235_0" value="1" checked="true">开启</label>
                    <label for="value_235_1"><input type="radio" name="value[235]" id="value_235_1" value="0">关闭</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    是否启用留言板功能:
        </td>
        <td>
                              <label for="value_236_0"><input type="radio" name="value[236]" id="value_236_0" value="1" checked="true">开启</label>
                    <label for="value_236_1"><input type="radio" name="value[236]" id="value_236_1" value="0">关闭</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticesend_verify_email&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    用户注册时自动发送验证邮件:
        </td>
        <td>
                              <label for="value_242_0"><input type="radio" name="value[242]" id="value_242_0" value="1">开启</label>
                    <label for="value_242_1"><input type="radio" name="value[242]" id="value_242_1" value="0" checked="true">关闭</label>
          
                              <br>
          <span class="notice-span" style="display:block" id="noticesend_verify_email">“是否开启会员邮件验证”设为开启时才可使用此功能</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    用户留言是否需要审核:
        </td>
        <td>
                              <label for="value_903_0"><input type="radio" name="value[903]" id="value_903_0" value="1" checked="true">需要审核</label>
                    <label for="value_903_1"><input type="radio" name="value[903]" id="value_903_1" value="0">不需要审核</label>
          
                            </td>
      </tr>
          </tbody></table>
        <table width="90%" id="display-table" style="display:none">
                  <tbody><tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticesearch_keywords&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    首页搜索的关键字:
        </td>
        <td>
                    <input name="value[330]" type="text" value="" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticesearch_keywords">首页显示的搜索关键字,请用半角逗号(,)分隔多个关键字</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    时间格式:
        </td>
        <td>
                    <input name="value[302]" type="text" value="Y-m-d H:i:s" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticecurrency_format&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    货币格式:
        </td>
        <td>
                    <input name="value[303]" type="text" value="￥%s元" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticecurrency_format">显示商品价格的格式，%s将被替换为相应的价格数字。</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    缩略图宽度:
        </td>
        <td>
                    <input name="value[304]" type="text" value="100" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    缩略图高度:
        </td>
        <td>
                    <input name="value[305]" type="text" value="100" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    商品图片宽度:
        </td>
        <td>
                    <input name="value[306]" type="text" value="230" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticeimage_height&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    商品图片高度:
        </td>
        <td>
                    <input name="value[307]" type="text" value="230" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticeimage_height">如果您的服务器支持GD，在您上传商品图片的时候将自动将图片缩小到指定的尺寸。</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    销量排行数量:
        </td>
        <td>
                    <input name="value[312]" type="text" value="10" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    浏览历史数量:
        </td>
        <td>
                    <input name="value[313]" type="text" value="5" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticecomments_number&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    评论数量:
        </td>
        <td>
                    <input name="value[314]" type="text" value="5" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticecomments_number">显示在商品详情页的用户评论数量。</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticebought_goods&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    相关商品数量:
        </td>
        <td>
                    <input name="value[315]" type="text" value="3" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticebought_goods">显示多少个购买此商品的人还买过哪些商品</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    最新文章显示数量:
        </td>
        <td>
                    <input name="value[316]" type="text" value="8" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    商品名称的长度:
        </td>
        <td>
                    <input name="value[317]" type="text" value="7" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    商品价格显示规则:
        </td>
        <td>
                              <label for="value_318_0"><input type="radio" name="value[318]" id="value_318_0" value="0">不处理</label>
                    <label for="value_318_1"><input type="radio" name="value[318]" id="value_318_1" value="1">保留不为 0 的尾数</label>
                    <label for="value_318_2"><input type="radio" name="value[318]" id="value_318_2" value="2">不四舍五入，保留一位小数</label>
                    <label for="value_318_3"><input type="radio" name="value[318]" id="value_318_3" value="3">不四舍五入，不保留小数</label>
                    <label for="value_318_4"><input type="radio" name="value[318]" id="value_318_4" value="4">先四舍五入，保留一位小数</label>
                    <label for="value_318_5"><input type="radio" name="value[318]" id="value_318_5" value="5" checked="true">先四舍五入，不保留小数 </label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    商品分类页列表的数量:
        </td>
        <td>
                    <input name="value[319]" type="text" value="10" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    商品分类页默认排序类型:
        </td>
        <td>
                              <label for="value_320_0"><input type="radio" name="value[320]" id="value_320_0" value="0" checked="true">按上架时间</label>
                    <label for="value_320_1"><input type="radio" name="value[320]" id="value_320_1" value="1">按商品价格</label>
                    <label for="value_320_2"><input type="radio" name="value[320]" id="value_320_2" value="2">按最后更新时间</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    商品分类页默认排序方式:
        </td>
        <td>
                              <label for="value_321_0"><input type="radio" name="value[321]" id="value_321_0" value="0" checked="true">降序排列</label>
                    <label for="value_321_1"><input type="radio" name="value[321]" id="value_321_1" value="1">升序排列</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    商品分类页默认显示方式:
        </td>
        <td>
                              <label for="value_322_0"><input type="radio" name="value[322]" id="value_322_0" value="0">列表显示</label>
                    <label for="value_322_1"><input type="radio" name="value[322]" id="value_322_1" value="1" checked="true">表格显示</label>
                    <label for="value_322_2"><input type="radio" name="value[322]" id="value_322_2" value="2">文本显示</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticeattr_related_number&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    属性关联的商品数量:
        </td>
        <td>
                    <input name="value[323]" type="text" value="5" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticeattr_related_number">在商品详情页面显示多少个属性关联的商品。</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    商品详情页相册图片数量:
        </td>
        <td>
                    <input name="value[324]" type="text" value="5" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    文章标题的长度:
        </td>
        <td>
                    <input name="value[325]" type="text" value="16" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    一级配送区域名称:
        </td>
        <td>
                    <input name="value[326]" type="text" value="国家" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    二级配送区域名称:
        </td>
        <td>
                    <input name="value[327]" type="text" value="省" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    三级配送区域名称:
        </td>
        <td>
                    <input name="value[328]" type="text" value="市" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    四级配送区域名称:
        </td>
        <td>
                    <input name="value[329]" type="text" value="区" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    关联商品显示数量:
        </td>
        <td>
                    <input name="value[332]" type="text" value="4" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    用户帮助是否打开:
        </td>
        <td>
                              <label for="value_333_0"><input type="radio" name="value[333]" id="value_333_0" value="0">关闭</label>
                    <label for="value_333_1"><input type="radio" name="value[333]" id="value_333_1" value="1" checked="true">打开</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    文章分类页列表的数量:
        </td>
        <td>
                    <input name="value[334]" type="text" value="10" size="40">

                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    分页样式:
        </td>
        <td>
                              <label for="value_335_0"><input type="radio" name="value[335]" id="value_335_0" value="0">默认经典</label>
                    <label for="value_335_1"><input type="radio" name="value[335]" id="value_335_1" value="1" checked="true">流行页码</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticerecommend_order&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    推荐商品排序:
        </td>
        <td>
                              <label for="value_336_0"><input type="radio" name="value[336]" id="value_336_0" value="0" checked="true">推荐排序</label>
                    <label for="value_336_1"><input type="radio" name="value[336]" id="value_336_1" value="1">随机显示</label>
          
                              <br>
          <span class="notice-span" style="display:block" id="noticerecommend_order">推荐排序适合少量推荐，随机显示大量推荐</span>
                  </td>
      </tr>
          </tbody></table>
        <table width="90%" id="shopping_flow-table" style="display:none">
                  <tbody><tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticecart_confirm&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    购物车确定提示:
        </td>
        <td>
                    <select name="value[424]" id="value_424_0">
            <option value="1">提示用户，点击“确定”进购物车</option><option value="2">提示用户，点击“取消”进购物车</option><option value="3" selected="">直接进入购物车</option><option value="4">不提示并停留在当前页面</option>          </select>

                              <br>
          <span class="notice-span" style="display:block" id="noticecart_confirm">允许您设置用户点击“加入购物车”后是否提示以及随后的动作。</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    能否开发票:
        </td>
        <td>
                              <label for="value_401_0"><input type="radio" name="value[401]" id="value_401_0" value="1" checked="true">能</label>
                    <label for="value_401_1"><input type="radio" name="value[401]" id="value_401_1" value="0">不能</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    是否使用积分:
        </td>
        <td>
                              <label for="value_402_0"><input type="radio" name="value[402]" id="value_402_0" value="1" checked="true">使用</label>
                    <label for="value_402_1"><input type="radio" name="value[402]" id="value_402_1" value="0">不使用</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    是否使用红包:
        </td>
        <td>
                              <label for="value_403_0"><input type="radio" name="value[403]" id="value_403_0" value="1" checked="true">使用</label>
                    <label for="value_403_1"><input type="radio" name="value[403]" id="value_403_1" value="0">不使用</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    是否使用余额:
        </td>
        <td>
                              <label for="value_404_0"><input type="radio" name="value[404]" id="value_404_0" value="1" checked="true">使用</label>
                    <label for="value_404_1"><input type="radio" name="value[404]" id="value_404_1" value="0">不使用</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticeuse_how_oos&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    是否使用缺货处理:
        </td>
        <td>
                              <label for="value_405_0"><input type="radio" name="value[405]" id="value_405_0" value="1" checked="true">使用</label>
                    <label for="value_405_1"><input type="radio" name="value[405]" id="value_405_1" value="0">不使用</label>
          
                              <br>
          <span class="notice-span" style="display:block" id="noticeuse_how_oos">使用缺货处理时前台订单确认页面允许用户选择缺货时处理方法。</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    确认订单时:
        </td>
        <td>
                              <label for="value_406_0"><input type="radio" name="value[406]" id="value_406_0" value="1">发送邮件</label>
                    <label for="value_406_1"><input type="radio" name="value[406]" id="value_406_1" value="0" checked="true">不发送邮件</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    发货时:
        </td>
        <td>
                              <label for="value_407_0"><input type="radio" name="value[407]" id="value_407_0" value="1">发送邮件</label>
                    <label for="value_407_1"><input type="radio" name="value[407]" id="value_407_1" value="0" checked="true">不发送邮件</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    取消订单时:
        </td>
        <td>
                              <label for="value_408_0"><input type="radio" name="value[408]" id="value_408_0" value="1">发送邮件</label>
                    <label for="value_408_1"><input type="radio" name="value[408]" id="value_408_1" value="0" checked="true">不发送邮件</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    把订单设为无效时:
        </td>
        <td>
                              <label for="value_409_0"><input type="radio" name="value[409]" id="value_409_0" value="1">发送邮件</label>
                    <label for="value_409_1"><input type="radio" name="value[409]" id="value_409_1" value="0" checked="true">不发送邮件</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    设置订单为“已付款”时:
        </td>
        <td>
                              <label for="value_410_0"><input type="radio" name="value[410]" id="value_410_0" value="1" checked="true">必须填写备注</label>
                    <label for="value_410_1"><input type="radio" name="value[410]" id="value_410_1" value="0">无需填写备注</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    设置订单为“未付款”时:
        </td>
        <td>
                              <label for="value_411_0"><input type="radio" name="value[411]" id="value_411_0" value="1" checked="true">必须填写备注</label>
                    <label for="value_411_1"><input type="radio" name="value[411]" id="value_411_1" value="0">无需填写备注</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    设置订单为“已发货”时:
        </td>
        <td>
                              <label for="value_412_0"><input type="radio" name="value[412]" id="value_412_0" value="1" checked="true">必须填写备注</label>
                    <label for="value_412_1"><input type="radio" name="value[412]" id="value_412_1" value="0">无需填写备注</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    设置订单为“收货确认”时:
        </td>
        <td>
                              <label for="value_413_0"><input type="radio" name="value[413]" id="value_413_0" value="1" checked="true">必须填写备注</label>
                    <label for="value_413_1"><input type="radio" name="value[413]" id="value_413_1" value="0">无需填写备注</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    设置订单为“未发货”时:
        </td>
        <td>
                              <label for="value_414_0"><input type="radio" name="value[414]" id="value_414_0" value="1" checked="true">必须填写备注</label>
                    <label for="value_414_1"><input type="radio" name="value[414]" id="value_414_1" value="0">无需填写备注</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    退货时:
        </td>
        <td>
                              <label for="value_415_0"><input type="radio" name="value[415]" id="value_415_0" value="1" checked="true">必须填写备注</label>
                    <label for="value_415_1"><input type="radio" name="value[415]" id="value_415_1" value="0">无需填写备注</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    把订单设为无效时:
        </td>
        <td>
                              <label for="value_416_0"><input type="radio" name="value[416]" id="value_416_0" value="1" checked="true">必须填写备注</label>
                    <label for="value_416_1"><input type="radio" name="value[416]" id="value_416_1" value="0">无需填写备注</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    取消订单时:
        </td>
        <td>
                              <label for="value_417_0"><input type="radio" name="value[417]" id="value_417_0" value="1" checked="true">必须填写备注</label>
                    <label for="value_417_1"><input type="radio" name="value[417]" id="value_417_1" value="0">无需填写备注</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticeinvoice_content&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    发票内容:
        </td>
        <td>
                    <textarea name="value[418]" cols="40" rows="5"></textarea>

                              <br>
          <span class="notice-span" style="display:block" id="noticeinvoice_content">客户要求开发票时可以选择的内容。例如：办公用品。每一行代表一个选项。</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    是否允许未登录用户购物:
        </td>
        <td>
                              <label for="value_419_0"><input type="radio" name="value[419]" id="value_419_0" value="1" checked="true">允许</label>
                    <label for="value_419_1"><input type="radio" name="value[419]" id="value_419_1" value="0">不允许</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticemin_goods_amount&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    最小购物金额:
        </td>
        <td>
                    <input name="value[420]" type="text" value="0" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticemin_goods_amount">达到此购物金额，才能提交订单。</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    是否一步购物:
        </td>
        <td>
                              <label for="value_421_0"><input type="radio" name="value[421]" id="value_421_0" value="1">是</label>
                    <label for="value_421_1"><input type="radio" name="value[421]" id="value_421_1" value="0" checked="true">否</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    发票类型及税率:
        </td>
        <td>
          
                        <table>
              <tbody><tr>
                <th scope="col">类型</th>
                <th scope="col">税率（％）</th>
              </tr>
              <tr>
                <td><input name="invoice_type[]" type="text" value="1"></td>
                <td><input name="invoice_rate[]" type="text" value="1"></td>
              </tr>
              <tr>
                <td><input name="invoice_type[]" type="text" value="2"></td>
                <td><input name="invoice_rate[]" type="text" value="1.5"></td>
              </tr>
              <tr>
                <td><input name="invoice_type[]" type="text" value=""></td>
                <td><input name="invoice_rate[]" type="text" value="0"></td>
              </tr>
            </tbody></table>
                                        </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    减库存的时机:
        </td>
        <td>
                              <label for="value_423_0"><input type="radio" name="value[423]" id="value_423_0" value="1">下订单时</label>
                    <label for="value_423_1"><input type="radio" name="value[423]" id="value_423_1" value="0" checked="true">发货时</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticesend_service_email&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    下订单时是否给客服发邮件:
        </td>
        <td>
                              <label for="value_425_0"><input type="radio" name="value[425]" id="value_425_0" value="1">是</label>
                    <label for="value_425_1"><input type="radio" name="value[425]" id="value_425_1" value="0" checked="true">否</label>
          
                              <br>
          <span class="notice-span" style="display:block" id="noticesend_service_email">网店信息中的客服邮件地址不为空时，该选项有效。</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    购物车里显示商品方式:
        </td>
        <td>
                              <label for="value_426_0"><input type="radio" name="value[426]" id="value_426_0" value="1">只显示文字</label>
                    <label for="value_426_1"><input type="radio" name="value[426]" id="value_426_1" value="2">只显示图片</label>
                    <label for="value_426_2"><input type="radio" name="value[426]" id="value_426_2" value="3" checked="true">显示文字与图片</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    购物车里是否显示商品属性:
        </td>
        <td>
                              <label for="value_427_0"><input type="radio" name="value[427]" id="value_427_0" value="1" checked="true">是</label>
                    <label for="value_427_1"><input type="radio" name="value[427]" id="value_427_1" value="0">否</label>
          
                            </td>
      </tr>
          </tbody></table>
        <table width="90%" id="goods-table" style="display:none">
                  <tbody><tr>
        <td class="label" valign="top">
                    是否显示货号:
        </td>
        <td>
                              <label for="value_701_0"><input type="radio" name="value[701]" id="value_701_0" value="1" checked="true">显示</label>
                    <label for="value_701_1"><input type="radio" name="value[701]" id="value_701_1" value="0">不显示</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    是否显示品牌:
        </td>
        <td>
                              <label for="value_702_0"><input type="radio" name="value[702]" id="value_702_0" value="1" checked="true">显示</label>
                    <label for="value_702_1"><input type="radio" name="value[702]" id="value_702_1" value="0">不显示</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    是否显示重量:
        </td>
        <td>
                              <label for="value_703_0"><input type="radio" name="value[703]" id="value_703_0" value="1" checked="true">显示</label>
                    <label for="value_703_1"><input type="radio" name="value[703]" id="value_703_1" value="0">不显示</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    是否显示库存:
        </td>
        <td>
                              <label for="value_704_0"><input type="radio" name="value[704]" id="value_704_0" value="1" checked="true">显示</label>
                    <label for="value_704_1"><input type="radio" name="value[704]" id="value_704_1" value="0">不显示</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    是否显示上架时间:
        </td>
        <td>
                              <label for="value_705_0"><input type="radio" name="value[705]" id="value_705_0" value="1" checked="true">显示</label>
                    <label for="value_705_1"><input type="radio" name="value[705]" id="value_705_1" value="0">不显示</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    商品属性显示样式:
        </td>
        <td>
                              <label for="value_706_0"><input type="radio" name="value[706]" id="value_706_0" value="1" checked="true">单选按钮</label>
                    <label for="value_706_1"><input type="radio" name="value[706]" id="value_706_1" value="0">下拉列表</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    是否显示市场价格:
        </td>
        <td>
                              <label for="value_707_0"><input type="radio" name="value[707]" id="value_707_0" value="1" checked="true">显示</label>
                    <label for="value_707_1"><input type="radio" name="value[707]" id="value_707_1" value="0">不显示</label>
          
                            </td>
      </tr>
          </tbody></table>
        <table width="90%" id="sms-table" style="display:none">
                  <tbody><tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticesms_shop_mobile&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    商家的手机号码:
        </td>
        <td>
                    <input name="value[801]" type="text" value="" size="40">

                              <br>
          <span class="notice-span" style="display:block" id="noticesms_shop_mobile">请先注册手机短信服务再填写手机号码</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    客户下订单时是否给商家发短信:
        </td>
        <td>
                              <label for="value_802_0"><input type="radio" name="value[802]" id="value_802_0" value="1">发短信</label>
                    <label for="value_802_1"><input type="radio" name="value[802]" id="value_802_1" value="0" checked="true">不发短信</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    客户付款时是否给商家发短信:
        </td>
        <td>
                              <label for="value_803_0"><input type="radio" name="value[803]" id="value_803_0" value="1">发短信</label>
                    <label for="value_803_1"><input type="radio" name="value[803]" id="value_803_1" value="0" checked="true">不发短信</label>
          
                            </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    商家发货时是否给客户发短信:
        </td>
        <td>
                              <label for="value_804_0"><input type="radio" name="value[804]" id="value_804_0" value="1">发短信</label>
                    <label for="value_804_1"><input type="radio" name="value[804]" id="value_804_1" value="0" checked="true">不发短信</label>
          
                            </td>
      </tr>
          </tbody></table>
        <table width="90%" id="wap-table" style="display:none">
                  <tbody><tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticewap_config&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    是否使用WAP功能:
        </td>
        <td>
                              <label for="value_901_0"><input type="radio" name="value[901]" id="value_901_0" value="1">开启</label>
                    <label for="value_901_1"><input type="radio" name="value[901]" id="value_901_1" value="0" checked="true">关闭</label>
          
                              <br>
          <span class="notice-span" style="display:block" id="noticewap_config">此功能只支持简体中文且只在中国大陆区有效</span>
                  </td>
      </tr>
                  <tr>
        <td class="label" valign="top">
                    <a href="javascript:showNotice(&#39;noticewap_logo&#39;);" title="点击此处查看提示信息"><img src="./shangdian-shezhi_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
                    WAP LOGO上传:
        </td>
        <td>
                    <input name="wap_logo" type="file" size="40">
                                  <img src="./shangdian-shezhi_files/no.gif" alt="no">
                                                    <br>
          <span class="notice-span" style="display:block" id="noticewap_logo">为了更好地兼容各种手机类型，LOGO 最好为png图片</span>
                  </td>
      </tr>
          </tbody></table>
    
    <div class="button-div">
      <input name="submit" type="submit" value=" 确定 " class="button">
      <input name="reset" type="reset" value=" 重置 " class="button">
    </div>
    </form>
  </div>
</div>
<script type="text/javascript" src="./shangdian-shezhi_files/tab.js"></script><script type="text/javascript" src="./shangdian-shezhi_files/validator.js"></script>
<script language="JavaScript">
region.isAdmin = true;
onload = function()
{
    // 开始检查订单
    startCheckOrder();
}
var ReWriteSelected = null;
var ReWriteRadiobox = document.getElementsByName("value[209]");

for (var i=0; i<ReWriteRadiobox.length; i++)
{
  if (ReWriteRadiobox[i].checked)
  {
    ReWriteSelected = ReWriteRadiobox[i];
  }
}

function ReWriterConfirm(sender)
{
  if (sender == ReWriteSelected) return true;
  var res = true;
  if (sender != ReWriteRadiobox[0]) {
    var res = confirm('URL Rewrite 功能要求您的 Web Server 必须是 Apache，\n并且起用了 rewrite 模块。\n同时请您确认是否已经将htaccess.txt文件重命名为.htaccess。\n如果服务器上还有其他的重写规则请去掉注释,请将RewriteBase行的注释去掉,并将路径设置为服务器请求的绝对路径');
  }

  if (res==false)
  {
      ReWriteSelected.checked = true;
  }
  else
  {
    ReWriteSelected = sender;
  }
  return res;
}
</script>

<div id="footer">
共执行 5 个查询，用时 0.015000 秒，Gzip 已禁用，内存占用 1.329 MB<br>
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