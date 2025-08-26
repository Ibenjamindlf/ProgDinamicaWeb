// Documento de validacion Jquery
    $("#btn-enviar").click(function(){
        let esValido = true;
        // Validacion del campo nombre
        if($("#campo-nombre").val()==""){
            $("#invalido-nombre").show(500);
            $("#invalido-nombre").text("Debe ingresar un nombre valido");
            esValido = false;
        }
        // Validacion del campo apellido
        if($("#campo-apellido").val()==""){
            $("#invalido-apellido").show(500);
            $("#invalido-apellido").text("Debe ingresar un apellido valido");
            esValido = false;
        }
        // Validación del campo email
        let email = $("#campo-email").val().trim();
        let regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if(email == ""){
            $("#invalido-email").show(500).text("Debe ingresar un email");
            esValido = false;
        } else if(!regexEmail.test(email)) {
            $("#invalido-email").show(500).text("El formato del email no es válido");
            esValido = false;
        } else {
            $("#invalido-email").hide();
        }
        // Verifica si todos los campos estan ok y retorna el valor en base a eso
        if (esValido == false){
            return false
        } else {
            return true
        }
    })