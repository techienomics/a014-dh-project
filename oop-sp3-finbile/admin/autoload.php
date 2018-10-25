<?php
	require_once 'admin/config.php'; 

	// Classes
	require_once 'classes/class-Auth.php';

	require_once 'classes/class-SignUpFormValidator.php';
	require_once 'classes/class-SignInFormValidator.php';
	require_once 'classes/class-ForgotPwdFormValidator.php';
	require_once 'classes/class-RenewPwdFormValidator.php';

	require_once 'classes/AnswersModel.php';
	require_once 'classes/CategoriesModel.php';
	require_once 'classes/CoutnriesModel.php';
	require_once 'classes/QuestionAnswerModel.php';
	require_once 'classes/QuestionModel.php';
	require_once 'classes/RankingModel.php';
	require_once 'classes/TriviasModel.php';
	require_once 'classes/TiviaUserModel.php';

	require_once 'classes/UsersModel.php';
	require_once 'classes/class-User.php';
	require_once 'classes/class-SaveImage.php';

	if (DB_USE == 'DBMsql') {

		require_once 'classes/class-Connection.php';

		$connFinbile = new Connection(DB_HOST, DB_NAME, DB_USER, DB_PASS);

		$answersModel = new AnswersModel($connFinbile);
		$categoriesModel = new CategoriesModel($connFinbile);
		$countriesModel = new CountriesModel($connFinbile);
		$questionAnswerModel = new QuestionAnswerModel($connFinbile);
		$questionModel = new QuestionModel($connFinbile);
		$rankingModel = new RankingModel($connFinbile);
		$triviasModel = new TriviasModel($connFinbile);
		$triviaUserModel = new TriviaUserModel($connFinbile);
		$usersModel = new UsersModel($connFinbile);

		$auth = new Auth();

	}else {

		require_once 'classes/class-DBJson.php';

		$db = new DBJson(DATABASE_PATH . 'users.json');
		$auth = new Auth();
	}

	/* debugg
	echo '<pre>';
	print_r($db);
	echo '</pre>';

	echo '<pre>';
	print_r($auth);
	echo '</pre>'; */

?>