<?php
use \common\components\common\CacheWidget;
function S($key, $data=null, $duration = 3600){
    try{
        return CacheWidget::S($key, $data, $duration);
    }catch(Exception $e){
        return null;
    }
}

function SC($key, $data=null, $duration = 3600,$function=null,$param_arr=[]){
    try{
        $cache=CacheWidget::S($key, $data, $duration);
        if (isset($function)){
            $cache= $cache==null||empty($cache)?call_user_func_array($function,$param_arr):$cache;
        }
        return $cache;
    }catch(Exception $e){
        if (isset($function)){
            $cache= call_user_func_array($function,$param_arr);
        }
        return $cache;
    }
}

function C($function=null,$param_arr=[]){
    return   call_user_func_array($function,$param_arr);
}

