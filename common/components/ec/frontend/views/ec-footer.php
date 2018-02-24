<?php
use \yii\helpers\Url;
?>
<div id="footer<?=$this->context->id?>">
    <div class=blank5></div>
    <div class=block>
        <div class=box>
            <div class="helpTitBg clearfix">
                <DL v-for="help in helps">
                    <DT><a :title="help.cat_name" :href="help.cat_id">{{help.cat_name}} </a>
                    <DD v-for="item in help.articleModel"><a :title="item.title" :href="item.article_id">{{item.title}}</a>
                </DL>

            </div>
        </div>
    </div>
    <div class=blank></div>
    <div class=blank></div>
    <div id=bottomNav class=box>
        <div class=box_1>
            <div class="bNavList clearfix">
                <div class=f_l>
                    <a :href="'<?=Url::toRoute(['wenzhang/index'])?>&id='+item.article_id" v-for="item in aboutItems">{{item.title}} - </a>

                </div>
                <div class=f_r>
                    <a href="http://ec.com/group_buy.php#top"><IMG src="<?=$url?>/images/home/bnt_top.gif"></a>
                    <a href="http://ec.com/index.php"> <IMG src="<?=$url?>/images/home/bnt_home.gif"></a>
                </div>
            </div>
        </div>
    </div>
    <div class=blank></div>
    <div id=footer>
        <div class=text>© 2005-2017 ECSHOP 版权所有，并保留所有权利。<BR><BR>共执行 5 个查询，用时 0.008001
            秒，在线 1 人，Gzip 已禁用，占用内存 1.607 MB

            <a style="FONT-FAMILY: Verdana; FONT-SIZE: 11px"  href="<?=Yii::getAlias('@domain')?>" target=_blank>Powered&nbsp;by&nbsp;
                <STRONG>
                    <SPAN style="COLOR: #3366ff"><?=Yii::$app->params['appName']?></SPAN>&nbsp;
                    <SPAN style="COLOR: #ff9966">v2.7.3</SPAN>
                </STRONG>
            </a>
            &nbsp;
            <a href="#" target=_blank>&nbsp;&nbsp;Licensed</a>
            <BR>
            <div id=rss align=left><a href="#">
                    <IMG alt=rss src="<?=$url?>/images/home/xml_rss2.gif">
                </a>
            </div>
        </div>
    </div>
</div>
<style>
    #footer {
        background: url(/all/images/home/logo.gif) no-repeat 10px;
        padding-left: 200px;
        width: 760px;
        margin: 10px auto;
    }
</style>
<script>
    new Vue({
        el:'#footer<?=$this->context->id?>',
        data:{
            aboutItems:<?=$aboutItems?>,
            helps:<?=$helps?>
        }
    })
</script>