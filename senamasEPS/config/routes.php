<?php
return [
    "/" => [
        "controller" => "App\Controllers\HomeController",
        "action" => "index",
    ],
    "/home" => [
        "controller" => "App\Controllers\HomeController",
        "action" => "index"
    ],
    "/hello" => [
        "controller" => "App\Controllers\HomeController",
        "action" => "greetings"
    ],
    "/helloADSO" => [
        "controller" => "App\Controllers\HomeController",
        "action" => "greetingsADSO"
    ],
    "/paciente/index" => [
        "controller" => "App\Controllers\PacienteController",
        "action" => "index"
    ],
    "/paciente/indexTest" => [
        "controller" => "App\Controllers\PacienteController",
        "action" => "indexTest"
    ],
    "/paciente/new" => [
        "controller" => "App\Controllers\PacienteController",
        "action" => "createPatient"
    ],
];