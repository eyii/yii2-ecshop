<?php
use \common\components\ec\frontend\EcGouwucheXiaoxiWidget;
use \common\components\ec\frontend\EcFenleiMenuWidget;
use \common\components\ec\frontend\EcXiaoshouPaihangWidget;
use \common\components\ec\frontend\EcDingdanChaxunWidget;
use \common\components\ec\frontend\EcFahuoChaxunWidget;
use \common\components\ec\frontend\EcYoujianDingyueWidget;
use \common\components\ec\frontend\EcBlankWidget;
use \common\components\ec\frontend\EcGonggaoWidget;

echo '<div class="AreaL">';

    echo EcGonggaoWidget::widget();
    echo EcBlankWidget::widget();
    echo EcGouwucheXiaoxiWidget::widget();
    echo EcBlankWidget::widget();
    echo EcFenleiMenuWidget::widget();
    echo EcBlankWidget::widget();
    echo EcXiaoshouPaihangWidget::widget();
    echo EcBlankWidget::widget();
    echo EcDingdanChaxunWidget::widget();
    echo EcBlankWidget::widget();
    echo EcFahuoChaxunWidget::widget();
    echo EcBlankWidget::widget();
    echo EcYoujianDingyueWidget::widget();
echo '</div>';

