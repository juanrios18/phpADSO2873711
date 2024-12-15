<?php
namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(){
        echo "<br>CONTROLLER: HomeController";
        echo "<br>ACTION: index";
    }

    public function greetings(){
        echo "<br>CONTROLLER: HomeController";
        echo "<br>ACTION: greetings";
    }

    public function greetingsADSO(){
        echo "<br>CONTROLLER: HomeController";
        echo "<br>ACTION: greetingsADSO";
    }
}
