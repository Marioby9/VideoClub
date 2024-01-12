<div class="mainContainer">
    <link rel="stylesheet" href="<?php echo $ruta . "/public/css/ViewsCSS/showProduct.css"; ?>">
    <h1 class="title">Ficha técnica de película</h1>
    <div class="infoCont">
        <div class="data">
            <p><span>Título: </span><?php echo $movie->getTitle();?></p>
            <p><span>Director:</span> <?php echo $movie->getDirector();?></p>
            <p><span>Año de publicación:</span> <?php echo $movie->getYear();?></p>
            <p><span>Distribuidora:</span> <?php echo $movie->getPublisher();?></p>
            <p><span>Duración:</span> <?php echo $movie->getDuration();?> minutos</p>
            <p><span>ISAN:</span> <?php echo $movie->getISAN();?></p>
            <p><span>Género:</span> <?php echo $movie->getGenre();?></p>
        </div>
        <div class="btns">
            <a href="<?php echo $ruta . "/updateMovie"."/". $_GET["id"];?>" id="editBtn" class=""><p>Modificar</p></a>
        </div>
    </div>
</div>