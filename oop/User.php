<?php

class User {
	// protected $db;

	// public function __construct(Database $db) {
	// 	$this->db = $db;
	// }

	public function create(array $data) {
		$db = Database::getInstance();
		$db->query('INSERT INTO `users` ...');
	}
}