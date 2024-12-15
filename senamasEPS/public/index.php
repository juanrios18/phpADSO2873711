<?php
// Carga de forma automática las clases que se requieran
require_once "../vendor/autoload.php";
require_once "../config/global.php";

// Para saber que llega en la url
$url = $_SERVER["REQUEST_URI"];
$url = str_replace("/phpADSO2873711/senamasEPS/public","",$url);

//Rutas permitidas en nuestra aplicación
$routes = require_once '../config/routes.php';

//Verifica que la ruta sea válida y redireccionar a la acción del controlador respectivo
if (array_key_exists($url, $routes)) {
    $route = $routes[$url];
    $controllerName = $route["controller"];
    $action = $route["action"];

    //Verificar si existen la Clase y el método (accion) del controlador actual
    if (class_exists($controllerName) && method_exists($controllerName, $action)) {
        // Se instancia el controlador respectivo
        $controller = new $controllerName;
        // Se llama al método requerido
        $controller->$action();
        exit();
    }
}

http_response_code(404); // se settea el códuigo de respuesta HTTP para página no encontrada
require_once MAIN_APP_ROUTE. "views/404.php";
exit();