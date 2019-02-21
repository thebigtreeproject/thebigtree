<?php
include("Views/header-view.php");
?>
<div class="content">
<?php
if(!empty($_GET['error'])){
	$error = $_GET['error'];
	switch ($error){
		case 'email':
			$errorMessage = 'Looks like this e-mail is already in use!</br>Please choose another email address, login or <a href="./?route=pages.contact">contact us</a> to find a solution.';
			break;
		case 'login':
			$errorMessage = 'Something went wrong! Please check your email and password and try again.';
			break;
		default:
			$errorMessage = '';
			break;
	}
?>
	<div class="error">
		<?=$errorMessage?>
	</div>
<?php
}
?>
	<div>
		<?=$content?>
	</div>
</div>
<?php
include("Views/footer-view.php");
?>