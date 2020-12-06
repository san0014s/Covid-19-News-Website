<?php
require 'includes/dbhandler.php';
require 'includes/header.php';
?>

<main>
<link rel="stylesheet" href="css/gallery.css">
<link href="css/reviews.css" rel ="stylesheet">
    <h1>Gallery</h1>
        <div class="gallery-container">
            <?php
            $sql = "SELECT * FROM corona ORDER BY upload_data DESC";
            $stmt = mysqli_stmt_init($conn);

                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                while($row = mysqli_fetch_assoc($result)){
                   echo '<div class = "card">
                        <a href= "review.php?id = '.$row['pid'].'">
                            <img src="activities/'.$row["picpath"].'">
                            <h3>'.$row["title"].'</h3>
                            <p>'.$row["descript"].'</p>
                        </a>
                    </div>';

                
                
            }

            ?>


        </div>
    

</main>