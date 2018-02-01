<?php
namespace Ming\Core;
//完成URL的解析、路由和调度

class Dispatcher {

	/**
	 * URL映射到控制器 分析URL并定义常量 模块名 控制器名 动作名
	 * @return [type] [description]
	 */
	static public function dispatch() {
		$rewrite_path_var = $GLOBALS['config']['rewrite_path_var'];
		if (isset($_GET[$rewrite_path_var])) {
			$_SERVER['PATH_INFO'] = $_GET[$rewrite_path_var];
			unset($_GET[$rewrite_path_var]);
		} 

	
		//如果没有PATH_INFO(即就一个主域名)
		if (!isset($_SERVER['PATH_INFO'])) {
			define('MODULE_NAME', $GLOBALS['config']['default_module']);
			define('CONTROLLER_NAME', $GLOBALS['config']['default_controller']);
			define('ACTION_NAME', $GLOBALS['config']['default_action']);
		} else {
			//验证URL的准确性(后缀名、)
			//
			//
			//模块
			define('__INFO__', trim($_SERVER['PATH_INFO'], '/'));
			define('__EXT__', strtolower(pathinfo($_SERVER['PATH_INFO'], PATHINFO_EXTENSION)));
			$path_info = str_replace('.' . __EXT__, '' , __INFO__);
			$paths = explode('/', $path_info, 2);
			if (in_array_case($paths[0], explode(',', $GLOBALS['config']['allow_module_list']))) {
				define('MODULE_NAME', ucfirst(strtolower($paths[0])));
				$path_info = $paths[1];
			} else {
				define('MODULE_NAME', $GLOBALS['config']['default_module']);
			}

			//控制器
			$paths = explode('/', $path_info, 2);
			define('CONTROLLER_NAME', $paths[0]);
			if (empty($paths[1])) {
				//设置错误信息
				exit('URL错误！');
			}
			$path_info = $paths[1];

			//方法
			
			$paths = explode('/', $path_info, 2);
			define('ACTION_NAME', $paths[0]);

			//参数
			if (!empty($paths[1])) {
				$path_info = $paths[1];
				echo $path_info;
			}
			

			


		}

	
	}

	static private function getModule() {

	}


}