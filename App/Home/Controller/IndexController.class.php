<?php
namespace App\Home\Controller;
use Ming\Core\Controller;

class IndexController extends Controller
{

	public function index() {
		$this->assign('aaa', '小明');
		$this->display('index.html');
	}

	public function aa() {
		echo '22222';
	}

}

