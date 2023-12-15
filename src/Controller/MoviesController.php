<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["filter"]) && !empty($_POST["keyword"])) {
        $allMovies = $ORM->find("Movie", $_POST["filter"], $_POST["keyword"]);
    }
    else{
        $allMovies = $ORM->findAll("Movie");
    }

    include_once "./src/View/MoviesView.php";
?>