Vue.use(YIIEC);
YII_VUE_DIZHI=function (Vue, options) {
    // 1. 添加全局方法或属性
 /*   Vue.myGlobalMethod = ...*/
    // 2. 添加全局资源
/*    Vue.directive('my-directive', {})*/

    Vue.prototype.$dizhi=function () {

    };
    Vue.prototype.$init_sheng=function (parent) {

    };
    Vue.prototype.$onchg2=function(Url,parent,region_type,successCallbackOrMsg){
        let param={};
        param.parent_id=parent;
        param.region_type=region_type;
        this.$post (Url,param,successCallbackOrMsg,null);
    }
}