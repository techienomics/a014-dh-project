<?php #Constants & variables
	
	$websiteName = 'finbile';

	# Constants
	define('USER_IMAGE_PATH', "admin/data/avatars/"); #define('USER_IMAGE_PATH', dirname(__FILE__) . "admin/data/avatars/");
	define('IMAGES_PATH', "admin/content/images/");
	define('BANNERS_PATH', "admin/content/images/banners/");
	define('DATABASE_PATH', "admin/data/");
	define('ALLOWED_IMAGE_TYPES', ['jpg', 'png', 'jpeg', 'gif', 'svg']);

	# Type of DB used
	define('DB_USE', 'DBMsql'); #Msql
	# define('DB_USE', 'DBJson'); #Json

	# DBMsql connection
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'finbile_db');
	define('DB_USER', 'root');
	define('DB_PASS', '');

	# Data input -> replace with database stored data!!
	define('COUNTRIES', [
		'ar' => 'Argentina',
		'bo' => 'Bolivia',
		'br' => 'Brasil',
		'co' => 'Colombia',
		'cl' => 'Chile',
		'ec' => 'Ecuador',
		'pa' => 'Paraguay',
		'pe' => 'Perú',
		'uy' => 'Uruguay',
		've' => 'Venezuela',
		"oc" => "Other countries",
	]);

	define('GENDER', [
		"M" => "Male",
		"F" => "Female",
		"O" => "Other",
	]);


	/*
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=finbile_db
	DB_USERNAME=root
	DB_PASSWORD=
	*/

?>