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

}

?>