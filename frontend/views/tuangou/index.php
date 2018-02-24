<?php
$url=Yii::getAlias('all');
?>

<DIV class="block clearfix">
    <?=\common\components\ec\frontend\EcZuoquWidget::widget()?>
    <DIV class=AreaR>
    <DIV class=blank5></DIV>
    <DIV class=box>
    <DIV class=box_1>
    <H3><SPAN>团购商品：</SPAN></H3>
    <DIV class=boxCenterList>
    <UL class="group clearfix">
      <LI style="TEXT-ALIGN: center; MARGIN-RIGHT: 8px"><A
      href="http://ec.com/group_buy.php?act=view&amp;id=8"><IMG
      style="VERTICAL-ALIGN: middle" border=0 alt=P806
      src="<?=$url?>/images/home/24_thumb_G_1241971981429.jpg"></A> </LI>
      <LI style="LINE-HEIGHT: 23px; WIDTH: 555px">团购商品：<A class=f5
      href="http://ec.com/group_buy.php?act=view&amp;id=8">P806</A><BR>起止时间：2009-05-15
      08:00:00 -- 2010-05-26 08:00:00<BR>价格阶梯：<BR>
      <TABLE border=0 cellSpacing=1 cellPadding=5 width="100%" bgColor=#dddddd>
        <TBODY>
        <TR>
          <TH bgColor=#ffffff width="29%">数量</TH>
          <TH bgColor=#ffffff width="71%">价格</TH></TR>
        <TR>
          <TD bgColor=#ffffff width="29%">5</TD>
          <TD bgColor=#ffffff width="71%">￥1910元</TD></TR>
        <TR>
          <TD bgColor=#ffffff width="29%">10</TD>
          <TD bgColor=#ffffff width="71%">￥1860元</TD>
        </TR>
        </TBODY>
      </TABLE>
      </LI></UL></DIV></DIV></DIV>
    <DIV class=blank5></DIV>
    <FORM method=get name=selectPageForm action=/group_buy.php>
    <DIV id=pager class=pagebar><SPAN style="MARGIN-RIGHT: 10px" class="f_l f6">总计
    <B>1</B> 个记录</SPAN> </DIV></FORM>

    </DIV>
</DIV>
