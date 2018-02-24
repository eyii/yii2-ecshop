<div id="Jilian<?=$this->context->id?>">
    <div  class="form-group">
     <?=$extend?>
  <el-cascader placeholder="<?=$placeholder?>"
                       :options="options" filterable
                       :props="defaultProps"
                       :show-all-levels="false"
                         multiple
                       @change="handleChange"
                        :clearable="<?=$clearable?>" >
         </el-cascader>
    </div>

</div>
<style>
    #Jilianw1 div:nth-child(2){
        height:44px ;
    }
</style>
<script>
    var globals
    var MainJiLian<?=$this->context->id?> = {
        data() {
            return {
                options:<?=$options?>,
                defaultProps: {
                    children: '<?=$children?>',
                    label: '<?=$label?>',
                    value: '<?=$value?>'
                }
            };
        },
        methods: {
            handleChange(value) {
             <?=$jsCode?>
             }
        }

    };
    var CtorJiLian<?=$this->context->id?> = Vue.extend(MainJiLian<?=$this->context->id?>)
    new CtorJiLian<?=$this->context->id?>().$mount('#Jilian<?=$this->context->id?>')
</script>