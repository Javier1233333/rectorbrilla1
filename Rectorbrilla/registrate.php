<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/normalize.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>


<header class="header">

    <a href="index.html">
        <img class="header__logo2" src="Images/Logotipo Juegos Láser en Negro y Rojo (2).png" alt="Logo" >
    </a>
    <a href="ingresar.php">
        <img class="header__logo1" src="Images/acceso(1).png" alt="Logo" >
    </a>

</header>
<nav class="navegacion">
    <a class="navegacion__enlace " href="index.html">Tienda</a>
    <a class="navegacion__enlace  " href="nosotros.php">Nosotros</a>
</nav>
<main class="contenedor_registro" >
<section  class="suscripcion1">
    <h2>Regístrate </h2>
    <form method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="correo" name="correo" required><br><br>

        <label for="contraseña">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" name="Registrarse" value="Registrarse">
    </form>
    
</section>
<?php
    
include("databaseregistro.php");
?>
</main>   

</body>
</html>