<?php #finbile constants & variables
	
	$websiteName = 'finbile';

	# Constants
	define('USER_IMAGE_PATH', "admin/data/avatars/");
	define('IMAGES_PATH', "admin/content/images/");
	define('BANNERS_PATH', "admin/content/images/banners/");
	define('DATABASE_PATH', "admin/data/");
	define('ALLOWED_IMAGE_TYPES', ['jpg', 'png', 'jpeg', 'gif', 'svg']);

	# Type of DB that will be used
	define('DB_USE', 'DBMsql'); #Msql
	# define('DB_USE', 'DBJson'); #Json

	# DBMsql connection DB_CONNECTION=mysql # DB_HOST=127.0.0.1 DB_PORT=3306
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'finbile_db');
	define('DB_USER', 'root');
	define('DB_PASS', '');

	# Data input -> replace with database stored data if implements gender in db
	define('GENDER', [
		"Male" => "Male",
		"Female" => "Female",
		"Other" => "Other",
	]);

?>