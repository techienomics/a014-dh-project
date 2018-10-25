<?php  

	#require_once 'config.php';

	$dsn = 'mysql:host=localhost;dbname=movies_db;port=3306;charset=utf8mb4';
	$user = 'root'; #DB_NAME
	$password = 'root'; #
	$opt =[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
	
	try {
			$conn = new PDO($dsn,$user,$password,$opt);
	} catch (PDOException $exception) {
			echo $exception->getMessage();
	}

	$getAllMovies = $conn->query('
		SELECT *
		FROM movies
		ORDER BY title;'
	)->fetchAll(PDO::FETCH_OBJ);

	#$getAllMoviesResult = $getAllMovies->fetchAll(PDO::FETCH_OBJ);

	echo '<pre>';
	#print_r($getAllMovies);
	echo '</pre>';

	$searchQuery = $_GET['palabra'];

	$getSearch = $conn->query("
		SELECT *
		FROM movies
		WHERE title LIKE '%$searchQuery%'
		ORDER BY title;"
	)->fetchAll(PDO::FETCH_OBJ);

	print_r($getSearch);

?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Prueba de conexion a la base e impresion de lista de peliculas</title>

	</head>
	<body>

		<?php foreach ($getAllMovies as $key => $value){
			echo "<li>" . $value->title . "</li>";
		}
		?>
	
	</body>
	</html>
