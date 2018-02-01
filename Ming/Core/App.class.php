<?php
namespace Ming\Core;
/**
 * 执行过程
 */
class App {
	//执行
	public static function exec() {
		//调用控制器
		$namespace = 'App\\' . MODULE_NAME. '\Controller\\'. CONTROLLER_NAME .'Controller';
		$a = new $namespace;
		$action_name = ACTION_NAME;
		$a->$action_name();
	}

}