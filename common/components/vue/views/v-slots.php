<div id="slots">
    <child :level="2">Hello world!</child>
</div>
<script>

    Vue.component('child', {
        render: function (createElement) {
            return createElement(
                'h' + this.level,   // tag name 标签名称
                this.$slots.default // 子组件中的阵列
            )
        },
        props: {
            level: {
                type: Number,
                required: true
            }
        }
    })

    new Vue({
        el:"#slots"
    })

</script>