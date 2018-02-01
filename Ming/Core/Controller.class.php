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
		unset($GLOBALS['config']);

		$this->view = new View(); //视图类

	}

	/**
	 * 加载模版和输出内容
	 * @return [type] [description]
	 */
	protected function display($templateFile='') {
		$this->view->display($templateFile);
	} 


}
