<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0053)http://ec.com/admin/goods_export.php?act=goods_export -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ECSHOP 管理中心 - 商品批量导出 </title>
<meta name="robots" content="noindex, nofollow">

<link href="./shangpin-piliang-daochu_files/general.css" rel="stylesheet" type="text/css">
<link href="./shangpin-piliang-daochu_files/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./shangpin-piliang-daochu_files/transport.js"></script><script type="text/javascript" src="./shangpin-piliang-daochu_files/common.js"></script><script language="JavaScript">
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
<script type="text/javascript" src="./shangpin-piliang-daochu_files/global.js"></script><script type="text/javascript" src="./shangpin-piliang-daochu_files/selectbox.js"></script></head>
<body>

<h1>
<span class="action-span1"><a href="http://ec.com/admin/index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品批量导出 </span>
<div style="clear:both"></div>
</h1>
<table width="100%">
<tbody><tr>
  <td>
  <div class="main-div" style="background-color: white;">
  <br>使用说明：<ol><li>使用搜索条件每次只允许搜索符合条件的50个商品。</li><li>如果用户需要导出某分类下的所有的商品，在条件中选择分类后，不需点击搜索，直接选择数据格式和编码导出即可。</li></ol>  <h3><center>商品数据批量导出</center></h3>
  <div>
    <form action="http://ec.com/admin/goods_export.php" method="post" name="searchForm" onsubmit="return queryGoods(this)">
      <strong>导出条件</strong>
      <!-- 分类 -->
      <select name="cat_id"><option value="0">所有分类</option><option value="6">手机配件</option><option value="9">&nbsp;&nbsp;&nbsp;&nbsp;电池</option><option value="11">&nbsp;&nbsp;&nbsp;&nbsp;读卡器和内存卡</option><option value="7">&nbsp;&nbsp;&nbsp;&nbsp;充电器</option><option value="8">&nbsp;&nbsp;&nbsp;&nbsp;耳机</option><option value="1">手机类型</option><option value="3">&nbsp;&nbsp;&nbsp;&nbsp;GSM手机</option><option value="4">&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option><option value="5">&nbsp;&nbsp;&nbsp;&nbsp;双模手机</option><option value="2">&nbsp;&nbsp;&nbsp;&nbsp;CDMA手机</option><option value="12">充值卡</option><option value="14">&nbsp;&nbsp;&nbsp;&nbsp;移动手机充值卡</option><option value="15">&nbsp;&nbsp;&nbsp;&nbsp;联通手机充值卡</option><option value="13">&nbsp;&nbsp;&nbsp;&nbsp;小灵通/固话充值卡</option></select>
      <!-- 品牌 -->
      <select name="brand_id"><option value="0">所有品牌</option><option value="1">诺基亚</option><option value="10">金立</option><option value="9">联想</option><option value="8">LG</option><option value="7">索爱</option><option value="6">三星</option><option value="5">夏新</option><option value="4">飞利浦</option><option value="3">多普达</option><option value="2">摩托罗拉</option><option value="11">  恒基伟业</option></select>
      <!-- 关键字 -->
      关键字<input type="text" name="keyword">
      <!-- 搜索 -->
      <input type="submit" name="search_submit" id="search_submit" value="搜 索" class="button">
    </form>
  </div>
  <table>
  <tbody><tr>
    <td width="46%"><select name="src_goods_lists" id="src_goods_lists" size="14" style="width:100%" multiple="true">
              </select></td>
    <td rowspan="2" width="8%" style="text-align:center;">
      <p><input type="button" value="&gt;&gt;" id="addAllGoods" class="button"></p>
      <p><input type="button" value="&gt;" id="addGoods" class="button"></p>
      <p><input type="button" value="&lt;" id="delGoods" class="button"></p>
      <p><input type="button" value="&lt;&lt;" id="delAllGoods" class="button"></p>
    </td>
    <td width="46%"><select name="dst_goods_lists" id="dst_goods_lists" size="14" style="width:100%" multiple="true">
              </select></td>
  </tr>
  </tbody></table>
  <div>
      <strong>数据格式</strong>
      <!-- 导出的数据格式 -->
      <select name="data_format" id="data_format"><option value="ecshop">导出到ECShop数据格式</option><option value="taobao V4.3">导出淘宝助理V4.3支持数据格式</option><option value="taobao V4.6">导出淘宝助理V4.6支持数据格式</option><option value="taobao">导出淘宝助理支持数据格式</option><option value="paipai">导出到拍拍助理支持数据格式</option><option value="paipai4">导出到拍拍助理3.0支持数据格式</option><option value="custom">导出到自定义数据格式</option></select>
      <div id="export_format">
      <div id="ecshop_form">
    <form action="http://ec.com/admin/goods_export.php" method="post" name="theForm" onsubmit="return formValidate0()">
    <table width="100%">
      <tbody><tr>
        <td class="label">请选择要导出的编码</td>
        <td>
            <select name="charset">
              <option value="UTF8">UTF8</option>
              <option value="GB2312">GB2312</option>
              <option value="GBK">GBK</option>
            </select>
        </td>
      </tr>
      <tr>
        <td>
            <input name="cat_id" type="hidden" value="">
            <input name="brand_id" type="hidden" value="">
            <input name="keyword" type="hidden" value="">
            <input name="goods_ids" type="hidden" value="">
            <input type="hidden" name="act" value="act_export_ecshop">
        </td>
        <td>
        <input name="submit" type="submit" id="submit" value=" 确定 " class="button">
        </td>
      </tr>
    </tbody></table>
    </form>
