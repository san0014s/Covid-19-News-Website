<?php
require 'includes/header.php';
?>

<main>
    <!--Using gallery.css style sheet -->
    <link rel="stylesheet" href="css/gallery.css">
    <h1>Gallery</h1>
        <div class="gallery-container">
            <!--Selecting from database table 'corona' to display in gallery -->
            <?php
            include_once 'includes/dbhandler.php';
            $sql = "SELECT * FROM corona ORDER BY upload_date DESC";
            $stmt = mysqli_stmt_init($conn);
            //checking for an sql failure
            if(!mysqli_stmt_prepare($stmt, $sql)){
                echo 'SQL Failure';
            }
            //if there is no sql failure, display the card that is contained in the database
            else {
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="card">
                        <a href="reviews.php?id = '.$row['pid'].'">
                            <img src="corona/'.$row["picpath"].'">
                            <h3>'.$row["title"].'</h3>
                            <p>'.$row["descript"].'</p>
                        </a>
                    </div>';
                }
            }
            ?>
        </div>
</main>
