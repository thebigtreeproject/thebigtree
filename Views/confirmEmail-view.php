<?php
$arrData['strName']='test';
$arrData['code']='test';
$arrData['id']='test';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Email Confirmation</title>
	</head>
	<body>
		<h2>Hi <?=$arrData['strName']?>,</h2>
		<p>We recieved your registration!</p>
		<p>To activate your account and enjoy our special functionalities, please confirm your email address!</p>
		<p>If this message should not be sent to you, please ignore it!</p>

		<a href="http://italocarillo.com/?route=user.validate&code=<?=$arrData['code']?>.<?=$arrData['id']?>">Confirm Email</a>	
	</body>
</html>