<?php

	if ( isset($_GET["idMovie"]) ) {
		$getMovieStmt = $conn->prepare("
			SELECT *
			FROM movies
			WHERE id = :id
		");

		$getMovieStmt->bindValue(":id", $_GET["idMovie"], PDO::PARAM_INT);

		$getMovieStmt->execute();

		$theMovie = $getMovieStmt->fetch(PDO::FETCH_OBJ);
	}

?>