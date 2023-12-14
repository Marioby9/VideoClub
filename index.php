<?php
    include_once "./src/models/ORM.inc.php";
    include_once "./src/classes/Movie.php";

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
        <?php include_once "./src/components/Menu.php"; ?>
        <main id="main">
            <?php 
                if(isset($_GET["ruta"])){
                    if($_GET["ruta"] == "home"){
                        include_once "./src/views/HomeView.php";
                    }
                    else if($_GET["ruta"] == "movies"){
                        include_once "./src/controllers/MoviesController.php";
                    }
                    else if($_GET["ruta"] == "books"){
                        include_once "./src/views/BooksView.php";
                    }
                    else if($_GET["ruta"] == "music"){
                        include_once "./src/views/DiscsView.php";
                    }
                }
                else{

                }
            ?>

        </main>
    </section>
</body>
</html>