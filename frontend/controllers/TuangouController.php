<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/18
 * Time: 3:56
 */

namespace frontend\controllers;



class TuangouController extends BaseController
{
    public function actionIndex(){

        return $this->render('index');
    }
}