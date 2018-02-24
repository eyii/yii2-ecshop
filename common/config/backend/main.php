<?php
$params = array_merge(
    require(__DIR__ . '/../../../common/config/params.php'),
    require(__DIR__ . '/params.php')
);
$config= [
    'params' => $params,
];
$config=array_merge($config,require(__DIR__ . '/main_extend.php'));
return $config;
