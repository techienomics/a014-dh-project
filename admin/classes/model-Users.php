<?php #

	require_once 'class-DB.php';

	class UserModel extends DB{
		private $conn;

		public function __construct(DBMsql $connection){
			$this->conn = $connection->getConnection();
		}

		# implements from DB
		public function getAll($dbPath){
			$stmt = $this->conn->prepare("
				SELECT id, last_name, first_name, email, password, nickname, 
					   gender, birth, profile_image, country_id
				FROM users
			");
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}

		public function getOneByEmail($email){
			$stmt = $this->conn->prepare("
				SELECT *
				FROM users
				WHERE email = :email
			");
			$stmt->bindValue(":email", $email, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_OBJ);
			
			# this should return a User object, refactoring needed
			#$userObject = $stmt->fetch(PDO::FETCH_OBJ);
			#$userArray = json_decode(json_encode($userObject), True);
			#$user = new User($userArray);
			#return $user;
		}

		# implements from DB
		public function getOneById($id){
			$stmt = $this->conn->prepare("
				SELECT *
				FROM users
				WHERE id = :id
			");
			$stmt->bindValue(":id", $id, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_OBJ);
		}

		# implements from DB
		public function insertOne($data){
			$first_name = $data->getFirstName();
			$last_name = $data->getLastName();
			$email = $data->getEmail();
			$password = $data->getPassword();
			$nickname = $data->getNickname();
			$gender = $data->getGender();
			$birth = $data->getBirth();
			$profile_image = $data->getProfileImage();
			$country_id = $data->getCountryId();
			$insertStmt = $this->conn->prepare("
				INSERT INTO users (
					last_name, first_name, email, password, nickname, 
					gender, birth, profile_image, country_id
				)
				VALUES (
					:last_name, :first_name, :email, :password, :nickname, 
					:gender, :birth, :profile_image, :country_id
				)
			");
			$insertStmt->bindValue(":last_name", $last_name, PDO::PARAM_STR);
			$insertStmt->bindValue(":first_name", $first_name, PDO::PARAM_STR);
			$insertStmt->bindValue(":email", $email, PDO::PARAM_STR);
			$insertStmt->bindValue(":password", $password, PDO::PARAM_STR);
			$insertStmt->bindValue(":nickname", $nickname, PDO::PARAM_STR);
			$insertStmt->bindValue(":gender", $gender, PDO::PARAM_STR);
			$insertStmt->bindValue(":birth", $birth, PDO::PARAM_STR);
			$insertStmt->bindValue(":profile_image", $profile_image, PDO::PARAM_STR);
			$insertStmt->bindValue(":country_id", $country_id, PDO::PARAM_INT);
			$insertStmt->execute();
			return $this->conn->lastInsertId();
		}

		# implements from DB
		public function deleteOneById($id){
			try {
				$stmt = $this->conn->prepare("DELETE FROM users WHERE id = :id");
				$stmt->bindValue(':id', $id, PDO::PARAM_INT);
				$stmt->execute();
				header("location: listado-pelis.php?erased=true"); exit;
			} catch (PDOException $e) {
				$msg = $e->getMessage();
				header("location: listado-pelis.php?erased=$msg"); exit;
			}
		}

		public function emailExist($email){

		}

		public function nicknameExist($nickname){

		}

		#para que era esto??
		public function allRows($stmt){
			if ( gettype($stmt) == 'array' ) {
				return count($stmt);
			} else {
				return 1;
			}
		}

		# implements from DB
		public function customQuery($query){
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_OBJ);
		}

		# implements from DB
		public function insertOneJSON($data){
			$first_name = $data->first_name;
			$last_name = $data->last_name;
			$email = $data->email;
			$password = $data->password;
			$nickname = $data->nickname;
			$gender = $data->gender;
			$birth = $data->birth;
			$profile_image = $data->profile_image;
			$country_id = $data->country_id;
			$insertStmt = $this->conn->prepare("
				INSERT INTO users (
					last_name, first_name, email, password, nickname, 
					gender, birth, profile_image, country_id
				)
				VALUES (
					:last_name, :first_name, :email, :password, :nickname, 
					:gender, :birth, :profile_image, :country_id
				)
			");
			$insertStmt->bindValue(":last_name", $last_name, PDO::PARAM_STR);
			$insertStmt->bindValue(":first_name", $first_name, PDO::PARAM_STR);
			$insertStmt->bindValue(":email", $email, PDO::PARAM_STR);
			$insertStmt->bindValue(":password", $password, PDO::PARAM_STR);
			$insertStmt->bindValue(":nickname", $nickname, PDO::PARAM_STR);
			$insertStmt->bindValue(":gender", $gender, PDO::PARAM_STR);
			$insertStmt->bindValue(":birth", $birth, PDO::PARAM_STR);
			$insertStmt->bindValue(":profile_image", $profile_image, PDO::PARAM_STR);
			$insertStmt->bindValue(":country_id", $country_id, PDO::PARAM_INT);
			$insertStmt->execute();
			return $this->conn->lastInsertId();
		}

	}
?>