<div>
	<h2>Hi <?=$_SESSION['userInfo']['strFirstName']?>,</h2>
	<p>We recieved your registration!</p>
	<p>To activate your account and enjoy our special functionalities, please confirm your email address!</p>
	<p>If this message should not be sent to you, please ignore it!</p>

	<a href="?route=user.activate&cd=<?=$code?>.<?=$_SESSION['userInfo']['id']?>">Confirm Email</a>
</div> 