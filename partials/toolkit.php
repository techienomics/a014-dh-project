<?php

	// function myDebug -
	function myDebug($debugInput, $debugType = NULL) {
		echo "<pre>";
		switch ($debugType) {
			case 'print_r':
				print_r($debugInput);
				break;
			case 'echo':
				echo $debugInput;
				break;
			default:
				var_dump($debugInput);
				break;
		}
		echo "</pre>";
		exit;
	}
?>

<?php
	// Data validation Form
	$userFirstName = "";
	$userLastName = "";
	$userEmail = "";
	$userName = "";
	$errors = [];

	function formValidate($formData) {
		
		// $errors = [];

		//if ($_POST) {

		// Data sanitization
		$userFirstName = trim($_POST['userFirstName']);
		$userLastName = trim($_POST['userLastName']);
		$userEmail = trim($_POST['userEmail']);
		$userName = trim($_POST['userName']);
		$userPassword = trim($formData['userPassword']);
		$repeatUserPassword = trim($formData['repeatUserPassword']);
		$userCountry = trim($formData['userCountry']);


		// Data validation
		if ( empty($userFirstName) ) {
			$errors["userFirstName"] = "This field can't be empty.";
		}

		if ( empty($userLastName) ) {
			$errors["userLastName"] = "This field can't be empty.";
		}

		if ( empty($userEmail) ) {
			$errors["userEmail"] = "This field can't be empty.";
		} elseif ( !filter_var($userEmail, FILTER_VALIDATE_EMAIL) ) {
			$errors["userEmail"] = "Ingresá un email de valido";
		}

		if ( empty($userName) ) {
			$errors["userName"] = "This field can't be empty.";
		} elseif ( strlen($userName) < 3 || strlen($userName) > 10) {
			$errors["userName"] = "Username need a minimun 3 and maximun 10 characters.";
		}

		if ( empty($userPassword) || empty($repeatUserPassword) ) {
			$errors['userPassword'] = 'Passwords can\'t be empty.';
		} elseif ( $userPassword != $repeatUserPassword) {
			$errors['userPassword'] = 'Passwords aren\'t the same.';
		} elseif ( strlen($userPassword) < 4 || strlen($repeatUserPassword) < 4 ) {
			$errors['userPassword'] = 'Passwords must to have more than 4 characters.';
		}

		if ( empty($userCountry) ) {
			$errors['userCountry'] = 'Select a country';
		}

		return $errors;
	
		if (count($errors) == 0) {
			header("location: account.php"); exit;
		}
	}

	// User creator
	function userCreator($data){
		$user = [
			'id' => setId(),
			'userFirstName' => $data['userFirstName'],
			'userLastName' => $data['userLastName'],
			'userEmail' => $data['userEmail'],
			'userPassword' => password_hash($data['userPassword'], PASSWORD_DEFAULT),
			'userCountry' => $data['userCountry'],
			'userAvatar' => $data['userAvatar'],
		];

		return $user;
	}

	// Función Guardar Usuario
	function saveUser($dataDePost){
		$finalUser = userCreator($dataDePost);

		$userInJsonFormat = json_encode($finalUser);

		file_put_contents('users.json', $userInJsonFormat . PHP_EOL, FILE_APPEND);
	}

	// Función traer todos los Usuarios
	function getAllUsers() {
		$allUsersString = file_get_contents('users.json');

		$usersInArray = explode(PHP_EOL, $allUsersString);
		array_pop($usersInArray);

		$finalUsersArray = [];

		foreach ($usersInArray as $oneUser) {
			$finalUsersArray[] = json_decode($oneUser, true);
		}

		return $finalUsersArray;
	}

	// Función Generar ID
	function setId(){
		$allUsers = getAllUsers();

		if( count($allUsers) == 0){
			return 1;
		}

		$lastUser = array_pop($allUsers);

		return $lastUser['id'] + 1;
	}
?>
