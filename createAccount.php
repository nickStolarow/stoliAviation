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
                    <div>
                        <input id="firstname" name="firstname" placeholder="First Name" type="text" />
                    </div>
                    <div>
                        <input id="lastname" name="lastname" placeholder="Last Name" type="text" />
                    </div>
                    <div>
                        <input id="email" name="email" placeholder="Email" type="text" />
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