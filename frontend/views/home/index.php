<?php
$url=Yii::getAlias('all');
use \common\components\ec\frontend\EcZuoquWidget;
use \common\components\common\YiiPdhcWidget;
?>
<div class="block clearfix">
<?=YiiPdhcWidget::widget(['cacheId' => 'zuoqu',
    'options' =>YiiPdhcWidget::getTimeDependency() ,
    'content' => EcZuoquWidget::widget()])?>
<?=$this->render('AreaR')?>
</div>

