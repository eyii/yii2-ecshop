<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/4
 * Time: 10:09
 */

namespace common\models;


use yii\web\User;

class UserExtend extends User
{
    public function can($permissionName, $params = [], $allowCaching = true)
    {
        if($this->isGuest){
            return false; //都没登陆当然不通过了
        }
        $identity = $this->identity;
        if($permissionName == 'vip1'){
            return $identity->vip == 1;
        }elseif($permissionName == 'vip2'){
            return $identity->vip == 2;
        }
        return parent::can($permissionName, $params, $allowCaching); // TODO: Change the autogenerated stub
    }

    public function behaviors(){
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['vip1'],
                    ],
                ],
            ],
        ];
    }
}