<?php

	abstract class DB{
		
		public abstract function emailExist($email);
		public abstract function nicknameExist($nickname);
		public abstract function getUserByEmail($email);
		public abstract function saveUser(User $user);
	}

?>