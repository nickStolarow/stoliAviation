<?php
session_start();
require_once 'dao.php';
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['credentials'] = array();
$_SESSION['loggedIn'] = array();
$_SESSION['admin'] = array();
$_SESSION['email'] = array();
$con = include('config.php');

// Authenticate user
$dao = new Dao();
$salt = $dao->getSalt($username);
$password = hash("sha256", $salt . $password);
$validUser = $dao->userExists($username, $password);
if ($validUser) {
    $_SESSION['email'][] = $username;
    $_SESSION['loggedIn'][] = true;
    if ($username == 'Admin'){
        $_SESSION['admin'][] = true;
    }
    if ($con == 'heroku') {
        header("Location: https://thawing-peak-03178.herokuapp.com/index.php");
    } else {
        header("Location: http://localhost/stoliAviation/index.php");
    }
    unset($_SESSION['form']);
    exit();
} else {
    $_SESSION['form'] = $_POST;
    $_SESSION['credentials'][] = 'Email or password is incorrect';
    if ($con == 'heroku') {
        header("Location: https://thawing-peak-03178.herokuapp.com/login.php");
    } else {
        header("Location: http://localhost/stoliAviation/login.php");
    }
    exit();
}
?>