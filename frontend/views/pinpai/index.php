<?php
$url=Yii::getAlias('all');
use \common\components\ec\frontend\EcZuoquWidget;
use \common\components\common\YiiPianduanHuancunWidget;
use \common\components\ec\frontend\EcPinpaiLiebiaoWidget;
?>
<div class="blank"></div>
<div class="block clearfix">

    <?=YiiPianduanHuancunWidget::widget(['cacheId' => 'zuoqu',
        'options' =>YiiPianduanHuancunWidget::getTimeDependency() ,
        'content' => EcZuoquWidget::widget()])?>

    <div class="AreaR">


        <div class="blank5"></div>
        <h3 class="border"><span>所有品牌</span></h3>
        <?=EcPinpaiLiebiaoWidget::widget()?>
        <div class="blank5"></div>
        <div class="dashed"></div>
    </div>

</div>
<div class="blank5"></div>
