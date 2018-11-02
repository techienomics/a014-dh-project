	<!-- finbile sign-in form -->

	<!-- Errors list
	<?php if ( $SignInData->getAllErrors() ) : ?>
		<div class="alert alert-danger">
			<ul>
			<?php foreach ($SignInData->getAllErrors() as $error) : ?>
				<li> <?= $error; ?> </li>
			<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>
	-->

	<form method="get" action="sign-in.php?renewpassword" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group"><label><b>Confirm your email:</b></label>
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

			<div class="col-md-10">
				<button type="submit" class="btn btn-lg btn-warning">Send email</button>
			</div>

		</div>
	</form>
	<br>