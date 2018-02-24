<?php
use \yii\helpers\Url;
?>
<div class="f_r log">
    <ul>
        <li class="userInfo">
            <font id="ECS_MEMBERZONE">
                <div id="append_parent"></div>

                <?
                if (Yii::$app->user->isGuest) {
                 echo '   欢迎光临本店&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.Url::toRoute(['login/index']).'"><img src="'.$url.'/images/home/bnt_log.gif"></a>
                            <a href="'.Url::toRoute(['reg/index']).'"><img src="'.$url.'/images/home/bnt_reg.gif"></a>';
                } else {
                  echo '<font style="position:relative; top:10px;">
                    您好，<font class="f4_b">'.Yii::$app->user->identity->username.'</font>, 欢迎您回来！
                    <a href="'.Url::toRoute(['/user/huanyingye']).'">用户中心</a>|
                    <a href="'.Url::toRoute(['/site/logout']).'"">退出</a>
                    </font>
            </font>';
                }?>


            </font>

        </li>
        <li id="topNav" class="clearfix">
            <a href="<?=Url::toRoute(['gouwuche/index'])?>">查看购物车</a>|
            <a href="<?=Url::toRoute(['xuangou/index'])?>">选购中心</a> |
            <a href="<?=Url::toRoute(['tag/index'])?>">标签云</a>|
            <a href="<?=Url::toRoute(['baojiadan/index'])?>">报价单</a>
            <div class="topNavR">

            </div>
        </li>
    </ul>
</div>
