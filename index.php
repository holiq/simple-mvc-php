<?php

require 'vendor/autoload.php';

$routes = require 'configs/routes.php';

$path = $_SERVER['REQUEST_URI'];

function view($view, $data = [])
{
    extract($data);

    include __DIR__.'/views/'.$view.'.php';
}

if (array_key_exists($path, $routes)) {
    $controllerMethod = $routes[$path];

    echo $controllerMethod();
} else {
    echo '404 - Page Not Found';
}
