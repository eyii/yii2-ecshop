<?php
use \common\components\ec\frontend\EcBlankWidget;
?>

<div class="box">
    <div class="box_1">
        <h3><span>订单查询</span></h3>
        <div class="boxCenterList">
            <form name="ecsOrderQuery">
                <input type="text" name="order_sn" class="inputBg"><br>
               <?=EcBlankWidget::widget()?>
                <input type="button" value="查询该订单号" class="bnt_blue_2" onclick="orderQuery()">
            </form>
            <div id="ECS_ORDER_QUERY" style="margin-top:8px;">
            </div>
        </div>
    </div>
</div>