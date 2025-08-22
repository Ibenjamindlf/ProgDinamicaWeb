<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 Destino POST</title>
</head>
<body>
    <h1>POST</h1>
    <?php
    if ($_POST){
        $nombre = $_POST['nombre_form'];
        $apellido = $_POST['apellido_form'];
        $edad = $_POST['edad_form'];
        $direccion = $_POST['direccion_form'];
        $cadena = (
                    "
                    Hola, yo soy $nombre $apellido tengo $edad años y vivo en $direccion
                    "
        );
        echo "<h3>$cadena</h3>";
    } else {
        echo ("No se encontraron datos");
    }
    ?>
    <a href="Inicio.php">Volver al formulario</a>
</body>
</html>

