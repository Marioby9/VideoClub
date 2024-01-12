<div class="mainContainer">
    <link rel="stylesheet" href="<?php echo $ruta . "/public/css/ViewsCSS/addProduct.css"; ?>">
    <h1 class="title">Actualiza el libro con ID: <?php echo $_GET["id"]; ?></h1>

    <?php if(isset($anyEmptyField) && $anyEmptyField){echo Cards::errorCard("No pueden existir campos vacíos"); } ?>
    <?php if(isset($errorYear) && $errorYear){echo Cards::errorCard("El año debe ser un número entero"); } ?>
    <?php if(isset($errorPages) && $errorPages){echo Cards::errorCard("Las páginas deben ser un número entero"); } ?>
    <?php if(isset($errorISBN) && $errorISBN){echo Cards::errorCard("El formato del ISBN es incorrecto"); } ?>
    <?php if(isset($updated) && $updated){echo Cards::correctCard("Libro actualizado correctamente"); } ?>

    <form action="<?php echo $ruta."/updateBook". "/" .$_GET["id"] ;?>" method="post">
        <div class="inputCont">
            <div class="field">
                <p>Título: </p>
                <input type="text" name="title" placeholder="Introduce un título" value= "<?php echo isset($_POST["title"]) ? $_POST["title"] : $oldBook->getTitle() ; ?>" >
            </div>
            <div class="field">
                <p>Autor: </p>
                <input type="text" name="author" placeholder="Introduce un autor" value= "<?php echo isset($_POST["author"]) ? $_POST["author"] : $oldBook->getAuthor() ; ?>" >
            </div>
            <div class="field">
                <p>Año publicación: </p>
                <input type="number" name="year" placeholder="Año de publicación" value= "<?php echo isset($_POST["year"]) ? $_POST["year"] : $oldBook->getYear() ; ?>" >
            </div>
            <div class="field">
                <p>Editorial: </p>
                <input type="text" name="publisher" placeholder="Introduce una editorial" value= "<?php echo isset($_POST["publisher"]) ? $_POST["publisher"] : $oldBook->getPublisher() ; ?>" >
            </div>
            <div class="field">
                <p>Nº Páginas: </p>
                <input type="number" name="pages" placeholder="Introduce el nº de páginas" value= "<?php echo isset($_POST["pages"]) ? $_POST["pages"] : $oldBook->getPages() ; ?>">
            </div>
            <div class="field">
                <p>ISBN: </p>
                <input type="text" name="ISBN" placeholder="Introduce el ISBN" value= "<?php echo isset($_POST["ISBN"]) ? $_POST["ISBN"] : $oldBook->getISBN() ; ?>" >
            </div>
            <div class="field">
                <p>Género: </p>
                <input type="text" name="genre" placeholder="Introduce el género" value= "<?php echo isset($_POST["genre"]) ? $_POST["genre"] : $oldBook->getGenre() ; ?>" >
            </div>
        </div>
        <div class="buttonCont">
            <input type="submit" name="updateBook" value="Actualizar libro">
        </div>
    </form>
</div>