	<!-- finbile sign-in form --> 

	<!-- Errors list -->
	<?php if ( $SignInData->getAllErrors() ) : ?>
		<div class="alert alert-danger">
			<ul>
			<?php foreach ($SignInData->getAllErrors() as $error) : ?>
				<li> <?= $error; ?> </li>
			<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>

	<form method="post" enctype="multipart/form-data">
		<div class="row">

			<div class="col-md-6">
				<div class="form-group"><label><b>User email:</b></label>
					<input
						type="text" name="email"
						class="form-control 
						<?= $SignInData->fieldHasError('email') ? 'is-invalid' : ''; ?>"
						value="<?= $SignInData->getEmail(); ?>">
					<?php if ( $SignInData->fieldHasError('email') ): ?>
						<div class="invalid-feedback">
							<?= $SignInData->getFieldError('email') ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="form-group"><label><b>Password:</b></label>
					<input
						type="password" name="password"
						class="form-control 
						<?= $SignInData->fieldHasError('password') ? 'is-invalid' : ''; ?>">
					<?php if ( $SignInData->fieldHasError('password') ): ?>
						<div class="invalid-feedback">
							<?= $SignInData->getFieldError('password') ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-md-8">
				<div class="form-group form-check">
					<label class="form-check-label" >
						<input type="checkbox" class="form-check-input"
						name="keepSignedIn">Keep me signed in 
					</label>
				</div>
			</div>
			<div class="col-md-8">
				<button type="submit" class="btn btn-lg btn-warning">Log in</button>
			</div>

		</div>
	</form>
	<br>