</div></div>
  </div>
  </div>
  </td>
</tr>
</tbody></table>

<div id="taobao_form" style="display:none">
<form action="http://ec.com/admin/goods_export.php" method="post" name="theForm1" onsubmit="return formValidate1()">
    <table width="100%">
      <tbody><tr>
        <td class="label"><a href="javascript:showNotice(&#39;noticeGoodsClass&#39;);" title="点击此处查看提示信息"><img src="./shangpin-piliang-daochu_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>宝贝栏目ID</td>
        <td><input type="text" name="goods_class" value="0"><br>
          <span class="notice-span" style="display:block" id="noticeGoodsClass">宝贝栏目ID为淘宝分类的ID，如若不确定，请填写0</span></td></tr>
      <tr>
      </tr><tr>
        <td></td></tr>
      <tr>
      </tr><tr>
        <td class="label">平邮价格</td>
        <td><input type="text" name="post_express" value="0"></td></tr>
      <tr>
      </tr><tr>
        <td class="label">快递价格</td>
        <td><input type="text" name="express" value="0"></td></tr>
      <tr>
      </tr><tr>
        <td class="label">EMS价格</td>
        <td><input type="text" name="ems" value="0"></td></tr>
      <tr>
      </tr><tr>
        <td>&nbsp;    <input name="cat_id" type="hidden" value="">
    <input name="brand_id" type="hidden" value="">
    <input name="keyword" type="hidden" value="">
    <input name="goods_ids" type="hidden" value=""><input type="hidden" name="act" value="act_export_taobao"></td>
        <td><input name="submit" type="submit" id="submit" value=" 确定 " class="button"></td>
      </tr>
    </tbody></table>
    </form>
</div>
<div id="taobao V4.3_form" style="display:none">
<form action="http://ec.com/admin/goods_export.php" method="post" name="theForm3" onsubmit="return formValidate3()">
    <table width="100%">
      <tbody><tr>
        <td class="label"><a href="javascript:showNotice(&#39;noticeGoodsClass&#39;);" title="点击此处查看提示信息"><img src="./shangpin-piliang-daochu_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>宝贝栏目ID</td>
        <td><input type="text" name="goods_class" value="0"><br>
          <span class="notice-span" style="display:block" id="noticeGoodsClass">宝贝栏目ID为淘宝分类的ID，如若不确定，请填写0</span></td></tr>
      <tr>
      </tr><tr>
        <td></td></tr>
      <tr>
      </tr><tr>
        <td class="label">平邮价格</td>
        <td><input type="text" name="post_express" value="0"></td></tr>
      <tr>
      </tr><tr>
        <td class="label">快递价格</td>
        <td><input type="text" name="express" value="0"></td></tr>
      <tr>
      </tr><tr>
        <td class="label">EMS价格</td>
        <td><input type="text" name="ems" value="0"></td></tr>
      <tr>
      </tr><tr>
        <td>&nbsp;    <input name="cat_id" type="hidden" value="">
    <input name="brand_id" type="hidden" value="">
    <input name="keyword" type="hidden" value="">
    <input name="goods_ids" type="hidden" value=""><input type="hidden" name="act" value="act_export_taobao V4.3"></td>
        <td><input name="submit" type="submit" id="submit" value=" 确定 " class="button"></td>
      </tr>
    </tbody></table>
    </form>
