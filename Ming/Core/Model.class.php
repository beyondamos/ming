<?php
namespace Ming\Core;

class Model {
	public $db = null;

	public function __construct() {
		$this->db = Db::getInstance();
	}

	public function query() {
		
	}



}