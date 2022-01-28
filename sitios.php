<?php
require("regisContact.php");
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Portafolio Angel</title>
        <link rel="preload" href="CSS/normalize.css" as="style">
        <link rel="stylesheet" href="CSS/normalize.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="icon" href="Imagenes/svg/code-white.svg">
        <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
        <link rel="preload" href="CSS/style.css" as="style">
        <link rel="stylesheet" href="CSS/style.css">
    </head>

    <body>
      <header>
        <h1 class="titulo">Angel Resendiz <span class="spantitulo">Frelancer</span></h1>        
      </header>

      <div class="nav-bg">
        <nav class="navegacion contenedor">
          <a href="index.php">Sobre Mi</a>
          <a href="#Servicios">Servicios</a>
          <a href="#Estudios">Estudios</a>
          <a href="index.php#Contacto">Contacto</a>
        </nav>
      </div>

      <section>
        <div class="contenedor sombra">
          <h2>Proyectos</h2>
          <div class="proyectos">
            <a class="boton" href="Sitios/BlogCafe/blogdecafe_inicio/index.html">Blog de Cafe</a>
          </div>
        </div>
      </section>

      <footer class="footer">
        
        <p>Todos los Derechos Reservados Angel de Jesús Reséndiz López</p>
          
      </footer>
      
    </body>
</html>