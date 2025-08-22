<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Datos Personales</h1>
    <?php ?>
    <!-- Para cambiar entre GET y POST, modificar los atributos method y action -->
    <form id="form3" name="form3" method="get" action="DestinoGet.php">
        Nombre: <input name="nombre_form" type="text" id="nombre_form">
        Apellido: <input name="apellido_form" type="text" id="apellido_form">
        Edad: <input name="edad_form" type="text" id="edad_form">
        Direccion: <input name="direccion_form" type="text" id="direccion_form">
        <input name="submit" type="submit" value="Aceptar">
    </form>
    <?php ?>
</body>
</html>