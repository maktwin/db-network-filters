<?php

class DB_Connect {
	public $db;

	public function __construct($db = NULL) {
		if (is_object($db)) {
			return $this->db;
		} else {
			$dsn = 'mysql:host=' . DB_HOST . ";dbname=" . DB_NAME;
			try {
				$this->db = new PDO($dsn, DB_USER, DB_PASS);
			} catch ( Exception $e ) {
				die($e->getMessage());
			}	 
		}
	}
}

?>