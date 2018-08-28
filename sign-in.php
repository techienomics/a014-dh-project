<?php
	// Head inclusion & Page Title definition
	$pageTitle = 'Sign In | Be The Champion';
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
		
			<section>

				<h1>Sign In</h1>
				<!--registro: recordatorio de los beneficios-->
				
				<button id="signin-facebook" type="button" class="btn btn-primary">
					<a href="#">Sign in with <ion-icon name="logo-facebook"></ion-icon></a>
				</button>
				<button id="signin-googleplus" type="button" class="btn btn-danger">
					<a href="#">Sign in with <ion-icon name="logo-googleplus"></ion-icon></a>
				</button>
				
				<?php 
					// Body-subscriber-form inclusion
					require_once 'partials/body-subscriber-form.php';
				?>
				
				<a href="#">Forgot Password</a><br>
				<a href="legals.php#privacy-policy">Privacy Policy</a>

			</section>	
		
		</main>


<?php 
	// Body-footer inclusion
	require_once 'partials/body-footer.php';
?>