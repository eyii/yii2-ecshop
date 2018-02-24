<?php

namespace backend\controllers;

use backend\controllers\interfaces\t_week\MobanInterface;

class AdminMobanController extends BaseController implements MobanInterface
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionMobanXuanze()
    {
        return $this->render('moban-xuanze');
    }

    public function actionShezhiMoban()
    {
        return $this->render('shezhi-moban');
    }

    public function actionKuXiangmuGuanli()
    {
        return $this->render('kuxiangmu-guanli');
    }

    public function actionYuyanxiangBianji()
    {
        return $this->render('yuyanxiang-bianji');
    }

    public function actionMobanShezhiBeifen()
    {
        return $this->render('moban-shezhi-beifen');
    }

    public function actionYoujianMoban()
    {
        return $this->render('youjian-moban');
    }
}
