<html>
	<head>
		<link rel="stylesheet" type="text/css" href="stoliAviation.css" />
		<link rel="icon" type="image/png" href="favicon.ico"/>
	</head>
	<body>
		<h1>STOLI AVIATION</h1>
		<div id="navigation">
			<ol>
				<li><a <?php if ($pageName == "stoliAviation") {echo "class='active';";} ?> href="stoliAviation.php">Home</a></li>
				<li><a <?php if ($pageName == "pricing") {echo "class='active';";} ?> href="pricing.php">Pricing</a></li>
				<li><a <?php if ($pageName == "booking") {echo "class='active';";} ?> href="booking.php">Booking</a></li>
				<li><a <?php if ($pageName == "contact") {echo "class='active';";} ?> href="contact.php">Contact</a></li>
				<li><a <?php if ($pageName == "about") {echo "class='active';";} ?> href="about.php">About</a></li>
			</ol>
		</div>