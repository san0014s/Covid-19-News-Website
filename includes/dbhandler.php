<?php
/*The dbhandler.php is what connects the entire website to the database. 
It grabs everything from the local host and syncs it with the global databse(AWS)
*/
$servename = "localhost";
$DBuname = "root";
$DBPass = "mysql1234";
$DBname = "cs230";

$conn = mysqli_connect($servename, $DBuname, $DBPass, $DBname);

if (!$conn) {
    die("Connection failed...".mysqli_connect_error());
    # code...
}

