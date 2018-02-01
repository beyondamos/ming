<?php
namespace Ming\Core;
/**
 * 视图类
 */
class View {

	private $smarty = null;	//Smarty的实例
	private $config = null;	//Smarty的配置信息

	public function __construct($config = array()) {
		if (!empty($config) && is_array($config)) {
			$this->config = $config;
		}
		require LIBS_PATH.'/Smarty/Smarty.class.php';
		$this->smarty = new \Smarty();
		//初始化Smarty的配置
		$this->smarty->compile_dir = RUNTIME_PATH. '/Compile/'. MODULE_NAME;
		$this->smarty->cache_dir = RUNTIME_PATH. '/Cache/'. MODULE_NAME;
		if ($this->config['html_cache_on'] === true) {
			$this->smarty->caching = 1;
			if (is_int($this->config['cache_lifetime'])) {
				$this->smarty->cache_lifetime = $this->config['cache_lifetime'];
			}
			$this->smarty->left_delimiter = $this->config['left_delimiter'];
			$this->smarty->right_delimiter = $this->config['right_delimiter'];
		}

	}


	public function display($templateFile='') {
		$templateFile = $this->parseTemplate($templateFile);
		$this->smarty->display($templateFile);
	}


	public function assign($name,$value='') {
		$this->smarty->assign($name,$value);
	}


	public function parseTemplate($templateFile='') {
		return APP_PATH . '/' . MODULE_NAME . '/View/' . CONTROLLER_NAME . '/' . $templateFile;
	}





}