<?php
namespace App\Home\Controller;
use Ming\Core\Controller;
use App\Home\Model\UserModel;
use App\Home\Model\AdminModel;

class IndexController extends Controller
{

	public function index() {
		$model = new UserModel();
		$model->query();

		

		$this->assign('aaa', '小明');
		$this->display('index.html');

	}

	public function aa() {
		echo '22222';
	}

}

