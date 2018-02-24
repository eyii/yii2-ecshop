<div id="MenuManage<?=$this->context->id?>">
    <template>
        <!--1行-->
        <div class="row">
            <div class="col-sm-5">
                <select multiple size="20" name="MenuModel[names][]" class="form-control list">
                    <option v-for="item in myoptions" :value="item"  selected="selected">{{item}}</option>
                </select>
            </div>
            <div class="col-sm-5">
                <el-select v-model="value5" multiple placeholder="请选择"  @change="handle">
                    <el-option v-for="item in options" :label="item.text" :value="item.text"></el-option>
                </el-select>
                <el-select v-model="route" multiple @change="secondHandle">
                    <el-option v-for="item in nodes" :label="item.text" :value="item.text"></el-option>
                </el-select>
                <div class="row">
                    <div class="col-sm-12">
                        <el-button type="success" @click="add" >成功按钮</el-button>
                    </div>
                </div>
            </div>

        </div>
        <!--2行-->

    </template>
</div>
<script>
    var MainMenuManage<?=$this->context->id?> = {
        data() {
            return {
                options: <?=$routes?>,
                myoptions:[],
                value5: [],
                nodes:[],
                names:'test',
                route:'',
            }
        },
        methods:{
            handle(data){
                const self = this;
                $.each(this.options,function (index,element) {
                  if (element.text==data[0]){
                     self.nodes=element.nodes;
                   }
                })
            },
            secondHandle(data){
                 $("#menumodel-route").val(data[0]);
            },
            add(){
                this.myoptions.push(this.route+"===="+$("#menumodel-name").val());
            },
        }
    }
    var CtorMenuManage<?=$this->context->id?> = Vue.extend(MainMenuManage<?=$this->context->id?>);
    new CtorMenuManage<?=$this->context->id?>().$mount('#MenuManage<?=$this->context->id?>')
</script>

