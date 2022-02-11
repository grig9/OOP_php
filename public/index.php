<?php
// Start a Session
if( !session_id() ) @session_start();

require '../vendor/autoload.php';

$routes = [
  "/" => 'controllers/homepage.php',
  "/about" => 'controllers/about.php',
  "/contacts" => 'controllers/contacts.php',
  "/create" => 'controllers/create.php',
];

$route = $_SERVER['REQUEST_URI'];

if(array_key_exists($route, $routes)) {
  include( __DIR__ . '/../app/' . $routes[$route]); exit;
} else {
  var_dump(404);die;
}