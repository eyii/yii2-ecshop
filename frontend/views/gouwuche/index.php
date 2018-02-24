<?php
$url=Yii::getAlias('all');
use common\components\common\YiiPdhcWidget;
use \common\components\ec\frontend\EcGouwucheShangpinWidget;
?>
<div class="blank"></div>
<div class="block">
<div class="flowBox">
    <h6><span>商品列表1 </span></h6>
        <form id="formCart" name="formCart" method="post" action="<?=\yii\helpers\Url::toRoute(['gouwuche/jiaru-gouwuche'])?>">
          <?=YiiPdhcWidget::widget([
                  'cacheId' =>'gouwuche',
                'content' =>EcGouwucheShangpinWidget::widget(['cartModel'=>$cartModel]),
                'options' =>YiiPdhcWidget::getTimeDependency()
            ])?>

          <input type="hidden" name="step" value="update_cart">
        </form>
        <table width="99%" align="center" border="0" cellpadding="5" cellspacing="0" bgcolor="#dddddd">
          <tbody>
          <tr>
            <td bgcolor="#ffffff"><a href="http://ec.com/"><img src="<?=$url?>/images/home/continue.gif" alt="continue"></a></td>
            <td bgcolor="#ffffff" align="right"><a href="<?=\yii\helpers\Url::toRoute(['gouwuche/tijiao-dingdan'])?>"><img src="<?=$url?>/images/home/checkout.gif" alt="checkout"></a></td>
          </tr>
        </tbody>
        </table>
  </div>
<div class="blank5">

</div>


