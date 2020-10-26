<?php
session_start();
if (isset($_SESSION['form'])){
    $form_username = $_SESSION['form']['username'];
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
                <form method='POST' action='loginHandler.php'>
                    <?php
                        if (isset($_SESSION['credentials'])){
                            foreach($_SESSION['credentials'] as $message){
                                echo "<div id='errors'> {$message} </div>";
                            }
                        }
                    ?>
                    <div>
                        <input id="username" name="username" placeholder="Email" type="text" value="<?php echo $form_username;?>"/>
                    </div>
                    <div>
                        <input id="password" name="password" placeholder="Password" type="password" />
                    </div>
                    <div>
                        <input id="signUpButton" type="submit" value="Sign in" />
                    </div>
                </form>
                <h7 id="createAccount"> Don't have an account?
                    <a id="createAccount" href="createAccount.php">Create one!</a>
                </h7>
            </div>
        </body>
</html>