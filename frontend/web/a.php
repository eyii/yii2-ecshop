<?php  
// 冒泡排序  
$arr = createarr(20);  
printarr($arr);  
popsort($arr);  
printarr($arr);  
  
function createarr($num=10){  
    $arr = array();  
    for($i=0; $i<$num; $i++){  
        array_push($arr, mt_rand(0,999));  
    }  
    return $arr;  
}  
  
function printarr($arr){  
    echo 'arr:'.implode(',', $arr).'<br>';  
}  
  
function popsort(&$arr){
    //
    for($i=0,$length=count($arr)-1; $i<$length; $i++){  
        for($j=0; $j<$length-$i; $j++){  
            if($arr[$j]>$arr[$j+1]){  
                $tmp = $arr[$j];  
                $arr[$j] = $arr[$j+1];  
                $arr[$j+1] = $tmp;  
            }  
        }  
    }      
}  
?>  