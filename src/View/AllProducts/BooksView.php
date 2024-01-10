<div class="mainContainer">
    <link rel="stylesheet" href="./public/css/ViewsCSS/movies.css">
    <h1 class="title">Nuestro catálogo de libros</h1>
    <div class="catalogue">
    <form id="simpleForm" action="<?php echo $_SERVER["PHP_SELF"]."?ruta=books"; ?>" method="post">
        <div class="search">
            <p>Flitrar por:</p>
            <select name="filter">
                <option value="title">Título</option>
                <option value="author">Autor</option>
                <option value="year">Año</option>
                <option value="publisher">Editorial</option>
                <option value="pages">Páginas</option>
                <option value="genre">Género</option>
            </select>
            <div class="field">
                <input type="text" name="keyword" id="password" placeholder="Introduce las palabras clave">
                <i class="fa-solid fa-magnifying-glass searchButton" id="bSimpleSearch""></i>
            </div>
            <a class="btnAdd" id="bAdvSearch" href="?ruta=addBook">
                <p>Añadir Libro</p>
                <i class="fa-solid fa-book"></i>
            </a>
        </div>
    </form>
    <div class="moviesCont">
        <div class="rowNames">
            <p>Título</p>
            <p>Autor</p>
            <p>Año</p>
            <p>Editorial</p>
            <p>Páginas</p>
            <p>Género</p>
        </div>
        <hr>
        <div class="movies">
            <?php foreach ($allBooks as $book) {?>
                <a href="?ruta=singleBook&id=<?php echo $book->getId();?>" class="movie">
                        <p><?php echo $book->getTitle(); ?></p>
                        <p><?php echo $book->getAuthor(); ?></p>
                        <p><?php echo $book->getYear(); ?></p>
                        <p><?php echo $book->getPublisher(); ?></p>
                        <p><?php echo $book->getPages(); ?></p>
                        <p><?php echo $book->getGenre(); ?></p>
                </a>
            <?php } ?>
        </div>
    </div>
    </div>
    
    <script src="./public/js/Movies.js"></script>
</div>