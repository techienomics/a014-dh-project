	<!-- finbile sign-up form --> 

	<!-- Errors list -->
	<?php if ( $_POST && !$FormData->isValid() ): ?>
		<div class="alert alert-danger">
			<ul>
			<?php foreach ($FormData->getAllErrors() as $error): ?>
				<li> <?= $error ?> </li>
			<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>

	<form method="post" enctype="multipart/form-data">
		<div class="row">

			<!--label>Personal Information</label><br-->
			<div class="col-md-6">
				<div class="form-group"><label><b>First Name:</b></label>
					<!--i><ion-icon name="logo-facebook"></ion-icon>  placeholder="Email"  </i-->
					<input
						type="text" name="first_name" class="form-control
						<?= $FormData->fieldHasError('first_name') ? 'is-invalid' : ''; ?>"
						value="<?= $FormData->getFirstName() ; ?>"
					>
					<?php if ( $FormData->fieldHasError('first_name') ): ?>
						<div class="invalid-feedback">
							<?= $FormData->getFieldError('first_name') ?>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<!-- Hide in a subscriber form -->
			<?php $visibleField = !isset($_GET["subscribe"]); ?>
			<?php if ($visibleField): ?>

			<div class="col-md-6">
				<div class="form-group"><label><b>Last Name:</b></label> 
					<input
						type="text" name="last_name" class="form-control 
						<?= $FormData->fieldHasError('last_name') ? 'is-invalid' : ''; ?>"
						value="<?= $FormData->getLastName() ; ?>"
					>
					<?php if ( $FormData->fieldHasError('last_name') ): ?>
						<div class="invalid-feedback">
							<?= $FormData->getFieldError('last_name') ?>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<?php endif; ?> 

			<div class="col-md-6">
				<div class="form-group"><label><b>Email:</b></label>
					<input
						type="text" name="email" class="form-control 
						<?= $FormData->fieldHasError('email') ? 'is-invalid' : ''; ?>"
						value="<?= $FormData->getEmail() ; ?>"
					>
					<?php if ( $FormData->fieldHasError('email') ): ?>
						<div class="invalid-feedback">
							<?= $FormData->getFieldError('email') ?>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<!-- Hide in a subscriber form -->
			<?php $visibleField = !isset($_GET["subscribe"]); ?>
			<?php if ($visibleField): ?>

			<div class="col-md-6">
				<div class="form-group"><label><b>Password:</b></label>
					<input
						type="password" name="password" class="form-control 
						<?= $FormData->fieldHasError('password') ? 'is-invalid' : ''; ?>"
					>
					<?php if ( $FormData->fieldHasError('password') ): ?>
						<div class="invalid-feedback">
							<?= $FormData->getFieldError('password') ?>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group"><label><b>Repeat Password:</b></label>
					<input
						type="password"	name="rePassword" class="form-control 
						<?= $FormData->fieldHasError('password') ? 'is-invalid' : ''; ?>"
					>
					<?php if ( $FormData->fieldHasError('password') ): ?>
						<div class="invalid-feedback">
							<?= $FormData->getFieldError('password') ?>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<!--label">General Information</label><br-->

			<div class="col-md-6">
				<div class="form-group"><label><b>Nickname:</b></label> 
					<div class="input-group-prepend">
						<span class="input-group-text" id="">@</span>
					<input
						type="text" name="nickname" class="form-control 
						<?= $FormData->fieldHasError('nickname') ? 'is-invalid' : ''; ?>"
						value="<?= $FormData->getNickname() ; ?>"
					></div>
					<?php if ( $FormData->fieldHasError('nickname') ): ?>
						<div class="invalid-feedback">
							<?= $FormData->getFieldError('nickname') ?>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group"><label><b>Country:</b></label>
					<select
						name="country_id" class="form-control 
						<?= $FormData->fieldHasError('country_id') ? 'is-invalid' : ''; ?>"
					>
						<option value="">Choose your country...</option>
						<?php foreach ($countries as $country): ?>
							<option
								<?= $country->id == $FormData->getCountryId() ? 'selected' : '' ?>
								value="<?= $country->id ?>"><?= $country->name ?></option>
						<?php endforeach; ?>
					</select>
					<?php if ( $FormData->fieldHasError('country_id') ): ?>
						<div class="invalid-feedback">
							<?= $FormData->getFieldError('country_id') ?>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group"><label><b>Gender:</b></label>
					<select
						name="gender" class="form-control 
						<?= $FormData->fieldHasError('gender') ? 'is-invalid' : ''; ?>"
					>
						<option value="">Choose your gender...</option>
						<?php foreach (GENDER as $code => $gender): ?>
							<option
								<?= $code == $FormData->getGender() ? 'selected' : '' ?>
								value="<?= $code ?>"><?= $gender ?></option>
						<?php endforeach; ?>
					</select>
					<?php if ( $FormData->fieldHasError('gender') ): ?>
						<div class="invalid-feedback">
							<?= $FormData->getFieldError('gender') ?>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group"><label><b>Date of Birth:</b></label> 
					<input
						type="date" name="birth" class="form-control 
						<?= $FormData->fieldHasError('birth') ? 'is-invalid' : ''; ?>"
						value="<?= $FormData->getBirth() ; ?>" min="1900-01-01" max="2018-07-01"
					>
					<?php if ( $FormData->fieldHasError('birth') ): ?>
						<div class="invalid-feedback">
							<?= $FormData->getFieldError('birth') ?>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<div class="col-md-8">
				<div class="form-group"><label><b>Upload a profile image:</b></label>
					<div class="custom-file">
						<input
							type="file" name="profile_image" class="custom-file-input 
							<?= $FormData->fieldHasError('profile_image') ? 'is-invalid' : ''; ?>"
						>
						<label class="custom-file-label">Choose an image...</label>
						<?php if ( $FormData->fieldHasError('profile_image') ): ?>
							<div class="invalid-feedback">
								<?= $FormData->getFieldError('profile_image') ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<?php endif; ?>

			<!-- Hide in a subscriber form -->
			<?php $visibleField = !isset($_GET["subscribe"]); ?>
			<?php if ($visibleField): ?>

			<div class="col-8">
				<div class="form-group form-check">
					<label class="form-check-label" >
						<input type="checkbox" class="form-check-input"
						name="keepSignedIn"">Keep me signed in 
					</label>
				</div>
			</div>

			<?php endif; ?>

			<div class="col-8">
				<button type="reset" class="button btn-sm mr-auto">Clear all</button>					
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<button type="submit" class="btn btn-lg btn-warning ml-auto">Let's go!</button>
			</div>

		</div>

	</form>
	<br>
