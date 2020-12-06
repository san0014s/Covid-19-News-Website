<?php
require 'includes/header.php';
?>

<main>
<link rel="stylesheet" href="css/login.css">
    <!-- If using php/SQL for database, may need to change names of input fields to match database table-->
    <div class="bg-cover">
        <div class="h-30 center-me">
            <div class="my-auto">
                <form class="form-signin" action="includes/login-helper.php" method="post" style="background: white">
                    <img src="images/cross.png" style="height: 50px; width: 50px" alt="Picture of a cross">
                    <h1 class="h3 mb-3 font-weight-normal">Please enter login information below</h1>
                    <label for="inputEmail" class="sr-only">Email address or username</label>
                    <input type="text" id="inputEmail" name="uname" class="form-control" placeholder="email/username" required
                        autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>
                    <div class="checkbox mb-3" style="margin: 30px">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                        <button class="btn btn-lg btn-danger btn-block" name="login-submit" type="submit">Log in</button>
                        <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
