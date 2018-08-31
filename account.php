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

<main class='container'>
		
	<br>
	<!-- Subscriber form -->
	<?php $visibleField = isset($_GET["register"]); ?>
	<?php if ($visibleField): ?>

	<div class="alert alert-success">
		<p>Congratulation! Your new account was successfully created.</p>
	</div>
	
	<?php endif; ?>

		<!-- Subscriber form -->
	<?php $visibleField = isset($_GET["login"]); ?>
	<?php if ($visibleField): ?>

	<div class="alert alert-info">
		<p>Hello again! We miss you, shall we play? ;)</p>
	</div>
	
	<?php endif; ?>


	<div class="row col-sm-12">
	
		<section class="col-sm-8">
			
			<h1>My Account</h1>
			
			<h2>Personal Information</h2>	

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, modi, adipisci. Quae eaque tenetur et voluptates nemo beatae eos incidunt ipsam aperiam sequi ut expedita dolores deleniti facilis, quisquam nisi. </p>
			<br>
		
		</section>	
		
		<section class="col-sm-4">
			<br>
			<br>
			
			<h2>Players Online<small><br class="btn btn-dark">let's game begin!!!</small></h2>
				    
					<div class="media-body">
						<img src="images/favicon-be-the-champion.png" alt="Albert" class="mr-3 mt-3 rounded-circle" width="10%">Chantum <small>5m</small>
					</div>
										<div class="media-body">
						<img src="images/favicon-be-the-champion.png" alt="Albert" class="mr-3 mt-3 rounded-circle" width="10%">PiolaVago <small>10m</small>
					</div>
										<div class="media-body">
						<img src="images/favicon-be-the-champion.png" alt="Albert" class="mr-3 mt-3 rounded-circle" width="10%">Justin <small>23m</small>
					</div>
										<div class="media-body">
						<img src="images/favicon-be-the-champion.png" alt="Albert" class="mr-3 mt-3 rounded-circle" width="10%">BatmanCho <small>4 hours</small>
					</div>
		</section>

<section class="col-sm-12">
			<br>
			<br>
			<br>
			<h2>Last Chats</h2>

			<div class="media border p-3">
				<img src="images/favicon-be-the-champion.png" alt="Victor" class="mr-3 mt-3 rounded-circle"  width="5%">

				<div class="media-body">
				    <h4>Victor <small><i>Posted on August 29, 2018</i></small></h4>
				    <p>me parece que no llegamos ni en pedo a la entrega no?</p>
				
					<div class="media p-3">
					    <img src="images/favicon-be-the-champion.png" alt="Albert" class="mr-3 mt-3 rounded-circle" width="5%">
					
						<div class="media-body">
						    <h4>Albert <small><i>Posted on August 30, 2018</i></small></h4>
						    <p>estamos en el horno, pero viste el dolar? se fue a la mierda loco</p>
						</div>
					</div>  
				</div>
			</div>
			<br>
			<div class="media border p-3">
				<img src="images/favicon-be-the-champion.png" alt="Albert" class="mr-3 mt-3 rounded-circle"  width="5%">

				<div class="media-body">
				    <h4>Albert <small><i>Posted on August 29, 2018</i></small></h4>
				    <p>hola Javier, buenas tardes. Crees que podemos entregar el proyecto el lunes?</p>
				
					<div class="media p-3">
					    <img src="images/favicon-be-the-champion.png" alt="Javi" class="mr-3 mt-3 rounded-circle" width="5%">
					
						<div class="media-body">
						    <h4>Javi <small><i>Posted on August 30, 2018</i></small></h4>
						    <p>no imposible, pidele ayuda a Batman chorizho, suerte</p>
						</div>
					</div>  
				</div>
			</div>

		</section>

	</div>

</main>

<?php 
	// Body-footer inclusion
	require_once 'partials/body-footer.php';
?>