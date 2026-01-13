<?php

use App\core\Router;
use App\controllers\front\HomeController;
$router = new Router();

// Define your routes here
$router->get('/', [HomeController::class, 'index']);

$router->get('/about', function() {
    return "About page";
});

$router->get('/user/{id}', function($params) {
    return "User ID: " . $params['id'];
});

return $router;