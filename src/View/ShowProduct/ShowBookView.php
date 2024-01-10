<div class="mainContainer">
    <link rel="stylesheet" href="./public/css/ViewsCSS/showProduct.css">
    <h1 class="title">Ficha técnica de libro</h1>
    <div class="infoCont">
        <div class="data">
            <p><span>Título: </span><?php echo $book->getTitle();?></p>
            <p><span>Autor:</span> <?php echo $book->getAuthor();?></p>
            <p><span>Año de publicación:</span> <?php echo $book->getYear();?></p>
            <p><span>Distribuidora:</span> <?php echo $book->getPublisher();?></p>
            <p><span>Nº Páginas:</span> <?php echo $book->getPages();?></p>
            <p><span>ISBN:</span> <?php echo $book->getISBN();?></p>
            <p><span>Género:</span> <?php echo $book->getGenre();?></p>
        </div>
        <div class="btns">
            <a href="?ruta=updateBook&id=<?php echo $_GET["id"]; ?>" id="editBtn" class=""><p>Modificar</p></a>
            <a href="" id="deleteBtn" class=""><p>Eliminar</p></a>
        </div>
    </div>
</div>