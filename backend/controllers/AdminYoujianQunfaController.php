<?php

namespace backend\controllers;

use backend\controllers\interfaces\t_week\YouJianInterface;

class AdminYoujianQunfaController extends \yii\web\Controller implements YouJianInterface
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGuanzhu()
    {
        return $this->render('guanzhu');
    }

    public function actionYoujianDingyue()
    {
        return $this->render('youjian-dingyue');
    }

    public function actionZazhi()
    {
        return $this->render('zazhi');
    }

    public function actionYoujianDuilie()
    {
        return $this->render('youjian-duilie');
    }
}