</div>
<div id="taobao V4.6_form" style="display:none">
<form action="http://ec.com/admin/goods_export.php" method="post" name="theForm6" onsubmit="return formValidate6()">
    <table width="100%">
      <tbody><tr>
        <td class="label"><a href="javascript:showNotice(&#39;noticeGoodsClass&#39;);" title="点击此处查看提示信息"><img src="./shangpin-piliang-daochu_files/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>宝贝栏目ID</td>
        <td><input type="text" name="goods_class" value="0"><br>
          <span class="notice-span" style="display:block" id="noticeGoodsClass">宝贝栏目ID为淘宝分类的ID，如若不确定，请填写0</span></td></tr>
      <tr>
      </tr><tr>
        <td></td></tr>
      <tr>
      </tr><tr>
        <td class="label">平邮价格</td>
        <td><input type="text" name="post_express" value="0"></td></tr>
      <tr>
      </tr><tr>
        <td class="label">快递价格</td>
        <td><input type="text" name="express" value="0"></td></tr>
      <tr>
      </tr><tr>
        <td class="label">EMS价格</td>
        <td><input type="text" name="ems" value="0"></td></tr>
      <tr>
      </tr><tr>
        <td>&nbsp;    <input name="cat_id" type="hidden" value="">
    <input name="brand_id" type="hidden" value="">
    <input name="keyword" type="hidden" value="">
    <input name="goods_ids" type="hidden" value=""><input type="hidden" name="act" value="act_export_taobao V4.6"></td>
        <td><input name="submit" type="submit" id="submit" value=" 确定 " class="button"></td>
      </tr>
    </tbody></table>
    </form>
</div>
<div id="paipai_form" style="display:none">
    <form action="http://ec.com/admin/goods_export.php" method="post" name="theForm2" onsubmit="return formValidate2()">
    <table width="100%">
      <tbody><tr>
        <td></td></tr>
      <tr>
      </tr><tr>
        <td class="label">平邮价格</td>
        <td><input type="text" name="post_express" value="0"></td></tr>
      <tr>
      </tr><tr>
        <td class="label">快递价格</td>
        <td><input type="text" name="express" value="0"></td></tr>
      <tr>
      </tr><tr>
        <td>&nbsp;    <input name="cat_id" type="hidden" value="">
    <input name="brand_id" type="hidden" value="">
    <input name="keyword" type="hidden" value="">
    <input name="goods_ids" type="hidden" value=""><input type="hidden" name="act" value="act_export_paipai"></td>
        <td><input name="submit" type="submit" id="submit" value=" 确定 " class="button"></td>
      </tr>
    </tbody></table>
    </form>
</div>
<div id="paipai4_form" style="display:none">
    <form action="http://ec.com/admin/goods_export.php" method="post" name="theForm5" onsubmit="return formValidate5()">
    <table width="100%">
      <tbody><tr>
        <td></td></tr>
      <tr>
      </tr><tr>
        <td class="label">平邮价格</td>
        <td><input type="text" name="post_express" value="0"></td></tr>
      <tr>
      </tr><tr>
        <td class="label">快递价格</td>
        <td><input type="text" name="express" value="0"></td></tr>
      <tr>
      </tr><tr>
        <td>&nbsp;    <input name="cat_id" type="hidden" value="">
    <input name="brand_id" type="hidden" value="">
    <input name="keyword" type="hidden" value="">
    <input name="goods_ids" type="hidden" value=""><input type="hidden" name="act" value="act_export_paipai4"></td>
        <td><input name="submit" type="submit" id="submit" value=" 确定 " class="button"></td>
      </tr>
    </tbody></table>
    </form>
