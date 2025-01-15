<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        $title = "Home";
        $content = file_get_contents(__DIR__ . '/../../pages/home.php');
        $pageStyles = "<link rel=\"stylesheet\" href=\"css/home.css\">";
        $pageScripts = "<script src=\"js/home.js\"></script>";
        require __DIR__ . '/../layout.php';
    }
}
