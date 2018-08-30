<?php 
	//	Body-nav for inclusion
?>

<nav class="navbar navbar-expand-md navbar-warning bg-warning navbar-fixed-top"> <!--  navbar-expand-lg	-->
	
	<a class="navbar-brand" href="index.php">
		<img src="images/logo-be-the-champion.png" alt="Be The Champion Logo" width="50%"></a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#PrincipalNav"
			 aria-controls="PrincipalNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

    <form class="navbar-form navbar-left" action="tournaments.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search for tournaments, news">
      </div>
      <button type="submit" class="btn btn-sm">Search</button>
    </form>

	<div class="collapse navbar-collapse" id="PrincipalNav"> <!-- collapse navbar-collapse	-->

	</div>
		<ul class="navbar-nav mr-auto">
			<li class="nav-item"><a class="nav-link" href="index.php">
				<span class="icon-home"><ion-icon name="home"></ion-icon></span></a></li> <!--  -->
			<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="tournaments.php"
				id="dropNavBar" role="button"  aria-haspopup="true" aria-expanded="false">Fun</a>
			    <div class="dropdown-menu" aria-labelledby="dropNavBar">
			      <a class="dropdown-item" href="tournaments.php">Tournaments</a>
			      <a class="dropdown-item" href="forum.php">Forum</a> <!--foro de interaccion-->
			      <a class="dropdown-item" href="news.php">News</a> <!--blog blog: novedades-->
			    </div>
			</li><!--"torneos/calendario, schedule de juegos, ganadores, puntajes/premios, foro de games-->
			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="me.php"
				id="dropNavBar" role="button"  aria-haspopup="true" aria-expanded="false">Me</a>
			    <div class="dropdown-menu" aria-labelledby="dropNavBar">
			      <a class="dropdown-item" href="me.php">Profile</a>
			      <a class="dropdown-item" href="me.php">Preferences</a><!--accesos a los perfiles-->
			    </div>
			</li>
			<li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li><!--comprar <games--></games-->
		</ul>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item btn btn-danger navbar-btn">
				<a id='nav-register' class="nav-link" href="sign-up.php?register">Register</a></li>
			<li class="nav-item">
				<a id='nav-login' class="nav-link" href="sign-in.php?login">Login</a></li>
		</ul>
	</div>

</nav>