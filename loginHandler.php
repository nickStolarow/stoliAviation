<?php
require_once 'dao.php';
$username = $_POST['username'];
$password = $_POST['password'];
$errors = false;

// Check if username field is filled
if (strlen($username) > 0){
    //TODO:
    $errors = true;
}

// Check if password field is filled
if (strlen($password) > 0){
    //TODO:
    $errors = true;
}

// Authenticate user
$dao = new Dao();
$validUser = $dao->userExists($username, $password);
if ($validUser) {
    // header("Location: https://thawing-peak-03178.herokuapp.com/index.php");
    header("Location: http://localhost/stoliAviation/index.php");
    exit();
} else {
    // header("Location: https://thawing-peak-03178.herokuapp.com/login.php");
    header("Location: http://localhost/stoliAviation/login.php");
    exit();
}
?>