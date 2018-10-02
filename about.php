<?php #finbile about

	require_once 'admin/autoload.php';
	$pageTitle = 'About | ' . $websiteName;
	require_once 'includes/head.php';
	require_once 'includes/body-header.php';
	require_once 'includes/body-navbar.php';
	require_once 'includes/body-aside.php';
	
?>

<!-- Body-main -->
<main>

	<div class="container">
		
		<div class="row">
			
			<div class="col-6">

				<h1>About us</h1>
				<p><b>finbile</b> is the leading knowledge competition about general culture on web. People challenge other people over core topics like geography, demography, commerce or art.</p>

			</div>

			<div class="col-6">

				<h1> </h1>
				<h4 id="">Watch our print</h4>
				<video id="mi video1"  width="320" autoplay controls loop poster="video-player.jpg">
					<source src="https://www.youtube.com/watch?v=x_nQekbcNUI" type="">
						<!--/Users/victorpoma/Downloads/prueba_video.m4v-->
						Your browser does not support the video tag.
				</video>

			</div>
			
		</div>

		<div class="row">
			
			<div id="faq">

				<h2 class="col-10" id="faq-list">FAQ | Frequently Asked Questions</h2>

					<div id="faq-1" class="card">
					    <div class="card-header">
						    <a class="card-link" data-toggle="collapse" href="#collapse-1">
						        FAQ #1. Creating an account
						    </a>
					    </div>
					    <div id="collapse-1" class="collapse show" data-parent="#faq">
						    <div class="card-body">
						        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia eos nam explicabo distinctio totam eligendi ipsam minima incidunt animi ducimus impedit dolor maiores, quibusdam, perspiciatis id voluptatem odio ratione molestiae.
						    </div>
					    </div>
				  
				  	</div>

				  	<div id="faq-2" class="card">
					    <div class="card-header">
					      <a class="collapsed card-link" data-toggle="collapse" href="#collapse-2">
					        FAQ #2. A Tour of Your Profile Page
					      </a>
					    </div>
					    <div id="collapse-2" class="collapse" data-parent="#faq">
					      <div class="card-body">
					        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia eos nam explicabo distinctio totam eligendi ipsam minima incidunt animi ducimus impedit dolor maiores, quibusdam, perspiciatis id voluptatem odio ratione molestiae.
					      </div>
					    </div>

				  	</div>

				  <div id="faq-3" class="card">
				    <div class="card-header">
				      <a class="collapsed card-link" data-toggle="collapse" href="#collapse-3">
				        FAQ #3. Challenge
				      </a>
				    </div>
				    <div id="collapse-3" class="collapse" data-parent="#faq">
				      <div class="card-body">
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia eos nam explicabo distinctio totam eligendi ipsam minima incidunt animi ducimus impedit dolor maiores, quibusdam, perspiciatis id voluptatem odio ratione molestiae.
				      </div>
				    </div>
				  </div>

				  <div id="faq-4" class="card">
				    <div class="card-header">
				      <a class="collapsed card-link" data-toggle="collapse" href="#collapse-4">
				        FAQ #4. Chat Functionality
				      </a>
				    </div>
				    <div id="collapse-4" class="collapse" data-parent="#faq">
				      <div class="card-body">
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia eos nam explicabo distinctio totam eligendi ipsam minima incidunt animi ducimus impedit dolor maiores, quibusdam, perspiciatis id voluptatem odio ratione molestiae.
				      </div>
				    </div>
				  </div>

				  <div id="faq-5" class="card">
				    <div class="card-header">
				      <a class="collapsed card-link" data-toggle="collapse" href="#collapse-5">
				        FAQ #5. Chat Basics
				      </a>
				    </div>
				    <div id="collapse-5" class="collapse" data-parent="#faq">
				      <div class="card-body">
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia eos nam explicabo distinctio totam eligendi ipsam minima incidunt animi ducimus impedit dolor maiores, quibusdam, perspiciatis id voluptatem odio ratione molestiae.
				      </div>
				    </div>
				  </div>

				  <div id="faq-6" class="card">
				    <div class="card-header">
				      <a class="collapsed card-link" data-toggle="collapse" href="#collapse-6">
				        FAQ #6. How to Link Social Accounts
				      </a>
				    </div>
				    <div id="collapse-6" class="collapse" data-parent="#faq">
				      <div class="card-body">
				        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia eos nam explicabo distinctio totam eligendi ipsam minima incidunt animi ducimus impedit dolor maiores, quibusdam, perspiciatis id voluptatem odio ratione molestiae.
				      </div>
				    </div>
				  </div>

			</div>

		</div>

		<div class="row">

			<h3>Any further doubt?</h3>
			<a href="#"><button class="btn btn-warning">Ask Victor:</button></a>

		</div>

	</div>

</main>

<?php require_once 'includes/body-footer.php';?>