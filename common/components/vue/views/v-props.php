<div id="app">
    <add v-bind:btn="h"></add>
</div>
<script>
    var vm = new Vue({
        el: '#app',
        data: {
            h: "hello"
        },
        components: {
            "add": {
                props: ['btn'],
                template: "<button>btn：{{btn}}</button>",
                data: function () {
                    return {'btn': "123"};  //子组件同名的值被覆盖了
                }
            }
        }
    });
</script>