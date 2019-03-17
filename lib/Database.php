<?php
class Database {
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $dbName = DB_NAME;
	private $dbDriver = DB_DRIVER;

	private $dbh;
	private $error;
	private $stmt;

	public function __construct() {
		// SET dsn(DATA SOURCE NAME)
		$dsn = $this->dbDriver . ':host=' . $this->host . ';dbname=' . $this->dbName;

		// Set Options
		$options = array(
			PDO::ATTR_PERSISTENT => TRUE,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);

		// PDO Instance
		try {
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
		} catch(PDOException $e) {
			$this->error = $e->getMessage();
		}
	}

	public function query($query) {
		$this->stmt = $this->dbh->prepare($query);
	}

	public function bind($param, $value, $type = null) {
		if(is_null($type)) {
			switch (TRUE) {
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;	
				default:
					$type = PDO::PARAM_STR;
					break;
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}

	public function execute() {
		return $this->stmt->execute();
	}

	public function resultSet() {
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}
	public function single() {
		$this->stmt->execute();
		return $this->stmt->fetch(PDO::FETCH_OBJ);
	}
}