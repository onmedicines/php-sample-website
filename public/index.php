<?php

spl_autoload_register(function ($className) {
    $file = __DIR__ . '/../' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

require_once __DIR__ . '/../routes/web.php';

// Get the current request URI
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Check if the route exists
if (isset($routes[$request])) {
    [$controller, $method] = $routes[$request];
    (new $controller())->$method();
} else {
    // Show 404 error for undefined routes
    http_response_code(404);
    echo "<h1>404 - Page Not Found</h1>";
}
