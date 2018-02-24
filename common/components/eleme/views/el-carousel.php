<?php
$context=$this->context;
?>
<div id="carousel<?=$context->id?>">

    <template>
        <div class="f_l" id="focus">
            <el-carousel :interval="<?=$context->interval?>" arrow="always" height="<?=$context->height?>" w>
                <el-carousel-item v-for="item in 4">

                    <img src="https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png" height="100%"/>
                    <h3>{{item}}</h3>
                </el-carousel-item>
            </el-carousel>
        </div>
    </template>

</div>
<style>

    .el-carousel__item:nth-child(2n) {
        background-color: #99a9bf;

    }

    .el-carousel__item:nth-child(2n+1) {
        background-color: #d3dce6;

    }

</style>
<script>
    new Vue().$mount('#carousel<?=$context->id?>');
</script>