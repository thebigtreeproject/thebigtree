<!DOCTYPE html>
<html>
<head>
	<title>TheBigTree</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Lato|Merriweather|Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body>
<header>
	<div class="header container">
		<div>
			<img src="icon/logo.png" alt="The Big Tree Logo" id="logo">
		</div>
		<div class='register-header'>
			<?php
			if(empty($_SESSION['user'])){
			?>
				<a href="index.php?route=pages.login" class="btnlogin">Login</a>
				<a href="index.php?route=pages.login" class="btnjoin">Join</a>
			<?php
			}
			else if(!empty($_SESSION['user'])){
			?>
				<a href="index.php?route=user.logout" class="btnlogin">Logout</a>
				<a href="index.php?route=pages.dashboard&userID=$_SESSION['user']['id']" class="btnjoin">Profile</a>
			<?php
			}
			?>
		</div>
		<div class="nav nav-header">
			<nav>
				<ul>
					<li><a href="index.php?route=pages.home">Home</a></li>
					<li><a href="index.php?route=pages.about">About</a></li>
					<li><a href="index.php?route=pages.services">Services</a></li>
					<li><a href="index.php?route=pages.testimonials">Testimonials</a></li>
					<li><a href="index.php?route=pages.contact">Contact</a></li>
				</ul>
			</nav>
		</div>
		<div id="hamburger-icon">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
</header>