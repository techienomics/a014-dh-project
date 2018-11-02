<?php #finbile news 

	require_once 'admin/autoload.php';
	$pageTitle = 'News | ' . $websiteName;
	require_once 'includes/head.php';
	require_once 'includes/body-header.php';
	require_once 'includes/body-navbar.php';
	require_once 'includes/body-aside.php';
	
?>

<!-- Body-main -->
<main>

	<div id="news" class="container" style="margin-top: 20px;">
	
		<div class="row col-12">
			<h1>News</h1>
		</div>

		<div class="row">

		    <article class="col-sm-6 bg-success">
		    	<h3><?php echo date("y-m-d");?> - News #1</h3>
		    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium dolorum explicabo cum nihil incidunt eius debitis, ea unde dolor eos? Ab aperiam modi quod repellat incidunt accusantium, maiores, minima. Ab.</p>
		    </article>

		    <article class="col-sm-6">
		    	<h3><?php echo date("y-m-d");?> - News #2</h3>
		    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium dolorum explicabo cum nihil incidunt eius debitis, ea unde dolor eos? Ab aperiam modi quod repellat incidunt accusantium, maiores, minima. Ab.</p>
		    </article>
		
		</div>

		<div class="row">

		    <article class="col-sm-6">
		    	<h3><?php echo date("y-m-d");?> - News #3</h3>
		    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium dolorum explicabo cum nihil incidunt eius debitis, ea unde dolor eos? Ab aperiam modi quod repellat incidunt accusantium, maiores, minima. Ab.</p>
		    </article>

		    <article class="col-sm-6">
		    	<h3><?php echo date("y-m-d");?> - News #4</h3>
		    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium dolorum explicabo cum nihil incidunt eius debitis, ea unde dolor eos? Ab aperiam modi quod repellat incidunt accusantium, maiores, minima. Ab.</p>
		    </article>
		
		</div>

		<div class="row">

		    <article class="col-sm-6">
		    	<h3><?php echo date("y-m-d");?> - News #5</h3>
		    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium dolorum explicabo cum nihil incidunt eius debitis, ea unde dolor eos? Ab aperiam modi quod repellat incidunt accusantium, maiores, minima. Ab.</p>
		    </article>

		    <article class="col-sm-6">
		    	<h3><?php echo date("y-m-d");?> - News #6</h3>
		    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium dolorum explicabo cum nihil incidunt eius debitis, ea unde dolor eos? Ab aperiam modi quod repellat incidunt accusantium, maiores, minima. Ab.</p>
		    </article>

		</div>

		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-center">
			    <li class="page-item disabled">
			    	<a class="page-link" href="#" tabindex="-1">Previous</a></li>
			    <li class="page-item"><a class="page-link" href="#">1</a></li>
			    <li class="page-item"><a class="page-link" href="#">2</a></li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
			    <li class="page-item">
			      <a class="page-link" href="#">Next</a></li>
		 	 </ul>
		</nav>

	</div>

</main>

<?php require_once 'includes/body-footer.php'; ?>