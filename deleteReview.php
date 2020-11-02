<?php
require_once 'dao.php';
$con = include('config.php');
$dao = new Dao();
$dao->deleteReview($_GET['id']);
if ($con == 'heroku') {
    header("Location: https://thawing-peak-03178.herokuapp.com/reviews.php");
} else {
    header("Location: http://localhost/stoliAviation/reviews.php");
}
exit();
?>