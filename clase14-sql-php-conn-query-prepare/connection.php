<?php #connection sin objetos, luego lo pasa a objetos 
	
	require_once 'config.php';

	$host = DB_HOST;
	$dbName = DB_NAME;
	$dsn = "mysql:host=$host; dbname=$dbName; port=3306; charset=utf8mb4";
	$user = DB_USER;
	$password = DB_PASS;
	$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

	try {
			$conn = new PDO($dsn,$user,$password,$opt);
	} catch (PDOException $exception) {
			echo $exception->getMessage();
	}

?>