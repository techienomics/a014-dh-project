<?php #finbile index

	require_once 'admin/autoload.php';
	$pageTitle = 'Home';
	require_once 'includes/head.php';
	require_once 'includes/body-header.php';
	require_once 'includes/body-navbar.php';
	require_once 'includes/body-aside.php';
	
?>

<!-- Body-main -->
<main>

	<!-- Modal -->
	<div class="modal fade" id="migrationModal" tabindex="-1" role="dialog" 
		aria-labelledby="migrationModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="migrationModal">Data Migration success! </h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			Thank you for reach finbile. Until now, we were using a Json Database. 
			Improved technology arrive since our start, now we are storing users data on MySQL for better consumer experience. <br>finbile team
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		</div>
		</div>
	</div>
	</div>

	<div class="container-fluid">
	
		<!-- Main-carousel -->
		<div class="row">
	 
		 	<!-- Carousel: start -->
		 	<div id="mainSlider" class="carousel slide carousel-fade" data-ride="carousel">

			  <!-- Carousel: indicators -->
				<ul class="carousel-indicators">
				    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
				    <li data-target="#mainSlider" data-slide-to="1"></li>
				    <li data-target="#mainSlider" data-slide-to="2"></li>
					<li data-target="#mainSlider" data-slide-to="3"></li>
				    <li data-target="#mainSlider" data-slide-to="4"></li>
				    <li data-target="#mainSlider" data-slide-to="5"></li>
				</ul>
		    
			    <!-- Carousel: slideshow -->
			    <div class="carousel-inner">

				    <div class="carousel-item active carouselImg">
				      	<img class="d-block w-100 img-thumbnail img-fluid" src="<?= BANNERS_PATH; ?>img_ball.jpg" alt="firstSlide"> 
				      	<div class="carousel-caption d-none d-sm-block">
				        	<h1><strong>Which State has more surface,<br>New York or Texas?</strong></h1>
				        	<button class="btn btn-lg btn-danger">
				        		<a id='' href="sign-up.php?home">
				        			Start now and Make Money!!<br>
				        			Sign up for only $4,90 until Oct 3<sup>th</sup></a>
				        	</button>
				   		</div>
			    	</div>

				    <div class="carousel-item carouselImg">
				      	<img class="d-block w-100 img-thumbnail img-fluid" src="<?= BANNERS_PATH; ?>img_architecture.jpg" alt="secondSlide">
				      	<div class="carousel-caption d-none d-sm-block">
				        	<h1><strong>Recognize that skyscraper?<br>Petronas Towers or Etihad Towers</strong></h1>
				        	<button class="btn btn-lg btn-dark">
				        		<a id='' href="shop.php?fromhome">
				        			Start now and Make Money!!<br>
				        			Sign up for only $4,90 until Oct 3<sup>th</sup></a>
				        	</button>
				      	</div>
				    </div>

				    <div class="carousel-item carouselImg">
				      	<img class="d-block w-100 img-thumbnail img-fluid" src="<?= BANNERS_PATH; ?>img_blockchain.jpg" alt="thirdSlide">
				      	<div class="carousel-caption d-none d-sm-block">
				        	<h1><strong>Finbile coins are now in the Markets!!!</strong></h1>
				        	<button class="btn btn-lg btn-warning">
				        		<a id='' href="shop.php?buyfincoins">
				        			BUY NOW fincoins<sup>&reg</sup> using Cryptos <br> at the best rate. Check  our quotes>> </a>
				        	</button>
				      	</div>
				    </div>

				    <div class="carousel-item carouselImg">
				      	<img class="d-block w-100 img-thumbnail img-fluid" src="<?= BANNERS_PATH; ?>img_clocks.jpg" alt="thirdSlide">
				      	<div class="carousel-caption d-none d-sm-block">
				        	<h1><strong>What time is now at Moscow?<br>
				        				<?= date("H:m:s");?> or <?= date("H:i:s") ;?></strong></h1>
				        	<button class="btn btn-lg btn-danger">
				        		<a id='' href="sign-up.php?fromhome">
				        			Start now and Make Money!!<br>
				        			Sign up for only $4,90 until Oct 3<sup>th</sup></a>
				        	</button>
				      	</div>
				    </div>

				    <div class="carousel-item carouselImg">
				      	<img class="d-block w-100 img-thumbnail img-fluid" src="<?= BANNERS_PATH; ?>img_ancient.jpg" alt="thirdSlide">
				      	<div class="carousel-caption d-none d-sm-block">
				        	<h1><strong>Which city was founded first,<br>
				        				Alexandria or Tebas??</strong></h1>
				        	<button class="btn btn-lg btn-info">
				        		<a id='' href="sign-up.php?fromhome">
				        			Start now and Make Money!!<br>
				        			Sign up for only $4,90 until Oct 3<sup>th</sup></a>
				        	</button>
				      	</div>
				    </div>

					<div class="carousel-item carouselImg">
					  	<img class="d-block w-100 img-thumbnail img-fluid" src="<?= BANNERS_PATH; ?>img_colour.jpg" alt="thirdSlide">
					  	<div class="carousel-caption d-none d-sm-block">
					    	<h1><strong>Day off from TV?</strong></h1>
					    	<button class="btn btn-lg btn-warning">
					    		<a id='' href="news.php?fromhome">
					    			Don't worry,<br>read here the principal news</a>
					    	</button>
					  	</div>
					</div>		    
			  
			  	</div>

				<!-- Carousel: Left & right controls -->
				<a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
				  
				<a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				</a>
		
			</div>

		</div>

	</div>

	<div class="">varias</div>

</main>

<?php require_once 'includes/body-footer.php'; ?>