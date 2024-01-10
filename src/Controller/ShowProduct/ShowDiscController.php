<?php
    $movie = $ORM->findByID("Disc", $_GET["id"]);
    
    include_once "./src/View/ShowProduct/ShowDiscView.php";
?>