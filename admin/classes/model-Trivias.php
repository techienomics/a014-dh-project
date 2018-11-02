<?php 

	require_once 'class-DBMsql.php';
	
	class TriviasModel extends DBMsql{
		private $conn;

		public function __construct(DBMsql $connection){
			$this->conn = $connection->getConnection();
		}

		public function getAll(){
			$stmt = $this->conn->prepare("
				SELECT id
				FROM trivias
			");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}

		public function getOneById($id){

		}

		public function customQuery($query){
			$genresStmt = $this->conn->prepare($query);
			$genresStmt->execute();
			return $genresStmt->fetchAll(PDO::FETCH_OBJ);
		}

		public function insertOne($data){
			$insertStmt = $this->conn->prepare("
				INSERT INTO trivias (id)
				VALUES (NULL)
			");
			$insertStmt->execute();

			$triviaId = $this->conn->lastInsertId();
			
			#$trivia = new Trivia ($triviaId);


			return $triviaId;
		}

		public function deleteOne($id){
			try {
				$stmt = $this->conn->prepare("DELETE FROM trivias WHERE id = :id");
				$stmt->bindValue(':id', $id, PDO::PARAM_INT);
				$stmt->execute();
				header("location: xxx.php?erased=true"); exit;
			} catch (PDOException $e) {
				$msg = $e->getMessage();
				header("location: xxx.php?erased=$msg"); exit;
			}
		}
	}
?>