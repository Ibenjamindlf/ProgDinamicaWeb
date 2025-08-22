<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if ($_POST){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operacion = $_POST['operacion'];
            switch ($operacion) {
                case 'suma':
                    $resultado = $num1+$num2;
                break;
                case 'resta':
                    $resultado = $num1-$num2;
                break;
                case 'multiplicacion':
                    $resultado = $num1*$num2;
                break;
                case 'division':
                    if ($num2 == 0){
                        $resultado = 'Invalida, no se puede dividir por 0';
                    } else {
                        $resultado = $num1/$num2;
                    }
                break;
            }
            $cadena = "El resultado de la $operacion entre $num1 y $num2 es: $resultado";
            echo $cadena;
        } else {
            echo "No se recibieron datos";
        }
    ?>
    <br><a href="Inicio.php">Volver al inicio</a>
    <?php ?>
</body>
</html>