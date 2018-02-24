<?php
$url=Yii::getAlias('@all');
use common\components\ec\frontend\gouwuche\tijiaodingdan\EcFeiyongZongjiWidget;
use common\components\ec\frontend\gouwuche\tijiaodingdan\EcQitaXinxiWidget;
use common\components\ec\frontend\gouwuche\tijiaodingdan\EcShangpinBaozhuangWidget;
use \common\components\ec\frontend\gouwuche\tijiaodingdan\EcShangpinLiebiaoWidget;
use \common\components\ec\frontend\gouwuche\tijiaodingdan\EcShouhuorenXinxiWidget;
use \common\components\ec\frontend\gouwuche\tijiaodingdan\EcPeisongFangshiWidget;
use common\components\ec\frontend\gouwuche\tijiaodingdan\EcZhifuFangshiWidget;
use common\components\ec\frontend\gouwuche\tijiaodingdan\EcZhufuHekaWidget;

?>
<div class="blank"></div>
<div class="block">
<form action="http://ec.com/flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkOrderForm(this)">
        <?=EcShangpinLiebiaoWidget::widget(['cart_model' => $cart_model])?>
        <div class="blank"></div>
    <?=EcShouhuorenXinxiWidget::widget()?>
        <div class="blank"></div>
    <?=EcPeisongFangshiWidget::widget(['kuaidi_model' => $kuaidi_model])?>
        <div class="blank"></div>
    <?=EcZhifuFangshiWidget::widget()?>
        <div class="blank"></div>
    <?=EcShangpinBaozhuangWidget::widget()?>
        <div class="blank"></div>
    <?=EcZhufuHekaWidget::widget()?>
        <div class="blank"></div>
    <?=EcQitaXinxiWidget::widget()?>
        <div class="blank"></div>
    <?=EcFeiyongZongjiWidget::widget()?>
    </form>
</div>
<div class="blank5"></div>

