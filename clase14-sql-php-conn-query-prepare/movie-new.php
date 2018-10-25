<?php 

	require_once 'connection.php';
	require_once 'movie-insert.php';

	$genreStmt = $conn->prepare("
		SELECT name, id
		FROM genres
	"); #for make a Gendre drop-down
	$genreStmt->execute();
	$allGenre = $genreStmt->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>New Movie</title>
	
</head>

<body>
	<form method="post">
		<div>
			<label>Title: </label><input type="text" name="title" >
		</div>
		<div>
			<label for="">Gendre: </label>
			<select name="genre_id">
			<?php foreach ($allGenre as $key => $value):?>
				<option name="genre_id" value="<?=$value->id?>"><?=$value->name?></option>
			<?php endforeach ?>
			</select>					
		</div>
		<div>
			<label>Rating: </label><input type="text" name="rating" >
		</div>
		<div>
			<label>Awards:</label><input type="text" name="awards" >
		</div>
		<div>
			<label>Length: </label><input type="text" name="length" >
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