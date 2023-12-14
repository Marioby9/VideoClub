<?php
    $allMovies = $ORM->findAll("Movie");
    include_once "./src/views/MoviesView.php";

?>