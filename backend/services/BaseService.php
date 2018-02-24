<?php
namespace backend\services;

use Yii;
use yii\data\Pagination;


class BaseService
{

   public function getCompact($query,$request,$joinWith=null){

       $querys = $request->get('query');
       if(count($querys) > 0){
           foreach($querys as $key=>$value){
               $value = trim($value);
               if(empty($value) == false){
                   $query->andWhere([$key=>$value]);
               }
           }
       }

       $pages = new Pagination([
               'totalCount' =>$query->count(),
               'pageSize' => '10',
               'pageParam'=>'page',
               'pageSizeParam'=>'per-page']
       );

       $orderby =$request->get('orderby', '');
       if(empty($orderby) == false){
           $query = $query->orderBy($orderby);
       }
       $joinWith!=null?  $query->joinWith($joinWith):'';
       $models = $query->offset($pages->offset)->limit($pages->limit)->all();
       return  compact('querys','pages','models');
   }
}

?>