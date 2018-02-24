<?php
$url=Yii::getAlias('all');
?>

<div class="block clearfix">
  
  <div class="AreaL">
    
<div class="cart" id="ECS_CARTINFO">
 <a href="http://ec.com/flow.php" title="查看购物车">您的购物车中有 1 件商品，总计金额 ￥399.00元。</a></div>
<div class="blank5"></div>
<div class="box">
 <div class="box_1">
  <div id="category_tree">
         <dl>
     <dt><a href="http://ec.com/category.php?id=1">手机类型</a></dt>
          <dd><a href="http://ec.com/category.php?id=2">CDMA手机</a></dd>
                 <dd><a href="http://ec.com/category.php?id=3">GSM手机</a></dd>
                 <dd><a href="http://ec.com/category.php?id=4">3G手机</a></dd>
                 <dd><a href="http://ec.com/category.php?id=5">双模手机</a></dd>
                   
       </dl>
         <dl>
     <dt><a href="http://ec.com/category.php?id=6">手机配件</a></dt>
          <dd><a href="http://ec.com/category.php?id=7">充电器</a></dd>
                 <dd><a href="http://ec.com/category.php?id=8">耳机</a></dd>
                 <dd><a href="http://ec.com/category.php?id=9">电池</a></dd>
                 <dd><a href="http://ec.com/category.php?id=11">读卡器和内存卡</a></dd>
                   
       </dl>
         <dl>
     <dt><a href="http://ec.com/category.php?id=12">充值卡</a></dt>
          <dd><a href="http://ec.com/category.php?id=13">小灵通/固话充值卡</a></dd>
                 <dd><a href="http://ec.com/category.php?id=14">移动手机充值卡</a></dd>
                 <dd><a href="http://ec.com/category.php?id=15">联通手机充值卡</a></dd>
                   
       </dl>
     
  </div>
 </div>
</div>
<div class="blank5"></div>
  
    
    <div class="box" id="history_div" style="display: block;">
 <div class="box_1">
  <h3><span>浏览历史</span></h3>
  <div class="boxCenterList clearfix" id="history_list">
    <ul class="clearfix"><li class="goodsimg"><a href="http://ec.com/goods.php?id=1" target="_blank"><img src="<?=$url?>/images/home/1_thumb_G_1240902890710.jpg" alt="KD876" class="B_blue"></a></li><li><a href="http://ec.com/goods.php?id=1" target="_blank" title="KD876">KD876</a><br>本店售价：<font class="f1">￥1388元</font><br></li></ul><ul class="clearfix"><li class="goodsimg"><a href="http://ec.com/goods.php?id=8" target="_blank"><img src="<?=$url?>/images/home/8_thumb_G_1241425513488.jpg" alt="飞利浦9@9v" class="B_blue"></a></li><li><a href="http://ec.com/goods.php?id=8" target="_blank" title="飞利浦9@9v">飞利浦9@9v</a><br>本店售价：<font class="f1">￥399元</font><br></li></ul><ul class="clearfix"><li class="goodsimg"><a href="http://ec.com/goods.php?id=10" target="_blank"><img src="<?=$url?>/images/home/10_thumb_G_1242973436403.jpg" alt="索爱C702c" class="B_blue"></a></li><li><a href="http://ec.com/goods.php?id=10" target="_blank" title="索爱C702c">索爱C702c</a><br>本店售价：<font class="f1">￥1328元</font><br></li></ul><ul class="clearfix"><li class="goodsimg"><a href="http://ec.com/goods.php?id=13" target="_blank"><img src="<?=$url?>/images/home/13_thumb_G_1241968002527.jpg" alt="诺基亚5320 XpressMusic" class="B_blue"></a></li><li><a href="http://ec.com/goods.php?id=13" target="_blank" title="诺基亚5320 XpressMusic">诺基亚5320...</a><br>本店售价：<font class="f1">￥1311元</font><br></li></ul><ul class="clearfix"><li class="goodsimg"><a href="http://ec.com/goods.php?id=17" target="_blank"><img src="<?=$url?>/images/home/17_thumb_G_1241969394587.jpg" alt="夏新N7" class="B_blue"></a></li><li><a href="http://ec.com/goods.php?id=17" target="_blank" title="夏新N7">夏新N7</a><br>本店售价：<font class="f1">￥2300元</font><br></li></ul><ul id="clear_history"><a onclick="clear_history()">[清空]</a></ul>  </div>
 </div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
}
</script>  </div>
  
  
  <div class="AreaR">
   <div class="box">
   <div class="box_1">
    <h3><span>文章列表</span></h3>
    <div class="boxCenterList">
          <form action="" name="search_form" method="post" class="article_search">
        <input name="keywords" type="text" id="requirement" value="" class="inputBg">
        <input name="id" type="hidden" value="7">
        <input name="cur_url" id="cur_url" type="hidden" value="http://ec.com/article_cat.php?id=7">
        <input type="submit" value="立即搜索" class="bnt_blue_1">
      </form>
      <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
      <tbody><tr>
        <th bgcolor="#ffffff">文章标题</th>
          <th bgcolor="#ffffff">作者</th>
          <th bgcolor="#ffffff">添加日期</th>
        </tr>
            <tr>
        <td bgcolor="#ffffff"><a href="http://ec.com/article.php?id=17" title="支付方式说明" class="f6">支付方式说明</a></td>
          <td bgcolor="#ffffff">ECSHOP</td>
          <td bgcolor="#ffffff" align="center">2009-05-18</td>
        </tr>
            <tr>
        <td bgcolor="#ffffff"><a href="http://ec.com/article.php?id=16" title="配送支付智能查询 " class="f6">配送支付智能查询</a></td>
          <td bgcolor="#ffffff">ECSHOP</td>
          <td bgcolor="#ffffff" align="center">2009-05-18</td>
        </tr>
            <tr>
        <td bgcolor="#ffffff"><a href="http://ec.com/article.php?id=15" title="货到付款区域" class="f6">货到付款区域</a></td>
          <td bgcolor="#ffffff">ECSHOP</td>
          <td bgcolor="#ffffff" align="center">2009-05-18</td>
        </tr>
          </tbody></table>
    </div>
   </div>
  </div>
  <div class="blank5"></div>
  
<form name="selectPageForm" action="http://ec.com/article_cat.php" method="get">
 <div id="pager" class="pagebar">
  <span class="f_l f6" style="margin-right:10px;">总计 <b>3</b>  个记录</span>
      
      </div>
</form>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>
  </div>  
  
</div>
