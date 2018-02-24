<?php
use \common\components\ec\frontend\EcGoodsItemWidget;
use \yii\helpers\Url;

?>
<div id="Xinpin<?=$this->context->id?>">
<div class="box">
    <div class="box_2 centerPadd">
        <div class="itemTit New" id="itemNew">
            <h2  v-for="(item,index) in classes" :class="item.class"><a @click="change_tab_style(index)">{{item.name}}</a></h2>
        </div>
        <div id="show_new_area" class="clearfix goodsBox">

            <!--第1排-->
            '<div class="goodsItem" v-for="item in xinItem">
                <span class="news"></span>
                <a :href="'<?=Url::toRoute(['shangpin/index'])?>&id='+item.goods_id">
                    <img :src="'<?=$url?>/images/home/'+item.goods_thumb" :alt="item.goods_name" class="goodsimg"></a><br>
                <p><a :href="'<?=Url::toRoute(['shangpin/index'])?>&id='+item.goods_id" :title="item.goods_name">{{item.goods_name}}</a></p>
                <font class="f1">￥{{item.shop_price}}元</font>
            </div>'



            <div class="more"><a href="http://ec.com/search.php?intro=new"><img src="<?=$url?>/images/home/more.gif"></a></div>
        </div>
    </div>
</div>
</div>
<script>
    new Vue({
        el:"#Xinpin<?=$this->context->id?>",
        data:{
          xinItem:<?=$items?>,
          classes:[
                {
                    class:'',
                    name:'全部商品'
                },
                {
                    class:'h2bg',
                    name:'GSM手机'
                },
                {
                    class:'h2bg',
                    name:'双模手机'
                },
                {
                    class:'h2bg',
                    name:'充值卡'
                } ,
                {
                    class:'h2bg',
                    name:'联通手机充值卡'
                }
            ]
        },
        methods:{
            change_tab_style(number)
            {

                this.classes.forEach(function (item,index) {
                    item.class=(index==number)?"":"h2bg";

                });
                /*       elem = elem.toUpperCase();
                 var itemObj = doc.item;
                 var elems = itemObj.getElementsByTagName(elem);
                 var _o = obj.parentNode;
                 while(_o.nodeName != elem)
                 {
                 _o = _o.parentNode;
                 }
                 for (var i=0,l=elems.length; i<l; i++)
                 {
                 elems[i].className = 'h2bg';
                 }
                 _o.className = '';*/

            }
        }
    })
</script>