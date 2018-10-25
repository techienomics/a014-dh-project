<?php
	require_once 'config.php';

	$allMovies = $moviesModel->getAllMoviesWithGenre();
	$totalMovies = $moviesModel->allRows($allMovies);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Movies</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<br>
	<div class="container">

		<?php if (isset($_GET['erased']) && $_GET['erased'] === 'true'): ?>
			<div class="alert alert-danger" role="alert">Película eliminada</div>
		<?php elseif (isset($_GET['erased']) && $_GET['erased'] !== 'true'): ?>
			<div class="alert alert-danger" role="alert"><?= $_GET['erased']?></div>
		<?php endif; ?>

		<div class="row justify-content-between align-items-center">
			<div class="col-md-6">
				<h2>Total de películas encontradas (<?= $totalMovies; ?>)</h2>
			</div>
			<div class="col-md-3">
				<a href="agregarPelicula.php" class="btn btn-info btn-lg">CREAR PELÍCULA</a>
			</div>
		</div>
		<br><br>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Movie</th>
					<th scope="col">Rating</th>
					<th scope="col">Actions</th>
				</tr>
		   </thead>
			<tbody>
				<?php foreach ($allMovies as $oneMovie): ?>
				<tr>
					<td><?= $oneMovie->title ?></td>
					<td><?= $oneMovie->name ?? 'Sin género' ?></td>
					<td>
						<a
							href="detalle-pelicula.php?idMovie=<?= $oneMovie->id ?>"
							class="btn btn-success"
						>
							ver detalle
						</a>
						<a
							href="editar-pelicula.php?idMovie=<?= $oneMovie->id ?>"
							class="btn btn-warning"
						>
							editar
						</a>
						<form action="borrar-pelicula.php" method="post" style="display: inline-block;">
							<input type="hidden" name="idMovie" value="<?= $oneMovie->id ?>">
							<button type="submit" class="btn btn-danger">borrar</button>
						</form>
					</td>
				</tr>
				<?php endforeach; ?>
		</tbody>
		</table>
	</div>
</body>
</html>
