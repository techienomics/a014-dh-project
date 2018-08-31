<?php
	//	Boady-nav for inclusion
?>

<nav class="navbar navbar-expand-lg navbar-dark">
	<a class="navbar-brand" href="index.php"><img src="images/logo_owl.png" style="width: 80px;"> </a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<form class="form-inline">
	<a class="btn btn-primary" href="sign-up.php" role="button">Registrer</a>
	<a class="btn btn-primary" href="sign-in.php" role="button">Login</a>
	</form>
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="tournaments.php">Tournaments</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="me.php">Account</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="about.php">About</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Shop
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</li>
		</ul>

	</div>
</nav>
