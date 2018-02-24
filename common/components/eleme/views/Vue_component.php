<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>使用JavaScript代替模板功能</title>
</head>
<body>
<div id="demo">
    <create-ul ></create-ul>
</div>
</body>
<script src="vue.js"></script>
<script>
    Vue.component('create-ul',{
        render:function (createElement) {
            if (this.items.length){
                return createElement('ul',this.items.map(function (item) {
                    return createElement('li',item.name)
                }))
            }
            else
            {
                return createElement('p','No items found')
            }
        },


    });
    new Vue({
        el:"#demo",
//        data:{
//            items:[
//                {name:"111111"},{name:"2222222"},{name:"333333"}
//            ]
//        }
    })
</script>
</html>