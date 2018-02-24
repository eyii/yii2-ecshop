<?php
use \yii\helpers\Url;
use \common\components\ec\frontend\EcShangpinTupianHualangWidget;
use \common\utils\CommonFun;
use \common\components\vue\VueExtendWidget;
?>
<div id="goodsInfo<?=$this->context->id?>">
    <div id="goodsInfo" class="clearfix">

    <?=EcShangpinTupianHualangWidget::widget()?>
        <!--文本信息-->
    <div class="textInfo">
        <form action="<?=Url::toRoute(['gouwuche/jiaru-gouwuche'])?>" method="post">
            <!--商品名称-->
            <div class="clearfix">
                <p class="f_l">{{items.goods_name}}
                <p class="f_r">
                    <a href="http://ec.com/goods.php?id=9"><img alt="prev" src="<?=$url?>/images/home/up.gif"></a>
                </p>
            </div>
            <ul>
                <!--商品货号/商品库存-->
                <li class="clearfix">
                    <dd>
                        <strong>商品货号：{{items.goods_sn}}</strong></dd>
                    <dd class="ddR">
                        <strong>商品库存：{{items.goods_number}}</strong>
                         台                     </dd>
                </li>
                <!--商品品牌/商品重量-->
                <li class="clearfix">
                    <dd>
                        <strong>商品品牌：{{ items.brandModel?items.brandModel.brand_name : null }}</strong><a href="'<?=Url::toRoute(['pinpai/dange-pinpai'])?>'"></a>
                    </dd>
                    <dd class="ddR">
                        <strong>商品重量：</strong>{{items.goods_weight*1000}}克</dd>
                </li>
                <!--上架时间 商品点击数-->
                <li class="clearfix">
                    <dd>
                        <strong>上架时间：</strong>{{items.add_time}}</dd>
                    <dd class="ddR">

                        <strong>商品点击数：</strong>{{items.click_count}}</dd>
                </li>
                <!--市场价格 本店售价 注册用户 vip 用户评价-->
                <li class="clearfix">
                    <dd class="ddL">
                        <strong>市场价格：</strong><font class="market">￥{{items.market_price}}元</font><br>
                        <strong>本店售价：</strong><font class="shop">￥{{items.shop_price}}元</font><br>
                        <strong>注册用户：</strong><font class="shop" >￥{{items.market_price}}元</font><br>
                        <strong>：</strong><font class="shop" >￥{{items.market_price}}元</font><br>
                        <strong>vip：</strong><font class="shop" >￥{{items.market_price}}元</font><br>
                    </dd>
                    <dd style="width:48%; padding-left:7px;">
                        <strong>用户评价：</strong>
                        <img src="'<?=$url?>/images/home/stars'.gif" alt="comment rank">
                    </dd>
                </li>
                <!--商品总价-->
                <li class="clearfix">
                    <dd>
                        <strong>商品总价：</strong><font id="ECS_GOODS_AMOUNT" class="shop">￥{{count*items.shop_price}}元</font>
                    </dd>
                    <dd class="ddR">
                    </dd>
                </li>
               <!-- 购买数量 积分-->
                <li class="clearfix">
                    <dd>
                        <strong>购买数量：</strong>
                        <input  type="text"  size="4" v-model="count" style="border:1px solid #ccc; "/>
                        <input type="hidden"  :value="items.goods_id">
                    </dd>
                    <dd class="ddR">
                        <strong>购买此商品可使用：</strong><font class="f4">{{items.market_price}}积分</font>
                    </dd>
                </li>
                <!--颜色-->

                <li class="padd loop" v-for="item in guige" v-show="item.attr_type>0">
                    <strong>{{item.attr_name}}:</strong><br>
                    <label for="spec_value_231" >
                     <input type="radio"  :value="item.goods_attr_id"  v-show="item.attr_type==1" v-model="checkboxs">
                      <input type="checkbox"  :value="item.goods_attr_id" v-show="item.attr_type==2" v-model="checkboxs">
                        {{item.attr_value}} [ ￥{{item.attr_price==0?0:item.attr_price}}元] </label>
                    <br>

                </li>

            </ul>

        </form>
        <!--加入购物车等按钮-->
        <li class="padd">
            <button type="submit" style="border: 0;color: #006bce;text-decoration: underline;" @click="addcart"><img src="<?=$url?>/images/home/bnt_cat.gif"></button>
            <a href="#"><img src="<?=$url?>/images/home/bnt_colles.gif"></a>
            <a href="#"><img src="<?=$url?>/images/home/bnt_recommend.gif"></a>
        </li>
    </div>
</div>
</div>
<script>
Vue.use(YIIEC);
let MainGoodsInfo<?=$this->context->id?> = {
       data() {
            return {
                items:<?=$items?>,
                guige:<?=$guige_model?>,
                count:1,
                checkboxs:[],
            }
        },
    methods: {
        addcart(){
                let Url='<?=Url::toRoute(['gouwuche/jiaru-gouwuche'],true)?>';
                let successCallback=function (respone) {
                    this.$tanchuang(respone.data.message ,respone.data.data);
                 };
                let param={};
                param.CartModel={};
                param.CartModel.goods_number=this.count;
                param.CartModel.goods_id=this.items.goods_id;
                param.CartModel.goods_attr=this.checkboxs;
                this.$post(Url,param,successCallback);
            }
        },

    };

</script>

<?=VueExtendWidget::widget(['extend' =>'MainGoodsInfo'.$this->context->id,'mount' =>'goodsInfo'.$this->context->id,'ctorId' => 'GoodsInfo'  ])?>