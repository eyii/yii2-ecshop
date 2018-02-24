<?php

namespace backend\controllers;

use backend\controllers\interfaces\o_week\BaoBiaoInterface;

class AdminBaobiaoTongjiController extends BaseController implements BaoBiaoInterface
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLiuliangFenxi()
    {
        return $this->render('liuliang-fenxi');
    }

    public function actionKehuTongji()
    {
        return $this->render('kehu-tongji');
    }

    public function actionDingdanTongji()
    {
        return $this->render('dingdan-tongji');
    }

    public function actionXiaoshouZhuangkuang()
    {
        return $this->render('xiaoshou-zhuangkuang');
    }

    public function actionHuiyuanPaihang()
    {
        return $this->render('huiyuan-paihang');
    }

    public function actionXiaoshouMingxi()
    {
        return $this->render('xiaoshou-mingxi');
    }

    public function actionSousuoYinqing()
    {
        return $this->render('sousuo-yinqing');
    }

    public function actionXiaoshouPaihang()
    {
        return $this->render('xiaoshou-paihang');
    }

    public function actionFangwenGoumaili()
    {
        return $this->render('fangwen-goumaili');
    }

    public function actionZhanwaiToufangJs()
    {
        return $this->render('zhanwai-toufang-js');
    }
}
