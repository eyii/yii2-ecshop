<div id="Tanchuang<?=$this->context->id?>">
    <el-button type="<?=$btnClass?>" @click="dialogFormVisible = true" ><?=$buttonText?></el-button>
    <el-dialog title="<?=$dialogTitle?>" v-model="dialogFormVisible">
        <?=$html?>
    </el-dialog>
</div>
<script>

    var MainTanchuang<?=$this->context->id?> = {
        data() {
            return {

                dialogFormVisible: false,
             };
        }
    };
    var CtorTanchuang<?=$this->context->id?> = Vue.extend(MainTanchuang<?=$this->context->id?>);
    new CtorTanchuang<?=$this->context->id?>().$mount('#Tanchuang<?=$this->context->id?>');
</script>