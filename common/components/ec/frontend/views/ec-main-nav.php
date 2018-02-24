<?php
use yii\helpers\Url;
?>
<!--导航栏-->
<div id="mainNav" class="clearfix">
    <a href="<?=Url::toRoute(['home/index'])?>" class="cur">首页<span></span></a>
    <a href="<?=Url::toRoute(['category/index'])?>">GSM手机<span></span></a>
    <a href="<?=Url::toRoute(['category/index'])?>">双模手机<span></span></a>
    <a href="<?=Url::toRoute(['category/index'])?>">手机配件<span></span></a>
    <a href="<?=Url::toRoute(['tuangou/index'])?>">团购商品<span></span></a>
    <a href="<?=Url::toRoute(['youhui/index'])?>">优惠活动<span></span></a>
    <a href="<?=Url::toRoute(['duobao/index'])?>">夺宝奇兵<span></span></a>
    <a href="<?=Url::toRoute(['home/index'])?>">拍卖活动<span></span></a>
    <a href="<?=Url::toRoute(['home/index'])?>">积分商城<span></span></a>
    <a href="<?=Url::toRoute(['liuyan/index'])?>">留言板<span></span></a>
    <button  @click="tanchuang"></button>



</div>
<!--导航栏-->
<script>
    Vue.use(YIIEC);
    const mainNav_const=[
        {
            href_cat:'http://ec.com/article_cat.php?id=12',
            cat_title:'站内快讯',
            href_article:'http://ec.com/article.php?id=33',
            article_title:'三星SGHU308说明书下载'
        } ,
        {
            href_cat:'http://ec.com/article_cat.php?id=12',
            cat_title:'手机促销',
            href_article:'http://ec.com/article.php?id=33',
            article_title:'3G知识普及'
        } ,
        {
            href_cat:'http://ec.com/article_cat.php?id=12',
            cat_title:'站内快讯',
            href_article:'http://ec.com/article.php?id=33',
            article_title:'三星SGHU308说明书下载'
        } ,
        {
            href_cat:'http://ec.com/article_cat.php?id=12',
            cat_title:'手机促销',
            href_article:'http://ec.com/article.php?id=33',
            article_title:'飞利浦9@9促销'
        } ,
    ];

    new Vue({
        el:'#mainNav',
        data:{
            kuaixuns: mainNav_const,
        },

        methods: {
            tanchuang(){
                let successCallback=function (response) {
                    alert('ddd');
                };
                this.$tanchuang("<a href='http://baidu.com'>badd</a>",'http://ec.com/article.php?id=33',successCallback);
            }
        }
    })
</script>