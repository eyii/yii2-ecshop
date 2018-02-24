<?php

namespace frontend\controllers;

use common\models\guanli_shangpin\MemberPriceModel;

class HomeController extends BaseController
{
    public function actionIndex()
    {
      return $this->render('index');
    }

}
