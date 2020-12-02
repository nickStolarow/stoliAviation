<?php
	$pageName = "home";
	require_once "header.php";
?>
		<head>
			<link rel="stylesheet" type="text/css" href="stoliAviation.css" />
			<script src="slide.js"></script>
		</head>

		<script>
			window.onload = function() {
  				showSlides(1);
			};
		</script>

		<div class="slideshow-container">
			<div class="mySlides">
				<img class="pics" src="./pictures/1.jpg">
			</div>

			<div class="mySlides">
				<img class="pics" src="./pictures/2.jpg" style="100%">
			</div>

			<!-- <div class="mySlides">
				<img class="pics" src="./pictures/3.jpg">
			</div>

			<div class="mySlides">
				<img class="pics" src="./pictures/4.jpg">
			</div>

			<div class="mySlides">
				<img class="pics" src="./pictures/5.jpg">
			</div> -->

			<div class="mySlides">
				<img class="pics" src="./pictures/6.jpg">
			</div>
 
<!--		<div class="mySlides">
				<img class="pics" src="./pictures/7.jpg">
			</div>

			<div class="mySlides ">
				<img class="pics" src="./pictures/8.jpg">
			</div>

			<div class="mySlides ">
				<img class="pics" src="./pictures/9.jpg">
			</div>

			<div class="mySlides ">
				<img class="pics" src="./pictures/10.jpg">
			</div> -->

			<!-- Next and previous buttons -->
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>

		<!-- The dots/circles -->
		<div style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span> 
			<span class="dot" onclick="currentSlide(2)"></span> 
			<span class="dot" onclick="currentSlide(3)"></span> 
			<!-- <span class="dot" onclick="currentSlide(4)"></span> 
			<span class="dot" onclick="currentSlide(5)"></span> 
			<span class="dot" onclick="currentSlide(6)"></span> 
			<span class="dot" onclick="currentSlide(7)"></span> 
			<span class="dot" onclick="currentSlide(8)"></span> 
			<span class="dot" onclick="currentSlide(9)"></span> 
			<span class="dot" onclick="currentSlide(10)"></span>  -->
		</div>
		</div>
	</body>
</html>

<?php
	require_once "footer.php";
?>