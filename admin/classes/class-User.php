<?php

	class User{
		private $id;
		private $firstName;
		private $lastName;
		private $email;
		private $password;
		private $nickname;
		private $country;
		private $gender;
		private $image;

		# User generation
		public function __construct($post){
			$this->firstName = $post['firstName'];
			$this->lastName = $post['lastName'];
			$this->email = $post['email'];
			$this->password = $post['password'];
			$this->nickname = $post['nickname'];
			$this->country = $post['country'];
			$this->gender = $post['gender'];
			$this->image = $post['image'];
		}

		public function hashPassword(){
			return password_hash($this->password, PASSWORD_DEFAULT);
		}

		public function exportUserData(){
			return [
				'id' => $this->id,
				'firstName' => $this->firstName,
				'lastName' => $this->lastName,
				'email' => $this->email,
				'password' => $this->hashpassword($this->password),
				'nickname' => $this->nickname,
				'country' => $this->country,
				'gender' => $this->gender,
				'image' => $this->image,
			];
		}

		# Getters
		public function getFirstName(){
			return $this->firstName;
		}

		public function getLastName(){
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
		
		public function getImage(){
			return $this->image;
		}

		# Setters
		public function setFirstName($firstName){
			$this->firstName = $firstName;
		}
		
		public function setLastName($lastName){
			$this->lastName = $lastName;
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
		
		public function setCountry($country){
			$this->country = $country;
		}

		public function setGender($gender){
			$this->gender = $gender;
		}

		public function setImage($image){
			$this->image = $image;
		}

		public function setId($id){  #Reception from Database
			$this->id = $id;
		}
	}

?>