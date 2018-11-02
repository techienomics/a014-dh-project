<?php # 

	abstract class FormValidator{		
		protected $errors;

		function __construct(){
			$this->errors = [];
		}

		public abstract function isValid();
		# requiere implemetacion e hijo, porque no usar implements?

		public function addError($field, $error){
			$this->errors[$field] = $error;
		}

		public function fieldHasError($field){
			return isset($this->errors[$field]);
		}

		public function getFieldError($field){
			return isset($this->errors[$field]) ? $this->errors[$field] : '';
		}

		public function getAllErrors(){
			return $this->errors;
		}

	}

?>