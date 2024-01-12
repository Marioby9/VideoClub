<div class="mainContainer">
    <link rel="stylesheet" href="./public/css/ViewsCSS/showProduct.css">
    <h1 class="title">Ficha técnica de disco</h1>
    <div class="infoCont">
        <div class="data">
            <p><span>Título: </span><?php echo $movie->getTitle();?></p>
            <p><span>Artista/Grupo:</span> <?php echo $movie->getArtist();?></p>
            <p><span>Año de publicación:</span> <?php echo $movie->getYear();?></p>
            <p><span>Distribuidora:</span> <?php echo $movie->getPublisher();?></p>
            <p><span>Duración:</span> <?php echo $movie->getDuration();?> minutos</p>
            <p><span>ISWC:</span> <?php echo $movie->getISWC();?></p>
            <p><span>Género:</span> <?php echo $movie->getGenre();?></p>
        </div>
        <div class="btns">
            <a href="?ruta=updateDisc&id=<?php echo $_GET["id"]; ?>" id="editBtn" class=""><p>Modificar</p></a>
        </div>
    </div>
</div>