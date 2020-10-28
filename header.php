<?php
session_start();
$button = 'Login';
$link = 'login.php';
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
	$loggedIn = $_SESSION['loggedIn'];
	$button = 'Logout';
	$link = 'logout.php';
}
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="stoliAviation.css" />
		<link rel="icon" type="image/png" href="favicon.ico"/>
	</head>
	<body>
		<span id="loginButton">
			<a id="navlinks" class='loginLogout' href=<?php echo $link; ?>><?php echo $button; ?></a>
		</span>
		<a href="index.php">
			<img id="logo" src="logo.jpg" />
		</a>
		<div id="navigation">
			<ol>
				<li><a id="navlinks" <?php if ($pageName == "home") {echo "class='active';";} ?> href="index.php">Home</a></li>
				<li><a id="navlinks" <?php if ($pageName == "pricing") {echo "class='active';";} ?> href="pricing.php">Pricing</a></li>
				<li><a id="navlinks" <?php if ($pageName == "booking") {echo "class='active';";} ?> href="booking.php">Booking</a></li>
				<li><a id="navlinks" <?php if ($pageName == "contact") {echo "class='active';";} ?> href="contact.php">Contact</a></li>
				<li><a id="navlinks" <?php if ($pageName == "about") {echo "class='active';";} ?> href="about.php">About</a></li>
				<li><a id="navlinks" <?php if ($pageName == "reviews") {echo "class='active';";} ?> href="reviews.php">Reviews</a></li>
			</ol>
		</div>