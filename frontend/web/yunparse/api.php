<?php
/*
  Yun Parse 云解析,QQ:157503886
  请在下面地址查询统计情况。
  http://120.27.155.106/login
*/

//文件名称
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
// 网站根目录
define('FCPATH', str_replace("\\", "/", str_replace(SELF, '', __FILE__)));
//加载配置文件
require_once FCPATH.'sys.php';

//防盗链
if(!is_referer()){
	get_json(array('msg'=>'非法访问，403~!'));
}

//接收参数
$url = empty($_GET['url']) ? $_POST['url'] : $_GET['url'];
$vid = get_key($url,'D');
$hd = empty($_GET['hd']) ? VOD_HD : $_GET['hd'];
$up = (int)$_POST['up'];

//判断地址解密
if(empty($vid)){
    get_json(array('msg'=>'Url非法操作~!'));
}

//判断http地址模式
$arr = explode('~',$vid);
$vid = $arr[0];
$type = !empty($arr[1])?$arr[1]:'';

//组装URL参数
$param = 'url='.$vid.'&type='.$type.'&hd='.$hd.'&wap='.$wap;

//判断缓存是否存在
$cache=0;
$filemd5 = FCPATH.'cache/'.md5($param.USER_TOKEN);
if($up==0 && file_exists($filemd5)){
     $json = file_get_contents($filemd5);
	 $arr = json_decode($json,1);
	 $ext = $arr['ext'];
	 $type = $arr['type'];
	 $ctime = $arr['ctime'];
	 $vodurl = $arr['url'];
	 if($ctime > time()) $cache++;
}
if($cache==0){
     $json = get_url(API_URL.'?uid='.USER_ID.'&up='.$up.'&token='.USER_TOKEN.'&'.$param);
     $arr = json_decode($json,1);
	 $ext = $arr['ext'];
	 $type = $arr['type'];
	 $vodurl = $arr['url'];
	 if(empty($vodurl) || $arr['success']==0){
		 get_json(array('msg'=>$arr['msg']));
	 }else{
	     file_put_contents($filemd5,$json);
		 if($ext=='m3u8_list'){
			 $filem3u8 = FCPATH.'cache/'.md5($vid.USER_TOKEN).'.m3u8';
	         file_put_contents($filem3u8,base64_decode($vodurl));
		 }
	 }
}

//解析输出
if($_GET['url']){
	if($ext=='xml'){
		  get_xml($arr);
	}elseif($ext=='m3u8_list'){
		  $m3u8 = base64_decode($vodurl);
		  //115解析
		  if($type=='115' && strpos($m3u8, '.115.com/') !== false){
		        preg_match_all('/http:\/\/([\s\S]+?)#/',$m3u8,$arr2);
	            $xstr=$ystr=array();
	            if(!empty($arr2[1])){
	                for($i=0;$i<count($arr2[1]);$i++){
						if(strpos($arr2[1][$i], 'video.key') === false){
		                   $ystr[]="http://".$arr2[1][$i];
	 	                   $xstr[]="key.php?url=".rawurlencode("http://".$arr2[1][$i]);
						}
			        }
		        }
	            $m3u8=str_replace($ystr,$xstr,$m3u8);
	            $m3u8=str_replace("%0A","\n",$m3u8);
	      }
		  header('Content-type: application/vnd.apple.mpegurl');
		  header('Content-disposition: attachment; filename=video.m3u8');
		  exit($m3u8);
	}else{
		  $data['msg'] = '缺少必须参数ext~!';
		  get_json($data);
	}
}else{
	if($ext=='h5_fd'){
		$purl = $vodurl;
		if(is_array($vodurl)){
			 $purl = array();
			 for($i=0;$i<count($vodurl);$i++){
				 $purl[] = $vodurl[$i]['purl'];
			 }
		}
		$data['url'] = $purl;
	}elseif($ext=='xml' && $wap==0){
		$data['url'] = WEB_PATH.'api.php?url='.$url;
	}elseif($ext=='m3u8_list'){
		$m3u8url = 'http://'.$_SERVER['HTTP_HOST'].WEB_PATH.'cache/'.md5($vid.USER_TOKEN).'.m3u8';
		$handle = curl_init($m3u8url);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 10);
		curl_exec($handle);
		$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
		curl_close($handle);
		if($httpCode == 404) {
			$data['url'] = 'http://'.$_SERVER['HTTP_HOST'].WEB_PATH.'api.php?url='.$url;
		}else{
			$data['url'] = $m3u8url;
		}
		if($type=='bdyun'){
			$ext = 'link';
			if($wap==0){
				$data['url'] = $arr['play_swf'].'?file='.rawurlencode($m3u8url);
			}else{
				if((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')){
					$data['url'] = $m3u8url;
				}else{
					$data['url'] = 'https://yunparse.duapp.com/yun.html?url='.rawurlencode($m3u8url);
				}
			}
		}
	}else{
		if($ext=='m3u8' && $wap==0){
			$vodurl = rawurlencode($vodurl);
		}
		$data['url'] = $vodurl;
	}
    $data['ext'] = $ext;
    $data['msg'] = 'ok';
	get_json($data);
}
