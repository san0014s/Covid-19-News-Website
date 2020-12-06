<?php
require "includes/header.php"
?>
<!-- The signup.php is dedicated to survey whether users have an account or not, If they do not have an account the signup.php
is giving the user the option to create and account that will be stored within the AWS database.-->
<!--Register-->
<main>
    <div class="bg-cover">
        <div class="h-100 container center-me">
            <div class="my-auto">
                <div class="signup-form">
                    <form action="includes/signup-helper.php" method="post">
                        <h2>Register</h2>
                        <p class="hint-text">Start your account now!!</p>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="fname" placeholder="First Name"
                                        required="required">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="lname" placeholder="Last Name"
                                        required="required">
                                </div>
                            </div>
                        </div>
                        <!--The user will be require to give a username, email, password, confirm their password, and submit their information-->
                        <div class="form-group">
                            <input type="text" class="form-control" name="uname" placeholder="Username"
                                required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="E-mail"
                                required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pwd" placeholder="Password"
                                required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="con-pwd" placeholder="Confirm Password"
                                required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="signup-submit"
                                class="btn btn-outline-success btn-lg btn-block">Register</button>
                        </div>
                    </form>
                    <!--If the user has an account with us already then then can click the sign in button to login-->
                    <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
                </div>
            </div>
        </div>
    </div>
</main>
