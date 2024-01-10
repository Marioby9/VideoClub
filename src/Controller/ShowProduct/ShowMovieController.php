<?php
    $movie = $ORM->findByID("Movie", $_GET["id"]);
    
    include_once "./src/View/ShowProduct/ShowMovieView.php";
?>