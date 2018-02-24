<?php
$url=Yii::getAlias('all');
use \common\components\ec\frontend\EcShangpinXinxiWidget;
use\common\components\ec\frontend\EcZuoquWidget;
use \common\components\ec\frontend\EcGoumaiciShangpinderenHaigoumaiWidget;
use \common\components\ec\frontend\EcGoumaiJiluWidget;
use \common\components\ec\frontend\EcLiuyanShangpinWidget;
use \common\components\ec\frontend\EcShangpinMiaosuWidget;
use \common\components\ec\frontend\EcShangpinBiaoqianWidget;
?>
<div class="block clearfix">
            <?=EcZuoquWidget::widget()?>
    <div class="AreaR">
        <div class="blank"></div>
        <?=EcShangpinXinxiWidget::widget(['model'=>$model,'rank_model'=>$rank_model,'guige_model'=>$guige_model])?>
        <?=EcShangpinMiaosuWidget::widget(['items'=>$model])?>
        <div class="blank"></div>
        <?=EcShangpinBiaoqianWidget::widget()?>
        <div class="blank5"></div>
        <?=EcGoumaiciShangpinderenHaigoumaiWidget::widget()?>
        <div class="blank5"></div>
        <?=EcGoumaiJiluWidget::widget()?>
        <?=EcLiuyanShangpinWidget::widget()?>
    </div>
</div>
