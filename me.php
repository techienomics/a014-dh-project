<?php #finbile me 

	require_once 'admin/autoload.php'; 

	if ( !$auth->isLoged() ) {
		header('location: sign-in.php');
	}

	$pageTitle = 'MyProfile | ' . $websiteName;
	require_once 'includes/head.php';
	require_once 'includes/body-header.php';
	require_once 'includes/body-navbar.php';
	require_once 'includes/body-aside.php';

?>

<!-- Body-main -->
<main>
				
	<div class="container" style="margin-top: 20px;">
	
		<div class="row col-12">
			<h1>User's Profile</h1>
		</div>

		<div class="row col-12">

			<div class="col-4 alert alert-secondary"> <!-- Personal info -->

				
				<?php if (!isset($_GET["editpassword"])): ?>

				<h2>Personal Information</h2>

				<img src="admin/data/avatars/<?= $theUser->getImage() ?>" width="100%"><br><br>
				<p>Actual data:</p>
				<p>Nombre: <b><?= $theUser->getFirstName() ?> <?= $theUser->getLastName() ?></b><p>
				<p>Email: <b><?= $theUser->getEmail() ?></b><p>
				<p>Nickname: <b><?= $theUser->getNickname() ?></b><p>
				<p>Country: <b><?= COUNTRIES[$theUser->getCountry()]; ?></b><p>
				<p>Gender: <b><?= GENDER[$theUser->getGender()]; ?></b><p>
				<a class="btn btn-dark" href="me.php?editpassword" role="button">Edit</a>
				
				<?php else: ?>

				<h2>Edit your password:</h2>

				<div class="col-md-6">
					<div class="form-group"><label><b>New Password:</b></label>
						<input type="password" name="password" class="form-control">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group"><label><b>Repeat Password:</b></label>
						<input type="password" name="password" class="form-control">
					</div>
				</div>
				<?php endif; ?>
				
			</div>


			</div>
			
			<div class="col-8 alert"> <!-- Preferences -->

				<h2>Complete your preferences:</h2>
		
				<ul class="list-unstyled">

				 	<li class="media">
				    <div class="container">
				      	<h5 class="mt-0 mb-1">Favorite subjects:</h5>
						<input type="checkbox"><label>Math</label><br>
						<input type="checkbox"><label>Idioms</label>
						<input type="checkbox"><label>Science</label>
						<input type="checkbox"><label>Geography</label>
						<input type="checkbox"><label>Commerce</label>
						<a class="btn btn-dark" href="#" role="button">Save</a>
				    </div>
					</li>

					<li class="media">
				      <div class="container">
				        <h5 class="mt-0 mb-1">Preferred time to be challenged:</h5>
				  		<input type="checkbox"><label>Early Morning</label><br>
				  		<input type="checkbox"><label>Mid Morning</label>
				  		<input type="checkbox"><label>Midday</label>
				  		<input type="checkbox"><label>Early Afternoon</label>
				  		<input type="checkbox"><label>Evening</label>
				  		<a class="btn btn-dark" href="#" role="button">Save</a>
				      </div>
				    </li>
				</ul>

			</div>

		</div>

	</div>

</main>

<?php require_once 'includes/body-footer.php'; ?>