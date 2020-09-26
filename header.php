<html>
	<head>
		<link rel="stylesheet" type="text/css" href="stoliAviation.css" />
		<link rel="icon" type="image/png" href="favicon.ico"/>
	</head>
	<body>
		<span id="loginButton">
			<a href="login.php">Login/My Account</a>
		</span>
		<h1>STOLI AVIATION</h1>
		<div id="navigation">
			<ol>
				<li><a <?php if ($pageName == "home") {echo "class='active';";} ?> href="index.php">Home</a></li>
				<li><a <?php if ($pageName == "pricing") {echo "class='active';";} ?> href="pricing.php">Pricing</a></li>
				<li><a <?php if ($pageName == "booking") {echo "class='active';";} ?> href="booking.php">Booking</a></li>
				<li><a <?php if ($pageName == "contact") {echo "class='active';";} ?> href="contact.php">Contact</a></li>
				<li><a <?php if ($pageName == "about") {echo "class='active';";} ?> href="about.php">About</a></li>
			</ol>
		</div>