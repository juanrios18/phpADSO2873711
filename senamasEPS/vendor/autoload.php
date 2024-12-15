<?php
spl_autoload_register(function ($className){
    $prefix = 'App\\';
    // Remover el prefijo del namespace
    $className = str_replace($prefix, '/',$className);
    // Reemplazar las barras invertidas por barras diagonales
    $className = str_replace('\\', '/',$className);
    // Obtener la ruta completa del archivo de la clase
    $file = MAIN_APP_ROUTE . $className. '.php';
    // Si el archivo existe, se incluye
    if (file_exists($file)) {
        require_once $file;
    }
});