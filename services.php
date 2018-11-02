<?php #finbile services 

	require_once 'admin/autoload.php'; 
	$pageTitle = 'Services | ' . $websiteName;
	require_once 'includes/head.php';
	require_once 'includes/body-header.php';
	require_once 'includes/body-navbar.php';
	require_once 'includes/body-aside.php';
	
?>
	
<!-- Body-main -->
<main class="container">
	
	<h1>Services</h1>
	<p>
		<a href="#light">Light</a>
		<a href="#premium">Premium</a>
		<a href="#shop">Shop</a>
	</p>

	<div class="row">

		<div id="subscriptions" class="container">

			<div class="col-sm-5">
				<h2 id="light">Light <small><span class="badge badge-info">$9,99/month</span></small></h2>
					<p>Start with 10 fincoins for only $9,99 monthly! Then, each month you will recibe additional 5 fincoins and buy unlimited fincoins on shop. <a href="shop.php">Look for specials offers</a>.</p>
					<p>Upgrade to Premium any time.</p>

			</div>
			
			<div class="col-sm-5">
				<h2 id="premium">Premium <small><span class="badge badge-info">$19,99/month</span></small></h2>
					<p>Start with 25 fincoins for only $19,99 monthly! Then, each month you will recibe additional 15 fincoins and buy unlimited fincoins on shop. <a href="shop.php">Look for specials offers</a>.</p>
					<p>Back to Light any time.</p>	
			</div>
		
		</div>	

	</div>

</main>
	
<?php require_once 'includes/body-footer.php'; ?>