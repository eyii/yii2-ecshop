<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/23
 * Time: 15:02
 */

namespace common\components\ec\backend;


use Yii;
use yii\base\Widget;
use yii\helpers\Url;

class EcLogoWidget extends Widget
{
    public $url='all';
    public function init()
    {
        $this->url=Yii::getAlias($this->url);
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        //  parent::run(); // TODO: Change the autogenerated stub
        return ' <!-- Logo -->
        <a href="'.Url::toRoute(['site/index']).'" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">'.Yii::$app->params['appName'].'</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">'.Yii::$app->params['appName'].'</span></a>';
    }
}