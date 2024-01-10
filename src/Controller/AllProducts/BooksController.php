<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["filter"]) && !empty($_POST["keyword"])) {
        $allBooks = $ORM->find("Book", $_POST["filter"], $_POST["keyword"]);
    }
    else{
        $allBooks = $ORM->findAll("Book");
    }

    include_once "./src/View/AllProducts/BooksView.php";
?>