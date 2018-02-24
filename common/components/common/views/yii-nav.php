<?php
use yii\bootstrap\NavBar;
use yii\helpers\Html;
/* @var $this yii\web\View */
use yii\bootstrap\Nav;

NavBar::begin([
    'brandLabel' => '首页',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
        'id' => 'menu-top',
    ],
    //'brandOptions' => ['class' => 'fa fa-flag fa-2x pull-left'],

]);

if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => '登陆', 'url' => ['/site/login']];
} else {
//循环出菜单栏
    if(isset($nav)){
        for($n=0;$n<count($nav);$n++){
            $_v = explode('|',$nav[$n]);
            $menuItems[] = [
                'label' => $_v[1],
                'url' => ["/$_v[2]/default/index",'id'=>$_v[0],'en'=>$_v[2]],
                //'linkOptions' => ['class' => 'active'],
                //'options' => ["id"=>"_M$n"],
            ];

        }
    }
    $menuItems[] = [
        'label' => ' Log out',
        'url' => ['/site/logout'],
        'linkOptions' => ['data-method' => 'post','class'=>'fa fa-sign-out'],
    ];

}
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => $menuItems,

]);
NavBar::end();