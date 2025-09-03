<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="procesar.php">
    <h3>Nivel de estudios</h3>
    <input type="radio" name="estudios" value="1"> No tiene estudios <br>
    <input type="radio" name="estudios" value="2"> Estudios primarios <br>
    <input type="radio" name="estudios" value="3"> Estudios secundarios <br>

    <h3>Sexo</h3>
    <input type="radio" name="sexo" value="M"> Masculino <br>
    <input type="radio" name="sexo" value="F"> Femenino <br>
    <input type="radio" name="sexo" value="O"> Otro <br>

    <br>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>