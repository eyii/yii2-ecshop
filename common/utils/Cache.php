<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/6
 * Time: 17:04
 */

namespace common\utils;


use yii\caching\FileDependency;

class Cache implements InterfaceCache
{
    public static function getCache(){
        return \yii::$app->redis;
    }
    public static function getYiiApp(){
        return \yii::$app;
    }
    //相当于\yii::$app->redis->set();
    public static function S($key, $value, $duration = 0, $dependency = null){
        $Cache= self::getCache();
        return $Cache->set($key, $value, $duration , $dependency);
    }
    public static function SRoute($key, $value, $duration = 0, $dependency = null){
        $Cache= self::getCache();
        $key_prefix=\Yii::$app->controller->getRoute().'_';
        return $Cache->set($key_prefix.$key, $value, $duration , $dependency);
    }
    //相当于\yii::$app->redis->get($key);
    public static function G($key){
        $Cache= self::getCache();
        return $Cache->get($key);
    }

    public static function GRoute($key){
        $Cache= self::getCache();
        $key_prefix=\Yii::$app->controller->getRoute().'_';
        return $Cache->get($key_prefix.$key);
    }
    //
    public static function GAutoRoute($key, $class, $function=null, $function_args=null, $duration = 0, $dependency = null){
        $cache=self::GRoute($key);
        if($cache==false){
            $cache=  self::callObjectFunction($class, $function,$function_args);
            self::SRoute($key, $cache, $duration, $dependency);
        }
        return $cache;
    }
    public static function callObjectFunction($class, $function=null,$arg=null){
        $obj = new $class ;
        return  $function==null?$obj:$obj->$function($arg);
    }
    public static function CC($key,$value=null){
        if ($value===null){
            var_dump('unset');
        }else{
            var_dump($value);
        }
    }

    /**
     * 缓存管理
     * @param mixed $name 缓存名称，如果为数组表示进行缓存设置
     * @param mixed $value 缓存值
     * @param mixed $options 缓存参数
     * @return mixed
     */
  public static function C($name,$value='',$options=null) {
    /*    static $cache   =   '';
        if(is_array($options) && empty($cache)){
            // 缓存操作的同时初始化
            $type       =   isset($options['type'])?$options['type']:'';
            $cache      =   Cache::getInstance($type,$options);
        }elseif(is_array($name)) { // 缓存初始化
            $type       =   isset($name['type'])?$name['type']:'';
            $cache      =   Cache::getInstance($type,$name);
            return $cache;
        }elseif(empty($cache)) { // 自动初始化
            $cache      =   self::getCache();
        }
        if(''=== $value){ // 获取缓存
            return self::G($name);
        }elseif(is_null($value)) { // 删除缓存
            return self::S()
        }else { // 缓存数据
            if(is_array($options)) {
                $expire     =   isset($options['expire'])?$options['expire']:NULL;
            }else{
                $expire     =   is_numeric($options)?$options:NULL;
            }
            return $cache->set($name, $value, $expire);
        }*/
    }
}