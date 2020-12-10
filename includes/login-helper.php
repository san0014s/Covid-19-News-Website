<?php
/*
This is the helper file for login.php. When the submit button is pressed in there, the entered data will be taken here and be compared with the database.
Based on the comparision, an error message would appear at the end of the URL indicating which kind of error was detected.
*/
if(isset($_POST['login-submit'])) {
    require 'dbhandler.php';
    $uname_email = $_POST['uname'];
    $passw = $_POST['pwd'];

// if no information was given in the fields
    if (empty($uname_email) || empty($passw)) {
        header("Location: ../login.php?error=Emptyfield");
        exit();
    }

    $sql = "SELECT * FROM users WHERE uname=? OR email=?;";
    $stmt = mysqli_stmt_init($conn);

    // when an SQL injection was attempted
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../login.php?error=SQLInjection");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "ss", $uname_email, $passw);
        mysqli_stmt_execute($stmt);
        $results = mysqli_stmt_get_result($stmt);
        $data = mysqli_fetch_assoc($results);

        // if the given email address is not registered in the database
        if (empty($data)) {
            header("Location: ../login.php?error=UserDNE");
            exit();
        }
        // if the email exists, then check if the password is matching
        else {
            $pass_check = password_verify($passw, $data['password']);

            // if the password sucessfully matche
            if ($pass_check) {
                session_start();
                $_SESSION['uid'] = $data['uid'];
                $_SESSION['fname'] = $data['fname'];
                $_SESSION['username'] = $data['uname'];

                header("Location: ../profile.php?login=success");
                exit();
            }
            // if the password did not match
            else {
                header("Location: ../login.php?error=WrongPass");
                exit();
            }
        }

    }
}
else {
    header("Location: ../login.php");
    exit();
}
