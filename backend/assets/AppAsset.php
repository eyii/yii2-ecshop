<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        /*ec*/
//    'all/css/ec/general.css',
    //   'all/css/ec/main.css',
     /*   Bootstrap 3.3.6*/
      '/bootstrap/css/bootstrap.min.css',
       /* Font Awesome*/
    '/libs/font-awesome.min.css',
        /* Ionicons*/
      '/libs/ionicons.min.css',
        /*Theme style*/
     '/dist/css/AdminLTE.min.css',
        /*AdminLTE Skins*/
      '/dist/css/skins/_all-skins.min.css',
        /*iCheck*/
 //       '/plugins/iCheck/flat/blue.css',
        /*Morris chart*/
 //       '/plugins/morris/morris.css',
        /*jvectormap*/
  //      '/plugins/jvectormap/jquery-jvectormap-1.2.2.css',
        /*Date Picker*/
  //      '/plugins/datepicker/datepicker3.css',
        /*Daterange picker*/
   //     '/plugins/daterangepicker/daterangepicker.css',
        /*bootstrap wysihtml5 - text editor*/
     //   '/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
        /* DataTables*/
     //   '/plugins/datatables/dataTables.bootstrap.css',
       // actionAddShangPin()
      //  'all/css/ec/calendar.css',
       // element
        'all/css/ec/element.css',
        'all/css/ec/app.css',

    ];
/*
 * HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
 * WARNING: Respond.js doesn't work if you view the page via file*/
    public $js = [
        /*[if lt IE 9]*/
        //   '/html5shiv/3.7.3/html5shiv.min.js',
        // '/respond/1.4.2/respond.min.js',
        /*[endif]*/
        /*jQuery 2.2.3*/


     //  '/plugins/jQuery/jquery-2.2.3.min.js',
        'all/js/vue/vue.js',
        'all/js/global/app.js',
        'all/js/interface/interface.js',
        // element
        'all/js/vue/eleme.js'
       /* lte*/





    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}
