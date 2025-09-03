<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1Destino</title>
    <h1>Procesando</h1>
    <a href="inicio.php">Volver al formulario</a>
</head>
<body>
    <?php
        if ($_GET){
            $horasDinamica = [];
            $horasLunes = $_GET['horario_lunes'];
            $horasMartes = $_GET['horario_martes'];
            $horasMiercoles = $_GET['horario_miercoles'];
            $horasJueves = $_GET['horario_jueves'];
            $horasViernes = $_GET['horario_viernes'];
            $horasDinamica = [$horasLunes,$horasMartes,$horasMiercoles,$horasJueves,$horasViernes];
            $totalHoras = 0;
            foreach ($horasDinamica as $horaDinamica) {
                $totalHoras = ($totalHoras+$horaDinamica);
            }
            echo "<br>La cantidad de horas por semana es: $totalHoras horas";
        } else{
            echo "<br>No se recibieron parametros";
        }
    ?>
    
</body>
</html>


