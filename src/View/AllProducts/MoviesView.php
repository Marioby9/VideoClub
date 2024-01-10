<div class="mainContainer">
    <link rel="stylesheet" href="./public/css/ViewsCSS/movies.css">
    <h1 class="title">Nuestro catálogo de películas</h1>
    <div class="catalogue">
    <form id="simpleForm" action="<?php echo $_SERVER["PHP_SELF"]."?ruta=movies"; ?>" method="post">
        <div class="search">
            <p>Flitrar por:</p>
            <select name="filter">
                <option value="title">Título</option>
                <option value="director">Director</option>
                <option value="year">Año</option>
                <option value="publisher">Productora</option>
                <option value="duration">Duración</option>
                <option value="genre">Género</option>
            </select>
            <div class="field">
                <input type="text" name="keyword" id="password" placeholder="Introduce las palabras clave">
                <i class="fa-solid fa-magnifying-glass searchButton" id="bSimpleSearch""></i>
            </div>
            <a class="btnAdd" id="bAdvSearch" href="?ruta=addMovie">
                <p>Añadir Película</p>
                <i class="fa-solid fa-clapperboard"></i>
            </a>
        </div>
    </form>
    <div class="moviesCont">
        <div class="rowNames">
            <p>Título</p>
            <p>Director</p>
            <p>Año</p>
            <p>Productora</p>
            <p>Duración</p>
            <p>Género</p>
        </div>
        <hr>
        <div class="movies">
            <?php foreach ($allMovies as $movie) {?>
                <a href="?ruta=singleMovie&id=<?php echo $movie->getId();?>" class="movie">
                        <p><?php echo $movie->getTitle(); ?></p>
                        <p><?php echo $movie->getDirector(); ?></p>
                        <p><?php echo $movie->getYear(); ?></p>
                        <p><?php echo $movie->getPublisher(); ?></p>
                        <p><?php echo $movie->getDuration(); ?></p>
                        <p><?php echo $movie->getGenre(); ?></p>
                </a>
            <?php } ?>
        </div>
    </div>
    </div>
    
    <script src="./public/js/Movies.js"></script>
</div>