<?php
namespace Ming\Core;


class Db {
	private static $_instance = null;	//数据库实例对象
	private static $_config = null;
	//获取数据库实例
	public static function getInstance() {
		if (!isset(self::$_instance)) {
			self::getConfig();
			self::$_instance = new Mysql(self::$_config);
		} 
		return self::$_instance;
	}


	private static function getConfig() {
		self::$_config['dsn'] = $GLOBALS['config']['db']['dsn'];
		self::$_config['username'] = $GLOBALS['config']['db']['username'];
		self::$_config['password'] = $GLOBALS['config']['db']['password'];
		self::$_config['charset'] = $GLOBALS['config']['db']['charset'];

	}


	private function __construct() {

	}


	private function __clone() {

	}
}