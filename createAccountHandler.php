<?php
require_once 'dao.php';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$errors = false;

// Check if first name field is filled
if (strlen($firstname) < 1 || strlen($firstname) > 64) {
    //TODO:
    $errors = true;
}
// Check if last name field is filled
if (strlen($lastname) < 1 || strlen($lastname) > 64) {
    //TODO:
    $errors = true;
}
// Check if email field is filled
if (strlen($email) < 1 || strlen($email) > 255) {
    //TODO:
    $errors = true;
}
// Check if email is valid
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors = true;    
}

// Check if password is valid (greater than 8 chars)
if (strlen($password) < 8 || strlen($password) > 64) {
    //TODO:
    $errors = true;
}
// Check if password and confirm password match
if ($password != $confirmPassword){
    //TODO:
    $errors = true;
}

if ($errors){
    // header("Location: https://thawing-peak-03178.herokuapp.com/createAccount.php");
    header("Location: http://localhost/stoliAviation/createAccount.php");
    exit();
} else {
    // Inserts valid user into users table
    $dao = new Dao();
    $dao->createUser($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password']);
    // header("Location: https://thawing-peak-03178.herokuapp.com/login.php");
    header("Location: http://localhost/stoliAviation/login.php");
    exit();
}
?>