</div>
<div id="custom_form" style="display:none">
<form action="http://ec.com/admin/goods_export.php" method="post" name="theForm4" onsubmit="return formValidate4()">
<table width="100%">
<tbody><tr>
  <td>
  <div class="main-div" style="background-color: white;">
  <table>
  <tbody><tr>
    <td width="45%"><strong>选择商品数据列</strong><span style="margin-left:20px;"><select name="goods_type" id="goods_type"><option value="0">所有商品类型</option><option value="1">书</option><option value="2">音乐</option><option value="3">电影</option><option value="4">手机</option><option value="5">笔记本电脑</option><option value="6">数码相机</option><option value="7">数码摄像机</option><option value="8">化妆品</option><option value="9">精品手机</option></select></span></td>
    <td rowspan="2" width="5%" style="text-align:center;"><p><input type="button" value="&gt;&gt;" id="addAllItem" class="button"></p>
              <p><input type="button" value="&gt;" id="addItem" class="button"></p>
              <p><input type="button" value="&lt;" id="delItem" class="button"></p>
              <p><input type="button" value="&lt;&lt;" id="delAllItem" class="button"></p></td>
    <td width="45%"><strong>输出商品数据列</strong></td>
    <td rowspan="2" width="5%" style="text-align:center;"><p><input type="button" value="上" id="mvUp" class="button"></p><p><input type="button" value="下" id="mvDown" class="button"></p></td>
  </tr>
  <tr>
    <td><select name="src_goods_fields" id="src_goods_fields" size="14" style="width:100%" multiple="true"><option value="goods_name">商品名称</option><option value="goods_sn">商品货号</option><option value="brand_name">商品品牌</option><option value="market_price">市场售价</option><option value="shop_price">本店售价</option><option value="integral">积分购买额度</option><option value="original_img">商品原始图</option><option value="goods_img">商品图片</option><option value="goods_thumb">商品缩略图</option><option value="keywords">商品关键词</option><option value="goods_brief">简单描述</option><option value="goods_desc">详细描述</option><option value="goods_weight">商品重量（kg）</option><option value="goods_number">库存数量</option><option value="warn_number">库存警告数量</option><option value="is_best">是否精品</option><option value="is_new">是否新品</option><option value="is_hot">是否热销</option><option value="is_on_sale">是否上架</option><option value="is_alone_sale">能否作为普通商品销售</option><option value="is_real">是否实体商品</option><option value="1">作者</option><option value="2">出版社</option><option value="3">图书书号/ISBN</option><option value="4">出版日期</option><option value="5">开本</option><option value="6">图书页数</option><option value="7">图书装订</option><option value="8">图书规格</option><option value="9">版次</option><option value="10">印张</option><option value="11">字数</option><option value="12">所属分类</option><option value="13">中文片名</option><option value="14">英文片名</option><option value="15">商品别名</option><option value="16">介质/格式</option><option value="17">片装数</option><option value="18">国家地区</option><option value="19">语种</option><option value="20">导演/指挥</option><option value="21">主唱</option><option value="22">所属类别</option><option value="23">长度</option><option value="24">歌词</option><option value="25">碟片代码</option><option value="26">ISRC码</option><option value="27">发行公司</option><option value="28">出版</option><option value="29">出版号</option><option value="30">引进号</option><option value="31">版权号</option><option value="32">中文片名</option><option value="33">英文片名</option><option value="34">商品别名</option><option value="35">介质/格式</option><option value="36">碟片类型</option><option value="37">片装数</option><option value="38">国家地区</option><option value="39">语种/配音</option><option value="40">字幕</option><option value="41">色彩</option><option value="42">中文字幕</option><option value="43">导演</option><option value="44">表演者</option><option value="45">所属类别</option><option value="46">年份</option><option value="47">音频格式</option><option value="48">区码</option><option value="49">碟片代码</option><option value="50">ISRC码</option><option value="51">发行公司</option><option value="52">出版 </option><option value="53">出版号</option><option value="54">引进号</option><option value="55">版权号</option><option value="56">网络制式</option><option value="57">支持频率/网络频率</option><option value="58">尺寸体积</option><option value="59">外观样式/手机类型</option><option value="60">主屏参数/内屏参数</option><option value="61">副屏参数/外屏参数</option><option value="62">清晰度</option><option value="63">色数/灰度</option><option value="64">长度</option><option value="65">宽度</option><option value="66">厚度</option><option value="67">屏幕材质</option><option value="68">内存容量</option><option value="69">操作系统</option><option value="70">通话时间</option><option value="71">待机时间</option><option value="72">标准配置</option><option value="73">WAP上网</option><option value="74">数据业务</option><option value="75">天线位置</option><option value="76">随机配件</option><option value="77">铃声</option><option value="78">摄像头</option><option value="79">彩信/彩e</option><option value="80">红外/蓝牙</option><option value="81">价格等级</option><option value="82">型号</option><option value="83">详细规格</option><option value="84">笔记本尺寸</option><option value="85">处理器类型</option><option value="86">处理器最高主频</option><option value="87">二级缓存</option><option value="88">系统总线</option><option value="89">主板芯片组</option><option value="90">内存容量</option><option value="91">内存类型</option><option value="92">硬盘</option><option value="93">屏幕尺寸</option><option value="94">显示芯片</option><option value="95">标称频率</option><option value="96">显卡显存</option><option value="97">显卡类型</option><option value="98">光驱类型</option><option value="99">电池容量</option><option value="100">其他配置</option><option value="101">类型</option><option value="102">最大像素/总像素  </option><option value="103">有效像素</option><option value="104">光学变焦倍数</option><option value="105">数字变焦倍数</option><option value="106">操作模式</option><option value="107">显示屏类型</option><option value="108">显示屏尺寸</option><option value="109">感光器件</option><option value="110">感光器件尺寸</option><option value="111">最高分辨率</option><option value="112">图像分辨率</option><option value="113">传感器类型</option><option value="114">传感器尺寸</option><option value="115">镜头</option><option value="116">光圈</option><option value="117">焦距</option><option value="118">旋转液晶屏</option><option value="119">存储介质</option><option value="120">存储卡</option><option value="121">影像格式</option><option value="122">曝光控制</option><option value="123">曝光模式</option><option value="124">曝光补偿</option><option value="125">白平衡</option><option value="126">连拍</option><option value="127">快门速度</option><option value="128">闪光灯</option><option value="129">拍摄范围</option><option value="130">自拍定时器</option><option value="131">ISO感光度</option><option value="132">测光模式</option><option value="133">场景模式</option><option value="134">短片拍摄</option><option value="135">外接接口</option><option value="136">电源</option><option value="137">电池使用时间</option><option value="138">外形尺寸</option><option value="139">标配软件</option><option value="140">标准配件</option><option value="141">兼容操作系统</option><option value="142">编号</option><option value="143">类型</option><option value="144">外型尺寸</option><option value="145">最大像素数</option><option value="146">光学变焦倍数</option><option value="147">数字变焦倍数</option><option value="148">显示屏尺寸及类型</option><option value="149">感光器件</option><option value="150">感光器件尺寸</option><option value="151">感光器件数量</option><option value="152">像素范围</option><option value="153">传感器数量</option><option value="154">传感器尺寸</option><option value="155">水平清晰度</option><option value="156">取景器</option><option value="157">数码效果</option><option value="158">镜头性能</option><option value="159">对焦方式</option><option value="160">曝光控制</option><option value="161">其他接口</option><option value="162">随机存储</option><option value="163">电池类型</option><option value="164">电池供电时间</option><option value="165">产地</option><option value="166">产品规格/容量</option><option value="167">主要原料</option><option value="168">所属类别</option><option value="169">使用部位</option><option value="170">适合肤质</option><option value="171">适用人群</option><option value="172">上市日期</option><option value="173">手机制式</option><option value="174">理论通话时间</option><option value="175">理论待机时间</option><option value="176">铃声</option><option value="177">铃声格式</option><option value="178">外观样式</option><option value="179">中文短消息</option><option value="180">存储卡格式</option><option value="181">内存容量</option><option value="182">操作系统</option><option value="183">K-JAVA</option><option value="184">尺寸体积</option><option value="185">颜色</option><option value="186">屏幕颜色</option><option value="187">屏幕材质</option><option value="188">屏幕分辨率</option><option value="189">屏幕大小</option><option value="190">中文输入法</option><option value="191">情景模式</option><option value="192">网络链接</option><option value="193">蓝牙接口</option><option value="194">数据线接口</option><option value="195">电子邮件</option><option value="196">闹钟</option><option value="197">办公功能</option><option value="198">数码相机</option><option value="199">像素</option><option value="200">传感器</option><option value="201">变焦模式</option><option value="202">视频拍摄</option><option value="203">MP3播放器</option><option value="204">视频播放</option><option value="205">CPU频率</option><option value="206">收音机</option><option value="207">耳机接口</option><option value="208">闪光灯</option><option value="209">浏览器</option><option value="210">配件</option>              </select></td>
    <td><select name="dst_goods_fields" id="dst_goods_fields" size="14" style="width:100%" multiple="true">
              </select></td>
  </tr>
  <tr><td class="label">请选择要导出的编码</td>
        <td>
            <select name="charset_custom">
              <option value="UTF8">UTF8</option>
              <option value="GB2312">GB2312</option>
              <option value="GBK">GBK</option>
            </select>
        </td></tr>
  <tr>
    <td></td>
    <td></td>
    <td>
    <input name="cat_id" type="hidden" value="">
    <input name="brand_id" type="hidden" value="">
    <input name="keyword" type="hidden" value="">
    <input name="goods_ids" type="hidden" value="">
    <input type="hidden" name="act" value="act_export_custom">
    <input type="hidden" name="custom_goods_export" value="">
    <input name="submit" type="submit" id="submit" value=" 确定 " class="button">
    </td>
    <td></td>
  </tr>
  </tbody></table>
  </div>
  </td>
