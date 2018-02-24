<?php


use common\models\guanli_quanxian\MenuHelper;
use yii\helpers\Url;
use \common\components\eleme\ElTreeWidget;
?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel -->
        <!--  菜单左边————顶部-->
        <div class="user-panel">
            <div class="pull-left image">
                <span class="glyphicon glyphicon-user" style="font-size: 50px"></span>
            </div>

            <div class="pull-left info">
                <p><?=Yii::$app->user->identity->uname;?></p>
                <a href="<?=Url::toRoute('site/logout')?>"><i class="fa fa-circle text-success"></i>退出</a>
            </div>
        </div>
        <!--  菜单左边————顶部-->


        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">

            <!--首页-->
            <li <?=' class="active" ' ?>>
                <a href="<?=Url::to(['site/index'])?>">
                    <i class="fa fa-dashboard"></i>
                    <span>首页</span>
                </a>
            </li>

            <?=\common\components\common\YiiPdhcWidget::widget([
                    'cacheId' => 'ElTreeWidget',
                'options'=>['duration' => 3600],
                'content' =>ElTreeWidget::widget(['menuData'=>MenuHelper::getAssignedMenu(Yii::$app->user->id)]) ])?>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>



