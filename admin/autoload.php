<?php
	require_once 'admin/config.php'; 

	// Classes
	require_once 'classes/class-SignUpFormValidator.php';
	require_once 'classes/class-SignInFormValidator.php';
	require_once 'classes/class-ForgotPwdFormValidator.php';
	require_once 'classes/class-RenewPwdFormValidator.php';
	require_once 'classes/class-SaveImage.php';
	require_once 'classes/class-User.php';
	require_once 'classes/class-DBJson.php';
	require_once 'classes/class-Auth.php';

	$db = new DBJson(DATABASE_PATH . 'users.json');
	$auth = new Auth();

	/* debugg
	echo '<pre>';
	print_r($db);
	echo '</pre>';

	echo '<pre>';
	print_r($auth);
	echo '</pre>'; */

?>