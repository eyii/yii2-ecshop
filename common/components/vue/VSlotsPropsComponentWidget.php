<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/26
 * Time: 15:47
 */

namespace common\components\vue;


use yii\base\Widget;

class VSlotsPropsComponentWidget extends Widget
{
    public $buttonText='按钮文本';
    public $msg='提示的消息';
    public $btnClass="primary";
    public function init()
    {

        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {

        return $this->render('v-slots-props-component',['buttonText'=>$this->buttonText,'msg'=>$this->msg, 'btnClass' => $this->btnClass]);
    }
}