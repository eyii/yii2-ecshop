<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/5
 * Time: 22:09
 */

namespace common\components\common;


use Yii;
use yii\base\Object;
//redis缓存设置
/**
 *
 * redis缓存
$config['components'][ 'redis']=  [
'class' => 'yii\redis\Connection',
'hostname' => '10.0.1.13',
'port' => 6389,
'database' => 0,
];
 * Class CacheWidget
 * @package common\components\common
 */
class CacheWidget extends Object
{

    /**
     * 得到缓存对象
     * @return mixed
     */
    public static function getCache()
    {
        return Yii::$app->redis;
    }

    /**
     * 类似thinkphp的S()方法
     * @param $key
     * @param $data
     * @param int $duration
     * @param null $dependency
     */
    public static function S($key, $data=null, $duration = 3600){

       $pre= isset(Yii::$app->params['redisPre'])?Yii::$app->params['redisPre']:'';
        $result=null;
        //得到缓存
     if (!isset($data)){
         $result= self::get($pre.$key);
     }else{
         // 设置缓存
         $result=self::set($pre.$key,$data,$duration);
     }
        self::quit();
     return $result;
    }

    /**
     * 相当于\yii::$app->redis->set();
     * @param $key
     * @param $data
     * @param int $duration
     * @param null $dependency
     * @return mixed
     */
    public static function set($key, $data, $duration =3600){
        $Cache= self::getCache();
        return $Cache->setex($key,  $duration ,$data);
    }
    /**
     * 相当于\yii::$app->redis->get($key);
     * @param $key
     * @return mixed
     */
    public static function get($key){
        $Cache= self::getCache();
        return $Cache->get($key);
    }
    /**
     * 相当于\yii::$app->redis->get($key);
     * @param $key
     * @return mixed
     */
    public static function quit(){
        $Cache= self::getCache();
        return $Cache->close();
    }
}


