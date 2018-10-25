<?php #finbile shop

	require_once 'admin/autoload.php';
	$pageTitle = 'Shop | ' . $websiteName;
	require_once 'includes/head.php';
	require_once 'includes/body-header.php';
	require_once 'includes/body-navbar.php';
	require_once 'includes/body-aside.php';
	
?>

<main>

	<div id="shop" class="container" style="margin-top: 20px;">
	
		<div class="row col-10">
			<h1>Shop</h1>
		</div>

		<div class="row col-12"> <!-- Welcome message -->

			<p>BUY 10 fincoins for   USD  10 or BTC 0,0001 </p>
			<p>BUY 100 fincoins for  USD  90 or BTC 0,008 </p>
			<p>BUY 1000 fincoins for USD 180 or BTC 0,05 </p>
			<p class="alert alert-warning">Special offers until Oct 30, 2018.</p>
					
		</div>
</main>

<?php require_once 'includes/body-footer.php'; ?>