<?php
namespace App\Controllers;

class BaseController{
    protected function render($view, $data = []){
        // Lógica para mostrar o renderizar en la vista
        //extract($data);
        foreach ($data as $key => $value) {
            // Extraigo los datos en $data y se crean las variables
            $$key = $value;
        }
        include_once MAIN_APP_ROUTE. "views/".$view."View.php";
    }

    protected function redirectTO(string $url){
        header("Location: " . $url);
        exit();
    }

    protected function formatCurrency($amount){
        return '$'.number_format($amount, 2);
    }
}