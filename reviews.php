<?php
	$pageName = "reviews";
	require_once "header.php";
	require_once "dao.php";
	session_start();
	$con = include("config.php");
	$dao = new Dao();
	$reviews = $dao->getReviews();
?>
		<form action='reviewHandler.php'>
			<div>
				<input class="writeReview" type="submit" value="Leave a review!" />
			</div>
		</form>
		<?php
			foreach ($reviews as $rev) {
				$headline = $rev['headline'];
				$review = $rev['review'];
				$date = $rev['reviewdate'];
				echo "<div class='entireReview'>";
					echo "<div class='headline' >{$headline}</div>";
					echo "<div class='review' >{$review}</div>";
					echo "<div class='reviewDate' >{$date}</div>";
				echo "</div>";
			}
		?>
	</body>
</html>
<?php
	require_once "footer.php";
?>