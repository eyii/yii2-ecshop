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
//接收参数
$url = empty($_GET['vid']) ? $_GET['url'] : $_GET['vid'];
//兼容老版本
if(!empty($_GET['type'])) $url.='~'.$_GET['type'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yun Parse—视频在线播放</title>
<link rel="stylesheet" href="<?php echo WEB_PATH;?>ckplayer/style.css?v=1.1">
<script type="text/javascript" src="<?php echo WEB_PATH;?>ckplayer/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo WEB_PATH;?>ckplayer/ckplayer.js"></script>
</head>
<body style="overflow-y:hidden;">
<div id="loading" style="font-weight:bold;padding-top:90px;" align="center">正在加载播放中,请稍等...</div>
<div id="a1" style="display:none;"></div>
<div id="ads" style="display:none;"></div>
<div id="error" style="display:none;font-weight:bold;padding-top:90px;" align="center"></div>
<script type="text/javascript" src="<?php echo WEB_PATH;?>ckplayer/yunparse.js?v=1.1"></script>
<script type="text/javascript">
var yunparse = {
	play   : '<?php echo VOD_PLAY;?>',
	cache  : '<?php echo is_writable(FCPATH.'cache');?>',
	referer: '<?php echo is_referer();?>',
	errid  : '<?php echo (int)$_GET['err'];?>',
	update  : '<?php echo (int)$_GET['up'];?>',
	webpath: '<?php echo WEB_PATH;?>',
	url    : '<?php echo get_key($url);?>',
	isiPad : navigator.userAgent.match(/iPad|iPhone|Android|Linux|iPod/i)!=null,
	ads    : '<?php echo VOD_ADS;?>'
};
if(!yunparse.url){
	get_msg('Url地址不能为空~！');
} else if(!yunparse.referer){
	get_msg('非法访问，403~！');
} else if(!yunparse.cache){
	get_msg(yunparse.webpath+'cache/ 缓存目录不存在或者不可写~!');
} else { 
	player(yunparse.update);
}
</script>
</body>
</html>
