<?php
    include_once "./src/Class/Product.php";
    include_once "./src/Class/Movie.php";
    include_once "./src/Class/Book.php";
    include_once "./src/Class/Disc.php";
    include_once "./config/configDB.php";
    include_once "./src/Model/ORM.inc.php";
    include_once "./src/Components/Cards.php";

    if(empty($_GET)){
        header("Location: index.php?ruta=home");
        exit();
    }
    $ORM = new ORM();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./public/css/ViewsCSS/index.css">
    <link rel="icon" href="./public/img/logos/whiteLogoIco.ico" type="image/x-icon">
    <title>VideoClub</title>
</head>
<body class="center">
    <section class="page">
        <?php include_once "./src/Components/Menu.php"; ?>
        <main id="main">
            <?php 
                if(isset($_GET["ruta"])){
                    if($_GET["ruta"] == "home"){
                        include_once "./src/View/HomeView.php";
                    }
                    else if($_GET["ruta"] == "movies"){
                        include_once "./src/Controller/AllProducts/MoviesController.php";
                    }
                    else if($_GET["ruta"] == "books"){
                        include_once "./src/Controller/AllProducts/BooksController.php";
                    }
                    else if($_GET["ruta"] == "music"){
                        include_once "./src/Controller/AllProducts/MusicController.php";
                    }
                    else if($_GET["ruta"] == "addMovie"){
                        include_once "./src/Controller/AddProduct/AddMovieController.php";
                    }
                    else if($_GET["ruta"] == "addBook"){
                        include_once "./src/Controller/AddProduct/AddBookController.php";
                    }
                    else if($_GET["ruta"] == "addDisc"){
                        include_once "./src/Controller/AddProduct/AddDiscController.php";
                    }
                    else if($_GET["ruta"] == "singleMovie" && isset($_GET["id"])){
                        include_once "./src/Controller/ShowProduct/ShowMovieController.php";
                    }
                    else if($_GET["ruta"] == "singleBook" && isset($_GET["id"])){
                        include_once "./src/Controller/ShowProduct/ShowBookController.php";
                    }
                    else if($_GET["ruta"] == "singleDisc" && isset($_GET["id"])){
                        include_once "./src/Controller/ShowProduct/ShowDiscController.php";
                    }
                    else if($_GET["ruta"] == "updateMovie" && isset($_GET["id"])){
                        include_once "./src/Controller/UpdateProduct/UpdateMovieController.php";
                    }
                    else if($_GET["ruta"] == "updateBook" && isset($_GET["id"])){
                        include_once "./src/Controller/UpdateProduct/UpdateBookController.php";
                    }
                    else if($_GET["ruta"] == "updateDisc" && isset($_GET["id"])){
                        include_once "./src/Controller/UpdateProduct/UpdateDiscController.php";
                    }
                }
                else{

                }
                include_once "./src/Components/Footer.php"; 
            ?>
        </main>
        
    </section>
</body>
</html>