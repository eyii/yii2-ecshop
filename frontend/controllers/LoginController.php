<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/18
 * Time: 3:53
 */

namespace frontend\controllers;


use yii\web\Controller;

class LoginController extends BaseController
{
        public function actionIndex(){

            return $this->render('index');
        }

        public function actionAbout(){
            return $this->render('about');
        }
}