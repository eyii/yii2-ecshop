<div class="flowBox" id="shangpin_liebiao">
    <h6><span>商品列表</span><a href="<?=\yii\helpers\Url::toRoute(['gouwuche/index'])?>">修改</a></h6>
    <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <tbody><tr>
            <th bgcolor="#ffffff">商品名称</th>
            <th bgcolor="#ffffff">属性</th>
            <th bgcolor="#ffffff">市场价</th>
            <th bgcolor="#ffffff">本店价</th>
            <th bgcolor="#ffffff">购买数量</th>
            <th bgcolor="#ffffff">小计</th>
        </tr>
        <tr v-for="item in items">
            <td bgcolor="#ffffff">
                <a href="http://ec.com/goods.php?id=24" target="_blank" class="f6">{{item.goods_name}}</a>
            </td>
            <td bgcolor="#ffffff">颜色:灰色 <br>
                配件:数据线[20] <br>
            </td>
            <td align="right" bgcolor="#ffffff">￥{{item.market_price}}元</td>
            <td bgcolor="#ffffff" align="right">￥{{item.shop_price}}元</td>
            <td bgcolor="#ffffff" align="right">{{item.goods_number}}</td>
            <td bgcolor="#ffffff" align="right">￥{{item.goods_number*item.shop_price}}元</td>
        </tr>

        <tr>
            <td bgcolor="#ffffff" colspan="7">
                购物金额小计 ￥13127.00元，比市场价 ￥15748.40元 节省了 ￥2621.40元 (17%)              </td>
        </tr>
        </tbody></table>
</div>


<script>
    new Vue({
        el:'#shangpin_liebiao',
        data:{
            items:<?=$cart_model?>
        }
    })
</script>
