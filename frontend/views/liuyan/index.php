<?php
$url=Yii::getAlias('all');

use common\components\ec\frontend\EcZuoquWidget;
use \common\components\common\YiiPdhcWidget;
?>
<div class="block clearfix">
    <?=YiiPdhcWidget::widget(['cacheId' => 'zuoqu',
        'options' =>YiiPdhcWidget::getTimeDependency() ,
        'content' => EcZuoquWidget::widget()])?>
<div class=AreaR>
<div class=box>
<div class=box_1>
<H3><span>留言板</span></H3>
<div class=boxCenterList>
<div style="POSITION: relative; WIDTH: 100%" 
class=f_l>[<B>评论</B>]&nbsp;ecshop：评论了<B><A class=f3 title=摩托罗拉A810 
href="http://ec.com/goods.php?id=12" target=_blank>摩托罗拉A810</A></B><FONT 
class=f4></FONT> (2009-05-12 21:45:20)<IMG 
style="POSITION: absolute; RIGHT: 0px" alt=5 src="<?=$url?>/images/home/stars5.gif">
</div>
<div class="msgBottomBorder word">很好，我很喜欢<BR></div></div></div></div>
<div class=blank5></div>
<FORM method=get name=selectPageForm action=/message.php>
<div id=pager class=pagebar><span style="MARGIN-RIGHT: 10px" class="f_l f6">总计 
<B>1</B> 个记录</span> </div></FORM>


<div class=blank5></div>
<div class=box>
<div class=box_1>
<H3><span>我要留言</span></H3>
<div class=boxCenterList>
<FORM onsubmit="return submitMsgBoard(this)" method=post name=formMsg action=message.php>
<TABLE border=0 cellPadding=3 width="100%">
  <TBODY>
  <tr>
    <td align=right>用户名</td>
    <td>匿名用户 </td></tr>
  <tr>
    <td align=right>电子邮件地址</td>
    <td><input class=inputBg name=user_email></td></tr>
  <tr>
    <td align=right>留言类型</td>
    <td><input value=0 CHECKED type=radio name=msg_type> 留言 <input value=1 
      type=radio name=msg_type> 投诉 <input value=2 type=radio name=msg_type> 询问 
      <input value=3 type=radio name=msg_type> 售后 <input value=4 type=radio 
      name=msg_type> 求购 </td></tr>
  <tr>
    <td align=right>主题</td>
    <td><input class=inputBg size=30 name=msg_title></td></tr>
  <tr>
    <td align=right>验证码</td>
    <td><input class=inputBg size=8 name=captcha> <IMG 
      style="VERTICAL-ALIGN: middle; CURSOR: pointer" 
      onclick="this.src='captcha.php?'+Math.random()" alt=captcha 
      src="<?=$url?>/images/home/captcha.png"> </td></tr>
  <tr>
    <td vAlign=top align=right>留言内容</td>
    <td><TEXTAREA style="BORDER-BOTTOM: #ccc 1px solid; BORDER-LEFT: #ccc 1px solid; BORDER-TOP: #ccc 1px solid; BORDER-RIGHT: #ccc 1px solid" wrap=virtual rows=4 cols=50 name=msg_content></TEXTAREA></td></tr>
  <tr>
    <td>&nbsp;</td>
    <td><input value=act_add_message type=hidden name=act>
        <input class=bnt_blue_1 value=我要留言 type=submit>
</td></tr></TBODY></TABLE></FORM>

</div></div></div></div>
</div>
