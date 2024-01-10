<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["filter"]) && !empty($_POST["keyword"])) {
        $allDiscs = $ORM->find("Disc", $_POST["filter"], $_POST["keyword"]);
    }
    else{
        $allDiscs = $ORM->findAll("Disc");
    }

    include_once "./src/View/AllProducts/MusicView.php";
?>