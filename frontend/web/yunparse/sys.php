<?php
/*
  Yun Parse 云解析,QQ:157503886
  请在下面地址查询统计情况。
  http://120.27.155.106/login
*/
defined('FCPATH') OR exit('No direct script access allowed');
//加载配置文件
require_once FCPATH.'config.php';
//错误提示
error_reporting(0);
//默认时区
date_default_timezone_set("Asia/Shanghai");
//强制编码
header('Content-type:text/html;charset=utf-8');
//API地址，不能修改
define('API_URL', get_api());
//网站的插件目录
define('WEB_PATH', web_path());
//判断手机客户端
$wap = preg_match("/(iPhone|iPad|iPod|Linux|Android)/i", strtoupper($_SERVER['HTTP_USER_AGENT']));
//获取网站运行目录
function web_path(){
	$uri = 'http://yunparse'.$_SERVER['REQUEST_URI'];
	$arr = parse_url($uri);
	return str_replace(SELF,'',$arr['path']);
}
//获取API地址
function get_api(){
	if(VOD_API == '1'){
		return get_key('Ubp8TL/M/BdpExMpv9ARmVJbZCTsnvyTtlrUSTpWaWBLGRJek6O08AnyNxrTY1b4YxWlIg','D','YunParse');
	}elseif(VOD_API == '2'){
		return get_key('AetzS7DPrBNpExMpv9ARmVJbK3Dsl_eR8hfYS3gYeHkMRwpGzvqp9AG6Kx/fb1f4YROhLXA','D','YunParse');
	}elseif(VOD_API == '3'){
		return get_key('VOEtRuKa_R1pExMpv9ARmVJbKHDsl_eR8hfYS3gYeHkMRwpGzvqp9AG6Kx/fb1f4YROhI3I','D','YunParse');
	}elseif(VOD_API == '4'){
		return get_key('BOspHbWaqEJpExMpv9ARmVJbKXDsl_eR8hfYS3gYeHkMRwpGzvqp9AG6Kx/fb1f4YROiKHU','D','YunParse');
	}else{
		return get_key('VLh8HbGZ/UVpExMpv9ARmVJbLnDsl_eR8hfYS3gYeHkMRwpGzvqp9AG6Kx/fb1f4YROiKX8','D','YunParse');
	}
}
//判断防盗链域名
function is_referer(){
	//没有设置防盗链
    if(REFERER_URL=='' || (empty($_SERVER['HTTP_REFERER']) && REFERER_ID==1)) return true; 
	//获取来路域名
	$uriarr = parse_url($_SERVER['HTTP_REFERER']);
	$host = $uriarr['host'];
	$ymarr = explode("|",REFERER_URL);
    if(in_array($host,$ymarr)){
    	return true;
    }
    return false;
}
//获取远程内容
function get_url($url) {
	$url = $url.'&ref='.rawurlencode($_SERVER['HTTP_REFERER']);
    // 判断是否支持CURL
    if (!function_exists('curl_init') || !function_exists('curl_exec')) {
		$data = file_get_contents($url);
	}else{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
		curl_setopt($curl, CURLOPT_REFERER, "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		curl_setopt($curl, CURLOPT_AUTOREFERER, 1);
		curl_setopt($curl, CURLOPT_TIMEOUT, 15);
		curl_setopt($curl, CURLOPT_HEADER, 0);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); 
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); 
		$data = curl_exec($curl);
		curl_close($curl);
	}
    return $data;
}
//字符加密、解密
function get_key($string,$operation='E',$key=''){
	if(empty($string)) return '';
	if($operation=='E'){$string.='-time-'.(time()+1800);}if($key==''){$key=md5(USER_TOKEN);}$key_length=strlen($key);$string=$operation=='D'?base64_decode(str_replace('-','/',str_replace('_','+',$string))):substr(md5($string.$key),0,8).$string;$string_length=strlen($string);$rndkey=$box=array();$result='';
	for($i=0;$i<=255;$i++){$rndkey[$i]=ord($key[$i%$key_length]);$box[$i]=$i;}
	for($j=$i=0;$i<256;$i++){$j=($j+$box[$i]+$rndkey[$i])%256;$tmp=$box[$i];$box[$i]=$box[$j];$box[$j]=$tmp;}
	for($a=$j=$i=0;$i<$string_length;$i++){$a=($a+1)%256;$j=($j+$box[$a])%256;$tmp=$box[$a];$box[$a]=$box[$j];$box[$j]=$tmp;$result.=chr(ord($string[$i])^($box[($box[$a]+$box[$j])%256]));}
	if($operation=='D'){if(substr($result,0,8)==substr(md5(substr($result,8).$key),0,8)){$str = substr($result,8);$arr = explode("-time-",$str);if((empty($arr[1]) || $arr[1]<time()) && $key!='YunParse') return '';return $arr[0];}else{return '';}}else{return str_replace('+','_',str_replace('=','',base64_encode($result)));}
}
//json输出
function get_json($arr=array()){
	$json = json_encode($arr);
	header('Content-Type: text/json; charset=utf-8');
	exit($json);
}
//数组转XML
function get_xml($str){
	global $hd,$url;
	$xml='<ckplayer><flashvars>{lv->0}{v->80}{e->0}{p->1}{q->start}{h->3}{f->'.WEB_PATH.'api.php?url='.$url.'&amp;[$pat]}{a->hd='.$hd.'}{defa->hd=1|hd=2|hd=3|hd=4}{deft->标清|高清|超清|原画}</flashvars>
	<video>';
	$arr = $str['url'];
	if(is_array($arr)){
	     for($i=0;$i<count($arr);$i++){
			 $xml.='<file><![CDATA['.$arr[$i]['purl'].']]></file>';
			 if(isset($arr[$i]['size'])) $xml.='<size>'.$arr[$i]['size'].'</size>';
			 if(isset($arr[$i]['sec'])) $xml.='<seconds>'.$arr[$i]['sec'].'</seconds>';     
	     }
	}else{
		 $xml.='<file><![CDATA['.$str['url'].']]></file>';
		 if(isset($str['size'])) $xml.='<size>'.$str['size'].'</size>';
		 if(isset($str['sec'])) $xml.='<seconds>'.$str['sec'].'</seconds>';  
	}
	$xml.='</video></ckplayer>';
	$xml='<?xml version="1.0" encoding="utf-8"?>'.$xml;
	header('Content-type:text/xml;charset=utf-8');
	echo $xml;exit;
}