
<div class="main-div">
<form action="http://ec.com/admin/picture_batch.php" method="post" name="theForm" onsubmit="return start()">
  <table cellspacing="1" cellpadding="3" width="100%">
  <tbody><tr>
    <td>图片批量处理允许您重新生成商品的缩略图以及重新添加水印。<br>该处理过程可能会比较慢，请您耐心等候。</td>
  </tr>
  <tr>
    <td><select name="cat_id" onchange="goods_list(this);"><option value="0">所有分类</option><option value="6">手机配件</option><option value="9">&nbsp;&nbsp;&nbsp;&nbsp;电池</option><option value="11">&nbsp;&nbsp;&nbsp;&nbsp;读卡器和内存卡</option><option value="7">&nbsp;&nbsp;&nbsp;&nbsp;充电器</option><option value="8">&nbsp;&nbsp;&nbsp;&nbsp;耳机</option><option value="1">手机类型</option><option value="3">&nbsp;&nbsp;&nbsp;&nbsp;GSM手机</option><option value="4">&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option><option value="5">&nbsp;&nbsp;&nbsp;&nbsp;双模手机</option><option value="2">&nbsp;&nbsp;&nbsp;&nbsp;CDMA手机</option><option value="12">充值卡</option><option value="14">&nbsp;&nbsp;&nbsp;&nbsp;移动手机充值卡</option><option value="15">&nbsp;&nbsp;&nbsp;&nbsp;联通手机充值卡</option><option value="13">&nbsp;&nbsp;&nbsp;&nbsp;小灵通/固话充值卡</option></select>
          <select name="brand_id" onchange="goods_list(this);"><option value="0">所有品牌</option><option value="1">诺基亚</option><option value="10">金立</option><option value="9">联想</option><option value="8">LG</option><option value="7">索爱</option><option value="6">三星</option><option value="5">夏新</option><option value="4">飞利浦</option><option value="3">多普达</option><option value="2">摩托罗拉</option><option value="11">  恒基伟业</option></select>
          <span id="list"><select name="goods_id"><option value="0">所有商品</option></select></span>
          <input type="button" value=" + " onclick="add_search_goods();">
    </td>
  </tr>
   <tr>
    <td id="goods_list">

    </td>
  </tr>
  <tr>
    <td>
        <label for="do_icon"><input type="checkbox" name="do_icon" value="1" id="do_icon" checked="true">处理商品图片</label>
        <label for="do_album"><input type="checkbox" name="do_album" value="1" id="do_album" checked="true">处理商品相册</label>
    </td>
  </tr>
  <tr>
    <td><label for="process_thumb"><input type="checkbox" name="process_thumb" value="1" id="process_thumb" checked="true">重新生成缩略图</label></td>
  </tr>
  <tr>
    <td><label for="process_watermark"><input type="checkbox" name="process_watermark" value="1" id="process_watermark" checked="true">重新生成商品详情图</label></td>
  </tr>
  <tr>
    <td>
        <label for="yes_change"><input type="radio" name="change_link" value="1" id="yes_change">新生成图片使用新名称，并删除旧图片</label>
        <label for="no_change"><input type="radio" name="change_link" value="0" checked="true" id="no_change">新生成图片覆盖旧图片</label>
    </td>
  </tr>
  <tr>
    <td>
        <label for="silent"><input type="radio" name="silent" value="1" id="silent" checked="checked">出错时忽略错误,继续执行程序</label>
        <label for="no_silent"><input type="radio" name="silent" value="0" id="no_silent">出错时立即提示，并中止程序</label>
    </td>
  </tr>
  <tr>
    <td align="center">
      <input type="submit" class="button" value=" 确定 ">
    </td>
  </tr>
  </tbody></table>
</form>
</div>

<div class="list-div" id="listDiv">
  <table cellspacing="1" cellpadding="3" id="listTable">
    <tbody><tr>
      <th>页数</th>
      <th>总页数</th>
      <th>处理时间</th>
    </tr>
  </tbody></table>
</div>

<div style="display:none;border: 1px solid rgb(204, 0, 0);margin-top:10px; padding: 4px; background-color: rgb(255, 255, 206); color: rgb(206, 0, 0);" id="errorMsg"></div>
