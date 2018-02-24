<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/19
 * Time: 16:27
 */

namespace backend\controllers;



use common\components\event\Person;


class RbacController extends BaseController
{

    public function actionIndex()
    {
       $controllers= $this->getAllController();
        //创建权限对象 add加入
        $auth=\Yii::$app->authManager;
        $permission=$auth->createPermission('xxxx');
        $permission->description='路由';
        $auth->add($permission);

        //创建角色对象 add加入
        $role=$auth->createRole('administrators');
        $role->description='超级管理员组';
        $auth->add($role);
        //把角色授权给用户1
        $auth->assign($role,1);
        return $this->render('index');
    }

    public function actionEvent(){
        echo '这是事件处理<br/>';

        $person = new Person();

        $this->on('SayHellod', [$person,'SayHello'],'你好，朋友');


        $this->on('GoodNight', function(){
            echo '晚安！';
        });


        $this->trigger('SayHellod');
    }
}