<?php
$url=Yii::getAlias('all');
use \common\components\ec\frontend\EcZuoquWidget;
?>
<div class="blank"></div>
<div class="block clearfix">
<?=\common\components\ec\frontend\EcZuoquWidget::widget()?>



    <div class="AreaR">
        <div class="box">
            <div class="box_1">
                <h3><span>联想</span></h3>
                <div class="boxCenterList">
                    <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                        <tbody><tr>
                            <td bgcolor="#ffffff" width="200" align="center" valign="middle">
                                <div style="width:200px; overflow:hidden;">
                                    <img src="<?=$url?>/images/home/1240803578417877983.gif">
                                </div>
                            </td>
                            <td bgcolor="#ffffff">
                                官方咨询电话：4008188818<br>
                                售后网点：http://www.lenovomobile.com/service/kf-wanglou.asp<br>
                                官方网站： <a href="http://www.lenovomobile.com/" target="_blank" class="f6">http://www.lenovomobile.com/</a><br>
                                分类浏览：<br>
                                <div class="brandCategoryA">
                                    <a href="http://ec.com/brand.php?id=9" class="f6">所有分类 </a>
                                    <a href="http://ec.com/brand.php?id=9&amp;cat=3" class="f6">GSM手机 (1)</a>
                                </div>
                            </td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
        </div>
        <div class="blank5"></div>


        <div class="box">
            <div class="box_2 centerPadd">
                <div class="itemTit" id="itemBest">
                </div>
                <div id="show_best_area" class="clearfix goodsBox">
                    <div class="goodsItem">
                        <span class="best"></span>
                        <a href="http://ec.com/goods.php?id=24"><img src="<?=$url?>/images/home/24_thumb_G_1241971981429.jpg" alt="P806" class="goodsimg"></a><br>
                        <p><a href="http://ec.com/goods.php?id=24" title="P806">P806</a></p>
                        <font class="f1">
                            ￥2000元                     </font>
                    </div>
                    <div class="more"><a href="http://ec.com/search.php?intro=best"><img src="<?=$url?>/images/home/more.gif"></a></div>
                </div>
            </div>
        </div>
        <div class="blank5"></div>
        <div class="box">
            <div class="box_1">
                <h3>
                    <span>商品列表</span><a name="goods_list"></a>
                    <form method="GET" class="sort" name="listform">
                        显示方式：
                        <a href="javascript:;" onclick="javascript:display_mode(&#39;list&#39;)"><img src="<?=$url?>/images/home/display_mode_list.gif" alt=""></a>
                        <a href="javascript:;" onclick="javascript:display_mode(&#39;grid&#39;)"><img src="<?=$url?>/images/home/display_mode_grid_act.gif" alt=""></a>
                        <a href="javascript:;" onclick="javascript:display_mode(&#39;text&#39;)"><img src="<?=$url?>/images/home/display_mode_text.gif" alt=""></a>&nbsp;&nbsp;

                        <a href="http://ec.com/brand.php?category=0&amp;display=grid&amp;brand=9&amp;price_min=&amp;price_max=&amp;filter_attr=&amp;page=1&amp;sort=goods_id&amp;order=ASC#goods_list"><img src="<?=$url?>/images/home/goods_id_DESC.gif" alt="按上架时间排序"></a>
                        <a href="http://ec.com/brand.php?category=0&amp;display=grid&amp;brand=9&amp;price_min=&amp;price_max=&amp;filter_attr=&amp;page=1&amp;sort=shop_price&amp;order=ASC#goods_list"><img src="<?=$url?>/images/home/shop_price_default.gif" alt="按价格排序"></a>
                        <a href="http://ec.com/brand.php?category=0&amp;display=grid&amp;brand=9&amp;price_min=&amp;price_max=&amp;filter_attr=&amp;page=1&amp;sort=last_update&amp;order=DESC#goods_list"><img src="<?=$url?>/images/home/last_update_default.gif" alt="按更新时间排序"></a>
                        <input type="hidden" name="category" value="0">
                        <input type="hidden" name="display" value="grid" id="display">
                        <input type="hidden" name="brand" value="9">
                        <input type="hidden" name="price_min" value="">
                        <input type="hidden" name="price_max" value="">
                        <input type="hidden" name="filter_attr" value="">
                        <input type="hidden" name="page" value="1">
                        <input type="hidden" name="sort" value="goods_id">
                        <input type="hidden" name="order" value="DESC">
                    </form>
                </h3>
                <div class="centerPadd">
                    <div class="clearfix goodsBox" style="border:none;">
                        <div class="goodsItem">
                            <a href="http://ec.com/goods.php?id=24"><img src="<?=$url?>/images/home/24_thumb_G_1241971981429.jpg" alt="P806" class="goodsimg"></a><br>
                            <p><a href="http://ec.com/goods.php?id=24" title="">P806</a></p>
                            市场价<font class="market_s">￥2400元</font><br>
                            本店价<font class="shop_s">￥2000元</font><br>
                            <a href="javascript:collect(24);" class="f6">收藏</a> |
                            <a href="javascript:addToCart(24)" class="f6">购买</a> |
                            <a href="javascript:;" id="compareLink" onclick="Compare.add(24,&#39;P806&#39;,&#39;&#39;)" class="f6">比较</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="blank5"></div>
        <script type="Text/Javascript" language="JavaScript">
            <!--
            function selectPage(sel)
            {
                sel.form.submit();
            }
            //-->
        </script>
        <script type="text/javascript">
            window.onload = function()
            {
                Compare.init();
                fixpng();
            }
            var button_compare = '';
            var exist = "您已经选择了%s";
            var count_limit = "最多只能选择4个商品进行对比";
            var goods_type_different = "\"%s\"和已选择商品类型不同无法进行对比";
            var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
            var btn_buy = "购买";
            var is_cancel = "取消";
            var select_spe = "请选择商品属性";
        </script>
        <form name="selectPageForm" action="http://ec.com/brand.php" method="get">
            <div id="pager" class="pagebar">
                <span class="f_l f6" style="margin-right:10px;">总计 <b>1</b>  个记录</span>

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
<div class="blank5"></div>
