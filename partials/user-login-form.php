<?php

	require_once 'toolkit.php';

	

?>

	<form method="post" target="_self" action="account.php?login">

		<ul>
			<?php foreach ($errors as $oneError): ?>
			<li class="error"> <?= $oneError ?> </li>	
			<?php endforeach; ?>
		</ul>
		
		<br><small>* Required fields</small><br>

		<fieldset>
			
			<label>Access Information</label><br>
			
			<div class='form-inline'>
				User Email*:&nbsp;
				<input type="email" name="userEmail" id="userEmail" 
									value="<?= $userEmail ?>" required><br>
				<span class="alert alert-success">
					<?= isset($errors["userEmail"]) ? $errors["userEmail"] : '' ?>
				</span>
			</div>

			<div class='form-inline'>
				Password*:&nbsp;
				<input type="password" name="userPassword" id="userPassword" 
									value=">" required><br>
				<span class="alert alert-success">
					<?= isset($errors["userPassword"]) ? $errors["userPassword"] : '' ?>
				</span>
			</div>
		
		<fieldset>

			<div class='form-group'>

				<label for="userDataSave">Remember me:&nbsp;</label>
					<input type="radio" name="userDataSave" id="userDataSave"><br>
			</div>
			
			<button class="button btn-sm" type="reset">Clear all</button>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button class="button btn-sm" type="submit">Sent
			</button> <!-- personalizar con variable -->
			
		</fieldset>

	</form>
	<br>