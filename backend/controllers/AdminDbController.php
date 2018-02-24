<?php

namespace backend\controllers;

class AdminDbController extends BaseController
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
