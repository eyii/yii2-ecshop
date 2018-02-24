<?php
$url=Yii::getalias('all');
use \common\components\common\YiiPdhcWidget;
use common\components\ec\frontend\EcBlankWidget;
use common\components\ec\frontend\EcJingpinTuijianWidget;
use common\components\ec\frontend\EcZuoquWidget;

?>

<div class="block clearfix">
    <?=YiiPdhcWidget::widget(['cacheId' => 'zuoqu',
        'options' =>YiiPdhcWidget::getTimeDependency() ,
        'content' => EcZuoquWidget::widget()])?>
<div class=areaR>
<div class=box>
    <div class=box_1>
      <h3><span>商品筛选</span></h3>
    <div class=screeBox>
        <strong>品牌：</strong>
        <span>全部</span>
        <a href="http://ec.com/category.php?id=3&amp;brand=1&amp;price_min=0&amp;price_max=0">诺基亚</a>&nbsp;
        <a href="http://ec.com/category.php?id=3&amp;brand=2&amp;price_min=0&amp;price_max=0">摩托罗拉</a>&nbsp;
        <a href="http://ec.com/category.php?id=3&amp;brand=3&amp;price_min=0&amp;price_max=0">多普达</a>&nbsp;
        <a href="http://ec.com/category.php?id=3&amp;brand=4&amp;price_min=0&amp;price_max=0">飞利浦</a>&nbsp;
        <a href="http://ec.com/category.php?id=3&amp;brand=5&amp;price_min=0&amp;price_max=0">夏新</a>&nbsp;
        <a href="http://ec.com/category.php?id=3&amp;brand=6&amp;price_min=0&amp;price_max=0">三星</a>&nbsp;
        <a href="http://ec.com/category.php?id=3&amp;brand=7&amp;price_min=0&amp;price_max=0">索爱</a>&nbsp;
        <a href="http://ec.com/category.php?id=3&amp;brand=9&amp;price_min=0&amp;price_max=0">联想</a>&nbsp;
        <a href="http://ec.com/category.php?id=3&amp;brand=10&amp;price_min=0&amp;price_max=0">金立</a>&nbsp;
    </div>
    <div class=screeBox>
        <strong>价格：</strong>
        <span>全部</span>
        <a href="http://ec.com/category.php?id=3&amp;price_min=200&amp;price_max=1700">200&nbsp;-&nbsp;1700</a>&nbsp;
        <a href="http://ec.com/category.php?id=3&amp;price_min=1700&amp;price_max=3200">1700&nbsp;-&nbsp;3200</a>&nbsp;
        <a href="http://ec.com/category.php?id=3&amp;price_min=4700&amp;price_max=6200">4700&nbsp;-&nbsp;6200</a>&nbsp;
    </div>
    <div class=screeBox>
        <strong>颜色 :</strong>
        <span>全部</span>
        <a href="http://ec.com/category.php?id=3&amp;price_min=0&amp;price_max=0&amp;filter_attr=167.0.0.0">灰色</a>&nbsp;
         <a href="http://ec.com/category.php?id=3&amp;price_min=0&amp;price_max=0&amp;filter_attr=198.0.0.0">白色</a>&nbsp;
        <a href="http://ec.com/category.php?id=3&amp;price_min=0&amp;price_max=0&amp;filter_attr=197.0.0.0">金色</a>&nbsp;
      <a href="http://ec.com/category.php?id=3&amp;price_min=0&amp;price_max=0&amp;filter_attr=182.0.0.0">黑色</a>&nbsp;
    </div>
    <div class=screeBox>
        <strong>屏幕大小 :</strong>
        <span>全部</span>
        <a href="http://ec.com/category.php?id=3&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.229.0.0">1.75英寸</a>&nbsp;
        <a href="http://ec.com/category.php?id=3&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.216.0.0">2.0英寸</a>&nbsp;
        <a href="http://ec.com/category.php?id=3&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.223.0.0">2.2英寸</a>&nbsp;
        <a href="http://ec.com/category.php?id=3&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.200.0.0">2.8英寸</a>&nbsp;
    </div>
    <div class=screeBox>
        <strong>手机制式 :</strong>
        <span>全部</span>
        <a href="http://ec.com/category.php?id=3&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.202.0">CDMa</a>&nbsp;
        <a href="http://ec.com/category.php?id=3&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.183.0">GSM,850,900,1800,1900</a>&nbsp;
        <a href="http://ec.com/category.php?id=3&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.195.0">GSM,900,1800,1900,2100</a>&nbsp;
    </div>
    <div class=screeBox>
        <strong>外观样式 :</strong>
        <span>全部</span>
        <a href="http://ec.com/category.php?id=3&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.199">滑盖</a>&nbsp;
        <a href="http://ec.com/category.php?id=3&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0.0.186">直板</a>&nbsp;
    </div>

</div>
    <?=EcBlankWidget::widget()?>
    <!--精品-->
    <?=EcJingpinTuijianWidget::widget()?>
    <?=EcBlankWidget::widget()?>
</div>
</div>