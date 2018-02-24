
<?



?>
<div id="test">
    <select v-model="selected">
        <option v-for="yx in YX" :value="yx.text">
            {{yx.text}}
        </option>
    </select>
<select v-model="sub">
        <option v-for="(zy, index) in selection" :value="zy.a" :selected="index == 0 ? true : false">
            {{zy.a}}
        </option>
    </select>

</div>
<script>

    new Vue({
        el: '#test',
        data: {
            selected: '请选择',
            sub:'',
            YX: <?=json_encode($controllers)?>
        },
        computed: {
            selection:function() {
                var that = this;
                var result=null;
                result= this.YX.filter(function(item) {
                    return item.text == that.selected;
                });

                if(result[0]!=undefined){
                    let data=result[0];
                    let {nodes}  =data;
                    return nodes;
                }else {
                    return null;
                }
             }
        }
    });
</script>