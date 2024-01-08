<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Form PHP</title>
</head>

<body>
    <h1>Form PHP</h1>
    <form method="GET" action="recibir.php">
    <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
    </p>
    <p>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos">
    </p>
    <input type="submit" value="enviar datos" />
    </form>
</body>

</html>