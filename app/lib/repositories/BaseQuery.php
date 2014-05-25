<?php

class BaseQuery extends DB_Connect {
	public $connectDB;

	public function __construct() {
		$this->connectDB = new DB_Connect();
	}
}

?>