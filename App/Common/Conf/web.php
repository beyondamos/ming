<?php

$config = [
	'db' => require(APP_PATH. '/Common/Conf/db.php'),
	'params' => require(APP_PATH. '/Common/Conf/params.php'),
	'allow_module_list' 	=> 	'Home,Admin',
	'default_module'        =>  'Home',  // 默认模块
    'default_controller'    =>  'Index', // 默认控制器名称
    'default_action'        =>  'index', // 默认操作名称

    'url_suffix'       		=>  'html',  // URL伪静态后缀设置
    'rewrite_path_var' 		=> 	's', //重写规则的参数变量名

];


return $config;