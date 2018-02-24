

<div id="app">
    <div class="top">
        <ul>
            <li><a href="javascript:void(0)" rel="external nofollow" rel="external nofollow" rel="external nofollow" @click='tabToggle(tab01Text);'>{{tab01Text}}</a></li>
            <li><a href="javascript:void(0)" rel="external nofollow" rel="external nofollow" rel="external nofollow" @click='tabToggle(tab02Text);'>{{tab02Text}}</a></li>
            <li><a href="javascript:void(0)" rel="external nofollow" rel="external nofollow" rel="external nofollow" @click='tabToggle(tab03Text);'>{{tab03Text}}</a></li>
        </ul>
    </div>
    <div class="bottom">
        <component :is='currentView' keep-alive></component>
    </div>
</div>

<script>
    var tab01 = Vue.extend({
        template:'<p>This is tab01</p>'
    })
    var tab02 = Vue.extend({
        template:'<p>This is tab02</p>'
    })
    var tab03 = Vue.extend({
        template:'<p>This is tab03</p>'
    })
    const app = new Vue({
        el: '#app',
        data: {
            tab01Text: 'tab01',
            tab02Text: 'tab02',
            tab03Text: 'tab03',
            currentView: 'tab01'
        },
        components: {
            tab01: tab01,
            tab02: tab02,
            tab03: tab03
        },
        methods: {
            tabToggle: function (tabText) {
                this.currentView = tabText
                // 传统写法
          //      this.$http.post('/someUrl', [body], [options]).then(successCallback, errorCallback);
            },
            qingkong_gouwuche(){
                var url='<?=Url::toRoute(['gouwuche/qingkong-gouwuche'])?>';
                var successCallback=function (data) {
                    if(data.data.code==1){
                        alert('清空购物车成功');
                    }
                };
                var errorCallback=function (data) {
                    console.log(data);
                };
                this.$http.get(url,null,{dataType:'json'}).then(successCallback, errorCallback);
            }

        }
    });
</script>

<style type="text/css">
    *{padding: 0;margin: 0}
    #app{
        width: 500px;height: 300px;margin: 0 auto;background-color: #ddd;
    }
    .top{
        height: 50px;line-height: 50px;width: 100%;background-color: #999;
    }
    .top ul li{display: inline-block;margin:0 10px;}
    .top ul li a{text-decoration: none;color: white;}
    .bottom{
    }
</style>