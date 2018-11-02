<?php # 

		require_once 'class-DBMsql.php';

		class CountriesModel extends DBMsql{
		private $conn;

		public function __construct(DBMsql $connection){
			$this->conn = $connection->getConnection();
		}

		public function getAll(){
			$stmt = $this->conn->prepare("
				SELECT id, name, code, continent, income
				FROM countries
			");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}

		public function getOneById($id){
			$stmt = $this->conn->prepare("
				SELECT *
				FROM countries
				WHERE id = :id
			");
			$stmt->bindValue(":id", $id, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_OBJ);
		}

		public function customQuery($query){
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}

		public function insertOne($data){

		}

		public function deleteOne($id){

		}
	}
?>