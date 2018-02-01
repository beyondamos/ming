<?php
namespace App\Home\Controller;
use Ming\Core\Controller;

class IndexController extends Controller
{
	public function index() {
		// var_dump($this->config);
		$this->display('index.html');
	}

	public function aa() {
		echo '22222';
	}

}

