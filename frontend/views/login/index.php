<?php

use \common\components\ec\frontend\EcYonghuDengluWidget;
use \common\components\ec\frontend\EcYonghuZhuceWidget;
?>

<div class="block">

        <div class="flowBox">
        <table width="99%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
          <tbody>
          <tr>
              <!--登录-->
            <td width="50%" valign="top" bgcolor="#ffffff">
                <?=EcYonghuDengluWidget::widget()?>
            </td>
              <!--注册-->
            <td valign="top" bgcolor="#ffffff">
                <?=EcYonghuZhuceWidget::widget()?>
            </td>
          </tr>
          </tbody>
        </table>
        </div>
</div>
