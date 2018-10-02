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

	$FormData = new SignUpFormValidator($_POST, $_FILES);

	if ($_POST) {
		if ( $FormData->isValid() ) {
			if ($db->emailExist($FormData->getEmail())) {
				$FormData->addError('email', 'This email is already in use.');
			} 
			if ($db->nicknameExist($FormData->getNickname())) {
				$FormData->addError('nickname', 'This nickname is already in use.');
			}
			else {
				$imageName = SaveImage::uploadImage($_FILES['avatar']);
				$_POST['image'] = $imageName;
				$user = new User($_POST);
				$user->setId($db->generateId());
				$db->saveUser($user);
				$auth->SignUp($user->getEmail());
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