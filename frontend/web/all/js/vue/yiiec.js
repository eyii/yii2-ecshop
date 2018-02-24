YIIEC= function (Vue, options) {
    // 1. 添加全局方法或属性
 /*   Vue.myGlobalMethod = ...*/
    // 2. 添加全局资源
/*    Vue.directive('my-directive', {})*/
    var MyComponent =Vue.component('diydd',{
        template: '<div>A custom component!</div>'
    });
    // 3. 弹窗
    Vue.prototype.$tanchuang=function (title,tiaozhuanUrl,successMsg,catchMsg) {
        this.$confirm(title, '提示', {
            confirmButtonText: '确定',
            cancelButtonText: '取消',
            type: 'warning',

        }).then(() => {
            this.$message({
                type: 'success',
                message: successMsg==undefined?'操作成功':successMsg
            });
            tiaozhuanUrl!=undefined&&tiaozhuanUrl.match('[a-zA-z]+://[^\s]*')?window.location.href=tiaozhuanUrl:'';
        }).catch(() => {
            this.$message({
                type: 'info',
                message: catchMsg==undefined?'取消':catchMsg
            });
        });

    }
    //判断cllback是字符串还是参数 并且构造他
    Vue.prototype.$panduan_callback=function (callback) {
        let callback_function=function (respone) {
            this.$tanchuang(respone.data);
        };
        //判断字符串
        if (typeof callback=='string'){
            let successMsg=callback;
            callback=function (respone) {
                this.$tanchuang(successMsg);
            };
        }
        //判断函数
        if (typeof callback !='function'){
            callback =callback_function;
        }
        return callback
    };
    // 3. post提交到yii后端 自动得到csrf_token
    Vue.prototype.$post =function (Url,json_object_param,successCallbackOrMsg,errorCallbackOrMsg) {
        successCallbackOrMsg=this.$panduan_callback(successCallbackOrMsg);
        errorCallbackOrMsg=this.$panduan_callback(successCallbackOrMsg);
        let csrf_param=document.querySelector('meta[name=csrf-param]').content;
        let csrf_token=document.querySelector('meta[name=csrf-token]').content;
        json_object_param!=undefined?json_object_param[csrf_param]=csrf_token:'';
         this.$http.post(Url,json_object_param,{ emulateJSON: true}).then(successCallbackOrMsg, errorCallbackOrMsg);
    };

    // 3. post提交到yii后端 自动得到csrf_token
    Vue.prototype.$get =function (Url,param,successCallbackOrMsg,errorCallbackOrMsg) {
        successCallbackOrMsg=this.$panduan_callback(successCallbackOrMsg);
        errorCallbackOrMsg=this.$panduan_callback(successCallbackOrMsg);
        this.$http.get(Url,param,{ emulateJSON: true}).then(successCallbackOrMsg, errorCallbackOrMsg);
    }
    //百度地图初始化
    Vue.prototype.$baidu_init=function (allmap) {
        var map = new BMap.Map(allmap==undefined?'allmap':allmap);
        var point = new BMap.Point(116.331398,39.897445);
        map.centerAndZoom(point,11);
        map.addControl(new BMap.NavigationControl());               // 添加平移缩放控件
        map.addControl(new BMap.ScaleControl());                    // 添加比例尺控件
        map.addControl(new BMap.OverviewMapControl());              //添加缩略地图控件
        map.enableScrollWheelZoom();                            //启用滚轮放大缩小
        map.addControl(new BMap.MapTypeControl());          //添加地图类型控件
        map.disable3DBuilding();
          return map;
    };

    Vue.prototype.$baidu_qudizhi= function (baidu_map,type,callback){
       return baidu_map.addEventListener(type, function(e){
            var geoc = new BMap.Geocoder();
            var pt = e.point;
            geoc.getLocation(pt, callback);
        });
    }
    Vue.prototype.$baidu_zhongxin= function (baidu_map,city_name){
        //	var city = document.getElementById("cityName").value;
        var city =city_name;
        if(city != ""){
            baidu_map.centerAndZoom(city_name,11);      // 用城市名设置地图中心点
        }
    }

    Vue.prototype.$baidu_ip=function (map) {
        function myFun(result){
            var cityName = result.name;
            map.setCenter(cityName);
        }
        var myCity = new BMap.LocalCity();
        myCity.get(myFun);
    }
}