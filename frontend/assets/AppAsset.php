<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

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

        'css/adminsite.css',
        'all/css/home/style.css',
        'all/css/element.css',
        'all/css/ec.css',
        'all/css/app.css'

    ];

    public $js = [
        'all/js/vue/vue.js',
        'all/js/vue/vue-resource.min.js',
        'all/js/vue/eleme.js',
        'all/js/vue/yiiec.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
       'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD
    ];
}
