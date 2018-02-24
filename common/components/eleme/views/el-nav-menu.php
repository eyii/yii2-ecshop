<?php
use \yii\helpers\Url;
?>
<div id="NavMenu<?=$this->context->id?>">
    <el-menu theme="dark" :default-active="activeIndex" class="el-menu-demo" mode="horizontal" @select="handleSelect" >
        <el-menu-item index="1" class="color_fff">处理中心</el-menu-item>
        <el-submenu index="2">
            <template slot="title" class="color_fff"><?=Yii::$app->user->identity->uname;?>&nbsp;&nbsp;</template>
            <el-menu-item index="2-1"><a href="<?=Url::toRoute(['site/psw'])?>" target="_blank">修改密码</a></el-menu-item>
            <el-menu-item index="2-2"><a href="<?=Url::toRoute(['site/logout'])?>" target="_blank">退出</a></el-menu-item>
        </el-submenu>
        <el-menu-item index="3" class="color_fff"><a href="<?=Yii::getAlias('@frontend_site')?>" target="_blank">查看网店</a></el-menu-item>
    </el-menu>

</div>
<style>

 .el-menu--horizontal.el-menu--dark .el-submenu .el-menu-item.is-active, .el-menu-item.is-active {
        color: #fff;


    }
 .el-menu--dark .el-menu-item, .el-menu--dark .el-submenu__title {
     color: #fff;
 }
#NavMenu<?=$this->context->id?> .el-menu--dark {
     background-color: #3c8dbc;
 }

</style>
<script>
   // http://element.eleme.io/#/zh-CN/component/menu

    var MainNavMenu<?=$this->context->id?> = {
        data() {
            return {
                activeIndex: '1',
                activeIndex2: '1'
            };
        },
        methods: {
            handleSelect(key, keyPath) {
                console.log(key);
            }
        }
    }
    var CtorNavMenu<?=$this->context->id?> = Vue.extend(MainNavMenu<?=$this->context->id?>);
    new CtorNavMenu<?=$this->context->id?>().$mount('#NavMenu<?=$this->context->id?>');
</script>