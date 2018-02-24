<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/25
 * Time: 3:15
 */

namespace common\components\rbac;


use yii\base\Controller;
use yii\base\Widget;
use yii\helpers\Inflector;
use yii\helpers\StringHelper;

class QuLuyouWidget extends Widget
{
    //获取指定目录所有类文件
    /**
     * @param $obj
     * @param array $optionPath
     * @return array
     */
    private function getClassFile($obj, $optionPath=['@backend']){
        $className = get_class($obj);
        $mn = explode('\\', $className);
        array_pop($mn);
        $classNameSpace = implode('\\', $mn);
        $classfiles=[];
        foreach ($optionPath as $path){
            $classfiles = array_merge($classfiles,glob ( \Yii::getAlias($path)."/controllers/*Controller.php" ));
        }
        return $classfiles;
    }
    //得到控制器类
    /**
     * @param $classfiles
     * @param $classNameSpace
     */
    private function getControllerDatas($classfiles, $classNameSpace){
        $controllerDatas=[];
        foreach($classfiles as $file){
            $info = pathinfo($file);
            $controllerClass = $classNameSpace . '\\' . $info[ 'filename' ];
            $controllerDatas[$info[ 'filename' ]] = $controllerClass;
        }
        return $controllerDatas;
    }

    /**
     * @param $methods
     * @param $cUrl
     */
    private function getRightTree($rightTree,$methods, $cUrl){
        foreach($methods as $m){
            if($m != 'actions' && StringHelper::startsWith($m, 'action') !== false){
                $actionName = substr($m, 6, strlen($m));
                $aUrl = Inflector::camel2id($actionName);
                $actionTree = ['text'=>"$cUrl/$aUrl", 'c'=>$cUrl, 'a'=>$aUrl, 'selectable'=>true, 'state'=>['checked'=>false], 'type'=>'a'];
                if(isset($rightUrls[$cUrl.'/'.$aUrl]) == true){
                    $actionTree['state']['checked'] = true;
                    $rightTree['state']['checked'] = true;
                }
                $rightTree['nodes'][] = $actionTree;
            }
        }
        return $rightTree;
    }

    /**
     * @param $controllerDatas
     */
    private function getRightActionData($controllerDatas){
        $rightActionData=[];
        foreach($controllerDatas as $c){
            if(StringHelper::startsWith($c, 'backend\controllers') == true && $c != 'backend\controllers\BaseController'){
                $controllerName = substr($c, 0, strlen($c) - 10);
                //把控制器转换成路由
                $cUrl = Inflector::camel2id(StringHelper::basename($controllerName));
                $methods = get_class_methods($c);
                $rightTree = ['text'=>$c, 'selectable'=>false, 'state'=>['checked'=>false], 'type'=>'r'];
                $rightTree=$this->getRightTree($rightTree,$methods,$cUrl);
                $rightActionData[] = $rightTree;
            }
        }
        return $rightActionData;
    }
    //所有
    /**
     * @param $obj
     * @param array $optionPath
     */
    static public function getAllController($obj, $optionPath=['@backend']){
        $self=new self;
       $className = get_class($obj);
       $mn = explode('\\', $className);
       array_pop($mn);
       $classNameSpace = implode('\\', $mn);
        $classfiles=$self->getClassFile($obj,$optionPath);
        $controllerDatas= $self->getControllerDatas($classfiles,$classNameSpace);
        $rightActionData=$self->getRightActionData($controllerDatas);
       return $rightActionData;
   }
}