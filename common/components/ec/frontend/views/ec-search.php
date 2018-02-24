<?php
use yii\helpers\Url;
?>
<!--搜索栏-->
<div id="search<?=$this->context->id?>">
<div id="search" class="clearfix">

    <!--表单-->
    <form id="searchForm" name="searchForm" method="get" action="<?=Url::toRoute(['sousuo/index'])?>" onsubmit="return checkSearchForm()" class="f_r" style="_position:relative; top:5px;">
        <select name="category" id="category" class="B_input">
            <option value="0">所有分类</option>
            <option value="1" >手机类型</option>
            <option value="4">&nbsp;&nbsp;&nbsp;&nbsp;3G手机</option>
            <option value="5">&nbsp;&nbsp;&nbsp;&nbsp;双模手机</option>
            <option value="2">&nbsp;&nbsp;&nbsp;&nbsp;CDMA手机</option>
            <option value="3">&nbsp;&nbsp;&nbsp;&nbsp;GSM手机</option>
            <option value="12">充值卡</option>
            <option value="14">&nbsp;&nbsp;&nbsp;&nbsp;移动手机充值卡</option>
            <option value="15">&nbsp;&nbsp;&nbsp;&nbsp;联通手机充值卡</option>
            <option value="13">&nbsp;&nbsp;&nbsp;&nbsp;小灵通/固话充值卡</option>
            <option value="6">手机配件</option>
            <option value="11">&nbsp;&nbsp;&nbsp;&nbsp;读卡器和内存卡</option>
            <option value="7">&nbsp;&nbsp;&nbsp;&nbsp;充电器</option>
            <option value="8">&nbsp;&nbsp;&nbsp;&nbsp;耳机</option>
            <option value="9">&nbsp;&nbsp;&nbsp;&nbsp;电池</option>
        </select>
        <input name="keywords" type="text" id="keyword" value="" class="B_input" style="width:110px;">
        <input name="imageField" type="submit" value="" class="go" style="cursor:pointer;">
        <a href="<?=Url::toRoute(['sousuo/index'])?>">高级搜索</a>
    </form>
    <!--表单-->
</div>
</div>
<!--搜索栏-->
<script>
    new Vue({
        el:'#search<?=$this->context->id?>',
        data:{
            trees:<?=$trees?>
        }
    })
</script>


<!--<option  v-for="item in trees" :value="item.cat_id">{{item.cat_name}}</option>
<option value="4" v-for=" node in item.nodes">&nbsp;&nbsp;&nbsp;&nbsp;{{node.cat_name}}</option>-->