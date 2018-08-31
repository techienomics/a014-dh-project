<?php
	// Head inclusion & Page Title definition
	$pageTitle = 'User Profile | Owl Gamers';
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

	<h1>User's Profile</h1>

	<h2>Personal Information</h2>

	<p>Alber/Victor se encuentra trabajando en este < main > </p>

	<br>

	</section>

	<div class="user-container">
		<ul class="list-unstyled">
	  <li class="media">
	    <img class="mr-3" src="images/user-icon.png">
	    <div class="media-body">
	      <h5 class="mt-0 mb-1">Personal Information</h5>
	      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
	    </div>
	  </li>
	  <li class="media my-4">
	    <img class="mr-3" src="images/ps4-xbox-pcc.jpg" alt="Generic placeholder image">
	    <div class="media-body">
	      <h5 class="mt-0 mb-1"> Plataform</h5>
				<label class="container">Playstation 4
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container">Xbox One
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container">Switch
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container">Xbox 360
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container">Playstation 3
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
	    </div>
	  </li>
	  <li class="media">
	    <img class="mr-3" src="images/genres.jpg" alt="Generic placeholder image">
	    <div class="media-body">
	      <h5 class="mt-0 mb-1">Genre</h5>
				<label class="container">Accion
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container">Aventura
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container">Deportes
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container">Estrategia
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container">Multijugador Online
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container">Plataformas
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
				<label class="container">Simulacion
				  <input type="checkbox">
				  <span class="checkmark"></span>
				</label>
	    </div>
	  </li>
</ul>
	</div>



</main>


<?php
	// Body-footer inclusion
	require_once 'partials/body-footer.php';
?>
