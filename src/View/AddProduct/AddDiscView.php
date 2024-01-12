<div class="mainContainer">
    <link rel="stylesheet" href="<?php echo $ruta . "/public/css/ViewsCSS/addProduct.css"; ?>">
    <h1 class="title">Añade un disco nuevo</h1>

    <?php if(isset($anyEmptyField) && $anyEmptyField){echo Cards::errorCard("No pueden existir campos vacíos"); } ?>
    <?php if(isset($errorYear) && $errorYear){echo Cards::errorCard("El año debe ser un número entero"); } ?>
    <?php if(isset($errorDuration) && $errorDuration){echo Cards::errorCard("La duración debe ser un número entero (minutos)"); } ?>
    <?php if(isset($errorISWC) && $errorISWC){echo Cards::errorCard("El formato del ISWC es incorrecto"); } ?>
    <?php if(isset($inserted) && $inserted){echo Cards::correctCard("Disco añadido correctamente"); } ?>

    <form action="<?php echo $ruta."/addDisc";?>" method="post">
        <div class="inputCont">
            <div class="field">
                <p>Título: </p>
                <input type="text" name="title" placeholder="Introduce un título" value= "<?php echo isset($_POST["title"]) ? $_POST["title"] : '' ; ?>" >
            </div>
            <div class="field">
                <p>Artista o grupo: </p>
                <input type="text" name="artist" placeholder="Introduce un artista o grupo" value= "<?php echo isset($_POST["artist"]) ? $_POST["artist"] : '' ; ?>" >
            </div>
            <div class="field">
                <p>Año publicación: </p>
                <input type="number" name="year" placeholder="Año de publicación" value= "<?php echo isset($_POST["year"]) ? $_POST["year"] : '' ; ?>" >
            </div>
            <div class="field">
                <p>Discográfica: </p>
                <input type="text" name="publisher" placeholder="Introduce una editorial" value= "<?php echo isset($_POST["publisher"]) ? $_POST["publisher"] : '' ; ?>" >
            </div>
            <div class="field">
                <p>Duración (mins): </p>
                <input type="number" name="duration" placeholder="Introduce la duración" value= "<?php echo isset($_POST["duration"]) ? $_POST["duration"] : '' ; ?>">
            </div>
            <div class="field">
                <p>ISWC: </p>
                <input type="text" name="ISWC" placeholder="Introduce el ISWC" value= "<?php echo isset($_POST["ISWC"]) ? $_POST["ISWC"] : '' ; ?>" >
            </div>
            <div class="field">
                <p>Género: </p>
                <input type="text" name="genre" placeholder="Introduce el género" value= "<?php echo isset($_POST["genre"]) ? $_POST["genre"] : '' ; ?>" >
            </div>
        </div>
        <div class="buttonCont">
            <input type="submit" name="addDisc" value="Añadir disco">
        </div>
    </form>
</div>