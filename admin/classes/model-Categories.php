<?php #

	require_once 'class-DBMsql.php';

	class CategoriesModel extends DBMsql{
		private $conn;

		public function __construct(DBMsql $connection){
			$this->conn = $connection->getConnection();
		}

		public function getAll(){
			$stmt = $this->conn->prepare("
				SELECT id, topic, soft_name, series_name, series_code, 
						series_unit, series_hint, series_source, series_definition
				FROM categories
			");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}

		public function getOneById($id){
			$stmt = $this->conn->prepare("
				SELECT *
				FROM categories
				WHERE m.id = :id
			");
			$stmt->bindValue(":id", $id, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_OBJ);
		}

		public function customQuery($query){
			$genresStmt = $this->conn->prepare($query);
			$genresStmt->execute();
			return $genresStmt->fetchAll(PDO::FETCH_OBJ);
		}

		public function insertOne($data){
			$id = $data->id;
			$topic = $data->topic;
			$soft_name = $data->soft_name;
			$series_name = $data->series_name;
			$series_code = $data->series_code;
			$series_unit = $data->series_unit;
			$series_hint = $data->series_hint;
			$series_source = $data->series_source;
			$series_definition = $data->series_definition;
			$insertStmt = $this->conn->prepare("
				INSERT INTO categories (
						id, topic, soft_name, series_name, series_code, 
						series_unit, series_hint, series_source, series_definition
				)
				VALUES (
					:id, :topic, :soft_name, :series_name, :series_code, 
					:series_unit, :series_hint, :series_source, :series_definition
				)
			");
			$insertStmt->bindValue(":id", $id, PDO::PARAM_INT);
			$insertStmt->bindValue(":topic", $topic, PDO::PARAM_STR);
			$insertStmt->bindValue(":soft_name", $soft_name, PDO::PARAM_STR);
			$insertStmt->bindValue(":series_name", $series_name, PDO::PARAM_STR);
			$insertStmt->bindValue(":series_code", $series_code, PDO::PARAM_STR);
			$insertStmt->bindValue(":series_unit", $series_unit, PDO::PARAM_INT);
			$insertStmt->bindValue(":series_hint", $series_hint, PDO::PARAM_STR);
			$insertStmt->bindValue(":series_source", $series_source, PDO::PARAM_STR);
			$insertStmt->bindValue(":series_definition", $series_definition, PDO::PARAM_STR);
			$insertStmt->execute();
			return $this->conn->lastInsertId();
		}

		public function deleteOne($id){
			try {
				$stmt = $this->conn->prepare("DELETE FROM categories WHERE id = :id");
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