<div class="AreaL">
<?php
use \common\components\ec\frontend\EcGouwucheXiaoxiWidget;
use \common\components\ec\frontend\EcFenleiMenuWidget;
use \common\components\ec\frontend\EcXiaoshouPaihangWidget;
use \common\components\ec\frontend\EcDingdanChaxunWidget;
use \common\components\ec\frontend\EcFahuoChaxunWidget;
use \common\components\ec\frontend\EcYoujianDingyueWidget;
use \common\components\ec\frontend\EcBlankWidget;
use \common\components\ec\frontend\EcGonggaoWidget;


//公告区
echo EcGonggaoWidget::widget();
echo EcBlankWidget::widget();
//购物车
echo EcGouwucheXiaoxiWidget::widget();
echo EcBlankWidget::widget();
//分类菜单
echo EcFenleiMenuWidget::widget();
echo EcBlankWidget::widget();
//销售排行
echo EcXiaoshouPaihangWidget::widget();
echo EcBlankWidget::widget();
//订单查询
echo EcDingdanChaxunWidget::widget();
echo EcBlankWidget::widget();
//发货单查询
echo EcFahuoChaxunWidget::widget();
echo EcBlankWidget::widget();
//右键订阅
echo EcYoujianDingyueWidget::widget();

?>
</div>
