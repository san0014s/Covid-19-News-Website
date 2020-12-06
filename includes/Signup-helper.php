<?php
/*  The signup-helper is meant to use the sql database we have created to obtain/store information about the user
That information is the following: Username, email, password, making sure the user confirm the password, user's first and last name
*/
if(isset($_POST['signup-submit'])){
        require "dbhandler.php";

        $username = $_POST['uname'];
        $email = $_POST['email'];
        $passw = $_POST['pwd'];
        $pass_rep = $_POST['con-pwd'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];

        //If the password and the confirm password are different then an error will be display
        if ($passw !== $pass_rep){
            header("Location: ../Signup.php?error=diffPasswords&fname=".$fname."&lname=".$lname."&uname=".$username);
            exit();
        }
        // else if the password and confirma password matches up then the data will be pull to see if another user had it before
        else{
            $sql = "SELECT uname FROM users WHERE uname=?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../Signup.php?error=SQLInjection");
                exit();
            }
            //This else statement checks if the usename was take
            else{
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $check = mysqli_stmt_num_rows($stmt);

                if($check > 0){
                    header("Location: ../Signup.php?error=UsernameTaken");
                    exit(); 
                }
                //Values arent correct then an error will occur
                else{
                    $sql = "INSERT INTO users (lname, fname, email, uname, password) VALUES (?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)){
                        header("Location: ../Signup.php?error=SQLInjection");
                        exit();
                    }
                    //If the information is correctly inserted then the signup will be a success
                    else{
                        $hashedPass = password_hash($passw, PASSWORD_BCRYPT);
                        mysqli_stmt_bind_param($stmt, "sssss", $lname, $fname, $email, $username, $hashedPass);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_store_result($stmt);

                        $sqlIng = "INSERT INTO profile (uname) VALUES ('$username')";
                        mysqli_query($conn, $sqlIng);

                        header("Location: ../Signup.php?signup=success");
                        exit();
                        
                    }
                }
            }
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        }

}
//goes back to the signup page
else{
    header("Location: ../signup.php");
    exit();
}