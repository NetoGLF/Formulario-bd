<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

<form method="post">
    <h2>HOLA</h2>
    <p>iNICIA TU REGISTRO</p>

    <div class="input-wrapper">
        <input type="text" name="name" placeholder="Nombre">
    </div>
    <div class="input-wrapper">
        <input type="text" name="email" placeholder="Email">
    </div>
    <div class="input-wrapper">
        <input type="text" name="direction" placeholder="Direccion">
    </div>
    <div class="input-wrapper">
        <input type="text" name="phone" placeholder="Telefono">
    </div>
    <div class="input-wrapper">
        <input type="text" name="password" placeholder="Contrasena">
    </div>

    <input class="btn" type="submit" name="register" value="Envíar">



</form>

<?php
include("registrar.php");
?>


</body>
</html>