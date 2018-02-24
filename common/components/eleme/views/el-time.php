<div id="app">
    <template>
        <el-time-select placeholder="起始时间" v-model="startTime" :picker-options="{
      start: '08:30',
      step: '00:15',
      end: '18:30'
    }">
        </el-time-select>
        <el-time-select placeholder="结束时间" v-model="endTime" :picker-options="{
      start: '08:30',
      step: '00:15',
      end: '18:30',
      minTime: startTime
    }">
        </el-time-select>
    </template>
</div>
<script>
    //http://element.eleme.io/#/zh-CN/component/time-picker
    var Main = {
        data() {
            return {
                startTime: '',
                endTime: ''
            };
        }
    }
    var Ctor = Vue.extend(Main);
    new Ctor().$mount('#app');
</script>