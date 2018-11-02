<?php

	require_once 'class-DBMsql.php';

	/*
    id int NOT NULL AUTO_INCREMENT,
	trivia_id int,
    question_id int,
    answer_id int,
	correct_answer int NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (trivia_id) REFERENCES trivias(id),
    FOREIGN KEY (question_id) REFERENCES questions(id),
	FOREIGN KEY (answer_id) REFERENCES answers(id)
	*/

	class QuestionAnswerModel extends DBMsql{
		private $conn;

		public function __construct(DBMsql $connection){
			$this->conn = $connection->getConnection();
		}

		public function getAllMoviesWithGenre(){
			$stmt = $this->conn->prepare("
				SELECT m.id, m.title, g.name
				FROM movies As m
				LEFT JOIN genres AS g ON m.genre_id = g.id
				ORDER BY title
			");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}

		public function getOneById($id){
			$stmt = $this->conn->prepare("
				SELECT *, g.name
				FROM movies AS m
				LEFT JOIN genres AS g ON m.genre_id = g.id
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
			$title = trim($data['title']);
			$rating = trim($data['rating']);
			$awards = trim($data['awards']);
			$length = trim($data['length']);
			$release_date = $data['year'] . '-' . $data['month'] . '-' . $data['day'];
			$genre_id = $data['genre_id'];
			$insertStmt = $this->conn->prepare("
				INSERT INTO movies (
					title,
					rating,
					awards,
					release_date,
					length,
					genre_id
				)
				VALUES (
					:title,
					:rating,
					:awards,
					:release_date,
					:length,
					:genre_id
				)
			");
			$insertStmt->bindValue(":title", $title, PDO::PARAM_STR);
			$insertStmt->bindValue(":rating", $rating, PDO::PARAM_INT);
			$insertStmt->bindValue(":awards", $awards, PDO::PARAM_INT);
			$insertStmt->bindValue(":release_date", $release_date, PDO::PARAM_STR);
			$insertStmt->bindValue(":length", $length, PDO::PARAM_INT);
			$insertStmt->bindValue(":genre_id", $genre_id, PDO::PARAM_INT);
			$insertStmt->execute();
			return $this->conn->lastInsertId();
		}

		public function deleteOne($id){
			try {
				$stmt = $this->conn->prepare("DELETE FROM question_answer WHERE id = :id");
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