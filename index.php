<?php
	// Head inclusion & Page Title definition
	$pageTitle = 'Home | Be The Champion';
	require_once 'partials/head.php';

	// Body-header inclusion
	require_once 'partials/body-header.php';

	// Body-nav inclusion
	require_once 'partials/body-nav.php';

	// Body-aside inclusion
	require_once 'partials/body-aside.php';
?>

		<main>

			<div class="containerCarousel">

			 	<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>

			    <div class="carousel-inner">

				    <div class="carousel-item active carouselImg"><!-- torneos-gamer.jpg -->
				      	<img class="d-block w-100" src="images/pexels-photo-687811.jpeg" alt="First slide"> 
				      	<div class="carousel-caption">
				        	<h2><strong>Ready For The 2<sup>th</sup> Fortnite World Championship!!</strong></h2>
				        	<button class="btn btn-lg btn-danger">
				        		<a id='carrousel-register' href="tournaments.php?register">
				        			Register NOW!! USD 99 until August 30<sup>th</sup></a>
				        	</button>
				   		</div>
			    	</div>

				    <div class="carousel-item carouselImg"><!-- accesories.jpg -->
				      	<img class="d-block w-100" src="images/pexels-photo-929824.jpeg" alt="Second slide">
				      	<div class="carousel-caption">
				        	<h2><strong>Free Delivery Weekend!!</strong></h2>
				        	<button class="btn btn-lg btn-warning">
				        		<a id='carrousel-register' href="shop.php?freeDeliveryWeekend">
				        			SHOP NOW</a>
				        	</button>
				      	</div>
				    </div>

				    <div class="carousel-item carouselImg"><!--noticias-gamers.png-->
				      	<img class="d-block w-100" src="images/pexels-photo-1293269.jpeg" alt="Third slide">
				      	<div class="carousel-caption">
				        	<h2><strong>BOOOMMM! FIFA 2020 last leeks!!!</strong></h2>
				        	<button class="btn btn-lg btn-info">
				        		<a id='carrousel-news' href="news.php?newsFromHome">
				        			Read more...</a>
				        	</button>
				      	</div>
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


	 <div class="container"><br>

	 		<h3>Last news!!!</h3><br>

			<div class="row col-sm-12">

			    <article class="col-sm-6">
			    	<h3><?php echo date("y-m-d");?> - News #1</h3>
			    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium dolorum explicabo cum nihil incidunt eius debitis, ea unde dolor eos? Ab aperiam modi quod repellat incidunt accusantium, maiores, minima. Ab.</p>
			    </article>

			    <article class="col-sm-6">
			    	<h3><?php echo date("y-m-d");?> - News #2</h3>
			    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium dolorum explicabo cum nihil incidunt eius debitis, ea unde dolor eos? Ab aperiam modi quod repellat incidunt accusantium, maiores, minima. Ab.</p>
			    </article>
		    </div>

			<div class="row col-sm-12">

			    <article class="col-sm-6">
			    	<h3><?php echo date("y-m-d");?> - News #3</h3>
			    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium dolorum explicabo cum nihil incidunt eius debitis, ea unde dolor eos? Ab aperiam modi quod repellat incidunt accusantium, maiores, minima. Ab.</p>
			    </article>

			    <article class="col-sm-6">
			    	<h3><?php echo date("y-m-d");?> - News #4</h3>
			    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium dolorum explicabo cum nihil incidunt eius debitis, ea unde dolor eos? Ab aperiam modi quod repellat incidunt accusantium, maiores, minima. Ab.</p>
			    </article>
		    </div>

			<div class="row col-sm-12">

			    <article class="col-sm-6">
			    	<h3><?php echo date("y-m-d");?> - News #5</h3>
			    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium dolorum explicabo cum nihil incidunt eius debitis, ea unde dolor eos? Ab aperiam modi quod repellat incidunt accusantium, maiores, minima. Ab.</p>
			    </article>

			    <article class="col-sm-6">
			    	<h3><?php echo date("y-m-d");?> - News #6</h3>
			    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium dolorum explicabo cum nihil incidunt eius debitis, ea unde dolor eos? Ab aperiam modi quod repellat incidunt accusantium, maiores, minima. Ab.</p>
			    </article>
		    </div>

		  </div>
	</div>

</main>

<?php 
	// Body-footer inclusion
	require_once 'partials/body-footer.php';
?>