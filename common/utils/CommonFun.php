<?php
namespace common\utils;
use common\models\AdminKeywords;
use yii\base\ErrorException;
use yii\base\Model;
use yii\base\Object;
use Yii;
use yii\db\Exception;
use yii\helpers\ArrayHelper;

class CommonFun extends Object{
    /*
    * 二维数组按照指定的键值进行排序
    */
   public  static function arraySort($arr,$keys,$type='asc'){ 
       $keysvalue = $new_array = array();
       foreach ($arr as $k=>$v){
               $keysvalue[$k] = $v[$keys];
       }
       if(strtolower($type) == 'asc'){
               asort($keysvalue);
       }else{
               arsort($keysvalue);
       }
       reset($keysvalue);
       foreach ($keysvalue as $k=>$v){
               $new_array[$k] = $arr[$k];
       }
       return $new_array; 
   }    
   
   
   //单位转换
   public  static function sizecount($filesize) {
        if ($filesize >= 1073741824) {
            $filesize = round($filesize / 1073741824 * 100) / 100 . ' GB';
        } elseif ($filesize >= 1048576) {
            $filesize = round($filesize / 1048576 * 100) / 100 . ' MB';
        } elseif ($filesize >= 1024) {
            $filesize = round($filesize / 1024 * 100) / 100 . ' KB';
        } else {
            $filesize = $filesize . ' Bytes';
        }
        return $filesize;
    }
    public static function pre_print($expression){
       echo '<pre>';
           print_r($expression);
           '</pre>';
    }
    /**
     * 获取客户端IP
     * @return string 返回ip地址,如127.0.0.1
     */
    public static function getClientIp()
    {
        $onlineip = 'Unknown';
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
            $ips = explode(",", $_SERVER['HTTP_X_FORWARDED_FOR']);
            $real_ip = $ips['0'];
            if ($_SERVER['HTTP_X_FORWARDED_FOR'] && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $real_ip))
            {
                $onlineip = $real_ip;
            }
            elseif ($_SERVER['HTTP_CLIENT_IP'] && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_CLIENT_IP']))
            {
                $onlineip = $_SERVER['HTTP_CLIENT_IP'];
            }
        }
        if ($onlineip == 'Unknown' && isset($_SERVER['HTTP_CDN_SRC_IP']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_CDN_SRC_IP']))
        {
            $onlineip = $_SERVER['HTTP_CDN_SRC_IP'];
            $c_agentip = 0;
        }
        if ($onlineip == 'Unknown' && isset($_SERVER['HTTP_NS_IP']) && preg_match ( '/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER ['HTTP_NS_IP'] ))
        {
            $onlineip = $_SERVER ['HTTP_NS_IP'];
            $c_agentip = 0;
        }
        if ($onlineip == 'Unknown' && isset($_SERVER['REMOTE_ADDR']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['REMOTE_ADDR']))
        {
            $onlineip = $_SERVER['REMOTE_ADDR'];
            $c_agentip = 0;
        }
        return $onlineip;
    }
    
    /**
     * 读取文本末尾n行
     * @param string $fp
     * @param int $n
     * @param number $base
     * @return multitype:
     */
    public static function tail($fileName, $n, $base = 5) {
        $fp = fopen($fileName, "r+");
        $pos = $n + 1;
        $lines = array ();
        while ( count ( $lines ) <= $n ) {
            try {
                fseek ( $fp, - $pos, SEEK_END );
            } catch ( Exception $e ) {
                fseek ( 0 );
                break;
            }
            $pos *= $base;
            while ( ! feof ( $fp ) ) {
                array_unshift ( $lines, fgets ( $fp ) );
            }
        }
        //echo implode ( "", array_reverse ( $lines ) );
        return array_reverse ( array_slice ( $lines, 0, $n ) );
    }
   
    
    public static function sortClass($orderby, $key){
        $data = explode(' ', $orderby);
        $sortClass = 'class="sorting"';
        if(count($data) > 0){
            if(empty($data[0]) == false && $data[0] == $key){
                if(empty($data[1]) == false && $data[1] == 'desc'){
                    $sortClass = 'class="sorting_desc"';
                    
                }
                else{
                    $sortClass = 'class="sorting_asc"';
                }
            }
        }
        return $sortClass;
    }

    /**
     * 返回input的csrf
     * @return
     */
    public static function getInputCsrf(){
        return '<input type="hidden" name="'.Yii::$app->request->csrfParam.'" value="'.Yii::$app->request->getCsrfToken().'">';
    }

    /**
     * @param $class AdminKeywords::class
     * @param $items [['xxx'=>11,'bbb'=>22],['xxxd'=>11,'bbbd'=>22]]
     * @return int
     */
 /*   public static function batchInsert($class, $items){
        $rows = [];
        $models=[];
        $error=[];
        $model=new $class;
        foreach ($items as $key=> $item){
           $ret= ($model->load($item,'')&&$model->validate())?array_merge($models,$model):$model->getErrors();
           if ($ret!=true){
               $error[$key]=$ret;
           }
        }
        var_dump($error);
      // $transaction= Yii::$app->db->beginTransaction();
        $rows = ArrayHelper::getColumn($models, 'attributes');
        $newmodel = new $class;
        return Yii::$app->db->createCommand()->batchInsert($class::tableName(), $newmodel->attributes(), $rows)->execute();

    }*/
    public static function batchInsert($class,$items)
    {

        try{
            $models=[];
            foreach ($items as $item){
                $model = new $class;
                $models[]=$model;
            }
            $ret=(Model::loadMultiple($models, $items,'')&&Model::validateMultiple($models))?true:false;
            if ($ret){
                $rows = ArrayHelper::getColumn($models, 'attributes');
                $newmodel = new $class;
                return Yii::$app->db->createCommand()->batchInsert($class::tableName(), $newmodel->attributes(), $rows)->execute();
            }

        }catch (Exception $e){
           return json_encode($e->errorInfo);
        }


    }

    public static function getSessionId(){
        $session= Yii::$app->session;
        $session->open();
        return $session->id;
    }



    //当然啦，上面给出的是插入所有的字段，但事实往往事与愿违，也简单，稍作调整即可
    /*        $rows[] = [
                'title' => $model->title,
                'content' => $model->content,
            ];
            Yii::$app->db->createCommand()->batchInsert($class::tableName(), ['title', 'content'], $rows)->execute();*/
}
