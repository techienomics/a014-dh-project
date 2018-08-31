<?php
	// Head inclusion & Page Title definition
	$pageTitle = 'Sign In | Owl Gamers';
	require_once 'partials/head.php';
?>

<?php
	// Body-header inclusion
	require_once 'partials/body-header.php';
?>

<?php
	// Body-nav inclusion
	require_once 'partials/body-nav.php';
?>
		
<?php 
	// Body-aside inclusion
	require_once 'partials/body-aside.php';
?>

		<main>
		
			<h1>Log In</h1>
			
			<div class="row">
				<div class="col-sm-8">

					<h2>Welcome back!</h2>

					<div class="row">
						<div class="col-sm-4">
								<button id="signin-facebook" type="button" class="btn btn-primary btn-sm">
									<a href="#">Sign in <ion-icon name="logo-facebook"></ion-icon></a>
								</button>
						</div>
						<div class="col-sm-4">
								<button id="signin-googleplus" type="button" class="btn btn-danger btn-sm">
									<a href="#">Sign in<ion-icon name="logo-googleplus"></ion-icon></a>
								</button>
						</div>
					
					</div>

					<?php 
						// Form inclusion
						require_once 'partials/user-form.php';
					?>

					<a href="#">Forgot Password</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="legals.php#privacy-policy">Privacy Policy</a>

				</div>

				<div class="col-sm-4">
					<h3>Next Events:</h3>
				</div>
			
			</div>
		
		</main>


<?php 
	// Body-footer inclusion
	require_once 'partials/body-footer.php';
?>