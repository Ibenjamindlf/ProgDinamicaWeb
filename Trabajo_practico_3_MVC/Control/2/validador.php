<?php
class Validador {
    private $allowedExtensions; 
    private $errores;

    public function __construct() {
        $this->allowedExtensions = ["txt"]; // Extensiones permitidas
        $this->errores = []; // Array para almacenar errores
    }

    // Métodos GET
    public function getAllowedExtensions() {
        return $this->allowedExtensions;
    }

    public function getErrores() {
        return $this->errores;
    }

    // Métodos SET
    public function setAllowedExtensions($allowedExtensions) {
        $this->allowedExtensions = $allowedExtensions;
    }

    public function setErrores($errores) {
        $this->errores = $errores;
    }

    // Método para agregar errores
    public function agregarError($error) {
        $this->errores[] = $error;
    }

    // Saber si hay errores
    public function hayErrores() {
        return !empty($this->errores);
    }

    public function validarArchivo($file) {
    // Recibo el archivo file, por parametros
    // Si $file NO existe (no está seteado) O el nombre del archivo está vacío:
    if (!isset($file) || empty($file['name'])) {
        // Agrego un error indicando que no se eligió archivo
        $this->agregarError("No se seleccionó ningún archivo.");
    } else {
        // UPLOAD_ERR_OK (valor 0) significa que PHP no detectó errores al recibirlo.
        // UPLOAD_ERR_OK es una constante predefinida en PHP que vale 0.
        if ($file['error'] !== UPLOAD_ERR_OK) {
            // Si el código NO es OK, registro un error
            $this->agregarError("Error en la carga del archivo.");
        } else {
            // === Validación de extensión ===
            // pathinfo obtiene partes de la ruta/nombre. Con PATHINFO_EXTENSION pido solo la extensión. (Ej: "documento.pdf" devuelve "pdf")
            // strtolower pone la extensión en minúsculas para comparar sin problemas de mayúsculas.
            $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
            // in_array verifica si $extension está dentro del arreglo de extensiones permitidas.
            if (!in_array($extension, $this->getAllowedExtensions())) {
                $this->agregarError("Tipo de archivo no permitido. Solo se aceptan .txt.");
            // === Validacion de lectura ===
            } elseif (!is_readable($file['tmp_name'])) {
                $this->agregarError("No se puede leer el archivo.");
            }
        }
    }
}
}
?>