</tr>
</tbody></table>
</form>
</div>
<script type="text/javascript" src="./shangpin-piliang-daochu_files/utils.js"></script><script type="text/javascript" src="./shangpin-piliang-daochu_files/validator.js"></script><script language="JavaScript">
var post_express_not_null = "平邮价格必须大于0";
var express_not_null = "快递价格必须大于0";
var ems_not_null = "EMS价格必须大于0";
var custom_goods_field_not_null = "输出的商品数据列不能为空";



    var elements;
    onload = function()
    {
        // 开始检查订单
        startCheckOrder();
    }

    function formValidate0()
    {
        var src_obj = document.forms['searchForm'];
        var dst_obj = document.forms['theForm'];
        copy_search_result(src_obj, dst_obj);
        return true;
    }
    /**
     * 检查输入是否完整
     */
    function formValidate2()
    {
        var elements = document.forms['theForm2'].elements;
        var msg = '';

        if (parseFloat(elements['post_express'].value) <= 0)
        {
            msg += post_express_not_null + '\n';
        }
        if (parseFloat(elements['express'].value) <= 0)
        {
            msg += express_not_null + '\n';
        }
        if (msg.length > 0)
        {
            alert(msg);
            return false;
        }
        else
        {
            var src_obj = document.forms['searchForm'];
            var dst_obj = document.forms['theForm2'];
            copy_search_result(src_obj, dst_obj);
            return true;
        }
    }

    /**
     * 检查输入是否完整
     */
    function formValidate1()
    {
        var elements = document.forms['theForm1'].elements;
        var msg = '';

        if (parseFloat(elements['post_express'].value) <= 0)
        {
            msg += post_express_not_null + '\n';
        }
        if (parseFloat(elements['express'].value) <= 0)
        {
            msg += express_not_null + '\n';
        }
        if (parseFloat(elements['ems'].value) <= 0)
        {
            msg += ems_not_null + '\n';
        }
        if (msg.length > 0)
        {
            alert(msg);
            return false;
        }
        else
        {
            var src_obj = document.forms['searchForm'];
            var dst_obj = document.forms['theForm1'];
            copy_search_result(src_obj, dst_obj);
            return true;
        }
    }
    /**
     * 检查输入是否完整
     */
    function formValidate3()
    {
        var elements = document.forms['theForm3'].elements;
        var msg = '';

        if (parseFloat(elements['post_express'].value) <= 0)
        {
            msg += post_express_not_null + '\n';
        }
        if (parseFloat(elements['express'].value) <= 0)
        {
            msg += express_not_null + '\n';
        }
        if (parseFloat(elements['ems'].value) <= 0)
        {
            msg += ems_not_null + '\n';
        }
        if (msg.length > 0)
        {
            alert(msg);
            return false;
        }
        else
        {
            var src_obj = document.forms['searchForm'];
            var dst_obj = document.forms['theForm3'];
            copy_search_result(src_obj, dst_obj);
            return true;
        }
    }
   /**
     * 检查输入是否完整
     */
    function formValidate6()
    {
        var elements = document.forms['theForm6'].elements;
        var msg = '';

        if (parseFloat(elements['post_express'].value) <= 0)
        {
            msg += post_express_not_null + '\n';
        }
        if (parseFloat(elements['express'].value) <= 0)
        {
            msg += express_not_null + '\n';
        }
        if (parseFloat(elements['ems'].value) <= 0)
        {
            msg += ems_not_null + '\n';
        }
        if (msg.length > 0)
        {
            alert(msg);
            return false;
        }
        else
        {
            var src_obj = document.forms['searchForm'];
            var dst_obj = document.forms['theForm6'];
            copy_search_result(src_obj, dst_obj);
            return true;
        }
    }

    /* 检查输入是否完整 */
    function formValidate4 ()
    {
        var elements = document.forms['theForm4'].elements;
        var msg = '';
        if (elements['dst_goods_fields'].options.length <= 0)
        {
            msg += custom_goods_field_not_null + '\n';
        }
        if (msg.length > 0)
        {
            alert(msg);
            return false;
        }
        else
        {
            elements['custom_goods_export'].value = '';
            for (var i=0,l=elements['dst_goods_fields'].options.length; i<l; i++)
            {
                var separator = (i==0)?'':',';
                elements['custom_goods_export'].value += separator + elements['dst_goods_fields'].options[i].value;
            }
            var src_obj = document.forms['searchForm'];
            var dst_obj = document.forms['theForm4'];
            copy_search_result(src_obj, dst_obj);
            return true;
        }
    }

    /**
     * 检查输入是否完整
     */
    function formValidate5()
    {
        var elements = document.forms['theForm5'].elements;
        var msg = '';

        if (parseFloat(elements['post_express'].value) <= 0)
        {
            msg += post_express_not_null + '\n';
        }
        if (parseFloat(elements['express'].value) <= 0)
        {
            msg += express_not_null + '\n';
        }
        if (msg.length > 0)
        {
            alert(msg);
            return false;
        }
        else
        {
            var src_obj = document.forms['searchForm'];
            var dst_obj = document.forms['theForm5'];
            copy_search_result(src_obj, dst_obj);
            return true;
        }
    }

    function copy_search_result(src_obj, dst_obj)
    {
        dst_obj.cat_id.value = src_obj.cat_id.value;
        dst_obj.brand_id.value = src_obj.brand_id.value;
        dst_obj.keyword.value = src_obj.keyword.value;
        var goods_lists = Utils.$('dst_goods_lists');
        for (var i=0,l=goods_lists.options.length; i<l; i++)
        {
            var separator = (i==0)?'':',';
            dst_obj.goods_ids.value += separator + goods_lists.options[i].value;
        }
    }

    /**
     * 绑定商品类型控件事件
     */
    if(Utils.$('goods_type'))
    {
        Utils.$('goods_type').onchange = function ()
        {
            Ajax.call('goods_export.php?is_ajax=1&act=get_goods_fields&cat_id='+this.value, '' , goodsFieldsResponse , 'POST', 'JSON');
        }
    }

    function goodsFieldsResponse (result)
    {
        if (result.error > 0)
        {
            alert(result.message);
            return;
        }
        Utils.$('src_goods_fields').innerHTML = '';
        for (var key in result.content)
        {
            if (typeof (result.content[key]) == 'string')
            {
                var new_opt = document.createElement('OPTION');
                new_opt.value = key;
                new_opt.innerHTML = result.content[key];
                Utils.$('src_goods_fields').appendChild(new_opt);
            }
        }
    }
    /* 搜索商品列表 */
    function queryGoods(obj)
    {
        var filters = new Object;
        filters.cat_id = obj.cat_id.value;
        filters.brand_id = obj.brand_id.value;
        filters.keyword = obj.keyword.value;

        Ajax.call('goods_export.php?is_ajax=1&act=get_goods_list', filters, queryGoodsResponse , 'POST', 'JSON');
        return false;
    }

    function queryGoodsResponse (result)
    {
        if (result.error > 0)
        {
            alert(result.message);
            return;
        }
        Utils.$('src_goods_lists').innerHTML = '';
        for (var i=0,l=result.content.length;i<l;++i)
        {
            var new_opt = document.createElement('OPTION');
            new_opt.value = result.content[i].goods_id;
            new_opt.innerHTML = result.content[i].goods_name;
            Utils.$('src_goods_lists').appendChild(new_opt);
        }
    }

    /* 操作自定义导出商品的Select Box */
    var MySelectBox;
    var MySelectBox2;
    if (!MySelectBox)
    {
        var global = $import("../js/global.js","js");
        global.onload = global.onreadystatechange= function()
        {
            if(this.readyState && this.readyState=="loading")return;
            var selectbox = $import("js/selectbox.js","js");
            selectbox.onload = selectbox.onreadystatechange = function()
            {
                if(this.readyState && this.readyState=="loading")return;
                MySelectBox = new SelectBox('src_goods_fields', 'dst_goods_fields');
                MySelectBox2 = new SelectBox('src_goods_lists', 'dst_goods_lists', true);
            }
        }
    }
    if (Utils.$('addItem'))
    {
        Utils.$('addItem').onclick = function ()
        {
            MySelectBox.addItem();
        }
    }
    if (Utils.$('delItem'))
    {
        Utils.$('delItem').onclick = function ()
        {
            MySelectBox.delItem();
        }
    }
    if (Utils.$('addAllItem'))
    {
        Utils.$('addAllItem').onclick = function ()
        {
            MySelectBox.addItem(true);
        }
    }
    if (Utils.$('delAllItem'))
    {
        Utils.$('delAllItem').onclick = function ()
        {
            MySelectBox.delItem(true);
        }
    }
    if (Utils.$('src_goods_fields'))
    {
        Utils.$('src_goods_fields').ondblclick = function ()
        {
            MySelectBox.addItem();
        }
    }
    if (Utils.$('dst_goods_fields'))
    {
        Utils.$('dst_goods_fields').ondblclick = function ()
        {
            MySelectBox.delItem();
        }
    }
    if (Utils.$('mvUp'))
    {
        Utils.$('mvUp').onclick = function ()
        {
            MySelectBox.moveItem('up');
        }
    }
    if (Utils.$('mvDown'))
    {
        Utils.$('mvDown').onclick = function ()
        {
            MySelectBox.moveItem('down');
        }
    }

    if (Utils.$('addGoods'))
    {
        Utils.$('addGoods').onclick = function ()
        {
            MySelectBox2.addItem();
        }
    }
    if (Utils.$('delGoods'))
    {
        Utils.$('delGoods').onclick = function ()
        {
            MySelectBox2.delItem();
        }
    }
    if (Utils.$('addAllGoods'))
    {
        Utils.$('addAllGoods').onclick = function ()
        {
            MySelectBox2.addItem(true);
        }
    }
    if (Utils.$('delAllGoods'))
    {
        Utils.$('delAllGoods').onclick = function ()
        {
            MySelectBox2.delItem(true);
        }
    }
    if (Utils.$('src_goods_lists'))
    {
        Utils.$('src_goods_lists').ondblclick = function ()
        {
            MySelectBox2.addItem();
        }
    }
    if (Utils.$('dst_goods_lists'))
    {
        Utils.$('dst_goods_lists').ondblclick = function ()
        {
            MySelectBox2.delItem();
        }
    }

    /**
     * 上一次操作的对象
     */
    window.last_form = new Object;
    /**
     * 初始化导出格式
     */
    function init_data_format ()
    {
        var _format = Utils.$('data_format');
        show_data_format(_format.value);
        _format.onchange = function ()
        {
            show_data_format(this.value);
        }
    }

    /**
     * 显示要导出的格式页面
     *
     * @param page string 页面
     *
     * @return void
     */
    function show_data_format (page)
    {
        try
        {
            window.last_form.style.display = 'none';
        }
        catch (e)
        {
        }
        var _page = Utils.$(page+'_form');
        _page.style.display = '';
        Utils.$('export_format').appendChild(_page);
        window.last_form = _page;
    }

    if (Browser.isIE)
    {
        window.attachEvent("onload", init_data_format);
    }
    else
    {
        window.addEventListener("load", init_data_format, false);
    }
</script>

<div id="footer">
共执行 4 个查询，用时 0.033002 秒，Gzip 已禁用，内存占用 1.235 MB<br>
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