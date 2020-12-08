<?php
require 'includes/header.php'
?>
<!-- Above includes the nav bar into this page and below inserts all the stylesheets -->
    <main>   
    <link rel="stylesheet" href="css/WVUnews.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- This part adds the jumbotron at the top-->
        <div class="jumbotron jumbotron-fluid">
                <div class="container">
                        <div class="col-6">
                                <h1 class="display-4">WVU News</h1>
                                <p class="lead">For all your WVU news and alerts regarding Covid-19</p>
                        </div>
                        <div class="picture">
                                <img src="./images/woodburn.jpg" alt="beautiful woodburn hall" width="400" height="300">
                        </div>
                </div>
        </div>
        <!-- Everything below are the articles and how they will be added -->
        <h2 style="text-align:center; margin-top: 10px">Articles</h2>

                <div class= "card mx-auto">
                        <h2 class = "title">Example Article 1</h2>
                        <p>Author and Date</p>
                        <p>Brief Description of what is in the article</p>
                        <a class="btn btn-secondary" href="#" role="button">Check It Out</a>
                </div>



                <div class= "card mx-auto">
                        <h2 class = "title">Example Article 2</h2>
                        <p>Author and Date</p>
                        <p>Brief Description of what is in the article</p>
                        <a class="btn btn-secondary" href="#" role="button">Check It Out</a>
                </div>


                <div class= "card mx-auto">
                        <h2 class = "title">Example Article 3</h2>
                        <p>Author and Date</p>
                        <p>Brief Description of what is in the article</p>
                        <a class="btn btn-secondary" href="#" role="button">Check It Out</a>
                </div>


                <div class= "card mx-auto">
                        <h2 class = "title">Example Article 4</h2>
                        <p>Author and Date</p>
                        <p>Brief Description of what is in the article</p>
                        <a class="btn btn-secondary" href="#" role="button">Check It Out</a>
                </div>


    </main>