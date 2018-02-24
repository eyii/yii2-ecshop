<?php
use common\components\eleme\ElNavMenuWidget;
use yii\helpers\Url;

use \common\components\ec\backend\EcLogoWidget;
?>
<header class="main-header">
   <?=EcLogoWidget::widget()?>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <?=ElNavMenuWidget::widget()?>
        </div>
    </nav>
</header>