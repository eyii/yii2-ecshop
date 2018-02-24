<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/26
 * Time: 18:45
 */

namespace common\components\eleme;


use yii\base\Widget;

class ElSelectWidget extends Widget
{
    public $menuData='';
    public $label='label';
    public $children='children';
    public $accordion="true";
    public function init()
    {
        is_array($this->menuData)?$this->menuData=json_encode($this->menuData):'';
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        //  parent::run(); // TODO: Change the autogenerated stub
        return $this->render('el-select',['accordion'=>$this->accordion]);
    }
}