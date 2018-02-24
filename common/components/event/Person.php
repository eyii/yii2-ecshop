<?php
namespace common\components\event;
use yii\base\Model;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/1
 * Time: 9:52
 */
class Person extends Model
{
    public function SayHello($parm){
        echo "你应该会看到:".$parm->data.'<br>';
    }

  /*  public function say_goodbye($parm){
        echo "你应该会看到:".$parm->data.'<br>';
    }*/
}