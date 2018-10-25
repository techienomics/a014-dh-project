<?php   

	require_once 'connection.php';

	$getAllMoviesStmt = $conn->prepare("
		SELECT id, title
		FROM movies
		ORDER BY title
	");

	$getAllMoviesStmt->execute();
	$allMovies = $getAllMoviesStmt->fetchAll(PDO::FETCH_OBJ); # no bindValue xq no usa form
	$countMovies = $getAllMoviesStmt->rowCount();
	#print_r($getAllMovies);

	$getAllMoviesByGenreStmt = $conn->prepare('
		SELECT a.title, a.id, b.name
		FROM movies AS a
		LEFT JOIN genres AS b
		ON a.genre_id = b.id
		ORDER BY b.name DESC;'
	);
	$getAllMoviesByGenreStmt->execute();
	$getAllMoviesByGenre = $getAllMoviesByGenreStmt->fetchAll(PDO::FETCH_OBJ);
	$countMoviesByGenre = $getAllMoviesByGenreStmt->rowCount();
	echo "<pre";
	#print_r($getAllMoviesByGenre);
	echo "</pre";

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

	<head>
		<meta charset="utf-8">
		<title>Movies</title>
	</head>

	<body>

		<a href="movie-new.php">New Movie</a>
		<a href="movie-edit.php">Edit Movie</a>

		<h2>Available movies</h2>(<?= $countMovies ?> movies found)
		<ul>
			<?php foreach ($allMovies as $oneMovie): ?>
				<li>
					<a href="movie-summary.php?idMovie=<?= $oneMovie->id ?>" target="_blank">
						<?= $oneMovie->title ?></a>
				</li>
			<?php endforeach; ?>
		</ul>

		<h2>Available movies by Genre</h2>(<?= $countMoviesByGenre ?> movies found)
		<ul>
			<?php foreach ($getAllMoviesByGenre as $key => $value): ?>
				<li>(<?= (($value->name)==NULL ? 'n.d.' : $value->name) ?>)
					<a href="movie-summary.php?idMovie=<?= $value->id ?>" 
					   target="_blank"><?= $value->title ?></a>
				</li>
			<?php endforeach; ?>
		</ul>

	</body>

</html>