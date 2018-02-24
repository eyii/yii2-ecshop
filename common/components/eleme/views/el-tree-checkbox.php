<div id="app">
    <el-tree :data="data2" show-checkbox node-key="id" :default-expanded-keys="[2, 3]" :default-checked-keys="[5]" :props="defaultProps">
    </el-tree>
</div>

<script>
    //http://element.eleme.io/#/zh-CN/component/tree

    const Main = {
        data() {
            return {
                data2:<?=$this->context->treeCheckBox?>,
                defaultProps: {
                    children: '<?=$this->context->children?>',
                    label: '<?=$this->context->label?>'
                }
            };
        }
    };
    const Ctor = Vue.extend(Main);
    new Ctor().$mount('#app');
</script>