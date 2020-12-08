<?php
require 'includes/header.php';
?>

<main>

<link rel = "stylesheet" href = "css/login.css">

    <!-- this div is for the background image cover, where it is centered in the middle and made to fit the page. -->
    <div class = "bg-cover">
        <div class = "h-30 center-me">
            <div class = "my-auto">

            <!-- The form that will contain fields for email address and password for a user to login-->
                <form class = "form-signin" action = "includes/login-helper.php" method = "post" style = "background: white">
                    <img src = "images/cross.png" style = "height: 50px; width: 50px" alt = "Picture of a cross">

                    <!-- The field for the email address-->
                    <h1 class = "h3 mb-3 font-weight-normal">Please enter login information below</h1>
                    <label for = "inputEmail" class = "sr-only">Username</label>
                    <input type = "text" id = "inputEmail" name = "uname" class = "form-control" placeholder = "username" required
                        autofocus>

                        <!-- The field for the password-->
                    <label for = "inputPassword" class = "sr-only">Password</label>
                    <input type = "password" id = "inputPassword" name = "pwd" class = "form-control" placeholder = "Password" required>
                    <div class = "checkbox mb-3" style = "margin: 30px">
                        <label>

                        <!-- A checkbox for the user to allow the information to be saved for faster sign in later-->
                            <input type = "checkbox" value = "remember-me"> Remember me
                        </label>

                        <!-- The submit button, which upon pressing, will send the entered data and have it compare the information in the databas-->
                        <button class = "btn btn-lg btn-danger btn-block" name = "login-submit" type = "submit">Log in</button>

                        <!-- If the user does not have an account yet, this link will send them to the signup page, where they are able to create a new account-->
                        <div class = "text-center">Don't have an account? <a href = "signup.php">Click here to create an account</a></div>
                        <p class = "mt-5 mb-3 text-muted">&copy; 2020-2021</p>

                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
