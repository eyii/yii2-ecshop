<?php
$url=Yii::getAlias('all');
use \common\utils\CommonFun;
use \yii\helpers\Url;
?>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=9TQZYBDjlbTQQPP3c5nhXRk4"></script>
<script src="<?=$url?>/js/vue/yiiec_dizhi.js"></script>
<div class="block" id="dizhi" >
      <!--表单-->
        <form id="theForm"
              method="post" name="theForm"
              v-for="(value, index) in dizhi"
              action="<?=Url::toRoute(['gouwuche/tijiao-dingdan'])?>" >
            <?=CommonFun::getInputCsrf()?>
            <div class=flowBox>
                <h6><span>收货人信息</span></h6>
                <table border=0 cellSpacing=1 cellPadding=5 width="99%" bgColor=#dddddd align=center>
                  <tbody>
                  <!--国家----省市 区-->
                      <tr>
                        <td class="white">配送区域:</td>

                        <td class="white" colSpan=3>
                            <select class="class_select_dizhi" name="country">
                                <option value=0>请选择国家</option>
                                <option selected value=1>中国</option>
                            </select>
                            <!--省-->
                            <select class="class_select_dizhi" name="province"  :value="value.province"
                                    v-sheng="value.province" v-model="value.province" @change="on_change_shi(index)">
                                <option  v-for="item in value.sheng" :value="item.region_id" >{{item.region_name}}</option>
                            </select>
                            <!--市-->
                            <select name="city" class="class_select_dizhi" :value="value.city" v-model="value.city" @change="on_change_qu(index)">
                                <option v-for="item in value.shi" :value="item.region_id">{{item.region_name}}</option>
                            </select>
                            <!--区-->
                            <select class="class_select_dizhi" name="district" :value="value.district" v-model="value.district">
                                <option  v-for="item in value.qu" :value="item.region_id">{{item.region_name}}</option>
                            </select> (必填) </td>

                        </tr>
                  <!--收货人和详细地址-->
                  <tr>
                      <td class="white">收货人姓名:</td>
                      <td class="white">
                          <input name="consignee" :value="value.consignee">(必填)
                      </td>
                      <td class="white">详细地址:</td>
                      <td class="white">
                          <input name="address" :value="value.address">(必填)
                      </td>
                  </tr>
                  <!-- 手机-->
                  <tr>
                       <td class="white">手机:</td>
                      <td class="white"><input name="mobile" :value="value.tel"></td>
                      <!--提交按钮-->
                      <td class="white" colSpan=4 align=middle>
                          <input class=bnt_blue_2 value="配送至这个地址" type="submit" >
                      </td>
                  </tr>

                  </tbody>
                </table>
            </div>
        </form>
        <!--表单-->
    <!--百度地图-->
    <div id="allmap"></div>
    <div id="r-result">
        城市名: <input id="cityName" type="text" style="width:100px; margin-right:10px;" />
        <input type="button" value="查询" @click="baidu()" />
    </div>
</div>


<script>
   Vue.use(YII_VUE_DIZHI);
   Vue.directive("sheng", {
       bind: function() {
       },
       update: function(value,oldValue) {
           console.log();
       },
       unbind: function() {
       }
   });
   let vm= new Vue({
        el:'#dizhi',
        data:{
            selectsheng:0,
            sheng:[],
            shi:[],
            qu:[],
            dizhi:<?=$dizhi?>,
            Url:"<?=Url::toRoute(['gouwuche/dizhi'],true)?>",
            vm_sheng:'',
            vm_shi:'',
            vm_qu:'',
        },

        mounted(){
            this.init_dizhi();
    //     this.baidu();
        },

        methods:{
            init_dizhi(){
                let self=this;
                this.dizhi.forEach(function (item,index) {
                    //sheng
                    let sheng_success=function (respone) {
                     self.dizhi[index].sheng=JSON.parse(respone.data.data);
                    };
                    self.post(1,1,sheng_success);
                    //shi
                    let shi_success=function (respone) {
                        self.dizhi[index].shi =JSON.parse(respone.data.data);
                    };
                    self.post(item.province,2,shi_success);

                    //qu
                    let qu_success=function (respone) {
                        self.dizhi[index]['qu'] =JSON.parse(respone.data.data);
                    };
                    self.post(item.city,3,qu_success);
                });
            },
            on_change_shi(index){
                let self=this;
                let shi_success=function (respone) {
                    self.$nextTick(function () {
                        self.dizhi[index].shi=0;
                        self.dizhi[index].shi =JSON.parse(respone.data.data);
                    });

                };
                console.log(event.target.value);
                this.post(event.target.value,2,shi_success);
            },
            on_change_qu(index){
             let qu_success=function (respone) {
                    this.dizhi[index].qu =JSON.parse(respone.data.data);
                };
                this.post(event.target.value,3,qu_success);
            },
            post(parent,region_type,success){
                this.$onchg2(this.Url,parent,region_type,success);
            },
            //完成
            baidu(){
                var self=this;
                var  map=this.$baidu_init("allmap",'');
                this.$baidu_ip(map);
                this.$baidu_qudizhi(map,"click", function(response){
                    let addComp = response.addressComponents;
                    self.sheng.forEach(function (item,index) {
                        addComp.province.match(item.region_name)?self.dizhi.province=item.region_id:0;
                    });
                    self.init_shi();
                    self.shi.forEach(function (item,index) {
                         addComp.city.match(item.region_name)?self.dizhi.city=item.region_id:0;
                    });
                    self.init_qu();
                    self.qu.forEach(function (item,index) {
                        addComp.district.match(item.region_name)?self.dizhi.district=item.region_id:0;
                    });
                    self.dizhi.address=addComp.street+ addComp.streetNumber;

                });
            }
        }
    });
   Vue.nextTick(function () {
      vm.init_dizhi();
   });

</script>

<style>
    .class_select_dizhi{
        border: #ccc 1px solid;
        width: 190px;
    }
    .white{
        background-color:#ffffff;
    }
    body, html{width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
    #allmap{height:500px;width:100%;}
    #r-result{width:100%; font-size:14px;}
</style>
