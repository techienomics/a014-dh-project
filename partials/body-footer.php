<?php
	//	Boady-footer for inclusion
?>

		<footer class="jumbotron">

			<div class="row">

				<div class="col-sm-3">
					<ul class="nav flex-column">
						<li class="nav-item disabled">Legal</li>
						<li class="nav-item"><a class="nav-link" href="legals.php#terms-of-service">Terms of Service</a></li>
						<li class="nav-item"><a class="nav-link" href="legals.php#privacy-policy">Privacy Policy</a></li>
						<li class="nav-item"><a class="nav-link" href="legals.php#cookie-policy">Cookie Policy</a></li>
						<li class="nav-item"><a class="nav-link" href="legals.php#forum-rules">Forum Rules</a></li>
					</ul>
				</div>

				<div class="col-sm-3">
					<ul class="nav flex-column">
						<li class="nav-item disabled">Services</li>
						<li class="nav-item"><a class="nav-link" href="services.php#free">Free</a></li>
						<li class="nav-item"><a class="nav-link" href="services.php#premium">Premium</a></li>
						<li class="nav-item"><a class="nav-link" href="services.php#shop">Shop</a></li>
					</ul>
				</div>

				<div class="col-sm-3">
					<ul class="nav flex-column">
						<li class="nav-item disabled">Social</li>
						<li class="nav-item">
							<a href="https://www.facebook.com/"><span class="ion-social-facebook">
							<ion-icon name="logo-facebook"></ion-icon>Facebook</span></a></li>
						<li class="nav-item">
							<a href="https://twitter.com/"><span class="ion-social-twitter">
							<ion-icon name="logo-twitter"></ion-icon></span>Twitter</a></li>
						<li class="nav-item">
							<a href="https://www.linkedin.com/"><span class="ion-social-linkedin">
							<ion-icon name="logo-linkedin"></ion-icon></span>Linkedin</a></li>
						<li class="nav-item">
							<a href="https://www.instagram.com/"><span class="ion-social-instagram">
							<ion-icon name="logo-instagram"></ion-icon></span>Instagram</a></li>
						<li class="nav-item">
							<a href="https://slack.com/"><span class="ion-social-slack">
							<ion-icon name="logo-slack"></ion-icon></span>Slack</a></li>
					</ul>
				</div>

				<div class="col-sm-3">
					<button id="subscribe" type="button" class="btn btn-danger">
						<a href="sign-up.php?subscribe" type="" rel="next" target="_self" id="subscribe">
							Tournaments Alerts:<br>Suscribe Now! <ion-icon name="alert"></ion-icon>
						</a>
					</button>
				</div>

			<!--Customer Service Chat Access -->
				<div class="row" id="customer-service-chat">
					<div class="col-sm-12">
						<button type="button" class="btn btn-warning">
							Talk to a Representative! <ion-icon name="chatboxes"></ion-icon>
						</button>
					</div>
				</div>

			<!--Customer Service Chat Access -->
<!--			<div class="row" id="customer-service-chat">
					<div class="col-sm-12 card-header">
					    <a class="card-link" data-toggle="collapse" href="#collapse-1">
						<button type="button" class="btn btn-warning">
							Talk to a Representative! <ion-icon name="chatboxes"></ion-icon>
						</button>
	      				</a>
					</div>
					<div id="collapse-1" class="collapse" data-parent="#faq">
					    <div class="card-header">
					    	Hello. How can we help you today?
					</div>
				</div>
-->
			<!--Institutional Print-->
			<div class="row">
				<div class="col-sm-12">
					<small id='copyright'>
						Owl Gamers<sup>&copy</sup> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; An Albert & Victor Company, 2018 - <?php echo date('Y'); ?>.
					</small>
				</div>
			</div>

		</footer>

		<!--Ion icons -->
		<script src="https://unpkg.com/ionicons@4.3.0/dist/ionicons.js"></script>
		<!-- Librería de jQuery -->
		<script src="js/jquery-3.3.1.min.js"></script>
		<!-- Librería de JS de Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
	</body>

</html>
