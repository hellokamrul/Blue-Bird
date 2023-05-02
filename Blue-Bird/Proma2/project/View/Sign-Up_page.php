<html>
    <head>
        <title>Sign Up Page</title>
    </head>

    <body>
        <h1 align="center"><b> <text style="color:rgb(13, 13, 222);"> Blue-Bird </b></h1>
        <form align="center" method="POST" action="Sign-Up_check.php" enctype="">
            <fieldset>
                <legend>User Account Registration</legend>
                <table align="center">
                    <tr align="left">
                        <th><label for="username">User Name:* </label></th>
                        <th>
                        <input type="text" name="username" id="username" value="">
                        </th>
                    </tr>

                    <tr align="left">
                        <th><label for="email">Email:* </label></th>
                        <th>
                        <input type="email" name="email" id="email" value="">
                        </th>
                    </tr>

                    <tr align="left">
                        <th><label for="password">Password:* </label></th>
                        <th>
                        <input type="password" name="password" id="password" value="">
                        </th>
                    </tr>

                    <tr align="left">
                        <th><label for="retypePassword">Retype Password:* </label></th>
                        <th>
                        <input type="password" name="retypePassword" id="retypePassword" value="">
                        </th>
                    </tr>
                </table>
                <br/>
                <input type="submit" name="signup" value="Sign Up"></br> </br>
                <a href='Log-in.php'>Already have an account? Log In!</a> <br>
                <a href='MerchantRegistrationPage.php'> Join your Business with us!</a>
                <br/>
                <br/> </br>

                <?php

                    session_start();

                    if(isset($_REQUEST['msg']))
                    {
                        if($_REQUEST['msg'] == 'nullInputs')
                        {
                            echo("Please fillup the required fields marked with '*'.");
                        }
                        elseif($_REQUEST['msg'] == 'invalidEmail')
                        {
                            echo("Email already exsists.");
                        }
                        elseif($_REQUEST['msg'] == 'invalidPasswd')
                        {
                            echo("1. Passwords should be at least 8 characters long.<br/>
                            2. Should contain atleast one symbol.<br/>
                            3. Should contain at least one number.<br/>
                            4. Password can not contain '|' charcter.");
                        }
                        elseif($_REQUEST['msg'] == 'passwdMismatch')
                        {
                            echo("Password Mismatch.");
                        }
                    }
                ?>
            </fieldset>
        </form>
    </body>
</html>