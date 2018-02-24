<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/31
 * Time: 11:33
 */

namespace yii\validators;


class ChineseValidator extends Validator{
    /**
     * @inheritdoc
     */
    protected function validateValue($value){
        if(preg_match('/^[\x{4e00}-\x{9fa5}]+$/u', $value)){
            return null;
        }else{
            $message = $this->message ? $this->message : $value . ' 不是中文';
			return [$message, []];
		}
    }
}
