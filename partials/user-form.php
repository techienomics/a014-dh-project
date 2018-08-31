<?php

	require_once 'toolkit.php';

	// Data Form
	$countries = [
		"ar" => "Argentina",
		"bo" => "Bolivia",
		"br" => "Brasil",
		"co" => "Colombia",
		"cl" => "Chile",
		"ec" => "Ecuador",
		"pa" => "Paraguay",
		"pe" => "Perú",
		"uy" => "Uruguay",
		"ve" => "Venezuela",
		"oc" => "Other countries",
	];

	$gender = [
		"M" => "Male",
		"F" => "Female",
		"O" => "Other",
	];
?>

<?php
	
/*  // Data validation Form
	$userFirstName = "";
	$userLastName = "";
	$userEmail = "";
	$userName = "";

	$errors = [];

	if ($_POST) {

		// Sanitización de Datos
		$userFirstName = trim($_POST['userFirstName']);
		$userLastName = trim($_POST['userLastName']);
		$userEmail = trim($_POST['userEmail']);
		$userName = trim($_POST['userName']);

		// Validación de cada campo
		if ( empty($userFirstName) ) {
			$errors["userFirstName"] = "This field can't be empty.";
		}

		if ( empty($userLastName) ) {
			$errors["userLastName"] = "This field can't be empty.";
		}

		if ( empty($userEmail) ) {
			$errors["userEmail"] = "This field can't be empty.";
		} elseif ( !filter_var($userEmail, FILTER_VALIDATE_EMAIL) ) {
			$errors["userEmail"] = "Ingresá un email de valido";
		}

		if ( empty($userName) ) {
			$errors["userName"] = "This field can't be empty.";
		} elseif ( strlen($userName) < 3 || strlen($userName) > 10) {
			$errors["userName"] = "Username need a minimun 3 and maximun 10 characters.";
		}

		if (count($errors) == 0) {
			header("location: account.php"); exit;
		}
	}
*/
?>


	<form method="post" target="_self" action="account.php?register">

		<ul>
			<?php foreach ($errors as $oneError): ?>
			<li class="error"> <?= $oneError ?> </li>	
			<?php endforeach; ?>
		</ul>
		
		<br><small>* Required fields</small><br>

		<fieldset>
			
			<label>Personal Information</label><br>

			<div class="form-inline form-group">
				First Name*:&nbsp;
				<input type="text" name="userFirstName" id="userFirstName" class="form-control"
									value="<?= $userFirstName ?>" required><br>
				<span class="alert alert-success">
					<?= isset($errors["userFirstName"]) ? $errors["userFirstName"] : '' ?>
				</span>
			</div>
			
			<div class="form-inline form-group">
				Last Name*:&nbsp;
				<input type="text" name="userLastName" id="userLastName" class="form-control" 
									value="<?= $userLastName ?>" required><br>
				<span class="alert alert-success">
					<?= isset($errors["userLastName"]) ? $errors["userLastName"] : '' ?>
				</span>
			</div>
			
			<div class='form-inline form-group'>
				User Email*:&nbsp;
				<input type="email" name="userEmail" id="userEmail" class="form-control"
									value="<?= $userEmail ?>" required><br>
				<span class="alert alert-success">
					<?= isset($errors["userEmail"]) ? $errors["userEmail"] : '' ?>
				</span>
			</div>

			<!-- Subscriber form -->
			<?php $visibleField = !isset($_GET["subscribe"]); ?>
			<?php if ($visibleField): ?>

			<div class='form-inline form-group'>
				Password*:&nbsp;
				<input type="password" name="userPassword" id="userPassword" class="form-control"
									value=">" required><br>
				<span class="alert alert-success">
					<?= isset($errors["userPassword"]) ? $errors["userPassword"] : '' ?>
				</span>
			</div>

			<div class='form-inline form-group'>
				Repeat your Password*:&nbsp;
				<input type="password" name="repeatUserPassword" id="repeatUserPassword" class="form-control"
									value="" required><br>
				<span class="alert alert-success">
					<?= isset($errors["repeatUserPassword"]) ? $errors["repeatUserPassword"] : '' ?>
				</span>
			</div>

		</fieldset>
		
		<fieldset>

			<label">General Information</label><br>

			<div class='form-inline form-group'>
				Choose a User Name*:&nbsp;
				<input type="text" name="userName" id="userName" class="form-control"
									value="<?= $userName ?>" required><br>
				<span class="alert alert-success">
					<?= isset($errors["userName"]) ? $errors["userName"] : '' ?>
				</span>
			</div>

			<div class='form-group'>
				<label for="userGender">Gender:&nbsp;&nbsp;&nbsp;</label>
				<select name="userGender"> <!-- revisar luego la persistencia de este campo -->
					<option value="Choose your gender...">Choose your gender...</option>
					<?php foreach ($gender as $code => $isgender): ?>
						<option value="<?php echo $code ?>"> <?php echo $isgender ?>
						</option>
					<?php endforeach; ?>
				</select>
				<span class="alert alert-success">
					<?= isset($errors["userGender"]) ? $errors["userGender"] : '' ?>
				</span>
			</div>					

			<div class='form-group'>
				<label for="userCountry">Country:&nbsp;&nbsp;&nbsp;</label>	
				
				<select name="userCountry"> <!-- revisar luego la persistencia de este campo -->
					<option value="Choose your country...">Choose your country...</option>
					<?php foreach ($countries as $code => $country): ?>
						<option value="<?php echo $code ?>"> <?php echo $country ?>
						</option>
					<?php endforeach; ?>
				</select>
				<span class="alert alert-success">
					<?= isset($errors["userCountry"]) ? $errors["userCountry"] : '' ?>
				</span>
			</div>
			
		</fieldset>

		<?php endif; ?>
		
		<fieldset>

			<!-- Subscriber form -->
			<?php $visibleField = !isset($_GET["subscribe"]); ?>
			<?php if ($visibleField): ?>

			<div class="form-check">
				<label class="form-check-label" for="userDataSave">
    				<input type="checkbox" name="userDataSave" id="userDataSave" 
    						class="form-check-input" value="">Remember me:&nbsp;
 				 </label>
			</div><br>

			<?php endif; ?>

			<button class="button btn-sm" type="reset">Clear all</button>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button class="button btn-sm" type="submit">Sent
			</button> <!-- personalizar con variable -->
			
		</fieldset>

	</form>
	<br>