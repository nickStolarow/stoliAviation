<html>
    <head>
        <link rel="stylesheet" type="text/css" href="stoliAviation.css" />
    </head>
        <body>
            <div id="fields">
                <a href="index.php">
                    <img id="logo" src="logo.jpg" />
                </a>
                <form methoD='POST' action='loginHandler.php'>
                    <div>
                        <input id="username" name="username" placeholder="Email" type="text" />
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