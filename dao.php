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

  public function createReview($fullName, $headline, $review) {
    $conn = $this->getConnection();
    $createReviewQuery = "insert into reviews(fullname, headline, review) values(:fullname, :headline, :review)";
    $q = $conn->prepare($createReviewQuery);
    $q->bindParam(":headline", $headline);
    $q->bindParam(":review", $review);
    $q->bindParam(":fullname", $fullName);
    $q->execute(); 
  }

  public function getReviews() {
    $conn = $this->getConnection();
    return $conn->query('select fullname, reviewid, headline, review, reviewdate from reviews order by reviewdate desc');
  }

  public function deleteReview($id){
    $conn = $this->getConnection();
    $deleteReviewQuery = "delete from reviews where ReviewID = :id";
    $q = $conn->prepare($deleteReviewQuery);
    $q->bindParam(":id", $id);
    $q->execute();
  }

  public function getName($email) {
    $conn = $this->getConnection();
    $getNameQuery = "select firstname, lastname from users where email = :email";
    $q = $conn->prepare($getNameQuery);
    $q->bindParam(":email", $email);
    $q->execute();

    foreach ($q as $name) {
      $fullName = $name['firstname'] . ' ' . $name['lastname'];
    }
    return $fullName;
  }
}
