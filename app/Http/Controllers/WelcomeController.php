<?php
namespace app\Http\Controllers;

class WelcomeController {
    public function index(){
        $name = $_GET["name"];
        return "Hello $name";
    }
}