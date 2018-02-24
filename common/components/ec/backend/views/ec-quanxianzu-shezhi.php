<div id="Jilian<?=$this->context->id?>">
    <div  class="form-group">
       <div class="row">
              <input class="form-control search" data-target="assigned"
                       placeholder="<?= Yii::t('app', 'Search for assigned') ?>">
                <select multiple size="20" name="AuthItemChildModel[child][]" class="form-control list" data-target="assigned">
                    <option v-for="item in children" :value="item.text" selected="selected">{{item.text}}</option>
                </select>

        </div>
        <div class="row">
        <el-cascader placeholder="<?=$placeholder?>"
                     :options="options" filterable
                     :props="defaultProps"
                       multiple
                     @change="handleChange"
                     change-on-select
                     :clearable="<?=$clearable?>" >
        </el-cascader>
        </div>
    </div>

</div>

<script>
    var globals
    var MainJiLian<?=$this->context->id?> = {
        data() {
            return {
                options:<?=$routes?>,
                children:'',
                defaultProps: {
                    children: '<?=$children?>',
                    label: '<?=$label?>',
                    value: '<?=$value?>'
                }
            };
        },
        methods: {
            handleChange(value) {
                var self=this;
              //  var inputNode= this.$el.querySelector('input');
               $.each(this.options,function (index,element) {
                 if(element.label==value){
                       self.children=element.children;
                   }
               });


            }
        }

    };
    var CtorJiLian<?=$this->context->id?> = Vue.extend(MainJiLian<?=$this->context->id?>)
    new CtorJiLian<?=$this->context->id?>().$mount('#Jilian<?=$this->context->id?>')
</script>