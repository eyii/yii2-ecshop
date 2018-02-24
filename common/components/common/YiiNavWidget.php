<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/27
 * Time: 1:10
 */

namespace common\components\common;


use yii\base\Widget;
use yii\bootstrap\Nav;

class YiiNavWidget extends Widget
{
    public function run()
    {
        $nav = Nav::find()
            ->where(['status' => 1])
            ->orderBy('sort ASC')
            ->all();
        foreach($nav as $_v){
            $navs[] = $_v->id.'|'.$_v->nav_cn.'|'.$_v->nav_en;
        }
        // 渲染视图
        return $this->render('yii-nav', [
            'nav'=>$navs,
        ]);
    }
}