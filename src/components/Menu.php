<link rel="stylesheet" href="<?php echo $ruta . "/public/css/ComponentsCSS/menu.css"; ?> ">
<aside class="menu center" id="menu">
    <img src="<?php echo $ruta . "/public/img/logos/whiteLogo.png";?>" alt="Logo">
    <nav class="center">
        <ul class="center">
            <li><a href="<?php echo dirname($_SERVER["PHP_SELF"]) . "/home"; ?>" style="<?php echo $_GET["ruta"] == "home" ? "background-color: #12395d;" : "background-color: none;"; ?>" >Inicio</a></li>
            <li><a href="<?php echo dirname($_SERVER["PHP_SELF"]) . "/movies"; ?>"  style="<?php echo $_GET["ruta"] == "movies" ? "background-color: #12395d;" : "background-color: none;"; ?>" >Películas</a></li>
            <li><a href="<?php echo dirname($_SERVER["PHP_SELF"]) . "/books"; ?>"  style="<?php echo $_GET["ruta"] == "books" ? "background-color: #12395d;" : "background-color: none;"; ?>" >Libros</a></li>
            <li><a href="<?php echo dirname($_SERVER["PHP_SELF"]) . "/music"; ?>"  style="<?php echo $_GET["ruta"] == "music" ? "background-color: #12395d;" : "background-color: none;"; ?>">Música</a></li>
        </ul>
    </nav>
    <div class="buttons center">
        <a class="btnRed center" href="https://github.com/Marioby9/VideoClub" target="_blank">
            <i class="fa-brands fa-github"></i>
            <p>Ver Proyecto</p>
        </a>
    </div>
</aside>
