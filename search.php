<?php #finbile search

  require_once 'admin/autoload.php';
	$pageTitle = 'Search results | ' . $websiteName;
  require_once 'includes/head.php';
	require_once 'includes/body-header.php';
	require_once 'includes/body-navbar.php';
	require_once 'includes/body-aside.php';

?>

<!-- Body-main -->
<main>

  <div class="container col-10">
    
      <br>
    	<div>
            <ul class="breadcrumb col-10">
        		  <li class="breadcrumb-item"><a href="#">Home</a></li>
        		  <li class="breadcrumb-item"><a href="#">Search</a></li>
        		  <li class="breadcrumb-item active">Interest</li>
        		</ul>
    	</div>

  <!--div class="card">
    <img src="admin/content/images/user-emtpy.png" alt="Card image">
    <div class="card-img-overlay">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text.</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div-->

  <div class="card-rows col-10">
      <div class="card bg-primary">
        <div class="card-body text-center">
          <p class="card-text">Some text inside the first card</p>
        </div>
      </div>
      <div class="card bg-warning">
        <div class="card-body text-center">
          <p class="card-text">Some text inside the second card</p>
        </div>
      </div>
      <div class="card bg-success">
        <div class="card-body text-center">
          <p class="card-text">Some text inside the third card</p>
        </div>
      </div>
      <div class="card bg-danger">
        <div class="card-body text-center">
          <p class="card-text">Some text inside the fourth card</p>
        </div>
      </div> 
      <div class="card bg-light">
        <div class="card-body text-center">
          <p class="card-text">Some text inside the fifth card</p>
        </div>
      </div>
      <div class="card bg-info">
        <div class="card-body text-center">
          <p class="card-text">Some text inside the sixth card</p>
        </div>
      </div>
  </div>

  <br>
  <div class="row justify-content-center">

    <ul class="pagination pagination-sm justify-content-center">
      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
      <li class="page-item active"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>

  </div>

</main>

<?php require_once 'includes/body-footer.php';?>