<?php 
	include("config/config.php");
?>
<?php
class Database {
	private $dbtype = DB_TYPE;
	private $server = DB_HOST;
	private $user   = DB_USER;
	private $pass   = DB_PASS;
	private $db     = DB_NAME;

	protected $conn;
	
	public function __construct(){
		$this->connectDb();
	}

	private function connectDb(){
		if (!isset($this->conn)) {
			// Create connection
			try {
				$this->conn = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
				echo '<p style="color:green;">Connect Successfully... </p>';
			} 
			catch (PDOException $e) {
				echo $e->getMessage();
			}
		}
		return $this->conn;
	}

}

?>