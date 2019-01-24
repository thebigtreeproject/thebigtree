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
	  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAAUVBMVEWFhYWDg4N3d3dtbW17e3t1dXWBgYGHh4d5eXlzc3OLi4ubm5uVlZWPj4+NjY19fX2JiYl/f39ra2uRkZGZmZlpaWmXl5dvb29xcXGTk5NnZ2c8TV1mAAAAG3RSTlNAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEAvEOwtAAAFVklEQVR4XpWWB67c2BUFb3g557T/hRo9/WUMZHlgr4Bg8Z4qQgQJlHI4A8SzFVrapvmTF9O7dmYRFZ60YiBhJRCgh1FYhiLAmdvX0CzTOpNE77ME0Zty/nWWzchDtiqrmQDeuv3powQ5ta2eN0FY0InkqDD73lT9c9lEzwUNqgFHs9VQce3TVClFCQrSTfOiYkVJQBmpbq2L6iZavPnAPcoU0dSw0SUTqz/GtrGuXfbyyBniKykOWQWGqwwMA7QiYAxi+IlPdqo+hYHnUt5ZPfnsHJyNiDtnpJyayNBkF6cWoYGAMY92U2hXHF/C1M8uP/ZtYdiuj26UdAdQQSXQErwSOMzt/XWRWAz5GuSBIkwG1H3FabJ2OsUOUhGC6tK4EMtJO0ttC6IBD3kM0ve0tJwMdSfjZo+EEISaeTr9P3wYrGjXqyC1krcKdhMpxEnt5JetoulscpyzhXN5FRpuPHvbeQaKxFAEB6EN+cYN6xD7RYGpXpNndMmZgM5Dcs3YSNFDHUo2LGfZuukSWyUYirJAdYbF3MfqEKmjM+I2EfhA94iG3L7uKrR+GdWD73ydlIB+6hgref1QTlmgmbM3/LeX5GI1Ux1RWpgxpLuZ2+I+IjzZ8wqE4nilvQdkUdfhzI5QDWy+kw5Wgg2pGpeEVeCCA7b85BO3F9DzxB3cdqvBzWcmzbyMiqhzuYqtHRVG2y4x+KOlnyqla8AoWWpuBoYRxzXrfKuILl6SfiWCbjxoZJUaCBj1CjH7GIaDbc9kqBY3W/Rgjda1iqQcOJu2WW+76pZC9QG7M00dffe9hNnseupFL53r8F7YHSwJWUKP2q+k7RdsxyOB11n0xtOvnW4irMMFNV4H0uqwS5ExsmP9AxbDTc9JwgneAT5vTiUSm1E7BSflSt3bfa1tv8Di3R8n3Af7MNWzs49hmauE2wP+ttrq+AsWpFG2awvsuOqbipWHgtuvuaAE+A1Z/7gC9hesnr+7wqCwG8c5yAg3AL1fm8T9AZtp/bbJGwl1pNrE7RuOX7PeMRUERVaPpEs+yqeoSmuOlokqw49pgomjLeh7icHNlG19yjs6XXOMedYm5xH2YxpV2tc0Ro2jJfxC50ApuxGob7lMsxfTbeUv07TyYxpeLucEH1gNd4IKH2LAg5TdVhlCafZvpskfncCfx8pOhJzd76bJWeYFnFciwcYfubRc12Ip/ppIhA1/mSZ/RxjFDrJC5xifFjJpY2Xl5zXdguFqYyTR1zSp1Y9p+tktDYYSNflcxI0iyO4TPBdlRcpeqjK/piF5bklq77VSEaA+z8qmJTFzIWiitbnzR794USKBUaT0NTEsVjZqLaFVqJoPN9ODG70IPbfBHKK+/q/AWR0tJzYHRULOa4MP+W/HfGadZUbfw177G7j/OGbIs8TahLyynl4X4RinF793Oz+BU0saXtUHrVBFT/DnA3ctNPoGbs4hRIjTok8i+algT1lTHi4SxFvONKNrgQFAq2/gFnWMXgwffgYMJpiKYkmW3tTg3ZQ9Jq+f8XN+A5eeUKHWvJWJ2sgJ1Sop+wwhqFVijqWaJhwtD8MNlSBeWNNWTa5Z5kPZw5+LbVT99wqTdx29lMUH4OIG/D86ruKEauBjvH5xy6um/Sfj7ei6UUVk4AIl3MyD4MSSTOFgSwsH/QJWaQ5as7ZcmgBZkzjjU1UrQ74ci1gWBCSGHtuV1H2mhSnO3Wp/3fEV5a+4wz//6qy8JxjZsmxxy5+4w9CDNJY09T072iKG0EnOS0arEYgXqYnXcYHwjTtUNAcMelOd4xpkoqiTYICWFq0JSiPfPDQdnt+4/wuqcXY47QILbgAAAABJRU5ErkJggg==);
	}

</style>

<!-- <form class="user-registration" method="post" action="index.php?route=user.login" onsubmit="return validate()">
	<div class="registerForm"> -->
	<!-- 	<label class="required" for="email">Email</label>
		<input type="text" name="strEmail" id="email" placeholder="ex. abc@abc.com"> -->
<!-- 
		<label class="required" for="password">Password</label> -->
	<!-- 	<input type="password" name="strPassword" id="password" placeholder="*******"> -->

		<input type="checkbox" name="bAgreement"> I agree with the <a href="#">terms and conditions</a> of the privacy policy

<<<<<<< HEAD
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