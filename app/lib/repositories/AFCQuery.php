<?
include_once 'BaseQuery.php';

class AFCQuery extends BaseQuery {

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

	public static function findByID($AFCID) {
		$db = self::$instance->connectDB->db;

		$stmt = $db->prepare("SELECT * FROM AFC WHERE ID = ?");
		$stmt->execute(array($AFCID));

		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		return $result;
	}

	static public function update($AFC, $AFCID) {
		$db = self::$instance->connectDB->db;

		$fields = array_keys($AFC);
		$values = array_values($AFC);
		array_push($values, $AFCID);

		$fieldlist   = implode("`= ?,`", $fields);
		$placeholder = str_repeat("?,", count($fields)-1);

		$sql = "UPDATE AFC SET `$fieldlist` = ? WHERE ID = ?";

		try {
			$prepare = $db->prepare($sql);
			$prepare->execute($values);
		} catch (PDOException $e) {
		    file_put_contents("php://stderr", print_r("Error: " . $e->getMessage() . "\n", true));
		}
	}

}

?>