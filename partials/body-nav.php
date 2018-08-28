<?php 
	//	Boady-nav for inclusion
?>

		<nav class="navbar bg-dark navbar-dark"> <!--  navbar-expand-sm	-->
			<div class=""> <!-- collapse navbar-collapse	-->
				<ul class="nav nav-pills justify-content-end">
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" 
							href="index.php">Home</a></li>
						<!-- <span class="icon-home"><ion-icon name="home"></ion-icon></span> -->
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill"
							href="about.php">About</a> 
						<!--"nosotros": acerca del sitio y otras preguntas frecuentes-->
					</li>
					<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="tournaments.php">Fun</a>
						<!--"torneos/calendario, torneo: home, schedule de juegos, ganadores, puntajes/premios, foro zona de foro sobre games-->
					    <div class="dropdown-menu">
					      <a class="dropdown-item" href="tournaments.php">Tournaments</a>
					      <a class="dropdown-item" href="forum.php">Forum</a> <!--foro de interaccion-->
					      <a class="dropdown-item" href="news.php">News</a> <!--blog blog: novedades-->
					    </div>
					</li>
					<li class="nav-item"><a class="nav-link" data-toggle="pill" href="shop.php">Shop</a>
						<!--comprar games-->
					</li>
					<li class="nav-item"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="me.php">Me</a>
						<!--accesos a los perfiles-->
					    <div class="dropdown-menu">
					      <a class="dropdown-item" href="me.php">Profile</a>
					      <a class="dropdown-item" href="#">Preferences</a>
					    </div>
					</li>
				</ul>
			</div>
		</nav>
