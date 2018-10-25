<?php 

	class Connection {
		private $host;
		private $dbName;
		private $user;
		private $pass;
		private $conn;

		public function __construct($value='') {
			
			$this->host = $host;
			$this->dbName = $dbName;
			$this->user = $user;
			$this->pass = $pass;
			$this->conn = $conn;

			$dsn = 'mysql:host=localhost;dbname=movies_db;port=3306;charset=utf8mb4';
			$user = 'root';
			$password = 'root';
			$opt =[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

			try {
					$conn = new PDO($dsn,$user,$password,$opt);
			} catch (PDOException $exception) {
					echo $exception->getMessage();
			}

		}
	}

?>