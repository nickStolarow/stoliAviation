<?php
session_start();
if (isset($_SESSION['form'])) {
    $form_firstname = $_SESSION['form']['firstname'];
    $form_lastname = $_SESSION['form']['lastname'];
    $form_email = $_SESSION['form']['email'];
}
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stoliAviation.css" />
    </head>
        <body>
            <div id="fields">
                <a href="index.php">
                    <img id="logo" src="logo.jpg" />
                </a>
                <form method='POST' action='createAccountHandler.php'>
                    <?php
                        if (isset($_SESSION['errors'])){
                            foreach($_SESSION['errors'] as $message){
                                echo "<div id='errors'> {$message} </div>";
                            }
                        }
                    ?>
                    <div>
                        <input id="firstname" name="firstname" placeholder="First Name" type="text" value="<?php echo $form_firstname;?>"/>
                    </div>
                    <div>
                        <input id="lastname" name="lastname" placeholder="Last Name" type="text" value="<?php echo $form_lastname;?>"/>
                    </div>
                    <div>
                        <input id="email" name="email" placeholder="Email" type="text" value="<?php echo $form_email;?>"/>
                    </div>
                    <div>
                        <input id="password" name="password" placeholder="Password" type="password" />
                    </div>
                    <div>
                        <input id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" type="password" />
                    </div>
                    <div>
                        <input id="createAccountButton" type="submit" value="Create Account" />
                    </div>
                </form>
                <h7 id="login"> Already have an account?
                    <a id="login" href="login.php">Log in!</a>
                </h7>
            </div>
        </body>
</html>