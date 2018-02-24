<?php
use common\components\vue\VueExtendWidget;
?>
<style type="text/css">
    body, html{width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
    #allmap{height:500px;width:100%;}
    #r-result{width:100%; font-size:14px;}
</style>

<div id="BaiduDitu<?=$this->context->id?>">

    <div id="allmap"></div>
    <div id="r-result">
        城市名: <input id="cityName" type="text" style="width:100px; margin-right:10px;" />
        <input type="button" value="查询" @click="baidu()" />
    </div>

</div>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=9TQZYBDjlbTQQPP3c5nhXRk4"></script>
<script type="text/javascript">
Vue.use(YIIEC);
new Vue({
    el:'#BaiduDitu<?=$this->context->id?>',
    mounted(){
      this.baidu();
    },
    methods: {
        baidu(){
            var  map=this.$baidu_init("allmap",'');
            this.$baidu_ip(map);
            //    this.$baidu_zhongxin(map,'泉州');
            this.$baidu_qudizhi(map,"click", function(rs){
                let addComp = rs.addressComponents;
                alert(addComp.province + ", " + addComp.city + ", " + addComp.district + ", " + addComp.street + ", " + addComp.streetNumber);
            });
        }
    },

})
</script>


