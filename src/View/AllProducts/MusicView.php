<div class="mainContainer">
    <link rel="stylesheet" href="./public/css/ViewsCSS/movies.css">
    <h1 class="title">Nuestro catálogo de música</h1>
    <div class="catalogue">
    <form id="simpleForm" action="<?php echo $_SERVER["PHP_SELF"]."?ruta=music"; ?>" method="post">
        <div class="search">
            <p>Flitrar por:</p>
            <select name="filter">
                <option value="title">Título</option>
                <option value="artist">Artista</option>
                <option value="year">Año</option>
                <option value="publisher">Discográfica</option>
                <option value="duration">Duración</option>
                <option value="genre">Género</option>
            </select>
            <div class="field">
                <input type="text" name="keyword" id="password" placeholder="Introduce las palabras clave">
                <i class="fa-solid fa-magnifying-glass searchButton" id="bSimpleSearch""></i>
            </div>
            <a class="btnAdd" id="bAdvSearch" href="?ruta=addDisc">
                <p>Añadir canción</p>
                <i class="fa-solid fa-music"></i>
            </a>
        </div>
    </form>
    <div class="moviesCont">
        <div class="rowNames">
            <p>Título</p>
            <p>Artista</p>
            <p>Año</p>
            <p>Discográfica</p>
            <p>Duración</p>
            <p>Género</p>
        </div>
        <hr>
        <div class="movies">
            <?php foreach ($allDiscs as $disc) {?>
                <a href="?ruta=singleDisc&id=<?php echo $disc->getId();?>" class="movie">
                        <p><?php echo $disc->getTitle(); ?></p>
                        <p><?php echo $disc->getArtist(); ?></p>
                        <p><?php echo $disc->getYear(); ?></p>
                        <p><?php echo $disc->getPublisher(); ?></p>
                        <p><?php echo $disc->getDuration(); ?></p>
                        <p><?php echo $disc->getGenre(); ?></p>
                </a>
            <?php } ?>
        </div>
    </div>
    </div>
    
    <script src="./public/js/Movies.js"></script>
</div>