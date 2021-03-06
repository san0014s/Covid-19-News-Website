<?php
//accessing database
$servename = "localhost";
$DBuname = "root";
$DBPass = "mysql1234";
$DBname = "CS230Lecture";

$conn = mysqli_connect($servename, $DBuname, $DBPass, $DBname);

//checks for a connection
if (!$conn) {
    die("Connection failed...".mysqli_connect_error());
    # code...
}

$item_id = $_GET['id'];
//gets reviews to display from database
$sql = "SELECT * FROM reviews WHERE item_id='$item_id'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_assoc($result)){
        $uname = $row['uname'];
        $prosql = "SELECT picpath from profile WHERE uname='$uname';";
        $res = mysqli_query($conn, $prosql);
        $picpath = mysqli_fetch_assoc($res);
//displays review
        echo '
        <div class="card mx-auto" style="width: 30%; padding: 5px; margin-bottom: 10px;">
            <div class="media">
                <img class="mr-3" src="'.$picpath['picpath'].'" style="max-width: 75px; max-height: 75px; border-radius: 50%;">
                <div class="media-body">
                    <h4 class="mt-0">'.$row['uname'].'</h4>
                    <h5 class="mt-0">'.$row['title'].'</h5>
                    <p>'.$row['rev_date'].'</p>
                    <p>'.$row['review_text'].'</p>
                </div>
            </div>
        </div>
        ';
    }
}
//if there is no reviews, displays message
else{
    echo '<h5 style="text-align: center">No reviews, yet! Be the first!</h5>';
}
