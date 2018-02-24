<?php
use \yii\helpers\Url;
$URL=Yii::getAlias('all');
?>
<div class="AreaL">
    <div class="box">
        <div class="box_1">
            <div class="userCenterBox">
                <div class="userMenu">
                    <a href="<?=Url::toRoute(['user/huanyingye'])?>"><img src="<?=$URL?>/images/ec/user/u1.gif"> 欢迎页</a>
                    <a href="<?=Url::toRoute(['user/yonghu-xinxi'])?>" class="curs"><img src="<?=$URL?>/images/ec/user/u2.gif"> 用户信息</a>
                    <a href="<?=Url::toRoute(['user/wode-dingdan'])?>"><img src="<?=$URL?>/images/ec/user/u3.gif"> 我的订单</a>
                    <a href="<?=Url::toRoute(['user/shouhuo-dizhi'])?>"><img src="<?=$URL?>/images/ec/user/u4.gif"> 收货地址</a>
                    <a href="<?=Url::toRoute(['user/wode-shoucang'])?>"><img src="<?=$URL?>/images/ec/user/u5.gif"> 我的收藏</a>
                    <a href="<?=Url::toRoute(['user/wode-liuyan'])?>"><img src="<?=$URL?>/images/ec/user/u6.gif"> 我的留言</a>
                    <a href="<?=Url::toRoute(['user/wode-biaoqian'])?>"><img src="<?=$URL?>/images/ec/user/u7.gif"> 我的标签</a>
                    <a href="<?=Url::toRoute(['user/quehuo-dengji'])?>"><img src="<?=$URL?>/images/ec/user/u8.gif"> 缺货登记</a>
                    <a href="<?=Url::toRoute(['user/wode-hongbao'])?>"><img src="<?=$URL?>/images/ec/user/u9.gif"> 我的红包</a>
                    <a href="<?=Url::toRoute(['user/wode-tuijian'])?>"><img src="<?=$URL?>/images/ec/user/u10.gif"> 我的推荐</a>
                    <a href="<?=Url::toRoute(['user/wode-pinglun'])?>"><img src="<?=$URL?>/images/ec/user/u11.gif"> 我的评论</a>
                    <!--<a href="user.php?act=group_buy">我的团购</a>-->
                    <a href="<?=Url::toRoute(['user/genzong-baoguo'])?>"><img src="<?=$URL?>/images/ec/user/u12.gif"> 跟踪包裹</a>
                    <a href="<?=Url::toRoute(['user/zijin-guanli'])?>"><img src="<?=$URL?>/images/ec/user/u13.gif"> 资金管理</a>
                    <a href="<?=Url::toRoute(['site/logout'])?>" style="background:none; text-align:right; margin-right:10px;">
                        <img src="<?=$URL?>/images/ec/user/bnt_sign.gif">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>