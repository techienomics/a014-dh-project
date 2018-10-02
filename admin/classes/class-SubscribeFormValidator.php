<?php

	require_once 'class-FormValidator.php';

	class SignUpFormValidator extends FormValidator{
		private $firstName;
		private $lastName;
		private $email;
		private $password;
		private $rePassword;
		private $nickname;
		private $country;
		private $gender;
		private $avatar;

		# Data sanitization
		public function __construct($post, $files){
			$this->firstName = isset($post['firstName']) ?  $post['firstName'] : '';
			$this->lastName = isset($post['lastName']) ?  $post['lastName'] : '';
			$this->email = isset($post['email']) ?  $post['email'] : '';
			$this->password = isset($post['password']) ?  $post['password'] : '';
			$this->rePassword = isset($post['rePassword']) ?  $post['rePassword'] : '';
			$this->nickname = isset($post['nickname']) ?  $post['nickname'] : '';				
			$this->country = isset($post['country']) ?  $post['country'] : '';			
			$this->gender = isset($post['gender']) ?  $post['gender'] : '';
			$this->avatar = isset($files['avatar']) ?  $files['avatar'] : '';
		}

		# Data validation
		public function isValid(){
			if ( empty($this->firstName) ) {
				$this->addError('firstName', 'First name can\'t be empty.');
			}
			if ( empty($this->lastName) ) {
				$this->addError('lastName', 'Last name can\'t be empty.');
			}
			# email y password podrian validarse en FormValidator directamente, porque no usar eso
			if ( empty($this->email) ) {  
				$this->addError('email', 'Email can\'t be empty.');
			} else if ( !filter_var($this->email, FILTER_VALIDATE_EMAIL) ) {
				$this->addError('email', 'Email not valid, please try another one.');
			}
			if ( empty($this->password) || empty($this->rePassword) ) {
				$this->addError('password', 'Password can\'t be empty.');
			} elseif ( $this->password != $this->rePassword) {
				$this->addError('password', 'Passwords aren\'t the same.');
			} elseif ( strlen($this->password) < 4 || strlen($this->rePassword) < 4 ) {
				$this->addError('password', 'Passwords: minimum 4 characters.');
			}
			if ( empty($this->nickname) ) {
				$this->addError('nickname', 'Nickname can\'t be empty.');
			} /*elseif ( strlen($this->nickname) > 3 ) {
				$this->addError('nickname','Nickname: minimum 3 characters.');
			}*/
			if ( empty($this->country) ) {
				$this->addError('country', 'Country must be selected.');
			}
			if ( empty($this->gender) ) {
				$this->addError('gender', 'Gender must be selected.');
			}
			if ( $this->avatar['error'] !== UPLOAD_ERR_OK ) {
				$this->addError('avatar', 'Image can\'t be empty.');
			} else {
				$ext = pathinfo($this->avatar['name'], PATHINFO_EXTENSION);
				if ( !in_array($ext, ALLOWED_IMAGE_TYPES) ) {
					$this->addError('avatar', 'Format image isn\'t allowed, try .jpg, .jpeg, .png.');
				}
			}
			return empty($this->getAllErrors());
		}

		# Getters
		public function getFirstName() {
			return $this->firstName;
		}

		public function getLastName() {
			return $this->lastName;
		}

		public function getEmail(){
			return $this->email;
		}

		public function getPassword(){
			return $this->password;
		}

		public function getNickname(){
			return $this->nickname;
		}

		public function getCountry(){
			return $this->country;
		}

		public function getGender(){
			return $this->gender;
		}

		public function getImage() {
			return $this->image;
		}
	}

?>