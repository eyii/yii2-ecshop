<div id="Xiaoxi<?=$this->context->id?>">
    <template>
        <el-button @click="open" type="<?=$btnClass?>" ><?=$buttonText?></el-button>
    </template>
</div>
<script>
    var MainXiaoxi<?=$this->context->id?> = {
        methods: {
            open() {
                this.$message('<?=$msg?>');
            }
        }
    }
    var CtorXiaoxi<?=$this->context->id?> = Vue.extend(MainXiaoxi<?=$this->context->id?>);
    new CtorXiaoxi<?=$this->context->id?>().$mount('#Xiaoxi<?=$this->context->id?>');
</script>