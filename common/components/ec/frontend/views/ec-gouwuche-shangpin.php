<?php
use yii\helpers\Url;
?>
<div id="gouwuche<?=$this->context->id?>" xmlns:v-on="http://www.w3.org/1999/xhtml">
    <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <tbody>
        <tr>
            <th bgcolor="#ffffff">商品名称</th>
            <th bgcolor="#ffffff">属性</th>
            <th bgcolor="#ffffff">市场价</th>
            <th bgcolor="#ffffff">本店价</th>
            <th bgcolor="#ffffff">购买数量</th>
            <th bgcolor="#ffffff">小计</th>
            <th bgcolor="#ffffff">操作</th>
        </tr>
        <tr v-for="item in items">
            <td bgcolor="#ffffff" align="center">
                <a href="http://ec.com/goods.php?id=8" target="_blank"><img :src="'<?=$url?>/images/home/'+item.goodsModel.goods_thumb"  border="0" title="飞利浦9@9v"></a><br>
                <a href="http://ec.com/goods.php?id=8" target="_blank" class="f6">{{item.goods_name}}</a>
            </td>
            <td bgcolor="#ffffff">{{item.goods_attr}} <br>
            </td>
            <td align="right" bgcolor="#ffffff">￥{{item.market_price}} 元</td>
            <td align="right" bgcolor="#ffffff">￥{{item.shop_price}}元</td>
            <td align="right" bgcolor="#ffffff">
                <input type="text" name="goods_number[43]" id="goods_number_43" value="1" size="4" class="inputBg" style="text-align:center " onkeydown="showdiv(this)">
            </td>
            <td align="right" bgcolor="#ffffff">￥{{item.goods_price*item.goods_number}}元</td>
            <td align="center" bgcolor="#ffffff">
                <a href="javascript:if (confirm(&#39;您确实要把该商品移出购物车吗？&#39;)) location.href=&#39;flow.php?step=drop_goods&amp;id=43&#39;; " class="f6">删除</a>
            </td>
        </tr>
        </tbody>
    </table>
    <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <tbody>
        <tr>
            <td bgcolor="#ffffff">购物金额小计 ￥{{totalMoney}}元，比市场价 ￥478.79元 节省了 ￥79.79元 (17%)c</td>
            <td align="right" bgcolor="#ffffff">
                <input type="button" value="清空购物车" class="bnt_blue_1" @click="qingkong_gouwuche">
                <input name="submit" type="submit" class="bnt_blue_1" value="更新购物车">
            </td>
        </tr>
        </tbody>
    </table>
</div>
<script>
    Vue.use(YIIEC);
    new Vue({
        el:'#gouwuche<?=$this->context->id?>',
        data:{
            items:<?=$cartModel?>,

        },
        computed: {
            totalMoney: function() {
                let items=this.items;
                let price=0;
                items.forEach(function(e){
                   price=parseFloat(price)+parseFloat(e.goods_price);
                });
                return price;
            }
        },
        methods:{
           qingkong_gouwuche(){
               let url='<?=Url::toRoute(['gouwuche/qingkong-gouwuche'])?>';
               let successCallback = function (data) {
                   if (data.data.code == 1) {
                       this.$tanchuang('清空购物车成功');
                   }
               };
               const errorCallback = function (data) {
                   console.log(data);
               };
               this.$http.get(url,null,{dataType:'json'}).then(successCallback, errorCallback);
           }
        }
    });
</script>