<?php

namespace api\modules\v1\controllers;

class AGoodsController extends BaseController
{
    public $modelClass = 'api\models\Goods';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
