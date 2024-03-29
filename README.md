<a name="readme-top"></a>

<br />
<div align="center">
  <img src="./public/img/logos/whiteLogo.png" />

  <p align="center">
    Una página web para la administración de un Videoclub. 
  </p>
</div>

<!-- TABLA DE CONTENIDO -->
<details>
  <summary>Tabla de contenido</summary>
  <ol>
    <li>
      <a href="#resumen">Resumen</a>
      <ul>
        <li><a href="#características-principales">Características Principales<a></li>
      </ul>
    </li>
    <li><a href="#requisitos-previos">Requisitos previos</a></li>
    <li><a href="#instalación">Instalación</a></li>
    <li><a href="#contribuye">Contribuye</a></li>
    <li><a href="#licencia">Licencia</a></li>
    <li><a href="#contacto">Contacto</a></li>
    <li><a href="#agradecimiento">Agradecimiento</a></li>
  </ol>
</details>

<!-- EMPEZAMOS -->

## Resumen

Bienvenido a nuestro videoclub online en PHP, un proyecto diseñado para ofrecer una plataforma administrativa y fácil de usar para gestionar y modificar recursos películas, libros y discos. 
- En nuestro videoclub online, el administrador podrá añadir, modificar y eliminar recursos. 
- La finalidad del proyecto es la realización de una web funcional dinámica con el uso del método ORM para el acceso a datos.
- El proyecto está creado para la práctica del uso de tecnologías como ORM, MVC y rutas amigables en PHP.

### Características Principales:

- **Exploración del Catálogo:** Navega a través de nuestra extensa colección de libros y películas y discos.
- **Búsqueda Avanzada:** Utiliza funciones de búsqueda avanzada para encontrar rápidamente el material que necesitas por título, autor o categoría.

- **Gestión de recursos:** Deberás conocer todos los datos de cada recursos para una correcta inserción, modificación o eliminación.

- **Sistema de gestión:** Modifia y gestiona el uso de recursos de manera fácil y rápida.

- **Interfaz Intuitiva:** Una interfaz de usuario amigable que facilita la navegación y el uso de las funcionalidades del videoclub.

Este proyecto busca proporcionar una solución robusta para la gestión administrativa de un videoclub online, permitiendo a los administradores agregar nuevos recursos, gestionar usuarios y garantizar una experiencia de usuario fluida.

Siéntete libre de explorar, contribuir y adaptar este proyecto según tus necesidades específicas. ¡Disfruta de tu experiencia en nuestro videoclub online en PHP!

## Requisitos previos

Antes de comenzar con la instalación, asegúrate de tener instalado Apache en tu sistema. Puedes descargar e instalar XAMPP, que incluye Apache, PHP y MySQL, desde [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).

## Instalación

Sigue estos pasos para configurar el proyecto en tu entorno local:

1. **Configuración de Apache:**

   - Abre el archivo de configuración de vhost de Apache. Esto puede variar según tu sistema operativo. En Windows, generalmente se encuentra en `C:\xampp\apache\conf\extra\httpd-vhosts.conf`.
   - Agrega la siguiente configuración para tu proyecto:

     ```apache
     <VirtualHost *:80>
        ServerName tudnslocal.com

        DocumentRoot "/xampp/htdocs/tudnslocal.com/src/paginas"
        <Directory "/xampp/htdocs/tudnslocal.com/src/paginas">
            Options -Indexes +FollowSymLinks
            AllowOverride All
            Require all granted
        </Directory>

        Alias "/public" "/xampp/htdocs/tudnslocal.com/public"
        <Directory "/xampp/htdocs/tudnslocal.com/public">
            Options -Indexes +FollowSymLinks
            AllowOverride All
            Require all granted
        </Directory>
     </VirtualHost>
     ```

2. **Mover el proyecto a htdocs:**

   - Copia todos los archivos de tu proyecto a la carpeta `htdocs` de XAMPP (generalmente en `C:\xampp\htdocs` en Windows).

3. **Configuración del archivo hosts:**

   - Abre el archivo `hosts` de tu sistema. En Windows, se encuentra en `C:\Windows\System32\drivers\etc\hosts`. Puedes editarlo con un editor de texto con privilegios de administrador.
   - Agrega la siguiente línea al final del archivo:

     ```
     127.0.0.1 tudnslocal.com
     ```

