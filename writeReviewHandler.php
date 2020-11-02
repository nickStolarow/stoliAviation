<?php
session_start();
require_once "dao.php";
$headline = $_POST['headline'];
$review = $_POST['review'];
$con = include('config.php');
$errors = false;
$dao = new Dao();
$_SESSION['errors'] = array();
foreach ($_SESSION['email'] as $email){
    $fullName = $dao->getName($email);
}

if (strlen($headline) < 1 || strlen($review) < 1) {
    $errors = true;
    $_SESSION['errors'][] = 'Please fill out all fields';
}

if ($errors) {
    $_SESSION['form'] = $_POST;
    if ($con == 'heroku') {
        header("Location: https://thawing-peak-03178.herokuapp.com/writeReview.php");
    } else {
        header("Location: http://localhost/stoliAviation/writeReview.php");
    }
    exit();
} else {
    $dao->createReview($fullName, $headline, $review);
    if ($con == 'heroku'){
        header("Location: https://thawing-peak-03178.herokuapp.com/reviews.php");
    } else {
        header("Location: http://localhost/stoliAviation/reviews.php");
    }
    unset($_SESSION['form']);
    exit();
}
?>