<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="contenedor-form">
        <form action="procesar.php" method="POST" name="formulario" id="formulario">
            <div class="input-nombre">
                <label for="campo-nombre">Nombre</label>
                <input type="text" id="campo-nombre" name="nombre">
                <div class="invalido-nombre" id="invalido-nombre">
                </div>
            </div>

            <div class="input-apellido">
                <label for="campo-apellido">Apellido</label>
                <input type="text" id="campo-apellido" name="apellido">
                <div class="invalido-apellido" id="invalido-apellido">
                </div>
            </div>

            <div class="input-email">
                <label for="campo-email">Email</label>
                <input type="email" id="campo-email" name="email">
                <div class="invalido-email" id="invalido-email"></div>
            </div>


            <div class="input-telefono">
                <label for="campo-telefono">Telefono</label>
                <input type="number" id="campo-telefono" name="telefono">
                <div class="Invalido" id="invalido">
                </div>
            </div>
            
            <div class="input-genero">
                <label for="campo-genero">Genero</label>
                <input type="checkbox" id="campo-genero" name="genero">
                <div class="Invalido" id="invalido">
                </div>
            </div>

            <div class="input-fechaNacimiento">
                <label for="campo-fechaNacimiento">Fecha Nacimiento</label>
                <input type="date" id="campo-fechaNacimiento" name="fechaNacimiento">
                <div class="Invalido" id="invalido">
                </div>
            </div>

            <div class="checkbox-terminos">
                <input type="checkbox" id="campo-terminos" name="terminos">
                <label for="campo-terminos">Acepto terminos y condiciones</label>
                <div class="Invalido" id="invalido">
                </div>
            </div>

            <input type="submit" id="btn-enviar" value="Enviar">
        </form>
    </div>
</body>
    <!-- jQuery (CDN) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Tu script -->
    <script src="script.js"></script>
</html>
