<style type="text/css">
	@import url(https://fonts.googleapis.com/css?family=Roboto:300);

	.login-page 
	{ 
	  width: 360px;
	  padding: 1% 0 0;
	  margin: auto;
	}
	.form 
	{
	  position: relative;
	  z-index: 1;
	  background: #FFFFFF;
	  max-width: 360px;
	  margin: 0 auto 100px;
	  padding: 50px;
	  text-align: center;
	  margin-top: 20%;
	  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
	}
	.form input 
	{
	  font-family: 'Merriweather', serif;
	  outline: 0;
	  background: #f2f2f2;
	  width: 100%;
	  border: 0;
	  margin: 0 0 15px;
	  padding: 15px;
	  box-sizing: border-box;
	  font-size: 14px;
	  -webkit-transition: all 0.5s ease;
	  transition: all 0.5s ease;
	  opacity: 0.6;
	}
	.form button 
	{
	  font-family: 'Merriweather', serif;
	  text-transform: uppercase;
	  outline: 0;
	  background: #fff;
	  width: 100%;
	  border: 0;
	  padding: 15px;
	  color: #000;
	  font-size: 14px;
	  -webkit-transition: all 0.5s ease;
	  transition: all 0.5s ease;
	  cursor: pointer;
	  opacity: 0.6;
	}
	.form button:hover,.form button:active 
	{
	  background: #f0f0f0;
	}
	.form button:focus 
	{
	  box-shadow:0 0 20px #7BB1FF,0 0 20px #7BB1FF;
	  background-color: #5691E6;
	  border-radius: 10px;
	  color: #fff;
	  opacity: 1;
	}
	.form input:focus 
	{
	  box-shadow:0 0 20px #fff,0 0 20px #fff;
	  border-radius: 10px;
	  opacity: 1;
	}
	.form span
	{
	  font-family: "Roboto", sans-serif;
	  position: relative;
	  display: inline-block;
	  box-sizing: border-box;
	  background: #fff;
	  opacity: 0.8;
	  padding: 10px;
	  width: 100%;
	  margin: 0 0 15px;
	}
	.form .message 
	{
	  margin: 15px 0 0;
	  color: #b3b3b3;
	  font-size: 15px;
	}
	.form .message a 
	{
	  color: #fff;
	  text-decoration: none;
	}
	.form .register-form 
	{
 	 display: none;
	}
	.container 
	{
	  position: relative;
	  z-index: 1;
	  margin: 0 auto;
	}
	.container:before, .container:after 
	{
	  content: "";
	  display: block;
	  clear: both;
	}
	.container .info
	{
	  margin: 50px auto;
	  text-align: center;
	}
	.container .info h1
	{
	  margin: 0 0 15px;
	  padding: 0;
	  font-size: 36px;
	  font-weight: 300;
	  color: #1a1a1a;
	}
	.container .info span
	{
	  color: #4d4d4d;
	  font-size: 12px;
	}
	.container .info span a 
	{
	  color: #000000;
	  text-decoration: none;
	}
	.container .info span .fa 
	{
	  color: #EF3B3A;
	}
	body, .acrylic::before 
	{
	  background: url("assets/womanReg.jpg");
	  background-repeat: no-repeat;
	  background-attachment: fixed;
	  background-position: center;
	  background-size: cover;
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  font-family: "Roboto", sans-serif;
	  -webkit-font-smoothing: antialiased;
	  -moz-osx-font-smoothing: grayscale;      
	}
	/*Thanks Chris Shank*/
	.acrylic::before 
	{
	  filter: blur(10px);
	  content: "";
	  position: absolute;
	  left: -10px;
	  top: -10px;
	  width: calc(100% + 20px);
	  height: calc(100% + 20px);
	  z-index: -1;
	}

	.acrylic::after 
	{
	  content: "";
	  position: absolute;
	  left: 0;
	  top: 0;
	  right: 0;
	  bottom: 0;
	  z-index: -1;
	  opacity: 0.3;
	  border: 1px solid #fff;
	  background: #fff;
	  background-image: url("assets/womanReg.jpg");
	}

</style>

<!-- <form class="user-registration" method="post" action="index.php?route=user.login" onsubmit="return validate()">
	<div class="registerForm"> -->
	<!-- 	<label class="required" for="email">Email</label>
		<input type="text" name="strEmail" id="email" placeholder="ex. abc@abc.com"> -->
<!-- 
		<label class="required" for="password">Password</label> -->
	<!-- 	<input type="password" name="strPassword" id="password" placeholder="*******"> -->

		<!-- <input type="checkbox" name="bAgreement"> I agree with the <a href="#">terms and conditions</a> of the privacy policy -->
<!-- 		<input type="submit"  class="btn btn-primary"><br>
=======
		<input type="submit"  class="btn btn-primary"><br>
		
		<div class="bottomForm">
			<p>Not a Member?
				<a href="index.php?route=pages.register">Register now</a>
			</p>
		</div>
>>>>>>> e1ad74c806654f695bfa202ed09cd4424d83b2cb
	</div>
</form>
 -->

<div class="dualForm">
	<div class="login-page">
		<div class="form registerForm">

		  <form class="register-form acrylic user-registration" method="post" action="index.php?route=user.login" onsubmit="return validate()">
		    
		    <span>Sign Up</span>
		    <input type="text" placeholder="ex. abc@abc.com" class="required nameText" for="email" for="password"/>
		    <input class="required" type="password" name="strPassword" id="password" placeholder="*******"/>
		    <button id="SignUp">Go</button>
		    <p class="message"><a href="#">I have Account</a></p>

		  </form><!--register-form acrylic user-registration-->

		  <form class="login-form acrylic">

		    <span>Login to your account</span>
		    <input type="text" placeholder="Email" class="nameText" />
		    <input type="password" placeholder="Password"/>
		    <button id="SignIn">Login</button>
		    <p class="message"><a href="#">Create Account</p>

		  </form><!--login-form acrylic-->

		</div><!--form registerForm-->
	</div><!--login-page-->
</div><!--dualForm-->

<script type="text/javascript">
	$('.message a').click(function(){
   $('.form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>