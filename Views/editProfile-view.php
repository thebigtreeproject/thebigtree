<div class="editProfileFormRow">
	<div class="formContainer">
		<h1 class="pageTitle">Edit Profile</h1>
		<form class="editProfileForm" form method="post" onsubmit="return validate()">
			<div class="editProfileRow">
				<div class="editProfileColumn">
					<h3>User Info</h3>

					<label class="required" for="firstName">First Name</label>
					<input type="text" name="firstName" id="firstName" placeholder="ex.Jane">

					<label class="required" for="lastname">Last Name</label>
					<input type="text" name="lastname" id="lastname" placeholder="ex.doe">
					
					<label class="required" for="streetAdress">Street Address:</label>
					<input type="text" name="streetAdress" id="streetAdress" placeholder="ex.nelson street">

					<label class="required" for="zipCode">Zip Code:</label>
					<input type="text" name="zipCode" id="zipCode" placeholder="x5x5x5">

					<label class="required" for="email">Email</label>
					<input type="text" name="email" id="email" placeholder="ex. abc@abc.com">
				</div>
					<div class="editProfileColumn"><br>
					<h3>Password</h3>
					<input type="checkbox" name="changePassword"> Change Password

					<label class="required" for="actualpassword">Actual Password</label>
					<input type="text" name="actualpassword" id="actualpassword" placeholder="*******">
					
					<label class="required" for="newpassword">New Passwod</label>
					<input type="text" name="newpassword" id="newpassword" placeholder="*******">

					<label class="required" for="repeatPassword">Repeat New Password</label>
					<input type="text" name="repeatPassword" id="repeatPassword" placeholder="*******">

						<input type="submit" name="strEdit" value="Update" class="btn btn-primary" value="">
					</div>
				</div><!--editProfileColumn--->
			</div><!--editProfileRow-->
		</form>
	</div><!--formContainer-->
</div>