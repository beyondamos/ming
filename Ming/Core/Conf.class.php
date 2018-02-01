<?php
/**
 * 配置操作类
 */
namespace Ming\Core;

class Conf {

	public $config = [];

	/**
	 * 加载配置文件
	 * @return [type] [description]
	 */
	private function __construct() {		

		//项目配置
		if (is_file(APP_PATH.'/Common/Conf/web.php')) {
			$app_conf = require APP_PATH.'/Common/Conf/config.php';
		}

		if (isset($app_conf)) {
			$this->config = $app_conf;
		} 

	}


	public function getConf($name, $default='') {
		if (!isset($this->config[$name])) {
			return false;
		}
		if ($this->config[$name] == '') {
			return $default;
		}
		return $this->config[$name];
	}


}
