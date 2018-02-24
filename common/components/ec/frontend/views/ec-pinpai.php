<?php
$id=$this->context->id
?>

<div id="pinpai<?=$id?>" class="box f_r brandsIe6">
    <div class="box_1 clearfix" id="brands">
        <a  v-for="brand in brands" :href="brand.brand_id"><img :src="'<?=$url?>/images/home/'+brand.brand_logo" :alt="brand.name"></a>

        <div class="brandsMore"><a href="http://ec.com/brand.php"><img src="<?=$url?>/images/home/moreBrands.gif"></a></div>
    </div>

</div>

<script>

    const MainPinPai<?=$id?> = {
        data() {
             return {
                brands:<?=$items?>,
             };
        },
        methods: {
            submitForm(formName) {

            },

        }
    };
    const CtorPinPai<?=$id?> = Vue.extend(MainPinPai<?=$id?>);
    new CtorPinPai<?=$id?>().$mount('#pinpai<?=$id?>')
</script>