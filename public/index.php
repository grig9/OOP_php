<?php
// Start a Session
if( !session_id() ) @session_start();

require '../vendor/autoload.php';

include( __DIR__ . '/../app/controllers/controller.php');

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
  $r->addRoute('GET', '/', 'homepage_handler');
  $r->addRoute('GET', '/about', 'about_handler');
  $r->addRoute('GET', '/contacts', 'contacts_handler');
  $r->addRoute('GET', '/add/book', 'add_book_handler');
  
  $r->addRoute('POST', '/create/book', 'create_handler');
  // {id} must be a number (\d+)
  $r->addRoute('GET', '/show/{id:\d+}', 'show_handler');
  // The /{title} suffix is optional
  $r->addRoute('GET', '/articles/{id:\d+}[/{title}]', 'get_article_handler');
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
  $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
  case FastRoute\Dispatcher::NOT_FOUND:
      // ... 404 Not Found
      echo '404';
      break;
  case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
      $allowedMethods = $routeInfo[1];
      // ... 405 Method Not Allowed
      echo 'Method not allowed';
      break;
  case FastRoute\Dispatcher::FOUND:
      $handler = $routeInfo[1];
      $vars = $routeInfo[2];
      // ... call $handler with $vars
      call_user_func($handler, $vars);
      break;
}