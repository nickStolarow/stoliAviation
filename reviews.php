<?php
	$pageName = "reviews";
	require_once "header.php";
	require_once "dao.php";
	session_start();
	$con = include("config.php");
	$dao = new Dao();
	$reviews = $dao->getReviews();
	if ($_SESSION['admin'] == true){
		$admin = true;
	}
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
				$reviewId = $rev['reviewid'];
				echo "<div class='entireReview'>";
					if ($admin){
						echo "<div class='deleteReview'><a href='deleteReview.php?id={$reviewId}'>X</a></div>";
					}
					echo "<div class='headline'>" . htmlspecialchars($headline) . "</div>";
					echo "<div class='review' >" . htmlspecialchars($review) . "</div>";
					echo "<div class='reviewDate' >{$date}</div>";
				echo "</div>";
			}
		?>
	</body>
</html>
<?php
	require_once "footer.php";
?>