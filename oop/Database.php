<?php

class Database {
	protected static $instance;

	public static function getInstance() {
		if(!static::$instance) {
			static::$instance = new self;
		}

		return static::$instance;
	}

	public function query($sql) {
		//$this->pdo->prepare($sql)->execute();
		echo $sql;
	}
}