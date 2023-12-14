<link rel="stylesheet" href="./public/css/ComponentsCSS/menu.css">
<aside class="menu center" id="menu">
    <img src="./public/img/logos/whiteLogo.png" alt="Logo">
    <nav class="center">
        <ul class="center">
            <li><a href="<?php echo $_SERVER["PHP_SELF"] ."?ruta=home"; ?>" style="<?php echo $_GET["ruta"] == "home" ? "background-color: #12395d;" : "background-color: none;"; ?>" >Inicio</a></li>
            <li><a href="<?php echo $_SERVER["PHP_SELF"] ."?ruta=movies"; ?>"  style="<?php echo $_GET["ruta"] == "movies" ? "background-color: #12395d;" : "background-color: none;"; ?>" >Películas</a></li>
            <li><a href="<?php echo $_SERVER["PHP_SELF"] ."?ruta=books"; ?>"  style="<?php echo $_GET["ruta"] == "books" ? "background-color: #12395d;" : "background-color: none;"; ?>" >Libros</a></li>
            <li><a href="<?php echo $_SERVER["PHP_SELF"] ."?ruta=music"; ?>"  style="<?php echo $_GET["ruta"] == "music" ? "background-color: #12395d;" : "background-color: none;"; ?>">Música</a></li>
        </ul>
    </nav>
    <div class="buttons center">
        <a class="btnRed center" href="https://github.com/Marioby9/VideoClub" target="_blank">
            <i class="fa-brands fa-github"></i>
            <p>Ver Proyecto</p>
        </a>
    </div>
</aside>
