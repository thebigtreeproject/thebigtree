<form class="user-registration" method="post" action="index.php?route=user.login" onsubmit="return validate()">
	<div class="registerForm">
		<label class="required" for="email">Email</label>
		<input type="text" name="strEmail" id="email" placeholder="ex. abc@abc.com">

		<label class="required" for="password">Password</label>
		<input type="password" name="strPassword" id="password" placeholder="*******">

<!--		<input type="checkbox" name="bAgreement"> I agree with the <a href="#">terms and conditions</a> of the privacy policy-->

		<input type="submit"  class="btn btn-primary"><br>
	</div>
</form>