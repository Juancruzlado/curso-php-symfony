<?php

if(empty($_POST['nombre']) && empty($_POST['edad']) && empty($_POST['email']) && empty($_POST['pass'])){
    $error = false;

    $nombre= $_POST['nombre'];
    $edad= $_POST['edad'];
    $email= $_POST['email'];
    $pass= $_POST['pass'];
} else {
    $error = 'faltan_datos';
    header("Location:index.php?error=$error");
}
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Validación</title>
</head>
<body></body>
</html>
