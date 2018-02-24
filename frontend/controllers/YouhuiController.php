<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/18
 * Time: 4:08
 */

namespace frontend\controllers;




class YouhuiController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}