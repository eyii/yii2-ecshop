<?php
$url=Yii::getAlias('all');
use \common\components\eleme\ElCarouselWidget;
use \common\components\ec\frontend\EcBlankWidget;
use \common\components\ec\frontend\EcPinPaiWidget;
use \common\components\ec\frontend\EcJingpinTuijianWidget;
use \common\components\ec\frontend\EcXinpinWidget;
use \common\components\ec\frontend\EcReMaiWidget;
use \common\components\ec\frontend\EcKuaixunWidget;
?>
<div class="AreaR">

    <div class="box clearfix">
        <div class="box_1 clearfix">
            <?=ElCarouselWidget::widget(['height'=>'200px'])?>
            <?=EcKuaixunWidget::widget()?>

        </div>
    </div>
        <?=EcBlankWidget::widget()?>
 <div class="clearfix">
        <!--品牌-->
        <?=EcPinPaiWidget::widget()?>
</div>
        <?=EcBlankWidget::widget()?>
            <!--精品-->
        <?=EcJingpinTuijianWidget::widget()?>

        <?=EcBlankWidget::widget()?>
  <!--      新品-->
        <?=EcXinpinWidget::widget()?>

        <?=EcBlankWidget::widget()?>
      <!--  热卖-->
        <?=EcReMaiWidget::widget()?>

        <?=EcBlankWidget::widget()?>

</div>