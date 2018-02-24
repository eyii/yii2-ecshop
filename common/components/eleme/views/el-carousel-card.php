<div id="carousel-card<?=$this->context->id?>">
     <el-carousel :interval="4000" type="card" height="200px">
            <el-carousel-item v-for="item in 6">
                <h3>{{ item }}</h3>
            </el-carousel-item>
        </el-carousel>
</div>
<script>
    new Vue().$mount('#carousel-card<?=$this->context->id?>');
</script>