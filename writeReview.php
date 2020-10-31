<?php
session_start();
$con = include('config.php');

if (isset($_SESSION['loggedIn']) && !$_SESSION['loggedIn'] || !isset($_SESSION['loggedIn'])) {
    if ($con == 'heroku') {
        header("Location: https://thawing-peak-03178.herokuapp.com/login.php");
    } else {
        header("Location: http://localhost/stoliAviation/login.php");
    }
    exit();
  }

if (isset($_SESSION['form'])) {
    $form_headline = $_SESSION['form']['headline'];
    $form_review = $_SESSION['form']['review'];
}
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stoliAviation.css" />
    </head>
        <body>
            <div>
                <a href="index.php">
                    <img id="logo" src="logo.jpg" />
                </a>
            </div>
            <?php
                if (isset($_SESSION['errors'])){
                    foreach($_SESSION['errors'] as $message){
                        echo "<div id='error'> {$message} </div>";
                    }
                }
            ?>
            <div>
                <form method='POST' action='writeReviewHandler.php'>
                        <div>
                            <input id="headline" name="headline" maxlength=50 placeholder="Headline" value="<?php echo $form_headline;?>"/>
                        </div>
                        <div>
                            <textarea id="review" name="review" maxlength=1500 rows=10 placeholder="Review"><?php echo $form_review;?></textarea>
                        </div>
                        <div>
                            <input id="submitReview" type="submit" value="Submit Review" />
                        </div>
                </form>
            </div>
        </body>
</html>