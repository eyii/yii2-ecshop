<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/23
 * Time: 10:02
 */

namespace common\components\ec\frontend;


use yii\base\Widget;

class EcBangzhuWidget extends Widget
{
    public function init()
    {

        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        //  parent::run(); // TODO: Change the autogenerated stub
        return $this->render('ec-bangzhu');
    }
}