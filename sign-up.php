<?php #finbile sign-up 

	require_once 'admin/autoload.php';

	if( $auth->isLoged() ) {
		header('location: my-account.php');
	}

	$pageTitle = 'Sign Up |' . $websiteName;
	require_once 'includes/head.php';
	require_once 'includes/body-header.php';
	require_once 'includes/body-navbar.php';
	require_once 'includes/body-aside.php';

	$countries = $countriesModel->customQuery('SELECT id, name FROM countries ORDER BY name');

	/*
	echo '<pre>';
	print_r($countriesObj);
	echo '</pre>'; exit;
	*/

	$FormData = new SignUpFormValidator($_POST, $_FILES);

	if ($_POST) {
		if ( $FormData->isValid() ) {
			if ($usersModel->emailExist($FormData->getEmail())) {
				$FormData->addError('email', 'This email is already in use.');
			}
			if ($usersModel->nicknameExist($FormData->getNickname())) {
				$FormData->addError('nickname', 'This nickname is already in use.');
			}
			else {
				$imageName = SaveImage::uploadImage($_FILES['profile_image']);
				$_POST['profile_image'] = $imageName;
				$user = new User($_POST);
				#$user->setId($usersModel->generateId());
				
				#echo '<pre>';
				#print_r($_POST);
				#print_r($_FILES);
				#echo '</pre>'; exit;
				
				$usersModel->insertOne($user);
				$auth->signUp($user->getEmail());
			}
		}
	}

?>

<!-- Body-main -->
<main>

	<div class="container" style="margin-top:30px; margin-bottom: 30px;">

		<div class="row justify-content-left">

			<div class="col-8">

				<!-- Subscriber form -->
				<?= !isset($_GET["subscribe"]) ? "<h1>Sign up</h1>" : "<h1>Challenge alerts!!</h1>"; ?>
				
				<table>
					<tr>
						<td><p>Get start:</p></td>
						<td>

					<div class="col-sm-4">
							<button id="signin-facebook" type="button" class="btn btn-info btn-sm">
								<ion-icon name="logo-facebook"></ion-icon><a href="#">
								 <?= !isset($_GET["subscribe"]) ? " Sign up" : " Subscribe"; ?>
								</a>
							</button>
					</div><br>
					<div class="col-sm-4">
							<button id="signin-googleplus" type="button" class="btn btn-danger btn-sm">
								<ion-icon name="logo-googleplus"></ion-icon><a href="#">
								 <?= !isset($_GET["subscribe"]) ? " Sign up" : " Subscribe"; ?>
								</a>
							</button>
					</div>
						
						</td>
					</tr>
				</table>

				<br><p>Or complete with your personal information:</p>
				<?php require_once 'includes/signup-form.php'; ?>

			</div>

			<div class="col-4">

				<br><br>
				
				<div class="alert alert-warning">
					<p>
					Make your company grow. <br>Ad here. <br>Call 501-232-2345.
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					</p>
				</div>

			</div>

		</div>

	</div>

</main>

<?php require_once 'includes/body-footer.php'; ?>


<!--form method="post">
	
	<div class="form-group">
		<div class="row">
			<div class="col-12">
				<label>Fecha de Estreno:</label>
			</div>
			<div class="col-md-4">
				<i>Año: </i>
				<select name="year" class="form-control">
					<?php for ($i=2018; $i >= 1920; $i--) { ?>
						<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="col-md-4">
				<i>Mes: </i>
				<select name="month" class="form-control">
					<?php for ($i=1; $i < 13; $i++) { ?>
						<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="col-md-4">
				<i>Día: </i>
				<select name="day" class="form-control">
					<?php for ($i=1; $i < 32; $i++) { ?>
						<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label>Género:</label>
		<select name="genre_id" class="form-control">
			<?php foreach ($allGenres as $oneGenre): ?>
				<option value="<?= $oneGenre->id; ?>"><?= $oneGenre->name; ?></option>
			<?php endforeach; ?>
		</select>
	</div>

</form-->