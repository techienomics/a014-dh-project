<?php #

	require_once 'class-FormValidator.php';

	class RenewPwdFormValidator extends FormValidator{
		private $email;
		private $password;

		public function __construct($post){
			$this->email = isset($post['email']) ?  $post['email'] : '';
			$this->password = isset($post['password']) ?  $post['password'] : '';
		}

		# Data validation
		public function isValid(){
			if ( empty($this->email) ) {
				$this->addError('email', 'Email can\'t be empty.');
			} else if ( !filter_var($this->email, FILTER_VALIDATE_EMAIL) ) {
				$this->addError('email', 'Email not valid, please try another one.');
			}
			if ( empty($this->password) ) {
				$this->addError('password', 'Password can\'t be empty.');
			}
			return empty($this->getAllErrors());
		}

		# Getters
		public function getEmail(){
			return $this->email;
		}

		public function getPassword(){
			return $this->password;
		}
	}

?>