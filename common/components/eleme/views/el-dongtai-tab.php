<?php
$id=$this->context->id;
?>
<div id="dongtaitab<?=$id?>">
    <el-tabs v-model="editableTabsValue" type="card" editable @edit="handleTabsEdit">
        <el-tab-pane v-for="(item, index) in editableTabs" :label="item.title" :name="item.name">
            {{item.content}}
        </el-tab-pane>
    </el-tabs>
</div>
<script>

    var MainDongtaiTab<?=$id?> = {
        data() {
            return {
                editableTabsValue: '1',
                editableTabs: <?=$tabs?>,
                tabIndex: 2
            }
        },
        methods: {
            handleTabsEdit(targetName, action) {
                if (action === 'add') {
                    let newTabName = ++this.tabIndex + '';
                    this.editableTabs.push({
                        title: 'New Tab',
                        name: newTabName,
                        content: 'New Tab content'
                    });
                    this.editableTabsValue = newTabName;
                }
                if (action === 'remove') {
                    let tabs = this.editableTabs;
                    let activeName = this.editableTabsValue;
                    if (activeName === targetName) {
                        tabs.forEach((tab, index) => {
                            if (tab.name === targetName) {
                                let nextTab = tabs[index + 1] || tabs[index - 1];
                                if (nextTab) {
                                    activeName = nextTab.name;
                                }
                            }
                        });
                    }

                    this.editableTabsValue = activeName;
                    this.editableTabs = tabs.filter(tab => tab.name !== targetName);
                }
            }
        }
    }
    var CtorDongtaiTab<?=$id?> = Vue.extend(MainDongtaiTab<?=$id?>);
    new CtorDongtaiTab<?=$id?>().$mount('#dongtaitab<?=$id?>');
</script>