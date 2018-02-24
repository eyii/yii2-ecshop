<?php

use \yii\helpers\Url;
use \common\components\ec\frontend\EcMainNavWidget;
use \common\components\ec\frontend\EcSearchWidget;
use \common\components\ec\frontend\EcHeaderLoginWidget;
use \common\components\common\YiiPdhcWidget;
?>

<!--顶部导航-->
<div class="block clearfix">
    <div class="f_l"><a href="http://ec.com/index.php" name="top"><img src="<?=$url?>/images/home/logo.gif"></a></div>
    <?=EcHeaderLoginWidget::widget()?>
</div>
<!--顶部导航-->
<div class="blank"></div>

<?=YiiPdhcWidget::widget(['cacheId' => 'zhuye_toubu','options' =>YiiPdhcWidget::getTimeDependency() ,'content' => EcMainNavWidget::widget()])?>
<?=YiiPdhcWidget::widget(['cacheId' => 'zhuye_sousuo','options' =>YiiPdhcWidget::getTimeDependency() ,'content' => EcSearchWidget::widget()])?>



<div class="block box">
    <div id="ur_here">
        当前位置: <a href="<?=Url::toRoute(['home/index'])?>">首页</a> <code>&gt;</code> 购物流程 </div>
</div>
<!--搜索栏-->