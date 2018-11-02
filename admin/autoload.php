<?php #finbile autoload

	require_once 'admin/config.php';

	#Databases
	require_once 'classes/class-DBMsql.php';
	require_once 'classes/class-DBJson.php';

	#Classes
	require_once 'classes/class-Auth.php';
	require_once 'classes/class-SignUpFormValidator.php';
	require_once 'classes/class-SignInFormValidator.php';
	require_once 'classes/class-ForgotPwdFormValidator.php';
	require_once 'classes/class-RenewPwdFormValidator.php';
	require_once 'classes/class-User.php';
	require_once 'classes/class-SaveImage.php';

	#Models
	require_once 'classes/model-Answers.php';
	require_once 'classes/model-Categories.php';
	require_once 'classes/model-Countries.php';
	require_once 'classes/model-QuestionAnswer.php';
	require_once 'classes/model-Question.php';
	require_once 'classes/model-Ranking.php';
	require_once 'classes/model-Trivias.php';
	require_once 'classes/model-TriviaUser.php';
	require_once 'classes/model-Users.php';


	#Initial Migration of data form DBJson to DBMsql

	$connMigrationIn = new DBMsql(DB_HOST, DB_NAME, DB_USER, DB_PASS);
	$dbMigrationIn = new UserModel($connMigrationIn);

	if (count($dbMigrationIn->getAll($dbMigrationIn)) == 1) {
		
		$dbMigrationOut = new DBJson(DATABASE_PATH . 'users.json');
		$allUsers = $dbMigrationOut::initialMigration();

		foreach ($allUsers as $aUser) {
			$dbMigrationIn->insertOneJSON($aUser);
		}

	}
	
	#Models
	if (DB_USE == 'DBMsql') {

		$connFinbile = new DBMsql(DB_HOST, DB_NAME, DB_USER, DB_PASS);

		$answersModel = new AnswersModel($connFinbile);
		$categoriesModel = new CategoriesModel($connFinbile);
		$countriesModel = new CountriesModel($connFinbile);
		$questionAnswerModel = new QuestionAnswerModel($connFinbile);
		$questionModel = new QuestionModel($connFinbile);
		$rankingModel = new RankingModel($connFinbile);
		$triviasModel = new TriviasModel($connFinbile);
		$triviaUserModel = new TriviaUserModel($connFinbile);
		$usersModel = new UserModel($connFinbile);

		$auth = new Auth();

	} else {

		$usersModel = new DBJson(DATABASE_PATH . 'users.json');
		$auth = new Auth();

	}

	/*	# for debugg
		echo '<pre>';print_r($db);print_r($auth);echo '</pre>';
	*/

?>