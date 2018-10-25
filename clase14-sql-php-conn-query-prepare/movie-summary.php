<?php  

	require_once 'connection.php';
	require_once 'movie-fetch.php';

?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Movie summary</title>
	</head>
	<body>
		<?php if (isset($theMovie) && $getMovieStmt->rowCount() > 0): ?>
			<h1><?= $theMovie->title; ?></h1>
			<p><strong>Rating:</strong> <?= $theMovie->rating; ?></p>
			<p><strong>Awards:</strong> <?= $theMovie->awards; ?></p>
			<p><strong>Length:</strong> <?= $theMovie->length; ?>m</p>
			<p><strong>Release date:</strong> <?= $theMovie->release_date; ?></p>
		<?php else: ?>
			<h1>No movies found, please try whith another search.</h1>
		<?php endif ?>
		<br>

		<h4>Get fun! Find details of another movie: </h4>
		<form action="" method="GET">
		    <legend></legend>
		    Enter an Id Movie:<br><input type="text" name="idMovie" value=""><br>
		    <input type="submit" value="Search">
		 </form>
		<br><br>
		<a href="movies.php">[back]</a>

	</body>

</html>