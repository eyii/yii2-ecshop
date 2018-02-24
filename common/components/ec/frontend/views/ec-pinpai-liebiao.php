<?php
$url=Yii::getAlias('all');

?>
<div id="pinpailiebiao<?=$this->context->id?>" >
    <div id="brandList" class="clearfix">
        <div class="brandBox" v-for="item in items">
            <h4><span>{{item.brand_name}}</span>({{item.count}})</h4>
            <div class="brandLogo">
                <a :href="item.brand_id"><img v-show="item.brand_logo!=''" :src="'<?=$url?>/images/home/'+item.brand_logo" :alt="item.name" ></a>
            </div>
            <p :title="item.brand_desc">{{item.brand_desc}}</p>
         </div>

    </div>
</div>
<script>
    new Vue({
        el:'#pinpailiebiao<?=$this->context->id?>',
        data:{
            items:<?=$items?>,
        },
    })
</script>