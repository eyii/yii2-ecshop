<?php

namespace backend\controllers;

use backend\controllers\interfaces\t_week\XiTongInterface;
use yii\helpers\Url;

class AdminXitongShezhiController extends BaseController implements XiTongInterface
{
    public function actionIndex()
    {
        return $this->render('index');
    }


    /**
     * @return mixed
     */
    public function actionShangdianShezhi()
    {
        return $this->render('shangdian-shezhi');
    }

    public function actionHuiyuanRegShezhi()
    {
        return $this->render('huiyuan-reg-shezhi');
    }

    public function actionZhifuFangshi()
    {
        return $this->render('zhifu-fangshi');
    }

    public function actionPeisongFangshi()
    {
        return $this->redirect(Url::toRoute(['admin-peisong/index']));
    }

    /**
     * @return mixed
     */
    public function actionYoujianFuwuqiShezhi()
    {
        return $this->render('youjian-fuwuqi-shezhi');
    }

    public function actionDiquLiebiao()
    {
        return $this->render('diqu-liebiao');
    }

    public function actionJihuaRenwu()
    {
        return $this->render('jihua-renwu');
    }

    public function actionYouqingLianjie()
    {
        return $this->redirect(Url::toRoute(['admin-youqing-lianjie/index']));

    }

    public function actionWenjianQuanxianJianche()
    {
        return $this->render('wenjian-quanxian-jianche');
    }

    public function actionWenjianJiaoyan()
    {
        return $this->render('wenjian-jiaoyan');
    }

    public function actionZhuyeZhuguanggaoGuanli()
    {
        return $this->render('homezhu-guanggao-guanli');
    }

    public function actionZidingyiDaohanglan()
    {
        return $this->render('zidingyi-daohanglan');
    }

    public function actionShouquanZhengshu()
    {
        return $this->render('shouquan-zhengshu');
    }

    public function actionZhandianMap()
    {
        return $this->render('zhandian-map');
    }

    /**
     * @return mixed
     */
    public function actionYanzhengmaGuanli()
    {
        return $this->render('yanzhengma-guanli');
    }


}
