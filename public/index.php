<?php

require '../vendor/autoload.php';

$routes = [
  "/" => 'app/controllers/homepage.php',
  "/about" => 'app/controllers/about.php',
  "/www" => 'app/controllers/www.php',
];

$route = $_SERVER['REQUEST_URI'];

if(array_key_exists($route, $routes)) {
  include( __DIR__ . '/../' . $routes[$route]); exit;
} else {
  var_dump(404);die;
}