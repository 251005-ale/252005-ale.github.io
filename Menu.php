<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <title>Menu Principal Biblioteca</title>
    <link rel="stylesheet" href="Estilos2.css">
</head>
<body>
       <header>
<h1>CONSULTAR MENU BIBLIOTECA</h1>
 </header>
        <h2>Selecciona una opción del menú</h2>
        <div class="contenedor" id="uno">
            <a href="iniciarsesion.php">
                <img class="icon" src="INICIO.png">
                <p class="texto">Inicio de sesión</p>
            </a>
        </div>
        <div class="contenedor" id="dos">
            <a href="formulario_prestamos.php">
            	<br>
                <img class="icon" src="AÑADIR.png">
                <p class="texto">Añadir</p>
            </a>
        </div>
        <div class="contenedor" id="tres">
            <img class="icon" src="CONSULTAR.jpg">
            <p class="texto">Consultar</p>
            <div class="dropdown-content">
                <a href="consultar_administrador.php">Consulta Administrador</a>
                <a href="consultar_libro.php">Consulta libro</a>
                <a href="consultar_autores.php">Consulta autor</a>
                <a href="consultar_editorial.php">Consulta editorial</a>
            </div>
        </div>
        <div class="contenedor" id="cuatro">
            <img class="icon" src="MODIFICAR.png">
            <p class="texto">Modificar</p>
            <div class="dropdown-content">
                <a href="modificar_administrador.php">Modificar Administrador</a>
                <a href="modificar_libro.php">Modificar libro</a>
                <a href="modificar_autor.php">Modificar autor</a>
                <a href="modificar_editorial.php">Modificar editorial</a>
            </div>
        </div>
        <div class="contenedor" id="cinco">
            <img class="icon" src="ELIMINAR.png">
            <p class="texto">Eliminar</p>
            <div class="dropdown-content">
                <a href="eliminar_administrador.php">Eliminar Administrador</a>
                <a href="eliminar_libro.php">Eliminar libro</a>
                <a href="eliminar_autor.php">Eliminar autor</a>
                <a href="eliminar_editorial.php">Eliminar editorial</a>
            </div>
        </div>
    <?php
        echo "*";
    ?>
</body>
</html>














