<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Validacion</title>
</head>
<body>
    <h1>Validar formularios</h1>

    <?php
    if(isset($_GET['error'])){
        $error = $_GET['error'];
        echo '<strong style="color:red">Introduce los datos en los campos</strong>';
    }
    ?>

    <form method="POST" action="formulario.php">
        <label for="nombre">Nombre</label><br/>
        <input type="text" name="nombre"><br/>

        <label for="edad">Edad</label><br/>
        <input type="number" name="edad"><br/>

        <label for="email">Email</label><br/>
        <input type="email" name="email"><br/>

        <label for="pass">Contraseña</label><br/>
        <input type="password" name="pass"><br/>

        <input type="submit" value="Enviar" />
</body>

</html>