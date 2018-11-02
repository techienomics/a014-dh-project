<?php #

	require_once 'class-DBMsql.php';
	
	class AnswersModel extends DBMsql{
		private $conn;

		public function __construct(DBMsql $connection){
			$this->conn = $connection->getConnection();
		}

		public function getAll(){
			$stmt = $this->conn->prepare("
				SELECT *
				FROM answers
			");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}

		public function getAllBy(){
		}

		public function getAnswers(){
			$stmt = $this->conn->prepare("
				SELECT a.data_period, a.data_value, a.category_id, a.country_id #, c.name, c.code, c.continent, c.income
				FROM answers AS a
				#LEFT JOIN countries AS c ON a.country_id = c.id
			");
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_OBJ);
		}

		public function getAnswersByCategory($category_id){
			$stmt = $this->conn->prepare("
				SELECT a.data_period, a.data_value, a.category_id, a.country_id, c.name, c.code, c.continent, c.income
				FROM answers AS a
				LEFT JOIN countries AS c ON a.country_id = c.id
				WHERE a.category_id LIKE :category_id
			");
			$stmt->bindValue(":category_id", $category_id, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_OBJ);
		}

		public function customQuery($query){
			$genresStmt = $this->conn->prepare($query);
			$genresStmt->execute();
			return $genresStmt->fetchAll(PDO::FETCH_OBJ);
		}

		public function insertOne($data){
			$data_period = trim($data['data_period']);
			$data_value = trim($data['data_value']);
			$category_id = trim($data['category_id']);
			$country_id = trim($data['country_id']);
			$insertStmt = $this->conn->prepare("
				INSERT INTO answers (
					data_period, data_value, category_id, country_id,
				)
				VALUES (
					:data_period, :data_value, :category_id, :country_id,
				)
			");
			$insertStmt->bindValue(":data_period", $data_period, PDO::PARAM_STR);
			$insertStmt->bindValue(":data_value", $data_value, PDO::PARAM_STR);
			$insertStmt->bindValue(":category_id", $category_id, PDO::PARAM_INT);
			$insertStmt->bindValue(":country_id", $country_id, PDO::PARAM_INT);
			$insertStmt->execute();
			return $this->conn->lastInsertId();
		}

		public function deleteMovie($id){
			try {
				$stmt = $this->conn->prepare("DELETE FROM movies WHERE id = :id");
				$stmt->bindValue(':id', $id, PDO::PARAM_INT);
				$stmt->execute();
				header("location: listado-pelis.php?erased=true"); exit;
			} catch (PDOException $e) {
				$msg = $e->getMessage();
				header("location: listado-pelis.php?erased=$msg"); exit;
			}
		}
	}
?>