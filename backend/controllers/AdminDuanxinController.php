<?php

namespace backend\controllers;

use backend\controllers\interfaces\t_week\DuanXinInterface;

class AdminDuanxinController extends BaseController implements DuanXinInterface
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTuihuodanList()
    {
        return $this->render('huotuidan-list');
    }
}
