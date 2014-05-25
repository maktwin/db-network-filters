<?php

include_once 'BaseQuery.php';

class FiltersQuery extends BaseQuery {

	private static $instance;

	public function __construct() {
		parent::__construct();
	}

	public static function getInstance() {
	    if ( is_null( self::$instance ) ) {
	    	self::$instance = new self();
	    }

	    return self::$instance;
	}

	static public function findAll() {
		$db = self::$instance->connectDB->db;

		$resource = $db->query("SELECT * FROM filters");
		$result = $resource->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

	static public function create($base, $AFC) {
		$db = self::$instance->connectDB->db;

		$fieldsAFC      = array_keys($AFC);
		$valuesAFC      = array_values($AFC);
		$fieldlistAFC   = implode("`,`", $fieldsAFC); 
		$placeholderAFC = str_repeat("?,", count($fieldsAFC)-1);
		$sqlAFC         = "INSERT INTO AFC(`$fieldlistAFC`) VALUES(${placeholderAFC}?)";

		try {
			$prepareAFC = $db->prepare($sqlAFC);
			$prepareAFC->execute($valuesAFC);
			$AFCID = $db->lastInsertId();
		} catch (PDOException $e) {
		    file_put_contents("php://stderr", print_r("Error: " . $e->getMessage() . "\n", true));
		}

		$fieldsBase = array_keys($base);
		array_push($fieldsBase, 'AFCID', 'userID');

		$valuesBase = array_values($base);
		array_push($valuesBase, $AFCID, 1);

		$fieldlistBase   = implode("`,`", $fieldsBase); 
		$placeholderBase = str_repeat("?,", count($fieldsBase)-1);
		$sqlBase         = "INSERT INTO filters(`$fieldlistBase`) VALUES(${placeholderBase}?)";

		try {
			$prepareBase = $db->prepare($sqlBase);
			$prepareBase->execute($valuesBase);
		} catch (PDOException $e) {
		    file_put_contents("php://stderr", print_r("Error: " . $e->getMessage() . "\n", true));
		}
		return $AFCID;
	}

	static public function update($base, $filterID) {
		$db = self::$instance->connectDB->db;

		$fields = array_keys($base);
		$values = array_values($base);
		array_push($values, $filterID);

		$fieldlist   = implode("`= ?,`", $fields);
		$placeholder = str_repeat("?,", count($fields)-1);

		$sql = "UPDATE filters SET `$fieldlist` = ? WHERE ID = ?";

		try {
			$prepare = $db->prepare($sql);
			$prepare->execute($values);
		} catch (PDOException $e) {
		    file_put_contents("php://stderr", print_r("Error: " . $e->getMessage() . "\n", true));
		}
	}

	static public function delete($filterID) {
		$db = self::$instance->connectDB->db;

		$stmt = $db->prepare("DELETE filters, AFC FROM filters 
			JOIN AFC ON filters.AFCID = AFC.ID
			WHERE filters.ID = ?");

		$stmt->execute(array($filterID));
	}

}

?>