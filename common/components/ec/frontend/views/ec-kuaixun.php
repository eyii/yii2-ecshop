<?php
$url=Yii::getAlias('all');
?>
<div id="mallNews" class="f_r">
    <div class="NewsTit"></div>
    <div class="NewsList tc">
        <ul>
            <li v-for="item in kuaixuns">
                [<a :href="item.href_cat">{{item.cat_title}}</a>] <a :href="item.href_article" :title="item.article_title">{{item.article_title}}</a>
            </li>
        </ul>
    </div>
</div>
<style>
    #mallNews<?=$this->context->id?> {
        width: 230px;
        padding: 8px 8px 0px 8px;
        background: url(<?=$url?>/images/home/foucsBg.gif) repeat-x left top;
    }
</style>
<script>
    const kuaixun_const=[
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
        el:'#mallNews',
        data:{
            kuaixuns: kuaixun_const,
        },

    })
</script>