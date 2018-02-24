<link href="https://unpkg.com/animate.css@3.5.1/animate.min.css" rel="stylesheet" type="text/css">
<div id="example-3">
    <button @click="show = !show">
        Toggle render
    </button>
    <transition
        name="custom-classes-transition"
        enter-active-class="animated tada"
        leave-active-class="animated bounceOutRight"
    >
        <p v-if="show">hello</p>
    </transition>
</div>
<script>
    new Vue({
        el: '#example-3',
        data: {
            show: true
        }
    })
</script>