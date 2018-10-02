<?php #Constants & variables
	
	$websiteName = 'finbile';

	#define('USER_IMAGE_PATH', dirname(__FILE__) . "admin/data/avatars/");
	define('USER_IMAGE_PATH', "admin/data/avatars/");
	define('IMAGES_PATH', "admin/content/images/");
	define('BANNERS_PATH', "admin/content/images/banners/");
	define('DATABASE_PATH', "admin/data/");
	define('ALLOWED_IMAGE_TYPES', ['jpg', 'png', 'jpeg', 'gif', 'svg']);
	
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

?>