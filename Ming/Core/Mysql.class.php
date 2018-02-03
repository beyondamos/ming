<?php
namespace Ming\Core;


class Mysql {
	public $link = null;

	public function __construct($config=array()) {
		if (!empty($config)) {
			try {
				$this->link = new \PDO($config['dsn'], $config['username'], $config['password']);
			} catch(PDOException $e) {
				echo $e -> getMessage();
			}
		}

	}

	public function query() {
		echo '1111112222';
	}




}
