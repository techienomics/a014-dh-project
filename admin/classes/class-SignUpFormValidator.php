<?php #

	require_once 'class-FormValidator.php';

	class SignUpFormValidator extends FormValidator{
		private $first_name;
		private $last_name;
		private $email;
		private $password;
		private $rePassword;
		private $nickname;
		private $country_id;
		private $gender;
		private $birth;
		private $profile_image;

		# Data sanitization
		public function __construct($post, $files){
			$this->first_name = isset($post['first_name']) ?  $post['first_name'] : '';
			$this->last_name = isset($post['last_name']) ?  $post['last_name'] : '';
			$this->email = isset($post['email']) ?  $post['email'] : '';
			$this->password = isset($post['password']) ?  $post['password'] : '';
			$this->rePassword = isset($post['rePassword']) ?  $post['rePassword'] : '';
			$this->nickname = isset($post['nickname']) ?  $post['nickname'] : '';				
			$this->country_id = isset($post['country_id']) ?  $post['country_id'] : '';	
			$this->gender = isset($post['gender']) ?  $post['gender'] : '';
			$this->birth = isset($post['birth']) ?  $post['birth'] : '';			
			$this->profile_image = isset($files['profile_image']) ?  $files['profile_image'] : '';
		}

		# Data validation
		public function isValid(){
			if ( empty($this->first_name) ) {
				$this->addError('first_name', 'First name can\'t be empty.');
			}
			if ( empty($this->last_name) ) {
				$this->addError('last_name', 'Last name can\'t be empty.');
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
			if ( empty($this->country_id) ) {
				$this->addError('country_id', 'Country must be selected.');
			}
			if ( empty($this->gender) ) {
				$this->addError('gender', 'Gender must be selected.');
			}
			if ( empty($this->birth) ) {
				$this->addError('birth', 'Birth must be selected.');
			}
			if ( $this->profile_image['error'] !== UPLOAD_ERR_OK ) {
				$this->addError('profile_image', 'Image can\'t be empty.');
			} else {
				$ext = pathinfo($this->profile_image['name'], PATHINFO_EXTENSION);
				if ( !in_array($ext, ALLOWED_IMAGE_TYPES) ) {
					$this->addError('profile_image', 'Format image isn\'t allowed, try .jpg, .jpeg, .png.');
				}
			}
			return empty($this->getAllErrors());
		}

		# --------- Getters --------
		public function getFirstName() {
			return $this->first_name;
		}

		public function getLastName() {
			return $this->last_name;
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

		public function getCountryId(){
			return $this->country_id;
		}

		public function getGender(){
			return $this->gender;
		}

		public function getBirth(){
			return $this->birth;
		}
		public function getProfileImage() {
			return $this->profile_image;
		}
	}

?>