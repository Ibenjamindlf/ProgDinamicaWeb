document.getElementById("loginForm").addEventListener("submit", function(event) {
    const titulo = document.getElementById("validacionTitulo").value.trim();
    const errorDivTitulo = document.getElementById("tittleError");
    const aciertoDivTitulo = document.getElementById("tittleValido");
    // Obtengo lo necesario para validar el campo Actores
    const inputActores = document.getElementById("validacionActores").value.trim();
    const errorDivActores = document.getElementById("actoresError");
    const validoDivActores = document.getElementById("actoresValido");

    // 🔹 Reset previo: limpio estilos y mensajes de error de validaciones anteriores
    document.getElementById("validacionTitulo").style.border = ""; // quito el borde rojo si lo tenía
    document.getElementById("validacionTitulo").classList.remove("is-invalid"); // elimino clase de error de Bootstrap
    errorDivTitulo.textContent = ""; // borro mensaje de error
    document.getElementById("validacionTitulo").classList.remove("is-valid"); // elimino clase de valido de Bootstrap
    aciertoDivTitulo.textContent = ""; // borro mensaje de valido
    
    // Reset del campo actores
    document.getElementById("validacionActores").style.border = "";
    document.getElementById("validacionActores").classList.remove("is-invalid");
    errorDivActores.textContent = "";
    document.getElementById("validacionActores").classList.remove("is-valid");
    errorDivActores.textContent = "";

    // Validaciones
    if (titulo === ""){
        event.preventDefault(); // 🔴 evita que se envíe el form
        document.getElementById("validacionTitulo").style.border = "2px solid red";
        document.getElementById("validacionTitulo").classList.add("is-invalid");
        errorDivTitulo.textContent = "Este campo, no puede estar vacio.";
    } else if (titulo.length < 3) {
        event.preventDefault(); // 🔴 evita que se envíe el form
        document.getElementById("validacionTitulo").style.border = "2px solid red";
        document.getElementById("validacionTitulo").classList.add("is-invalid");
        errorDivTitulo.textContent = "El nombre del título debe tener al menos 3 letras.";
    } else {
        event.preventDefault(); // 🔴 evita que se envíe el form
        document.getElementById("validacionTitulo").style.border = "2px solid green";
        document.getElementById("validacionTitulo").classList.add("is-valid");
        aciertoDivTitulo.textContent = "Ok.";
    }

    if (inputActores === ""){
        event.preventDefault();
        document.getElementById("validacionActores").style.border = "2px solid red";
        document.getElementById("validacionActores").classList.add("is-invalid");
        errorDivActores.textContent = "Este campo no puede estar vacio."
    } else {
        event.preventDefault();
        document.getElementById("validacionActores").style.border = "2px solid green";
        document.getElementById("validacionActores").classList.add("is-valid");
        validoDivActores.textContent = "Este campo esta ok."
    }
});
