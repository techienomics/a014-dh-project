<?php # 

	require_once 'class-DBMsql.php';

	class QuestionModel extends DBMsql{
		private $conn;

		public function __construct(DBMsql $connection){
			$this->conn = $connection->getConnection();
		}

		public function getAll(){
			$stmt = $this->conn->prepare("
				SELECT statement, operator, needed_answers, response_time, category_id
				FROM questions
			");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}

		public function getQuestionsByCategory($category_id){
			$stmt = $this->conn->prepare("
				SELECT *
				FROM questions AS q
				LEFT JOIN categories AS c ON q.category_id = c.id
				WHERE category_id = :category_id
			");
			$stmt->bindValue(":category_id", $category_id, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_OBJ);
		}

		public function customQuery($query){
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}
		
		public function insertOne($data){ 
			$statement = $data->statement;
			$operator = $data->operator;
			$needed_answers = $data->needed_answers;
			$response_time = $data->response_time;
			$category_id = $data->category_id;
			$insertStmt = $this->conn->prepare("
				INSERT INTO questions (
					statement, operator, needed_answers, response_time, category_id
				VALUES (
					:statement, :operator, :needed_answers, :response_time, :category_id
				)
			");
			$insertStmt->bindValue(":statement", $statement, PDO::PARAM_STR);
			$insertStmt->bindValue(":operator", $operator, PDO::PARAM_STR);
			$insertStmt->bindValue(":needed_answers", $needed_answers, PDO::PARAM_INT);
			$insertStmt->bindValue(":response_time", $response_time, PDO::PARAM_INT);
			$insertStmt->bindValue(":category_id", $category_id, PDO::PARAM_INT);
			$insertStmt->execute();
			return $this->conn->lastInsertId();
		}

		public function deleteOne($id){
			try {
				$stmt = $this->conn->prepare("DELETE FROM questions WHERE id = :id");
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