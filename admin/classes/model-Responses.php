<?php 

	require_once 'class-DBMsql.php';

	/*
	CREATE TABLE responses (
    id int NOT NULL AUTO_INCREMENT,
	user_answer_ int NOT NULL,
    trivia_user_id int,
	PRIMARY KEY (id),
    FOREIGN KEY (trivia_user_id) REFERENCES trivia_user(id)
	*/

	class RankingModel extends DBMsql{
		private $conn;

		public function __construct(DBMsql $connection){
			$this->conn = $connection->getConnection();
		}

		public function getAll(){
			$stmt = $this->conn->prepare("
				SELECT *
				FROM responses
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

		public function insertOne($answer, $trivia_user_id){
			$user_answer = $answer;
			$trivia_user_id = trim($data['rating']);
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