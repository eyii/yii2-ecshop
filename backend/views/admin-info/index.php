<div id="app">
    <p>{{message}}</p>
    <p v-html="html"></p>
    <p v-text="text"></p>

</div>

<script>
    let app = new Vue({
        el: "#app",
        data: {
            message: "hello,word,<b>{{}}</b>通过双括号绑定!",
            html: "通过<b>v-html</b>方式绑定,html标签在渲染的时候被解析了。",
            text: "通过<b>v-text</b>方式绑定,html标签在渲染的时候被源码输出了。",
        }
    });
</script>