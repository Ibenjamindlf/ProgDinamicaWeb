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
                    $cadena .= ("Usted no tiene estudios \n");
                break;
                case 2:
                    $cadena .= ("Usted tiene estudios primarios \n");
                break;
                case 3:
                    $cadena .= ("Usted tiene estudios secundarios \n");
                break;
            }
            $sexo = $_POST['sexo'];
            switch ($sexo) {
                case 'M':
                    $cadena .= ("Usted eligio el sexo masculino \n");
                break;
                case 'F':
                    $cadena .= ("Usted eligio el sexo femenino \n");
                break;
                case 'O':
                    $cadena .= ("Usted eligio otro sexo \n");
                break;
            }
            echo $cadena;
        } else {
            echo ("No se recibieron datos");
        }
    ?>
    
    <br><a href="Inicio.php">Volver al formulario</a>
</body>
</html>