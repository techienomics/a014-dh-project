<?php #

	class Trivia{
		private $id;
		private $question;
		private $last_name;
		private $email;
		private $password;
		private $nickname;
		private $country_id;
		private $gender;
		private $birth;
		private $profile_image;

		# User generation
		public function __construct($triviaId,){
			$this->$id = $triviaId
			$this->last_name = $post['last_name'];
			$this->email = $post['email'];
			$this->password = $this->hashpassword($post['password']);
			$this->nickname = $post['nickname'];
			$this->country_id = $post['country_id'];
			$this->gender = $post['gender'];
			$this->birth = $post['birth'];
			$this->profile_image = $post['profile_image'];
		}

		# ----- Getters --------
		public function getQuestion(){
			return $this->first_name;
		}

        public function getQuestionId(){
			return $this->first_name;
        }
        
		public function getCategory(){
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

		public function getProfileImage(){
			return $this->profile_image;
		}

		# Setters
		public function setFirstName($first_name){
			$this->first_name = $first_name;
		}
		
		public function setLastName($last_name){
			$this->last_name = $last_name;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function setPassword($password){
			$this->password = $password;
		}

		public function setNickname($nickname){
			$this->nickname = $nickname;
		}
		
		public function setCountryId($country_id){
			$this->country_id = $country_id;
		}

		public function setGender($gender){
			$this->gender = $gender;
		}

		public function setBirth($birth){
			$this->gender = $birth;
		}

		public function setProfileImage($profile_image){
			$this->profile_image = $profile_image;
		}

		public function setId($id){  #Reception from Database
			$this->id = $id;
		}
	}

?>