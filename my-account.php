<?php #finbile myaccount
 
	require_once 'admin/autoload.php'; 

	if ( !$auth->isLoged() ) {
		header('location: sign-in.php');
	}

	$pageTitle = 'MyAccount |' . $websiteName;
	$theUser = $db->getUserByEmail($_SESSION['email']);
	require_once 'includes/head.php';
	require_once 'includes/body-header.php';
	require_once 'includes/body-navbar.php';
	require_once 'includes/body-aside.php';

?>

<!-- Body-main -->
<main>

	<div class="container" style="margin-top: 20px;">
	
		<div class="row col-10">
			<h1>My Account</h1>
		</div>

		<div class="row col-12"> <!-- Welcome message -->

			<!-- Register success -->
			<?php if (isset($_GET["newRegisteredUser"])): ?>

			<div class="alert alert-info alert-dismissible fade show" role="alert">
				<h5 class="alert-heading"> Congratulation!</h5><hr>	
				<p>Your new account was successfully created. Now, you are ready to get some of real action.</p>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
			 		<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<!-- New sign up -->
			<?php else: ?>

			<div class="alert alert-info alert-dismissible fade show" role="alert">
				<h5 class="alert-heading"> Hello again!</h5><hr>
				<p>Ready for kick someone's ass?. Time to make some fincoins ;)</p>
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
			 		<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<?php endif; ?>

		<div class="row col-12""> <!-- My Account: Dashboard & Challenge Chat -->

			<div class="col-8">
				
				<h2>Metrics</h2>	

				<p>Your stats, your finbile<sup>&reg</sup> record.</p>
				<br>
			
				<ul class="list-group col-6">
				  <li class="list-group-item d-flex justify-content-between align-items-center">
				  		<b>Inbox</b><span class="badge badge-primary badge-pill">12</span>
				  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
				  		<b>Fincoins<sup>&reg</sup></b><span class="badge badge-primary badge-pill">50fc</span>
				  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
				  		<b>Win/Lose</b><span class="badge badge-primary badge-pill">45w / 32l</span>
				  </li>
				</ul>

			</div>

			<div class="col-4 alert alert-secondary">

				<h2>Players Online:</h2>
				<p>Challenge!!</p><br>
					<div class="media p-3">
						<img src="<?= IMAGES_PATH; ?>user-empty.png" width="5%"
							 alt="" class="mr-3 mt-3 rounded-circle col-1">
						<div class="media-body">
						    <button type="button" class="btn btn-primary">Charly <small>5m</small>
			  				<span class="badge badge-light">6</span></button>
						</div>
					</div>

					<div class="media p-3">
						<img src="<?= IMAGES_PATH; ?>user-empty.png" width="5%"
							 alt="" class="mr-3 mt-3 rounded-circle col-1">
						<div class="media-body">Superman <small>34m</small>
			  			</div>
					</div>

					<div class="media p-3">
						<img src="<?= IMAGES_PATH; ?>user-empty.png" width="5%"
							 alt="" class="mr-3 mt-3 rounded-circle col-1">
						<div class="media-body">Homero <small>1h23m</small>
						</div>
					</div>

					<div class="media p-3">
						<img src="<?= IMAGES_PATH; ?>user-empty.png" width="5%"
							 alt="" class="mr-3 mt-3 rounded-circle col-1">
						<div class="media-body">BatmanCho <small>6h35m</small>
						</div>
					</div>
			
			</div>	
		
		<div class="row col-12"> <!-- Last activity -->

			<h2>Last activity</h2>

			<div class="media border p-3">
				<img src="<?= IMAGES_PATH; ?>user-empty.png" width="5%"
					 alt="Victor" class="mr-3 mt-3 rounded-circle col-1">

				<div class="media-body">
				    <h4>Victor <small><i>Posted on August 29, 2018</i></small></h4>
				    <p>me parece que no llegamos ni en pedo a la entrega no?</p>
				
					<div class="media p-3">
					    <img src="<?= IMAGES_PATH; ?>user-empty.png" width="5%"
					    	 alt="Albert" class="mr-3 mt-3 rounded-circle col-1">
					
						<div class="media-body">
						    <h4>Albert <small><i>Posted on August 30, 2018</i></small></h4>
						    <p>estamos en el horno, pero viste el dolar? se fue a la mierda loco</p>
						</div>
					</div>  
				</div>
			</div><br>

			<div class="media border p-3">
				<img src="<?= IMAGES_PATH; ?>user-empty.png" width="5%"
					 alt="Albert" class="mr-3 mt-3 rounded-circle col-1">
				<div class="media-body">
				    <h4>Albert <small><i>Posted on August 29, 2018</i></small></h4>
				    <p>hola Javier, buenas tardes. Crees que podemos entregar el proyecto el lunes?</p>
				
					<div class="media p-3">
					    <img src="<?= IMAGES_PATH; ?>user-empty.png" width="5%"
					    	 alt="Javi" class="mr-3 mt-3 rounded-circle col-1">
						<div class="media-body">
						    <h4>Javi <small><i>Posted on August 30, 2018</i></small></h4>
						    <p>no imposible, pidele ayuda a Batman chorizho, suerte</p>
						</div>
					</div>  
				</div>
			</div><br>

		</div>
	</div>

</main>

<?php require_once 'includes/body-footer.php'; ?>