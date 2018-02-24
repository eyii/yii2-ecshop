<?php
$url=Yii::getAlias('all');
?>
<div class="main-div">
<form action="http://ec.com/admin/goods_batch.php?act=upload" method="post" enctype="multipart/form-data" name="theForm" onsubmit="return formValidate()">
<table cellspacing="1" cellpadding="3" width="100%">
<tbody><tr>
    <td class="label">数据格式</td>
    <td><select name="data_cat" id="data_cat">
      <option value="0">请选择...</option>
      <option value="ecshop">ecshop支持数据格式</option><option value="taobao">淘宝助理支持数据格式</option><option value="paipai">拍拍助理支持数据格式</option><option value="paipai3">拍拍助理3.0支持数据格式</option><option value="taobao46">淘宝助理4.6支持数据格式</option>    </select></td>
  </tr>
  <tr>
    <td class="label">所属分类：</td>
    <td><select name="cat" id="cat">
      <option value="0">请选择...</option>
      <option value="6">手机配件</option><option value="9">&nbsp;&nbsp;&nbsp;&nbsp;电池</option><option value="11">&nbsp;&nbsp;&nbsp;&nbsp;读卡器和内存卡</option><option value="7">&nbsp;&nbsp;&nbsp;&nbsp;充电器</option><option value="8">&nbsp;&nbsp;&nbsp;&nbsp;耳机</option><option value="1">手机类型</option><option value="3">&nbsp;&nbsp;&nbsp;&nbsp;GSM手机</option><option value="4">&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option><option value="5">&nbsp;&nbsp;&nbsp;&nbsp;双模手机</option><option value="2">&nbsp;&nbsp;&nbsp;&nbsp;CDMA手机</option><option value="12">充值卡</option><option value="14">&nbsp;&nbsp;&nbsp;&nbsp;移动手机充值卡</option><option value="15">&nbsp;&nbsp;&nbsp;&nbsp;联通手机充值卡</option><option value="13">&nbsp;&nbsp;&nbsp;&nbsp;小灵通/固话充值卡</option>    </select></td>
  </tr>
  <tr>
    <td class="label">文件编码：</td>
    <td><select name="charset" id="charset">
      <option value="UTF8">国际化编码（utf8）</option><option value="GB2312">简体中文</option><option value="BIG5">繁体中文</option>    </select></td>
  </tr>
  <tr>
    <td class="label">
      <a href="javascript:showNotice(&#39;noticeFile&#39;);" title="点击此处查看提示信息"><img src="<?=$url?>/images/ec/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
      上传批量csv文件：</td>
    <td><input name="file" type="file" size="40">
    <br>
      <span class="notice-span" style="display:block" id="noticeFile">（CSV文件中一次上传商品数量最好不要超过1000，CSV文件大小最好不要超过500K.）</span></td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td><a href="http://ec.com/admin/goods_batch.php?act=download&amp;charset=en_us">下载批量CSV文件（美国英语）</a></td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td><a href="http://ec.com/admin/goods_batch.php?act=download&amp;charset=zh_cn">下载批量CSV文件（简体中文）</a></td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td><a href="http://ec.com/admin/goods_batch.php?act=download&amp;charset=zh_tw">下载批量CSV文件（繁体中文）</a></td>
  </tr>
    <tr align="center">
    <td colspan="2"><input name="submit" type="submit" id="submit" value=" 确定 " class="button"></td>
  </tr>
</tbody></table>
</form>
<table width="100%">
  <tbody><tr>
    <td>&nbsp;</td>
    <td width="80%">使用说明：<ol><li>根据使用习惯，下载相应语言的csv文件，例如中国内地用户下载简体中文语言的文件，港台用户下载繁体语言的文件；</li><li>填写csv文件，可以使用excel或文本编辑器打开csv文件；<br>碰到“是否精品”之类，填写数字0或者1，0代表“否”，1代表“是”；<br>商品图片和商品缩略图请填写带路径的图片文件名，其中路径是相对于 [根目录]/images/ 的路径，例如图片路径为[根目录]/images/200610/abc.jpg，只要填写 200610/abc.jpg 即可；<br><font style="color:#FE596A;">如果是淘宝助理格式请确保cvs编码为在网站的编码，如编码不正确，可以用编辑软件转换编码。</font></li><li>将填写的商品图片和商品缩略图上传到相应目录，例如：[根目录]/images/200610/；<br><font style="color:#FE596A;">请首先上传商品图片和商品缩略图再上传csv文件，否则图片无法处理。</font></li><li>选择所上传商品的分类以及文件编码，上传csv文件</li></ol></td>
    <td>&nbsp;</td>
  </tr>
</tbody></table>
</div>
