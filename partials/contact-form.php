<?php 
	// Data Form
?>

<!-- Si viene en $_GET la posición ['versionCorta'], oculto campos -->

<!--
	<?php $mostrarCampos = !isset($_GET['versionCorta']); ?>
	<?php if ($mostrarCampos): ?>
	<?php endif; ?>

	<label>Teléfono de contacto:</label>
	<input type='text' name='userPhone'>

	<label>Domicilio:</label>
	<input type='text' name='userAddress'>

	<div class='form-group'>

		<span class="alert alert-success">
			<?= isset($errors["fullName"]) ? $errors["fullName"] : '' ?>
		</span>
	</div>
-->

			<form action="" method="post" target="_self">
			
			<label for="fullName">Nombre Completo:&nbsp;</label>
			<input type="text" name="fullName" id="fullName" required><br>
			
			<label for="userEmail">Correo Electronico:&nbsp;</label>
			<input type="email" name="userEmail" id="userEmail" required><br>
			
			<label for="contactTitle">Motivo del Mensaje:&nbsp;</label>
			<select name="">
				<option value="Doubt">Consulta</option>
				<option value="Problem">Reclamo</option>
				<option value="Ask">Pedido</option>
				<optgroup label="Otros Contactos">
					<option value="Thanks">Agradecimiento</option>
					<option value="Idea">Idea para Mejora</option>
				</optgroup>
			</select><br>

			<label for="userGender">Genero:&nbsp;</label>
			<label for="userGenderM">Masculino</label><input type="radio" name="userGender" id="userGenderM" value="M">
			<label for="userGenderF">Femenino</label><input type="radio" name="userGender" id="userGenderF" value="F"><br>

			<label for="userHobbies">Pasatiempos:&nbsp;</label><br>
			<label for="userHobRugby">Rugby</label><input type="checkbox[]" name="userHobbies" id="userHobRugby">
			<label for="userHobSoccer">Futbol</label><input type="checkbox[]"" name="userHobbies" id="userHobSoccer">
			<label for="userHobTennis">Tennis</label><input type="checkbox[]" name="userHobbies" id="userHobTennis">
			<label for="userHobGolf">Golf</label><input type="checkbox[]" name="userHobbies" id="userHobGolf">
			<label for="userHobTBasketball">Basquet</label><input type="checkbox[]" name="userHobbies" id="userHobBasketball"><br>

			<label for="contactComments">Comentarios:&nbsp;</label><br>
			<textarea rows="10" cols="50" wrap="hard" id="contactComments" required></textarea><br>

			<button type="reset">Borrar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="submit">Enviar</button>
		</form>


		<h1>Contact</h1>

		<form action="script.php" method="post" target="_self">
			
			<label for="fullName">Nombre Completo:&nbsp;</label>
			<input type="text" name="fullName" id="fullName" required><br>
			
			<label for="userEmail">Correo Electronico:&nbsp;</label>
			<input type="email" name="userEmail" id="userEmail" required><br>
			
			<label for="contactTitle">Motivo del Mensaje:&nbsp;</label>
			<select name="">
				<option value="Doubt">Consulta</option>
				<option value="Problem">Reclamo</option>
				<option value="Ask">Pedido</option>
				<optgroup label="Otros Contactos">
					<option value="Thanks">Agradecimiento</option>
					<option value="Idea">Idea para Mejora</option>
				</optgroup>
			</select><br>

			<label for="userGender">Genero:&nbsp;</label>
			<label for="userGenderM">Masculino</label><input type="radio" name="userGender" id="userGenderM" value="M">
			<label for="userGenderF">Femenino</label><input type="radio" name="userGender" id="userGenderF" value="F"><br>

			<label for="userHobbies">Pasatiempos:&nbsp;</label><br>
			<label for="userHobRugby">Rugby</label><input type="checkbox[]" name="userHobbies" id="userHobRugby">
			<label for="userHobSoccer">Futbol</label><input type="checkbox[]"" name="userHobbies" id="userHobSoccer">
			<label for="userHobTennis">Tennis</label><input type="checkbox[]" name="userHobbies" id="userHobTennis">
			<label for="userHobGolf">Golf</label><input type="checkbox[]" name="userHobbies" id="userHobGolf">
			<label for="userHobTBasketball">Basquet</label><input type="checkbox[]" name="userHobbies" id="userHobBasketball"><br>

			<label for="contactComments">Comentarios:&nbsp;</label><br>
			<textarea rows="10" cols="50" wrap="hard" id="contactComments" required></textarea><br>

			<button type="reset">Borrar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="submit">Enviar</button>
		</form>

					<form action="" method="post" target="_self">
			
			<label for="fullName">Personal Information</label><br>
			First Name:&nbsp;<input type="text" name="firstName" id="firstName" required><br>
			Last Name:&nbsp;<input type="text" name="lastName" id="lastName" required><br>
			User Email:&nbsp;<input type="email" name="userEmail" id="userEmail" required><br><br>

			<label for="fullName">User Information:&nbsp;</label><br>			
			Choose a Username:&nbsp;<input type="text" name="userName" id="userName" required><br>
			Set your Password:&nbsp;<input type="text" name="userPassword" id="userPassword" required><br>
			Repeat your Password:&nbsp;<input type="text" name="repeatUserPassword" id="repeatUserPassword" required><br><br>
			
			<label for="userPreferences">General Information</label><br>
			
			<label for="userGender">Gender:&nbsp;&nbsp;&nbsp;</label>
			<label for="userGenderM">Masculino&nbsp;</label>
				<input type="radio" name="userGender" id="userGenderM" value="M">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label for="userGenderF">Femenino&nbsp;</label>
				<input type="radio" name="userGender" id="userGenderF" value="F">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label for="userGenderO">Other&nbsp;</label>
				<input type="radio" name="userGender" id="userGenderO" value="O"><br>

			<label for="userCountry">Country:&nbsp;&nbsp;&nbsp;</label>
				<select name="">
					<option value="AR">Argentina</option>
					<option value="US">United States</option>
					<option value="CO">Colombia</option>
					<optgroup label="Others">
						<option value="BR">Brasil</option>
						<option value="CH">China</option>
						<option value="RU">Russia</option>
						<option value="IN">India</option>
						<option value="ND">Others not defined</option>
					</optgroup>
				</select><br>	

			<label for="userDataSave">Remember me:&nbsp;</label>
				<input type="radio" name="userDataSave" id="userDataSave" checked><br>


			<button type="reset">Clear</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="submit">Sign up</button>

		</form>