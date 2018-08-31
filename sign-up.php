<?php
	// Head inclusion & Page Title definition
	$pageTitle = 'Sign Up | Owl Gamers';
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


			<div class="row">

				<div class="col-sm-8">

				<!-- Subscriber form -->
				<?php $visibleField = !isset($_GET["subscribe"]); ?>
				<?= ($visibleField) ? "<h1>Register</h1>" : 
								"<h1>Tournaments Alerts: subscribe </h1>"; ?>

					<h2>Get started:</h2>

					<div class="row">
						<div class="col-sm-4">
								<button id="signin-facebook" type="button" class="btn btn-primary btn-sm">
									<a href="#">Sign up <ion-icon name="logo-facebook"></ion-icon></a>
								</button>
						</div>
						<div class="col-sm-4">
								<button id="signin-googleplus" type="button" class="btn btn-danger btn-sm">
									<a href="#">Sign up<ion-icon name="logo-googleplus"></ion-icon></a>
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

					<!-- Subscriber form -->
					<?php $visibleField = !isset($_GET["subscribe"]); ?>
					<?= ($visibleField) ? "<h3>Benefits to join:</h3>" :
								"<h3>Benefits to subscribe: </h3>"; ?>
					<!--registro: recordatorio de los beneficios-->
				</div>
			
			</div>

		</main>

	
<?php 
	// Body-footer inclusion
	require_once 'partials/body-footer.php';
?>