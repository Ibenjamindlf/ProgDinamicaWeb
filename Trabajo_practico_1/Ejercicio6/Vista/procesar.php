<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($_POST) {
            $nivelEstudios = $_POST['estudios'];
            $cadena = "";
            switch ($nivelEstudios) {
                case 1:
                    $cadena .= ("Usted no tiene estudios <br>");
                break;
                case 2:
                    $cadena .= ("Usted tiene estudios primarios <br>");
                break;
                case 3:
                    $cadena .= ("Usted tiene estudios secundarios <br>");
                break;
            }
            $sexo = $_POST['sexo'];
            switch ($sexo) {
                case 'M':
                    $cadena .= ("Usted eligio el sexo masculino <br>");
                break;
                case 'F':
                    $cadena .= ("Usted eligio el sexo femenino <br>");
                break;
                case 'O':
                    $cadena .= ("Usted eligio otro sexo <br>");
                break;
            }
            $deportes = [];
            $deportes = $_POST['deportes'];
            $cantDeportes = count($deportes);
            $cadena .= "Usted practica $cantDeportes deportes, entre estos:";
            foreach ($deportes as $unDeporte) {
                $cadena .= " $unDeporte";
            }
            echo $cadena;
        } else {
            echo ("No se recibieron datos");
        }
    ?>
    
    <br><a href="Inicio.php">Volver al formulario</a>
</body>
</html>