<?php

	require_once 'class-DB.php';

	class DBJson extends DB{
		private $dbPath;
		private static $allUsers;

		function __construct($dbPath){
			$this->dbPath = $dbPath;
			self::$allUsers = self::getAll($dbPath);
		}
		
		public function initialMigration(){
			return self::$allUsers;
		}

		# implements from DB
		public function getAll($dbPath){
			$allUsersString = file_get_contents($dbPath);
			$usersInArray = explode(PHP_EOL, $allUsersString);
			array_pop($usersInArray);
			$finalUsersArray = [];
			foreach ($usersInArray as $aUser) {
				$finalUsersArray[] = json_decode($aUser);
			}
			return $finalUsersArray;
		}

		# implements from DB
		public function getOneByEmail($email){
			foreach (self::$allUsers as $aUser) {
				if($aUser->email == $email) {
					$pickedUser = (array) $aUser;
					$finalUser = new User($pickedUser);
					$finalUser->setId($pickedUser['id']);
					return $finalUser;
				}
			}
			return false;
		}

		# implements from DB
		public function getOneById($id){

		}

		# implements from DB
		public function insertOne($data){
			$userInJsonFormat = json_encode($data->exportUserData());
			file_put_contents($this->dbPath, $userInJsonFormat . PHP_EOL, FILE_APPEND);
		}

		# implements from DB
		public function deleteOneById($id){

		}

		# implements from DB
		public function emailExist($email){
			foreach (self::$allUsers  as $aUser) {
				if ($email == $aUser->email) {
					return true;
				}
			}
			return false;
		}

		# implements from DB
		public function nicknameExist($nickname){
			foreach (self::$allUsers  as $aUser) {
				if ($nickname == $aUser->nickname) {
					return true;
				}
			}
			return false;
		}

		public function generateId(){
			if( count(self::$allUsers) == 0 ) {
				return 1;
			}
			$lastUser = array_pop(self::$allUsers);
			return $lastUser->id + 1;
		}

		public function customQuery($query){

		}

	}

?>