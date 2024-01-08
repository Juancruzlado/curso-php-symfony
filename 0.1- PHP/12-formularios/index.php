<!DOCTYPE HTML>

<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Formulario</title>
</head>

<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">
    <label for="nombre">Nombre: </label>
    <p><input type="text" name="nombre" value="pon tu nombre" /></p>
    <label for="boton">Boton: </label>
    <p><input type="button" name="boton" /></p>
    <label for="checkbox">Checkbox: </label>
    <p><input type="checkbox" name="checkbox" /></p>
    <label for="date">Date: </label>
    <p><input type="date" name="date" /></p>
    <label for="archivo">Archivo: </label>
    <p><input type="file" name="archivo" /></p>
    <textarea></textarea><br/>
    <select name="programas">
        <option>VSCode</option>
        <option>OBS</option>
        <option>Google Chrome</option>
    <input type="submit" value="Enviar" />
    <br/>
</form>
</body>

</html>