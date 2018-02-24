<?php
/*
  Yun Parse 云解析,QQ:157503886
  以下uid、token配置信息，可以到下面的网址里面获取
  http://120.27.155.106/user
*/

//防盗链域名，多个用|隔开，关闭请留空
//如：define('REFERER_URL', 'www.123.com|www.abc.com'); 
define('REFERER_URL', ''); 

//开启防盗链调试，0关闭，1开启，关闭后则不能直接打开解析插件地址
define('REFERER_ID', '1'); 

//用户授权UID，在平台可以查看到
define('USER_ID', '800000000');

//用户授权Token，在平台可以查看到
define('USER_TOKEN', 'xxxxxxxxxxxxxxxxxxxxx');

//视频默认清晰度，1标清，2高清，3超清，4原画，如果没有高清会自动下降一级
define('VOD_HD', '2');

//解析接口1,2,3,4,5 默认为1 当解析接口挂了的时候可以更换接口
define('VOD_API', '1');

//是否自动播放，0关闭，1开启
define('VOD_PLAY', '1');

//开头广告，留空为取消，格式： 图片http地址|图片http链接|广告时间（秒数）
//如：define('VOD_ADS', 'http://www.xxx.com/ad.jpg|http://www.baidu.com|10');
define('VOD_ADS', '');