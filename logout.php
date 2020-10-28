<?php
session_start();
session_destroy();
unset($_SESSION['loggedIn']);
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
                <div><h7 id='signOutMessage'> You have been successfully signed out</h7></div>
            </div>
        </body>
</html>
