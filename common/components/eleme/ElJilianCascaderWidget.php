<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/22
 * Time: 13:34
 */

namespace common\components\eleme;


use yii\base\Widget;

class ElJilianCascaderWidget extends Widget
{
    public $label='text';
    public $children='nodes';
    public $value='value';
    public $options;
    public $extend;
    public $clearable='true';
    public $jsCode;
    public $size='large';
    public $popper_class="JilianClass";
    public $placeholder='请选择/搜索';
    public function init()
    {

        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        //  parent::run(); // TODO: Change the autogenerated stub
        return $this->render('el-jilian-cascader',['options'=>$this->options,'label'=>$this->label,
            'children'=>$this->children,
            'value'=>$this->value,
            'extend'=>$this->extend,
            'clearable'=>$this->clearable,
            'jsCode'=>$this->jsCode,
            'size'=>$this->size,
            'popper_class'=>$this->popper_class,
            'placeholder'=>$this->placeholder,
        ]);
    }
}