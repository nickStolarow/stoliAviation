<?php
session_start();
require_once 'dao.php';
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['credentials'] = array();
$con = include('config.php');

// Check if username field is filled
if (strlen($username) > 0){
    //TODO:
}

// Check if password field is filled
if (strlen($password) > 0){
    //TODO
}

// Authenticate user
$dao = new Dao();
$validUser = $dao->userExists($username, $password);
if ($validUser) {
    if ($con == 'heroku') {
        header("Location: https://thawing-peak-03178.herokuapp.com/index.php");
    } else {
        header("Location: http://localhost/stoliAviation/index.php");
    }
    exit();
} else {
    $_SESSION['credentials'][] = 'Username or password is incorrect';
    if ($con == 'heroku') {
        header("Location: https://thawing-peak-03178.herokuapp.com/login.php");
    } else {
        header("Location: http://localhost/stoliAviation/login.php");
    }
    exit();
}
?>