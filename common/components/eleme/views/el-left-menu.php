<?php
use common\models\guanli_quanxian\MenuHelper;
?>
<div id="<?=$this->context->id?>">
    <el-row class="tac">
        <el-col :span="8">
            <h5>带 icon</h5>
            <el-menu default-active="1" class="el-menu-vertical-demo" @open="handleOpen" @close="handleClose">
                <el-submenu index="1">
                    <template slot="title"><i class="el-icon-message"></i>导航一</template>
                    <el-menu-item-group>

                        <el-menu-item index="1-1">选项1</el-menu-item>
                        <el-menu-item index="1-2">选项2</el-menu-item>
                    </el-menu-item-group>


                </el-submenu>

            </el-menu>
        </el-col>

    </el-row>
</div>

<script>
    var Main = {
        methods: {
            handleOpen(key, keyPath) {
                console.log(key, keyPath);
            },
            handleClose(key, keyPath) {
                console.log(key, keyPath);
            }
        }
    }
    var Ctor = Vue.extend(Main)
    new Ctor().$mount('#<?=$this->context->id?>')

</script>
