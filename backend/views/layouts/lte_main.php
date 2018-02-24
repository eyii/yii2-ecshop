<?php
//use Yii;


use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use \common\components\ec\backend\EcBackendFooterWidget;
use \common\components\ec\backend\EcLteDelDialogWidget;
use \common\components\eleme\ElNavMenuWidget;
use \common\components\ec\backend\EcLogoWidget;
$this->title = Yii::$app->params['appName'];
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html>
    <head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?=$this->title?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="<?=Url::base()?>/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="<?=Url::base()?>/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- jQuery 2.2.3 -->
    <?php if(isset($this->blocks['header']) == true):?>
            <?= $this->blocks['header'] ?>
        <?php endif;?>
        <meta charset="<?= Yii::$app->charset ?>">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1">-->
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?=$this->head() ?>

    </head>
    <body class="hold-transition skin-blue-light sidebar-mini">
    <?php $this->beginBody()?>

    <div class="wrapper">

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

        <?=$this->render('lte_menu')?>



        <div class="content-wrapper">
            <section class="content-header">

                <ol class="breadcrumb breadcrumb-quirk">
                    <li><a href="<?=Url::toRoute('site/index')?>"><i class="fa fa-dashboard"></i> 首页</a></li>
                 </ol>
            </section>

          <?= $content ?>

        </div>
        <!-- /.content-wrapper -->

       <?=EcBackendFooterWidget::widget()?>
    <?php $this->endBody()?>
    </body>

    <?php if(isset($this->blocks['footer']) == true):?>
        <?= $this->blocks['footer'] ?>
    <?php endif;?>
    </html>
<?php $this->endPage() ?>