4. **Descarga e Instalación de browscap.ini:**

   - Visita la página web oficial de [https://browscap.org/](https://browscap.org/).

   - Descarga la versión más reciente del archivo `full_php_browscap.ini`.

   - Coloca el archivo descargado en la carpeta de configuración de PHP/Extras (por ejemplo, `C:\xampp\php\extras\browscap.ini`).

   ```bash
   # Puedes usar comandos como wget o curl para descargar el archivo directamente en la terminal.
   wget https://browscap.org/stream?q=PHP_BrowsCapINI -O C:\xampp\php\extras\browscap.ini
   ```

5. **Ejecución del Script SQL:**

   - Importa el script SQL proporcionado (`script.sql`) en tu herramienta de gestión de bases de datos (por ejemplo, phpMyAdmin) para crear las tablas necesarias y agregar datos de prueba.

6. **Cambio de Ruta del Directorio en .htaccess:**

   - Abre o crea el archivo `.htaccess` en la raíz de tu proyecto.
   - Agrega la siguiente línea para cambiar la ruta del directorio del proyecto:

     ```apache
     php_value include_path "C:\xampp\htdocs\tu_proyecto\ruta\del\directorio"
     ```

     Asegúrate de modificar `C:\xampp\htdocs\tu_proyecto\ruta\del\directorio` con la ruta correcta hacia tu directorio de proyecto.

7. **Configuración de Variables Globales:**

   - Abre el archivo `configuracion/db.php` y ajusta las variables de conexión a la base de datos según tu configuración local.

     ```php
     <?php
     // Archivo: configuracion/db.php
     const DB_HOST = "localhost";
     const DB_PUERTO = 3306;
     const DB_USUARIO = "tu_usuario";
     const DB_CONTRASENA = "tu_contraseña";
     const DB_BASEDATOS = "tu_nombre_de_db";
     ```

   - Abre el archivo `configuracion/general.php` y configura las variables globales según tus necesidades.

     ```php
     <?php
     // Archivo: configuracion/general.php
     require_once "db.php";
     const BASE_URL = "tudnslocal.com";
     ```

8. **Reiniciar Apache:**

   - Reinicia el servidor Apache desde el panel de control de XAMPP o usando los comandos apropiados para tu sistema.

9. **Acceso al Usuario de Prueba:**
   - En este caso, no es necesario un registro porque está pensado para un único uso adminsitrativo para la empresa.

Ahora deberías poder acceder a tu proyecto a través de [http://tudnslocal.com](http://tudnslocal.com) en tu navegador. Asegúrate de que las variables en los archivos de configuración estén configuradas correctamente y que las tablas y datos de prueba se hayan creado con éxito.

¡Listo! Tu entorno local está configurado para ejecutar el proyecto de página web en PHP con las variables globales personalizadas y datos de prueba. ¡Feliz desarrollo!

<p align="right">(<a href="#readme-top">Volver arriba</a>)</p>
      
<!-- CONTRIBUYE -->
## Contribuye

Las contribuciones son las que hacen de la comunidad de código abierto un lugar increíble para aprender, inspirar y crear. Cualquier contribución que hagas será muy apreciada.

Si tiene alguna sugerencia que pueda mejorar esto, bifurque el repositorio y cree una solicitud de extracción. También puedes simplemente abrir un problema con la etiqueta "mejora". ¡No olvides darle una estrella al proyecto! ¡Gracias de nuevo!

<p align="right">(<a href="#readme-top">Volver arriba</a>)</p>

<!-- LICENCIA -->

## Licencia

Distribuido bajo la licencia Apache License 2.0. Consulte `LICENCIA.txt` para obtener más información.

<p align="right">(<a href="#readme-top">Volver arriba</a>)</p>

<!-- CONTACTO -->

## Contacto

Mario Martín Godoy - [@mariomg]() - mmartin.mrmg@gmail.com

Enlace del proyecto: [https://github.com/Marioby9/VideoClub](https://github.com/Marioby9/VideoClub)

<p align="right">(<a href="#readme-top">Volver arriba</a>)</p>

<!-- AGREDECIMIENTO -->

## Agradecimiento

Utilice este espacio para enumerar los recursos que le resulten útiles y a los que le gustaría dar crédito. ¡He incluido algunos de mis favoritos para comenzar!

- [Elije una licencia de código abierto](https://choosealicense.com)
- [PHP](https://www.php.net/)

<p align="right">(<a href="#readme-top">Volver arriba</a>)</p>
