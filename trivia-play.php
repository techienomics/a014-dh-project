<?php #finbile trivia play 
 
	require_once 'admin/autoload.php'; 

	if ( !$auth->isLoged() ) {
		header('location: sign-in.php');
	}

	$pageTitle = 'MyAccount |' . $websiteName;
	$theUser = $usersModel->getOneByEmail($_SESSION['email']);
	require_once 'includes/head.php';
	require_once 'includes/body-header.php';
	require_once 'includes/body-navbar.php';
	require_once 'includes/body-aside.php';

    $newTrivia = $triviasModel->insertOne($pageTitle); #Trivia number
    #echo '<pre>'; print_r($newTrivia); echo '</pre>';
    
	$categoriesAll = $categoriesModel->getAll(); #Category Object array, nedeed for $categoriesQ
	#echo '<pre>'; print_r($categoriesAll); echo '</pre>';

	$categoriesQ = [1,2,3,4,5];
	$randomCategory = $categoriesQ[array_rand($categoriesQ)]; #CategoryID random

	$question = $questionModel->getQuestionsByCategory($randomCategory);
	echo '<pre>'; print_r($question); echo '</pre>';

	$answers = $answersModel->getAnswersByCategory($randomCategory);
	echo '<pre>'; print_r($answers); echo '</pre>';

	echo 'Alternativa A';
	echo $answers->name .' (' . $answers->code . ')';

	echo 'Alternativa B';
	echo $answers->name .' (' . $answers->code . ')';

?>

<!-- Body-main -->
<main>

	<div class="container" style="margin-top: 20px;">
	
		<div class="row col-10">
			<h1>Trivia #<?= $newTrivia ?></h1>
            <p>Good luck!</p>
		</div>

        <div>
        
        </div>

	</div>

</main>

<?php require_once 'includes/body-footer.php'; ?>