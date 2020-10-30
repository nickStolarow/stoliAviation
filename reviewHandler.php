<?php
session_start();
$con = include('config.php');

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true){
    if ($con == 'heroku') {
         header("Location: https://thawing-peak-03178.herokuapp.com/writeReview.php");
    } else {
         header("Location: http://localhost/stoliAviation/writeReview.php");
    }
    exit();
} else {
    if ($con == 'heroku') {
         header("Location: https://thawing-peak-03178.herokuapp.com/login.php");
    } else {
         header("Location: http://localhost/stoliAviation/login.php");
    }
    exit();
}
?>