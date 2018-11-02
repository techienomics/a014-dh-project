<?php #finbile forum 

	require_once 'admin/autoload.php';
	$pageTitle = 'Forum | ' . $websiteName;
	require_once 'includes/head.php';
	require_once 'includes/body-header.php';
	require_once 'includes/body-navbar.php';
	require_once 'includes/body-aside.php';
	
?>

<!-- Body-main -->
<main>
	
	<div class="container" style="margin-top: 20px;">
	
		<div class="row col-10">
			<h1>Forum</h1>
		</div>

		<div class="row col-12"  id="#myScrollspy"
			 data-spy="scroll" data-target="#myScrollspy" data-offset="1">

	    	<nav class="col-4" id="myScrollspy">
		        <ul class="nav flex-column">
		        	<li class="nav-item"><a class="nav-link" href="#section1">Geography</a></li>
			    	<li class="nav-item"><a class="nav-link" href="#section2">Commerce</a></li>
		        	<li class="nav-item"><a class="nav-link" href="#section3">History</a></li>
					<li class="nav-item"><a class="nav-link" href="#section4">Culture</a></li>
		        </ul>
	    	</nav>

	      	<div class="col-8">
	        
		        <div id="section1"> 
		          <h1>Geography</h1>
		          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vel maiores quisquam fugiat sed esse! Id aperiam libero nulla hic illum eligendi fugiat ea incidunt pariatur, in, cumque iusto, earum.</p>
		          <div class="media border p-3">
		          	<img src="<?= IMAGES_PATH; ?>user-empty.png" width="5%"
		          		 alt="Victor" class="mr-3 mt-3 rounded-circle col-1">

		          	<div class="media-body">
		          	    <h4>Victor <small><i>Posted on August 29, 2018</i></small></h4>
		          	    <p>me parece que no llegamos ni en pedo a la entrega no?</p>
		          	
		          		<div class="media p-3">
		          		    <img src="<?= IMAGES_PATH; ?>user-empty.png" width="5%"
		          		    	 alt="Albert" class="mr-3 mt-3 rounded-circle col-1">
		          		
		          			<div class="media-body">
		          			    <h4>Albert <small><i>Posted on August 30, 2018</i></small></h4>
		          			    <p>estamos en el horno, pero viste el dolar? se fue a la mierda loco</p>
		          			</div>
		          		</div>

		          		<div class="media p-3">
		          		    <img src="<?= IMAGES_PATH; ?>user-empty.png" width="5%"
		          		    	 alt="Albert" class="mr-3 mt-3 rounded-circle col-1">
		          		
		          			<div class="media-body">
		          			    <h4>Robert <small><i>Posted on August 31, 2018</i></small></h4>
		          			    <p>lorem impsum</p>
		          			</div>
		          		</div>    
		          	</div>
		          </div><br>
		        </div>

		        <div id="section2"> 
		          <h1>Commerce</h1>
		          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vel maiores quisquam fugiat sed esse! Id aperiam libero nulla hic illum eligendi fugiat ea incidunt pariatur, in, cumque iusto, earum.</p>
		          <div class="media border p-3">
		          	<img src="<?= IMAGES_PATH; ?>user-empty.png" width="5%"
		          		 alt="Victor" class="mr-3 mt-3 rounded-circle col-1">

		          	<div class="media-body">
		          	    <h4>Victor <small><i>Posted on August 29, 2018</i></small></h4>
		          	    <p>me parece que no llegamos ni en pedo a la entrega no?</p>
		          	
		          		<div class="media p-3">
		          		    <img src="<?= IMAGES_PATH; ?>user-empty.png" width="5%"
		          		    	 alt="Albert" class="mr-3 mt-3 rounded-circle col-1">
		          		
		          			<div class="media-body">
		          			    <h4>Albert <small><i>Posted on August 30, 2018</i></small></h4>
		          			    <p>estamos en el horno, pero viste el dolar? se fue a la mierda loco</p>
		          			</div>
		          		</div>

		          		<div class="media p-3">
		          		    <img src="<?= IMAGES_PATH; ?>user-empty.png" width="5%"
		          		    	 alt="Albert" class="mr-3 mt-3 rounded-circle col-1">
		          		
		          			<div class="media-body">
		          			    <h4>Robert <small><i>Posted on August 31, 2018</i></small></h4>
		          			    <p>lorem impsum</p>
		          			</div>
		          		</div>    
		          	</div>
		        </div> 

		        <div id="section3"> 
		          <h1>History</h1>
		          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vel maiores quisquam fugiat sed esse! Id aperiam libero nulla hic illum eligendi fugiat ea incidunt pariatur, in, cumque iusto, earum.</p>
		          <div class="media border p-3">
		          	<img src="<?= IMAGES_PATH; ?>user-empty.png" width="5%"
		          		 alt="Victor" class="mr-3 mt-3 rounded-circle col-1">

		          	<div class="media-body">
		          	    <h4>Victor <small><i>Posted on August 29, 2018</i></small></h4>
		          	    <p>me parece que no llegamos ni en pedo a la entrega no?</p>
		          	
		          		<div class="media p-3">
		          		    <img src="<?= IMAGES_PATH; ?>user-empty.png" width="5%"
		          		    	 alt="Albert" class="mr-3 mt-3 rounded-circle col-1">
		          		
		          			<div class="media-body">
		          			    <h4>Albert <small><i>Posted on August 30, 2018</i></small></h4>
		          			    <p>estamos en el horno, pero viste el dolar? se fue a la mierda loco</p>
		          			</div>
		          		</div>

		          		<div class="media p-3">
		          		    <img src="<?= IMAGES_PATH; ?>user-empty.png" width="5%"
		          		    	 alt="Albert" class="mr-3 mt-3 rounded-circle col-1">
		          		
		          			<div class="media-body">
		          			    <h4>Robert <small><i>Posted on August 31, 2018</i></small></h4>
		          			    <p>lorem impsum</p>
		          			</div>
		          		</div>    
		          	</div>
		        </div> 

		        <div id="section4"> 
		          <h1>Culture</h1>
		          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vel maiores quisquam fugiat sed esse! Id aperiam libero nulla hic illum eligendi fugiat ea incidunt pariatur, in, cumque iusto, earum.</p>
		          <div class="media border p-3">
		          	<img src="<?= IMAGES_PATH; ?>user-empty.png" width="5%"
		          		 alt="Victor" class="mr-3 mt-3 rounded-circle col-1">

		          	<div class="media-body">
		          	    <h4>Victor <small><i>Posted on August 29, 2018</i></small></h4>
		          	    <p>me parece que no llegamos ni en pedo a la entrega no?</p>
		          	
		          		<div class="media p-3">
		          		    <img src="<?= IMAGES_PATH; ?>user-empty.png" width="5%"
		          		    	 alt="Albert" class="mr-3 mt-3 rounded-circle col-1">
		          		
		          			<div class="media-body">
		          			    <h4>Albert <small><i>Posted on August 30, 2018</i></small></h4>
		          			    <p>estamos en el horno, pero viste el dolar? se fue a la mierda loco</p>
		          			</div>
		          		</div>

		          		<div class="media p-3">
		          		    <img src="<?= IMAGES_PATH; ?>user-empty.png" width="5%"
		          		    	 alt="Albert" class="mr-3 mt-3 rounded-circle col-1">
		          		
		          			<div class="media-body">
		          			    <h4>Robert <small><i>Posted on August 31, 2018</i></small></h4>
		          			    <p>lorem impsum</p>
		          			</div>
		          		</div>    
		          	</div>
		        </div>  

	     	</div>

	    </div>

    </div>

</main>

<?php require_once 'includes/body-footer.php'; ?>