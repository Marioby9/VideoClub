<div class="mainContainer">
    <link rel="stylesheet" href="./public/css/ViewsCSS/addProduct.css">
    <h1 class="title">Añade una película nueva</h1>

    <?php if(isset($anyEmptyField) && $anyEmptyField){echo Cards::errorCard("No pueden existir campos vacíos"); } ?>
    <?php if(isset($errorYear) && $errorYear){echo Cards::errorCard("El año debe ser un número entero"); } ?>
    <?php if(isset($errorDuration) && $errorDuration){echo Cards::errorCard("La duración debe ser un número entero (minutos)"); } ?>
    <?php if(isset($errorISAN) && $errorISAN){echo Cards::errorCard("El formato del ISAN es incorrecto"); } ?>
    <?php if(isset($inserted) && $inserted){echo Cards::correctCard("Película añadida correctamente"); } ?>

    <form action="<?php echo $_SERVER["PHP_SELF"]."?ruta=addMovie";?>" method="post">
        <div class="inputCont">
            <div class="field">
                <p>Título: </p>
                <input type="text" name="title" placeholder="Introduce un título" value= "<?php echo isset($_POST["title"]) ? $_POST["title"] : '' ; ?>" >
            </div>
            <div class="field">
                <p>Director: </p>
                <input type="text" name="director" placeholder="Introduce un director" value= "<?php echo isset($_POST["director"]) ? $_POST["director"] : '' ; ?>" >
            </div>
            <div class="field">
                <p>Año publicación: </p>
                <input type="number" name="year" placeholder="Año de publicación" value= "<?php echo isset($_POST["year"]) ? $_POST["year"] : '' ; ?>" >
            </div>
            <div class="field">
                <p>Distribuidora: </p>
                <input type="text" name="publisher" placeholder="Introduce una distribuidora" value= "<?php echo isset($_POST["publisher"]) ? $_POST["publisher"] : '' ; ?>" >
            </div>
            <div class="field">
                <p>Duración (mins): </p>
                <input type="number" name="duration" placeholder="Introduce la duración" value= "<?php echo isset($_POST["duration"]) ? $_POST["duration"] : '' ; ?>">
            </div>
            <div class="field">
                <p>ISAN: </p>
                <input type="text" name="ISAN" placeholder="Introduce el ISAN" value= "<?php echo isset($_POST["ISAN"]) ? $_POST["ISAN"] : '' ; ?>" >
            </div>
            <div class="field">
                <p>Género: </p>
                <input type="text" name="genre" placeholder="Introduce el género" value= "<?php echo isset($_POST["genre"]) ? $_POST["genre"] : '' ; ?>" >
            </div>
        </div>
        <div class="buttonCont">
            <input type="submit" name="addMovie" value="Añadir película">
        </div>
    </form>
</div>