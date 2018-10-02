<?php

	class Auth{

		public function __construct(){
			session_start();
			if( isset($_COOKIE['keepSignedIn']) && !$this->isLoged() ) {
				$this->logIn($_COOKIE['keepSignedIn']);
			}
		}

		public function SignUp($email){
			$_SESSION['email'] = $email;
			header('location: my-account.php?newRegisteredUser');
			exit;
		}

		public function SignIn($email){
			$_SESSION['email'] = $email;
			header('location: my-account.php?login');
			exit;
		}

		public function isLoged() {
			return isset($_SESSION['email']);
		}

		public function logOut(){
			session_destroy();
			setcookie('keepSignedIn', '', time() - 10);
			header('location: index.php?alreadyMissYou');
			exit;
		}
	}

?>