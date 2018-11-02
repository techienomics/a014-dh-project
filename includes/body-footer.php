		<!-- Body-footer -->
		<footer class="container-fluid bg-dark align-self-start">

			<div class="row text-white-50">

				<!-- Legal sub-menu -->					
				<div class="col-sm-3" id="legalSubMenu">
					<ul class="nav flex-column">
						<li class="nav-item disabled">Fine print</li>
						<li class="nav-item"><a class="nav-link" href="legals.php#terms-of-service">
							Terms of Service</a></li>
						<li class="nav-item"><a class="nav-link" href="legals.php#privacy-policy">
							Privacy Policy</a></li>
						<li class="nav-item"><a class="nav-link" href="legals.php#cookie-policy">
							Cookie Policy</a></li>
						<li class="nav-item"><a class="nav-link" href="legals.php#forum-rules">
							Forum Rules</a></li>
					</ul>
				</div>

				<!-- Services sub-menu -->
				<div class="col-sm-3">
					<ul class="nav flex-column">
						<li class="nav-item disabled">Services</li>
						<li class="nav-item"><a class="nav-link" href="services.php#light">
							Light</a></li>
						<li class="nav-item"><a class="nav-link" href="services.php#premium">
							Premium</a></li>
						<li class="nav-item"><a class="nav-link" href="services.php#shop">
							Shop</a></li>
					</ul>

				</div>

				<!-- Social sub-menu -->
				<div class="col-sm-3">
					<ul class="nav flex-column">
						<li class="nav-item disabled">Social</li>
						<li class="nav-item">
							<a href="https://www.facebook.com/"><span class="ion-social-facebook">
							<ion-icon name="logo-facebook"></ion-icon> Facebook</span></a></li> 
						<li class="nav-item">
							<a href="https://twitter.com/"><span class="ion-social-twitter">
							<ion-icon name="logo-twitter"></ion-icon></span> Twitter</a></li>
						<li class="nav-item">
							<a href="https://www.linkedin.com/"><span class="ion-social-linkedin">
							<ion-icon name="logo-linkedin"></ion-icon></span> Linkedin</a></li>
						<li class="nav-item">
							<a href="https://www.instagram.com/"><span class="ion-social-instagram">
							<ion-icon name="logo-instagram"></ion-icon></span> Instagram</a></li>
						<li class="nav-item">
							<a href="https://slack.com/"><span class="ion-social-slack">
							<ion-icon name="logo-slack"></ion-icon></span> Slack</a></li>
					</ul>
				</div>

				<!-- Social sub-menu -->
				<div class="col-sm-3">
					<button id="subscribe" type="button" class="btn btn-danger">
						<a href="sign-up.php?subscribe" type="" rel="next" target="_self" id="subscribe">
							Challenge Alerts!:<br>Subscribe Now! <ion-icon name="alert"></ion-icon>
						</a>
					</button>
				</div>

			</div>

			<!-- Customer Service Chat Access - Version 1 -->			
			<div class="row" id="customer-service-chat">
					<button type="button" class="btn btn-warning" 
							data-toggle="modal" data-target="#subscribeModal">
						Talk to a Representative! <ion-icon name="chatboxes"></ion-icon>
					</button>

					<!-- The Modal -->
					<div class="modal fade" id="subscribeModal">

						<div class="modal-dialog modal-sm">

					    	<div class="modal-content">

						    	<!-- Modal Header -->
						    	<div class="modal-header">
						        	<h4 class="modal-title">Can We Help?</h4>
						        	<button type="button" class="close" data-dismiss="modal">&times;</button>
						    	</div>

						    	<!-- Modal body -->
						    	<div class="modal-body"> Send
						       		<!-- textarea class="form-control" rows="5" id="feedback"></textarea-->
							    	<!--button class="btn btn-sm btn-dark my-2 my-sm-0" type="submit">Send</button-->
						    	</div>

						    	<!-- Modal footer -->
						    	<div class="modal-footer">
						        	<button type="button" class="btn btn-danger" data-dismiss="modal">Send</button>
						    	</div>

					    	</div>

						</div>

					</div>
					
			</div>

			<!-- Customer Service Chat Access - Version 2 -->			
			<!-- div class="row" id="customer-service-chat">
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
			</div-->

			<!-- Institutional Print -->
			<div class="row m-auto text-white-50">
				<div class="col-sm-12">
					<small id='copyright'>
					<?= $websiteName; ?><sup>&reg</sup>&nbsp;|&nbsp;a <span class="badge badge-pill badge-light"> VP Group</span> company since <?php echo date('Y'); ?>
					</small>
				</div>
			</div>

		</footer>

		<!-- Ion icons -->
		<script src="https://unpkg.com/ionicons@4.3.0/dist/ionicons.js"></script>
		<!-- jQuery -->
		<script src="admin/js/jquery-3.3.1.min.js"></script>
		<!-- JS -->
		<script src="admin/js/bootstrap.js"></script>
		<script src="admin/js/bootstrap.js"></script>
		<script src="admin/js/bootstrap.min.js"></script>
		<script src="admin/js/bootstrap.bundle.js"></script>
		<script src="admin/js/bootstrap.bundle.min.js"></script>

	</body>

</html>