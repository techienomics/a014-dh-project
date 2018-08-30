<?php
	// Head inclusion & Page Title definition
	$pageTitle = 'My Account | Be The Champion';
	require_once 'partials/head.php';

	// Body-header inclusion
	require_once 'partials/body-header.php';

	// Body-nav inclusion
	require_once 'partials/body-nav.php';

	// Body-aside inclusion
	require_once 'partials/body-aside.php';
?>

		<main>
			
			<div class="alert alert-success">
			<p>Congratulation! Your new account was successfully created.</p>
			</div>
			
			<section>
				
				<h1>My Account</h1>
				
				<h2>Personal Information</h2>	

				<p>Victor se encuentra trabajando en este < main > </p>
				<br>
			
			</section>	

		</main>

<?php 
	// Body-footer inclusion
	require_once 'partials/body-footer.php';
?>