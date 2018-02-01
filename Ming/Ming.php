<?php
//Ming框架公共入口文件

date_default_timezone_set('Asia/Shanghai');


//整体根目录
defined('ROOT_PATH') or define('ROOT_PATH', str_replace('\\', '/', dirname(__DIR__)));
//网站根目录
defined('WEB_PATH') or define('WEB_PATH', dirname($_SERVER['SCRIPT_FILENAME']));
//框架根目录
defined('MING_PATH') or define('MING_PATH', ROOT_PATH.'/Ming');
//核心类目录
defined('CORE_PATH') or define('CORE_PATH', MING_PATH.'/Core');
//引入库类目录
defined('LIBS_PATH') or define('LIBS_PATH', MING_PATH.'/Libs');
//项目代码目录
defined('APP_PATH') or define('APP_PATH', ROOT_PATH.'/App');
//运行时目录
defined('RUNTIME_PATH') or define('RUNTIME_PATH', APP_PATH.'/Runtime');

//系统常亮 
define('REQUEST_METHOD',$_SERVER['REQUEST_METHOD']);
define('IS_GET',        REQUEST_METHOD =='GET' ? true : false);
define('IS_POST',       REQUEST_METHOD =='POST' ? true : false);

require CORE_PATH.'/Ming.class.php';

//加载配置文件
require APP_PATH . '/Common/Conf/web.php';

//加载系统函数库
require MING_PATH . '/Common/functions.php';


(new Ming\Core\Ming)->start($config);