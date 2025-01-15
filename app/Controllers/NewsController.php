<?php

namespace App\Controllers;

class NewsController
{
    public function index()
    {
        $title = "Articles";
        $content = file_get_contents(__DIR__ . '/../../pages/news.php');
        $pageStyles = "<link rel=\"stylesheet\" href=\"css/article.css\">";
        $pageScripts = "<script src=\"js/article.js\"></script>";

        require __DIR__ . "/../layout.php";
    }
}
