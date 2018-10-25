<?php 

	require_once 'connection.php';
	require_once 'movie-update.php';
	require_once 'movie-fetch.php';

	$genreStmt = $conn->prepare("
		SELECT name, id
		FROM genres
	"); #for make a Gendre drop-down
	$genreStmt->execute();
	$allGenre = $genreStmt->fetchAll(PDO::FETCH_OBJ);

	echo "<pre";
	print_r($theMovie);
	echo "</pre";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Movie</title>
	
</head>

<body>

	<h4>Search a movie by ID for editi: </h4>
	<form action="" method="GET">
	    <legend></legend>
	    Enter an Id Movie:<br><input type="text" name="idMovie" value=""><br>
	    <input type="submit" value="Search">
	 </form>
	<br><br>

	<form method="post">

		<div>
			<label>Title: </label>
			<input type="text" name="title"
					value="<?= isset($theMovie->title) ? $theMovie->title : ''; ?>">
		</div>
		<div>
			<label for="">Gendre: </label>
			<select name="genre_id">
			<?php foreach ($theMovie as $key => $value):?>
				<option name="genre_id" value="<?=$value->genre_id?>"><?=$value->genre_id?></option>
			<?php endforeach ?>
			</select>					
		</div>
		<div>
			<label>Rating: </label>
			<input type="text" name="rating"
					value="<?= isset($theMovie->rating) ? $theMovie->rating : ''; ?>">
		</div>
		<div>
			<label>Awards:</label>
			<input type="text" name="awards"
					value="<?= isset($theMovie->awards) ? $theMovie->awards : ''; ?>">
		</div>
		<div>
			<label>Length: </label>
			<input type="text" name="length"
					value="<?= isset($theMovie->length) ? $theMovie->length : ''; ?>">
		</div>
		<div>
			<label>Release date: </label> <br>
			<i>Año: </i>
			<select name="year">
				<?php for ($i=2018; $i >= 1920; $i--) { ?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php } ?>
			</select>
			<i>Mes: </i>
			<select name="month">
				<?php for ($i=1; $i < 13; $i++) { ?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php } ?>
			</select>
			<i>Día: </i>
			<select name="day">
				<?php for ($i=1; $i < 32; $i++) { ?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php } ?>
			</select>
		</div>

		<button type="submit">Save</button>
	</form>
</body>

</html>