
function CLASS_API(){
    this.ajax=function (option){
        if(option.type && option.type.toLowerCase() == 'post'){
            var csrfToken = $('meta[name="_csrf"]').attr('content');
            if(!option.data){
                option.data = {};
            }
            option.data._csrf = csrfToken;
        }
        return $.ajax(option);
    };
}

function CLASS_VUE() {
    this.start=function (selector,dataObject) {
        var gb={el: selector, data: dataObject};
        return new Vue(gb);
    };
    this.startMethod=function (selector, dataObject, methodObject) {
        var gb={el: selector, data: dataObject,methods:methodObject};
        return new Vue(gb);
    };
    this.startComputed=function (selector,dataObject,computedObject) {
        var gb={el: selector, data: dataObject,computed:computedObject};
        return new Vue(gb);
    };
}
