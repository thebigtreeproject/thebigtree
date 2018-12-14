<form class="user-registration" method="post" action="index.php?controller=" onsubmit="return validate()">
	<div class="registerForm">
		<label class="required">First Name</label>
		<input type="text" name="strFirstName" id="firstName" placeholder="ex. Saphyra">

		<label class="required" for="lastname">Last Name</label>
		<input type="text" name="strLastname" id="lastname" placeholder="ex. Donnaly">

		<label class="required" for="streetAdress">Street Address:</label>
		<input type="text" name="strAdress" id="streetAdress" placeholder="ex.nelson street">

		<label class="required" for="zipCode">Zip Code:</label>
		<input type="text" name="strZipCode" id="zipCode" placeholder="x5x5x5">

		<label class="required" for="email">Email</label>
		<input type="text" name="strEmail" id="email" placeholder="ex. abc@abc.com">

		<label class="required" for="password">Password</label>
		<input type="text" name="strPassword" id="password" placeholder="*******">

		<label class="required" for="repeatPassword">Repeat Passwod</label>
		<input type="text" id="repeatPassword" placeholder="*******">

<!--		<input type="checkbox" name="bAgreement"> I agree with the <a href="#">terms and conditions</a> of the privacy policy-->

		<input type="submit"  class="btn btn-primary"><br>
	</div>
</form>