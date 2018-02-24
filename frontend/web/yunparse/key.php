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
$vid = $_GET['vid'];
//接收参数
$keyurl = $_GET['keyurl'];

//M3U8输出
if(!empty($_GET['url'])){
	echo get_115_url($_GET['url']);
	exit;
}

//判断缓存是否存在
$cache = 0;
$file_key=FCPATH.'cache/115-key-'.md5($vid);
//KEY 输出
$key = '';
if(file_exists($file_key)){
   $key = file_get_contents($file_key);
}else{
   $key = get_115_url($keyurl);
   if(!empty($key)) file_put_contents($file_key,$key);
}
echo $key;


//获取115远程
function get_115_url($url) {
	$ch  = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
	curl_setopt($ch, CURLOPT_TIMEOUT,30);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,10);
	curl_setopt($ch, CURLOPT_POST, false);
	$header = array("content-type: application/x-www-form-urlencoded; charset=utf-8");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36');
	curl_setopt($ch, CURLOPT_REFERER, 'http://115.com/');
	$result = curl_exec($ch);  	  
	curl_close($ch);  
	return $result;
}