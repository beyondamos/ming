<?php
namespace Ming\Core;
/**
 * 引导类
 */
class Ming {

	public $config;	//配置数据
	
	/**
	 * 应用程序初始化
	 * @return [type] [description]
	 */
	public function start($config) {
		//注册__autoload方法
		spl_autoload_register('Ming\Core\Ming::autoloadMing');
		global $config;

		//处理URL
		Dispatcher::dispatch();

		//执行应用
		App::exec();


	}

	/**
	 * 类文件自动加载
	 * @param  string $classname 类名
	 */
	public static function autoloadMing($classname) {
		$classname = str_replace('\\', '/', $classname);
		require ROOT_PATH . '/' . $classname . '.class.php' ;
	}





}
