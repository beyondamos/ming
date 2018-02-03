<?php
/**
 * 控制器基类
 */
namespace Ming\Core;

class Controller {
	public $config;

	protected $view; //视图实例化对象


	public function __construct() {
		//传入配置信息
		$this->config = $GLOBALS['config'];
		$this->view = new View([
						'html_cache_on' 	=> 	$this->config['html_cache_on'],
						'cache_lifetime'	=> 	$this->config['cache_lifetime'],
						'left_delimiter' 	=>	$this->config['left_delimiter'],
    					'right_delimiter' 	=>	$this->config['right_delimiter']
					]); //视图类
		//控制器初始化
		if (method_exists($this,'_init')) {
			$this->_init();
		}
	}

	/**
	 * 加载模版和输出内容
	 * 调用内置的模版引擎方法
	 * @return [type] [description]
	 */
	protected function display($templateFile='') {
		$this->view->display($templateFile);
	} 


	protected function fetch($templateFile='') {
		$this->view->fetch($templateFile);
	}


	/**
	 * 创建静态页面
	 * @return [type] [description]
	 */
	protected function buildHtml($templateFile='') {

	}


	protected function assign($name, $value='') {
		$this->view->assign($name, $value);
		return $this;
	}

	//处理不存在的方法



	//跳转
	protected function redirect() {

	}

}
