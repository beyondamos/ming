<?php
namespace Ming\Core;
/**
 * 视图类
 */
class View {

	private $smarty = null;	//Smarty的实例

	public function __construct() {
		require LIBS_PATH.'/Smarty/Smarty.class.php';
		$this->smarty = new \Smarty();
	}


	public function display($templateFile='') {
		$templateFile = $this->parseTemplate($templateFile);
		$this->smarty->display($templateFile);
	}


	public function parseTemplate($templateFile='') {
		return APP_PATH . '/' . MODULE_NAME . '/View/' . CONTROLLER_NAME . '/' . $templateFile;
	}





}