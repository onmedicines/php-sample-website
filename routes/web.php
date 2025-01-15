<?php

use App\Controllers\HomeController;
use App\Controllers\ArticleController;
use App\Controllers\NewsController;
use App\Controllers\CareerController;
use App\Controllers\EventController;

// Define routes
$routes = [
    '/' => [HomeController::class, 'index'],
    '/articles/latest' => [ArticleController::class, 'latest'],
    '/articles/most-liked' => [ArticleController::class, 'mostLiked'],
    '/articles/editors-picks' => [ArticleController::class, 'editorsPicks'],
    '/news' => [NewsController::class, 'index'],
    '/career' => [CareerController::class, 'index'],
    '/events' => [EventController::class, 'index']
];
