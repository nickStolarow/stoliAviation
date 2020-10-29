<?php
	$pageName = "reviews";
	require_once "header.php";
	session_start();
	$con = include("config.php");
?>
		<form action='reviewHandler.php'>
			<div>
				<input class="writeReview" type="submit" value="Leave a review!" />
			</div>
		</form>
	</body>
</html>
<?php
	require_once "footer.php";
?>