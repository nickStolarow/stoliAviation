<?php
class Dao {
  private $host = "us-cdbr-east-02.cleardb.com";
  private $db = "heroku_794df9bb4627818";
  private $user = "b241c8aad7abab";
  private $pass = "e5e4baf0";

  public function getConnection () {
    try {
      $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
      return $conn;
    } catch (Exception $e) {
        // echo print_r($e,1);
        echo "Connection to database no worky\n";
      exit;
    }
  }

  public function userExists($email, $password) {
    $conn = $this->getConnection();
    $getUserQuery = "select * from users where Email = :email and Password = :password";
    $q = $conn->prepare($getUserQuery);
    $q->bindParam(":email", $email);
    $q->bindParam(":password", $password);
    $q->execute();

    if ($q->fetchAll()){
      return true;
    } else {
      return false;
    }
  }

  public function createUser($firstname, $lastname, $email, $password) {
    $conn = $this->getConnection();
    $createUserQuery = "insert into users(FirstName, LastName, Email, Password) values(
      :firstname, :lastname, :email, :password)";
    $q = $conn->prepare($createUserQuery);
    $q->bindParam(":firstname", $firstname);
    $q->bindParam(":lastname", $lastname);
    $q->bindParam(":email", $email);
    $q->bindParam(":password", $password);
    $q->execute(); 
  }

  public function emailExists($email) {
    $conn = $this->getConnection();
    $emailExistsQuery = "select * from users where Email = :email";
    $q = $conn->prepare($emailExistsQuery);
    $q->bindParam(":email", $email);
    $q->execute();

    if ($q->fetchAll()){
      return true;
    } else {
      return false;
    }
  }
}