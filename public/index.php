<?php
require_once __DIR__ . '/../vendor/autoload.php';
// Load routes from config
$router = require_once __DIR__ . '/../config/routes.php';

echo $router->resolve();