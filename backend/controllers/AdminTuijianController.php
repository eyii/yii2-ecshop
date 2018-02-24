<?php

namespace backend\controllers;

use backend\controllers\interfaces\t_week\TuiJianInterface;
use common\models\guanli_quanxian\MenuHelper;


class AdminTuijianController extends BaseController implements TuiJianInterface
{
    public function actionIndex()
    {
        $controllers= $this->getAllController();
     /*   //创建权限对象 add加入
        $auth=\Yii::$app->authManager;
        $permission=$auth->createPermission('xxxx');
        $permission->description='路由';
        $auth->add($permission);
        //创建角色对象 add加入
        $role=$auth->createRole('administrators');
        $role->description='超级管理员组';
        $auth->add($role);
        //把角色授权给用户1
        $auth->assign($role,1);*/

       print_r(MenuHelper::getAssignedMenu(1));

        return $this->render('index',['controllers'=>$controllers]);
    }

    public function actionTuijianGuanli()
    {
        return $this->render('tuijian-guanli');
    }

    public function actionFenchengGuanli()
    {
        return $this->render('fencheng-guanli');
    }
}
