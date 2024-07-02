<?php

// Función de autoloading
spl_autoload_register(function ($clase) {
    // Directorio base donde se encuentran las clases
    $directorioBase = __DIR__ . '/';
    // Convertir el nombre de la clase en la ruta del archivo
    $rutaArchivo = $directorioBase . str_replace('\\', '/', $clase) . '.php';

    // Verificar si el archivo existe
    if (file_exists($rutaArchivo)) {
        include_once $rutaArchivo;
    } else {
        // Manejo de error si la clase no existe
        throw new Exception("Clase $clase no encontrada.");
    }
});
