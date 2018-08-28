<?php 
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

	// Data validation Form
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
?>

	<form action="account.php" method="post" target="_self">

		<ul>
			<?php foreach ($errors as $oneError): ?>
			<li class="error"> <?= $oneError ?> </li>	
			<?php endforeach; ?>
		</ul>
		
		<br><small>* Required fields</small><br>

		<fieldset>

			<label>Personal Information</label><br>

			<div class="form-inline">
				First Name*:&nbsp;
				<input type="text" name="userFirstName" id="userFirstName"
									value="<?= $userFirstName ?>" required><br>
				<span class="alert alert-success">
					<?= isset($errors["userFirstName"]) ? $errors["userFirstName"] : '' ?>
				</span>
			</div>
			
			<div class='form-inline'>
				Last Name*:&nbsp;
				<input type="text" name="userLastName" id="userLastName" 
									value="<?= $userLastName ?>" required><br>
				<span class="alert alert-success">
					<?= isset($errors["userLastName"]) ? $errors["userLastName"] : '' ?>
				</span>
			</div>

			<div class='form-inline'>
				User Email*:&nbsp;
				<input type="email" name="userEmail" id="userEmail" 
									value="<?= $userEmail ?>" required><br>
				<span class="alert alert-success">
					<?= isset($errors["userEmail"]) ? $errors["userEmail"] : '' ?>
				</span>
			</div>

		</fieldset>


		<!-- Subscriber form -->
		<?php $visibleField = !isset($_GET["subscribe"]); ?>
		<?php if ($visibleField): ?>

		<fieldset>

			<label>User Information:&nbsp;</label><br>

			<div class='form-inline'>
				Choose a User Name*:&nbsp;
				<input type="text" name="userName" id="userName" 
									value="<?= $userName ?>" required><br>
				<span class="alert alert-success">
					<?= isset($errors["userName"]) ? $errors["userName"] : '' ?>
				</span>
			</div>

			<div class='form-inline'>
				Set your Password*:&nbsp;
				<input type="password" name="userPassword" id="userPassword" 
									value=">" required><br>
				<span class="alert alert-success">
					<?= isset($errors["userPassword"]) ? $errors["userPassword"] : '' ?>
				</span>
			</div>
				
			<div class='form-inline'>
				Repeat your Password*:&nbsp;
				<input type="password" name="repeatUserPassword" id="repeatUserPassword" 
									value="" required><br>
				<span class="alert alert-success">
					<?= isset($errors["repeatUserPassword"]) ? $errors["repeatUserPassword"] : '' ?>
				</span>
			</div>

			</fieldset>
		
		<fieldset>

			<label">General Information</label><br>

			<div class='form-group'>
				<label for="userGender">Gender:&nbsp;&nbsp;&nbsp;</label>
				<select name="userGender">
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
				<select name="userCountry">
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

			<div class='form-group'>


				<label for="userDataSave">Remember me:&nbsp;</label>
					<input type="radio" name="userDataSave" id="userDataSave"><br>
			</div>
		<?php endif; ?>

			<button class="button btn-sm" type="reset">Clear all</button>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button class="button btn-sm" type="submit">Sent
			</button> <!-- personalizar con variable -->
			
		</fieldset>

	</form>
	<br>