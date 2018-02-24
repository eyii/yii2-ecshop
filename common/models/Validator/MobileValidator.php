<?php
namespace common\models\Validator;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/13
 * Time: 14:33
 */

use yii\validators\Validator;

/**
 *     在model里写
public $phone = '';

public function rules(){
return [
['phone', 'yii\validators\MobileValidator', 'message' => '手机号格式不正确'],
];
}

 * Class MobileValidator
 * @package common\models\Validator
 */
class MobileValidator extends Validator
{

    protected function validateValue($value){
        if(preg_match('/^1[0-9]{10}$/', $value)){
            return null;
        }else{
            $message = $this->message ? $this->message : '手机号校验失败';
            return [$message, []];
        }
    }

}