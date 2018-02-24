<div id="el_renwu_menu" class="modal_left">


    <el-tree :data="data"
             :props="defaultProps"
             accordion
             @node-click="handleNodeClick"
    ></el-tree>
</div>
<style>
    .modal_left{
        position: absolute;
        left: 20px;
        top:100px;
        width: 300px;
        z-index: 999;
    }
</style>
<script>
 let MainRenwuMenu = {
        data() {
            return {
                data: [
                    {
                     label: '购物车',
                      url:'#'  ,
                     children: [
                         {
                            label: '1收货地址',
                             url:'<?=\yii\helpers\Url::toRoute(['gouwuche/dizhi'])?>',
                         },
                         {
                             label: '2结算页面',
                             url:'<?=\yii\helpers\Url::toRoute(['gouwuche/tijiao-dingdan'])?>',
                         },
                     ]
                },

                  /*  {
                        label: '购物车',
                        url:'#'  ,
                        children: [
                            {
                                label: '收货地址',

                            },
                            {
                                label: '结算页面',

                            },
                        ]
                    }*/
                    ],
                defaultProps: {
                    children: 'children',
                    label: 'label'
                }
            };
        },
        methods: {
            handleNodeClick(data) {
                data.url!='#'?window.location.href=data.url:'';
            }
        }
    };
    var CtorRenwuMenu = Vue.extend(MainRenwuMenu);
    new CtorRenwuMenu().$mount('#el_renwu_menu')

</script>