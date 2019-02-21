<div class="loginReg">
	<div class="dualForm">
		<div class="login-page">
			<div class="form registerForm">
					<!------REGISTER------>
				  <form class="user-registration register-form acrylic" method="post" action="index.php?route=user.save">
				    <div class="registerForm">
					    <span>Sign Up</span>
							<label class="required contactLabel">First Name</label>
							<input type="text" name="strFirstName" placeholder="ex. Saphyra">

							<label class="required contactLabel" for="lastname">Last Name</label>
							<input type="text" name="strLastname" placeholder="ex. Donnaly">

							<label class="required contactLabel" for="streetAdress">Street Address:</label>
							<input type="text" name="strAdress" placeholder="ex.nelson street">

							<label class="required contactLabel" for="zipCode">Zip Code:</label>
							<input type="text" name="strZipCode" placeholder="x5x5x5">

							<label class="required contactLabel" for="email">Email</label>
							<input type="text" name="strEmail" placeholder="ex. abc@abc.com">

							<label class="required contactLabel" for="password">Password</label>
							<input type="password" name="strPassword" placeholder="*******">

							<label class="required contactLabel" for="repeatPassword">Repeat Passwod</label>
							<input type="password" placeholder="*******">

	            <input type="submit"  class="btn btn-primary"><br>
	            <p class="message"><a href="#">I have Account</a></p>
	          </div><!--registerForm-->
	        </form><!--register-form acrylic user-registration-->
	        <!------LOGIN------>

	        <form class="login-form acrylic" method="post" action="index.php?route=user.login">

	          <span class="<?=$arrData['errorMessage']['error']?>"><?=$arrData['errorMessage']['message']?></span>
	          <label class="required contactLabel" for="email">Email</label>
	          <input type="text" name="strEmail" class="nameText" placeholder="ex. abc@abc.com" value=<?=$arrData['loginEntries']['strEmail']?>> 

	          <label class="required contactLabel" for="password">Password</label>
	          <input type="password" name="strPassword" placeholder="*******">
	          <input type="submit"  class="btn btn-primary"><br>

	          <p class="message"><a href="#">Create Account</p>
	        </form>
			</div> <!--form registerForm-->
		</div> <!--login-page-->
	</div><!--DUALfORM-->
</div>

