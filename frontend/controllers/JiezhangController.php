<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/18
 * Time: 4:17
 */

namespace frontend\controllers;



class JiezhangController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}