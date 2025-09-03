<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1.2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedor-form">
        <h1>Validacion formulario bootstrap</h1>
        <form class="row g-3 needs-validation" novalidate action="procesar.php">
            <div class="col-md-4 input-form input-nombre">
                <label for="validationCustom01" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="validationCustom01" required>
                <div class="invalid-feedback">
                    Por favor, ingrese su nombre.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="validationCustom02" required>
                <div class="invalid-feedback">
                    Por favor, ingrese su apellido.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="validationCustomEmail" placeholder="ejemplo@mail.com" required>
                <div class="invalid-feedback">
                    Por favor, ingrese un email válido.
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomTelefono" class="form-label">Telefono</label>
                <input type="number" class="form-control" id="validationCustomTelefono" required>
                <div class="invalid-feedback">
                    Por favor, ingrese un numero de telefono valido.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustomGenero" class="form-label">Genero</label>
                <select class="form-select" id="validationCustomGenero" required>
                <option selected disabled value=""></option>
                <option>Masculino</option>
                <option>Femenino</option>
                <option>Otro</option>
                </select>
                <div class="invalid-feedback">
                    Por favor seleccione un genero.
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustomDate" class="form-label">Fecha Nacimiento</label>
                <input type="date" class="form-control" id="validationCustomDate" required>
                <div class="invalid-feedback">
                    Por favor ingrese una fecha valida
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div> 
            <div class="col-12 d-flex justify-content-left gap-3">
                <button class="btn btn-primary" type="submit">Enviar</button>
                <button class="btn btn-primary" type="reset">Limpiar</button>
            </div>
        </form>
        <!-- <div id="msg-error" style="color:red;font: size 20px;"></div> -->
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>