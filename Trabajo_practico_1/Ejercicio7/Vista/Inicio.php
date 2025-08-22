<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php ?>
    <form method="post" action="procesar.php">
    <!-- Input numerico 1 -->
    <label for="nombre">Numero uno:</label>
    <input type="number" id="num1" name="num1" required>
    <br><br>

    <!-- Input numerico 2 -->
    <label for="edad">Numero dos:</label>
    <input type="number" id="num2" name="num2" required>
    <br><br>

    <!-- Select de operacion -->
    <label for="pais">Operacion:</label>
    <select id="operacion" name="operacion" required>
        <option value="">-- Seleccione --</option>
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicacion</option>
        <option value="division">Division</option>
    </select>
    <br><br>

    <input type="submit" value="Enviar">
</form>

    <?php ?>
</body>
</html>