
<div id="breadcrumb<?=$this->context->id?>">
    <el-breadcrumb separator="/">
        <el-breadcrumb-item :to="{ path: '/' }">首页</el-breadcrumb-item>
        <el-breadcrumb-item>活动管理</el-breadcrumb-item>
        <el-breadcrumb-item>活动列表</el-breadcrumb-item>
        <el-breadcrumb-item>活动详情</el-breadcrumb-item>
    </el-breadcrumb>
</div>
<script>
    //http://element.eleme.io/#/zh-CN/component/breadcrumb
    new Vue().$mount('#breadcrumb<?=$this->context->id?>');
</script>he