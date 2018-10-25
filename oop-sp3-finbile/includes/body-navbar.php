	<!-- Body-navbar --> 
	<div id="#mainNavBar" class="container-fluid bg-warning">

	<nav class="navbar navbar-expand-md navbar-light">

		<a class="navbar-brand" href="index.php">
			<img class="img-fluid"
				src="admin/content/images/finbile-logo.png"
				alt="finbile" width="150px">
		</a>

		<button class="navbar-toggler " type="button" data-toggle="collapse"
				data-target="#principalNavBar" aria-controls="principalNavBar"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
		</button>
			
	    <div>
		    <form class="form-inline my-2 my-lg-0 align-center">
		    	<input class="form-control mr-sm-2" type="search" placeholder="search for..." 
		    			aria-label="Search">
			    	<button class="btn btn-sm btn-warning my-2 my-sm-0" type="submit">
			    		<ion-icon name="search"></ion-icon><a href="search.php">Search</a>
			    	</button>
		   	</form>
		   	<div>
		    <ul>
		    	<small>e.g.
					<a href="search.php?#challenges"><code>Winners</code></a> |
					<a href="search.php?#trends"><code>Trends</code></a>
				</small>
			</ul>
		   	</div>
	    </div>

		<div class="collapse navbar-collapse d-flex justify-content-around" id="principalNavBar">

			<ul class="navbar-nav ml-auto">
				<!--li class="nav-item"><a class="nav-link" href="index.php">
					<span class="icon-home"><ion-icon name="home"></ion-icon></span>
					<span class="sr-only"></span>Home</a></li-->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navBarAboutMenu"
						role="button" data-toggle="dropdown" 
						aria-haspopup="true" aria-expanded="false">About</a>
				    <div class="dropdown-menu" aria-labelledby="navBarAboutMenu">
				     	<a class="dropdown-item" href="about.php">FAQ</a>
				    		<div class="dropdown-divider"></div>
				    	<a class="dropdown-item" href="services.php">Services</a>
				    		<div class="dropdown-divider"></div>
				    	<a class="dropdown-item" href="legals.php">Legals</a>
				    </div>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navBarFunMenu"
						role="button" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false">Let's Fun</a>
				    <div class="dropdown-menu" aria-labelledby="navBarFunMenu">
				    	<a class="dropdown-item" href="challenges.php">Challenges</a>
				    		<div class="dropdown-divider"></div>
			    		<a class="dropdown-item" href="forum.php">Forum</a>
				    		<div class="dropdown-divider"></div>
				    	<a class="dropdown-item" href="news.php">News</a>
				    		<div class="dropdown-divider"></div>
				    	<a class="dropdown-item" href="shop.php">Shop</a>
	  			    </div>
				</li>
			</ul>

			<ul class="navbar-nav ml-auto">
				<?php if ( $auth->isLoged() ) : ?>
				<?php $theUser = $db->getUserByEmail($_SESSION['email']); ?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navBarMeMenu"
							role="button" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">
							<img src="admin/data/avatars/<?= $theUser->getImage() ?>" width="40" style="border-radius: 25%;">
							 <?= $theUser->getFirstName() ?>
						</a> <!--style="left: auto; right: 0";-->
						<div class="dropdown-menu" aria-labelledby="navBarMeMenu" >
							<a class="dropdown-item" href="my-account.php">My Account</a>
								<div class="dropdown-divider"></div>
					      	<a class="dropdown-item" href="me.php">Profile</a>
								<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="logout.php">Logout</a>
						</div>
					</li>
				<?php else : ?>
					<li class="nav-item">
						<a class="nav-link" href="sign-up.php"><kbd>Sign Up</kbd></a></li>
					<li class="nav-item">
						<a class="nav-link" href="sign-in.php?login">Sign In</a></li>
				<?php endif; ?>
			</ul>

		</div>

	</nav>

	</div>