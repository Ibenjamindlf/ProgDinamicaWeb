<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1Destino</title>
    <link rel="stylesheet" href="styleD.css">
</head>
<body>
    <h1>Procesando</h1>
    <?php
        if ($_POST){
            $numeroFormulario = $_POST['numero_form'];
            if ($numeroFormulario > 0) {
                echo "<h3 class='positivo'>El número $numeroFormulario es positivo</h3>";
            } elseif ($numeroFormulario < 0) {
                echo "<h3 class='negativo'>El número $numeroFormulario es negativo</h3>";
            } else {
                echo "<h3 class='cero'>El número $numeroFormulario es $numeroFormulario</h3>";
            }
        } else {
            echo "No se recibieron datos<br>";
        }
    ?>
    <a href="Ejercicio1.php">Volver al formulario</a>
</body>
</html>





