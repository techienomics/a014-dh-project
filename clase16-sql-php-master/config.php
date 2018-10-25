<?php #ya esta visto

	define('DB_HOST', 'localhost');
	define('DB_NAME', 'movies_db');
	define('DB_USER', 'root');
	define('DB_PASS', '');

	require_once 'clases/Connection.php';
	require_once 'clases/MoviesModel.php';

	$connMovies = new Connection(DB_HOST, DB_NAME, DB_USER, DB_PASS);

	$moviesModel = new MoviesModel($connMovies);
