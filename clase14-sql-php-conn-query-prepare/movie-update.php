<?php

	if ($_POST) {
		
		$title = trim($_POST['title']);
		$rating = trim($_POST['rating']);		
		$awards = trim($_POST['awards']);
		$length = trim($_POST['length']);
		$relase_date = $_POST['year'] . '-' . $_POST['month'] . '-' .$_POST['day'];
		$genre_id = trim($_POST['genre_id']);

		$insertStmt = $conn->prepare("
			#INSERT INTO movies (title, rating, awards, release_date, length, genre_id)
			#VALUES (:title, :rating, :awards, :release_date, :length, :genre_id)
		");

		$insertStmt->bindValue(":title", $title, PDO::PARAM_STR);
		$insertStmt->bindValue(":rating",$rating, PDO::PARAM_INT);
		$insertStmt->bindValue(":awards",$awards, PDO::PARAM_INT);
		$insertStmt->bindValue(":length",$length, PDO::PARAM_INT);
		$insertStmt->bindValue(":release_date",$relase_date, PDO::PARAM_STR);
		$insertStmt->bindValue(":genre_id",$genre_id, PDO::PARAM_INT);

		$insertStmt->execute(); #no fetchall porque inserta no consulta

		$lastID = $conn->lastInsertId();

		header("location: movie-summary.php?idMovie=" . $lastID); exit;
	}

?>