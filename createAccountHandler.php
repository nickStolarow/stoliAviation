<?php
session_start();
require_once 'dao.php';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$_SESSION['errors'] = array();
$con = include('config.php');
$errors = false;
$dao = new Dao();

// Check if first and last name field is filled
if (strlen($firstname) < 1 || strlen($firstname) > 64 || strlen($lastname) < 1 || strlen($lastname) > 64) {
    $_SESSION['errors'][] = 'Invalid name';
    $errors = true;
}

// Check if email is valid
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || strlen($email) < 1 || strlen($email) > 255){
    $_SESSION['errors'][] = 'Invalid email';
    $errors = true;
}

// Check if password is valid (greater than 8 chars)
if (strlen($password) < 8 || strlen($password) > 64) {
    $_SESSION['errors'][] = 'Password must be between 8 and 64 characters';
    $errors = true;
}
// Check if password and confirm password match
if ($password != $confirmPassword){
    $_SESSION['errors'][] = 'Passwords do not match';
    $errors = true;
}

$emailExists = $dao->emailExists($email);
if ($emailExists){
    $_SESSION['errors'][] = 'There is already an account associated with the email provided';
    $errors = true;
}

if ($errors){
    $_SESSION['form'] = $_POST;
    if ($con == 'heroku') {
        header("Location: https://thawing-peak-03178.herokuapp.com/createAccount.php");
    } else {
        header("Location: http://localhost/stoliAviation/createAccount.php");
    }
    exit();
} else {
    // Inserts valid user into users table
    $salt = random_bytes(64);
    $password = hash("sha256", $salt . $password);
    $dao->createUser($firstname, $lastname, $email, $password, $salt);
    if ($con == 'heroku'){
        header("Location: https://thawing-peak-03178.herokuapp.com/login.php");
    } else {
        header("Location: http://localhost/stoliAviation/login.php");
    }
    unset($_SESSION['form']);
    exit();
}
?>