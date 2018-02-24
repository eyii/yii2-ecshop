<div id="Tree<?=$this->context->id?>">
    <el-tree :data="data" :props="defaultProps" @node-click="handleNodeClick" :render-content="renderContent" :accordion=<?=$accordion?> ><span>点点滴滴</span></el-tree>
</div>
<script>

    const MainTree<?=$this->context->id?> = {
        data() {
            return {
                data:<?=$this->context->menuData?>,
                defaultProps: {
                    children: '<?=$this->context->children?>',
                    label: '<?=$this->context->label?>'
                }
            };
        },
        methods: {
            handleNodeClick(data) {
              data.children==undefined?window.location.href=data.url:'';
             },
            renderContent(h, { node, data, store }) {
             var  d= h("i");
            //    console.log(d);
                return h("span",node.label);
            }

        }
    };
    const CtorTree<?=$this->context->id?> = Vue.extend(MainTree<?=$this->context->id?>);
    new CtorTree<?=$this->context->id?>().$mount('#Tree<?=$this->context->id?>');
</script>