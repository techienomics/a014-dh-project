<?php
	// Head inclusion & Page Title definition
	$pageTitle = 'Home | Owl Gamers';
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

<div class="containerCarousel">


	<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

	  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/torneos-gamer.jpg" alt="First slide">
			<div class="carousel-caption">
				<h2>Preparate para los torneos de este mes!!</h2>
				<h4>Inscripciones abiertas!!</h4>
			</div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/accesories.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/noticias-gamers.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
	</div>

 </div>

 <div class="container">
  <div class="row">
    <div class="col">Noticias</div>
    <div class="col">Concursos</div>
    <div class="w-100"></div>
    <div class="col">Juegos</div>
    <div class="col">Ranking</div>
  </div>
</div>
<?php
	// Body-aside inclusion
	require_once 'partials/body-aside.php';
?>


<?php
	// Body-footer inclusion
	require_once 'partials/body-footer.php';
?>




<?php
	// Body-footer inclusion
	require_once 'partials/body-footer.php';
?>
