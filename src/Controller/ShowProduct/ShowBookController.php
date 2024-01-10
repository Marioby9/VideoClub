<?php
    $book = $ORM->findByID("Book", $_GET["id"]);
    
    include_once "./src/View/ShowProduct/ShowBookView.php";
?>