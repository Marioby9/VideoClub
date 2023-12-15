<?php
    $allMovies = $ORM->findAll("Movie");
    include_once "./src/View/MoviesView.php";

?>