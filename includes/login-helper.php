<!--This may or may not be useful in the group's case. Can be deleted if needed -->
<?php

if(isset($_POST['login-submit'])) {
    require 'dbhandler.php';
    $uname_email = $_POST['uname'];
    $passw = $_POST['pwd'];

    if (empty($uname_email) || empty($passw)) {
        header("Location: ../login.php?error=Emptyfield");
        exit();
    }

    $sql = "SELECT * FROM users WHERE uname=? OR email=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location:../login.php?error=SQLInjection");
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt, "ss", $uname_email, $passw);
        mysqli_stmt_execute($stmt);
        $results = mysqli_stmt_get_result($stmt);
        $data = mysqli_fetch_assoc($results);

        if (empty($data)) {
            header("Location: ../login.php?error=UserDNE");
            exit();
        }
        else{
            $pass_check = password_verify($passw, $data['password']);

            if ($pass_check == true) {
                session_start();
                $_SESSION['uid'] = $data['uid'];
                $_SESSION['fname'] = $data['fname'];
                $_SESSION['username'] = $data['uname'];

                header("Location: ../profile.php?login=success");
                exit();
            }
            else {
                header("Location: ../login.php?error=WrongPass");
                exit();
            }
        }

    }
}
else{
    header("Location: ../login.php");
    exit();
}
