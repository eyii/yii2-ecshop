<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/6
 * Time: 17:49
 */

namespace common\utils;


interface InterfaceCache
{
    /*获取缓存对象*/
    public static function getCache();
    /*获取App*/
    public static function getYiiApp();
   /* 缓存数据S();*/
    public static function S($key, $value, $duration = 0, $dependency = null);
    /* 缓存数据前缀为路由S();*/
    public static function SRoute($key, $value, $duration = 0, $dependency = null);
    /*获取缓存*/
    public static function G($key);
    /*获取缓存key带路由*/
    public static function GRoute($key);
    /*获取缓存如果不存在就通过$class_$function函数读取*/
    public static function GAutoRoute($key, $class, $function=null, $function_args=null, $duration = 0, $dependency = null);
    public static function callObjectFunction($class, $function=null,$arg=null);
}