<?php
	require_once 'config.php';

	if ( isset($_GET["idMovie"]) ) {
		$theMovie = $moviesModel->getOneById($_GET["idMovie"]);
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Detalle de la película</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<div class="row justify-content-center">
				<?php if ( isset($theMovie) && $theMovie ): ?>
				<div class="col-md-6">
					<div class="card">
						<div class="card-body">
							<h2 class="card-title"><?= $theMovie->title; ?></h2>
							<p class="card-text"><b>Rating:</b> <?= $theMovie->rating; ?></p>
							<p class="card-text"><b>Length:</b> <?= $theMovie->length; ?> mins</p>
							<p class="card-text"><b>Genero:</b> <?= $theMovie->name ?? 'Sin genero'; ?></p>
							<a href="listado-pelis.php" class="btn btn-primary">volver</a>
						</div>
					</div>
				</div>
				<?php else: ?>
					<h2>No hay resultados para mostrar</h2>
				<?php endif; ?>

			</div>
		</div>
	</body>
</html>
