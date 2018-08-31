<?php
	// Head inclusion & Page Title definition
	$pageTitle = 'About | Owl Gamers';
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
		
			<section class="row">
				
				<h1>About us <small>Owl Gamerss</small></h1>
				
				<article class="col-sm-6">
						<p>Owl Gamerss is Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ipsa nesciunt soluta possimus eius, tempore provident voluptate natus eaque sit cupiditate culpa, incidunt dolores deserunt ad vel! Nulla, eum, debitis!</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptates suscipit, quisquam voluptas mollitia, omnis accusantium qui minus rerum et modi molestias tempore cupiditate sunt labore. Quibusdam, nam, officia! Error.</p>
				</article>

				<article class="col-sm-6">
					<h4 class="" id="">Watch our print</h4>
						<video id="mi video1"  width="320" autoplay controls loop poster="video-player.jpg">
							<source src="/Users/victorpoma/Downloads/prueba_video.m4v" type="">
								Your browser does not support the video tag.
						</video>
				</article>
				
			</section>
		
			<section class="row">

				<h2 class="col-sm-12" id="faq-list">FAQ | Frequently Asked Questions</h2>

				<div calss="col-sm-12" id="faq">

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
				        FAQ #3. Joining Tournaments
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

			</section>

			<section class="row">
				
				<article class="col-sm-12">
					<h3>Any further doubt? <small>Ask Albert:</small></h3>
						<p>Owl Gamerss is Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ipsa nesciunt soluta possimus eius, tempore provident voluptate natus eaque sit cupiditate culpa, incidunt dolores deserunt ad vel! Nulla, eum, debitis!</p>
						<p></p>
				</article>

			</section>

		</main>


<?php 
	// Body-footer inclusion
	require_once 'partials/body-footer.php';
?>



<!-- table class="table table-hover">

    <thead>
      <tr><th>
      	<h2 class="" id="faq">FAQ | Frequently Asked Questions</h2>
      </th></tr>
    </thead>

    <tbody>
      <tr><td>
      	<h3 id="faq-1-"></h3><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia eos nam explicabo distinctio totam eligendi ipsam minima incidunt animi ducimus impedit dolor maiores, quibusdam, perspiciatis id voluptatem odio ratione molestiae.</p>
      </td></tr>
      <tr><td>
      	<h3 id="faq-1-"></h3>
		<p>Quos sed neque pariatur animi impedit temporibus laudantium blanditiis numquam vero at, assumenda repellendus deserunt, ducimus nulla labore sunt ex vel odio. Dicta, neque nobis ipsum aliquid quisquam quam eveniet?</p>
      </td></tr>
      <tr><td>
      	<h3 id="faq-1-"></h3>
		<p>A molestiae ea ab magnam modi ut, architecto dolorem, accusantium maiores assumenda tempore officiis, illo! Velit saepe dolor consequatur rerum temporibus, voluptate a ullam aut aperiam, excepturi ea, officiis adipisci?</p>
      </td></tr>
    </tbody>

  </table -->