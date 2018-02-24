<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/4
 * Time: 4:25
 */

namespace common\components\common;


class YiiSuanfaWidget
{
    public static function getTree($items,$parrent=0,$pk='parent_id',$ck='cat_id',$nk='nodes'){
        $trees=array();
        foreach ($items as $item){
            if ($item[$pk]==$parrent){
                $nodes=self::getTree($items,$item[$ck],$pk,$ck,$nk);
                empty($nodes)?'':$item[$nk]=$nodes;
                $trees[]=$item;
            }
        }
        return $trees;
    }


}