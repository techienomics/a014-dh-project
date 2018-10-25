<?php #finbile sign-in

	require_once 'admin/autoload.php';

	if( $auth->isLoged() ) {
		header('location: my-account.php');
	}

	$pageTitle = 'Sign In |' . $websiteName;
	require_once 'includes/head.php';
	require_once 'includes/body-header.php';
	require_once 'includes/body-navbar.php';
	require_once 'includes/body-aside.php';

	if (!isset($_GET["forgotpassword"]) AND !isset($_GET["email"])) {
		$SignInData = new SignInFormValidator($_POST);
	} elseif (!isset($_GET["email"])) {
		$SignInData = new ForgotPwdFormValidator($_POST);
	} else {
		$SignInData = new RenewPwdFormValidator($_POST);
	}

	if ($_POST) {

		if ( $SignInData->isValid() ) {
			$user = $db->getUserByEmail($_POST['email']);

			if ( !$user ) {
				$SignInData->addError('email', 'This email isn\'t registered, please try another one.');
			} else if ( !password_verify($_POST['password'], $user->getPassword()) ) {
				$SignInData->addError('password', 'Password is wrong, please try again.');
			} else {
				if ( isset($_POST['keepSignedIn']) ) {
					setcookie('keepSignedIn', $_POST['email'], time() + (60*60*12));
				}
				$auth->SignIn($user->getEmail());
			}
		}
	}

?>

<!-- Body-main -->
<main>
	
	<div class="container" style="margin-top:30px; margin-bottom: 30px;">

		<div class="row justify-content-center">

			<div class="col-md-8">

				<!-- Hide in a subscriber form -->
				<?php if (!isset($_GET["forgotpassword"]) AND !isset($_GET["email"])): ?>

					<h2>Welcome back!</h2>
					<table>
						<tr>
							<td><p>Get start:</p></td>
							<td>
							<div class="col-sm-4">
									<button id="signin-facebook" type="button" class="btn btn-info btn-sm">
										<ion-icon name="logo-facebook"></ion-icon><a href="#"> Sign in</a>
									</button>
							</div><br>
							<div class="col-sm-4">
									<button id="signin-googleplus" type="button" class="btn btn-danger btn-sm">
										<ion-icon name="logo-googleplus"></ion-icon><a href="#"> Sign in</a>
									</button>
							</div>
							</td>
						</tr>
					</table>

					<br><p>Or complete with your personal information:</p>
					<?php require_once 'includes/signin-form.php'; ?>

					<div class="col-md-6">
						<a href="sign-in.php?forgotpassword">Forgot ID or password?</a>
					</div>

				<?php elseif (!isset($_GET["email"])) : ?>

					<h2>Please, renew your password:</h2>
					<p>You will receive an email with a recovery link. Please introduce your email address, send email and go to your inbox.</p><br>
					
					<?php require_once 'includes/forgotpwd-form.php'; ?>

				<?php else: ?>

					<h2>Excelent, just one step more:</h2>
					<p>Please introduce your email address and a new password twice.</p><br>
					
					<?php require_once 'includes/renewpwd-form.php'; ?>

				<?php endif; ?>


			</div>

			<div class="col-4">

				<br><br>
				
				<div class="alert alert-warning">
					<p>
					Make your company grow. <br>Ad here. <br>Call 501-232-2345.
					<br><br><br><br><br><br><br><br><br><br>
					</p>
				</div>

			</div>

		</div>

	</div>

</main>

<?php require_once 'includes/body-footer.php'; ?>