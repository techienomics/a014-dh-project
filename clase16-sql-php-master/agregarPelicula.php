<?php #ya visto, pegado en sign-up
	require_once 'config.php';

	$allGenres = $moviesModel->customQuery('SELECT id, name FROM genres');

	if ($_POST) {
		$lastId = $moviesModel->insertMovie($_POST);
		header('location: detalle-pelicula.php?idMovie=' . $lastId); exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agregar Pelicula</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<h2>Crear película</h2>
				<form method="post">
					<div class="form-group">
						<label>Título:</label>
						<input type="text" name="title" class="form-control">
					</div>
					<div class="form-group">
						<label>Rating:</label>
						<input type="text" name="rating" class="form-control">
					</div>
					<div class="form-group">
						<label>Premios:</label>
						<input type="text" name="awards" class="form-control">
					</div>
					<div class="form-group">
						<label>Duración:</label>
						<input type="text" name="length" class="form-control">
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-12">
								<label>Fecha de Estreno:</label>
							</div>
							<div class="col-md-4">
								<i>Año: </i>
								<select name="year" class="form-control">
									<?php for ($i=2018; $i >= 1920; $i--) { ?>
										<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="col-md-4">
								<i>Mes: </i>
								<select name="month" class="form-control">
									<?php for ($i=1; $i < 13; $i++) { ?>
										<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="col-md-4">
								<i>Día: </i>
								<select name="day" class="form-control">
									<?php for ($i=1; $i < 32; $i++) { ?>
										<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Género:</label>
						<select name="genre_id" class="form-control">
							<?php foreach ($allGenres as $oneGenre): ?>
								<option value="<?= $oneGenre->id; ?>"><?= $oneGenre->name; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<button type="submit" class="btn btn-success">Guardar película</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
