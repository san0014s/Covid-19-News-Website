<?php 
//requiring dbhandler and setting default time zone
require_once 'dbhandler.php';
date_default_timezone_set('UTC');

//setting values from user
if(isset($_POST['review-submit'])){
    session_start();
    $uname = $_SESSION['username'];
    $title = $_POST['review-title'];
    $date = date('Y-m-d H:i:s');
    $review = $_POST['review'];
    $item_id = $_POST['item_id'];
    $rating = $_POST['rating'];

    //input values into reviews table in the database
$sql = "INSERT INTO reviews (item_id, uname, title, review_text, rev_date, rating_num, status) VALUES ('$item_id','$uname','$title','$review','$date','$rating', 1);";
$stmt = mysqli_stmt_init($conn);
$result = $conn->query($sql);
header("Location: ../reviews.php?id=$item_id");
}
