<?php
// Start a Session
if( !session_id() ) @session_start();

require '../vendor/autoload.php';


// d(mail('example1111@gmail.com', 'My Subject', 'My message'));die;


// $email = "test@.mailtrap.io";
// $name = 'Sasha';

// $fromEmail = 'info@.mailtrap.io';
// $fromName = 'Admin';

// $subject = 'Офигенская тема';
// $message = 'Привет, это тестовая страница';

// d(SimpleMail::make()
// ->setTo($email, $name)
// ->setSubject($subject)
// ->setMessage($message)
// ->send());
// die;



$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
  $r->addRoute('GET', '/', ['App\controllers\HomeController', 'index']);
  $r->addRoute('GET', '/about', ['App\controllers\HomeController', 'about']);
  $r->addRoute('GET', '/contacts', ['App\controllers\HomeController', 'contacts']);
  $r->addRoute('GET', '/add/book', ['App\controllers\HomeController', 'add_book']);
  $r->addRoute('GET', '/registration/form', ['App\controllers\HomeController', 'registration_form']);

  $r->addRoute('POST', '/registration', ['App\controllers\HomeController', 'registration']);
  $r->addRoute('GET', '/verification', ['App\controllers\HomeController', 'email_verification']);
  $r->addRoute('GET', '/login/form', ['App\controllers\HomeController', 'login_form']);
  $r->addRoute('POST', '/login', ['App\controllers\HomeController', 'login']);
  

  $r->addRoute('POST', '/create/book', ['App\controllers\HomeController', 'create']);
  // {id} must be a number (\d+)
  $r->addRoute('GET', '/show/{id:\d+}', ['App\controllers\HomeController', 'show']);
  $r->addRoute('GET', '/delete/book/{id:\d+}', ['App\controllers\HomeController', 'delete_by_id']);
  $r->addRoute('GET', '/edit/book/{id:\d+}', ['App\controllers\HomeController', 'edit_book']);
  $r->addRoute('POST', '/update/book/{id:\d+}', ['App\controllers\HomeController', 'update_by_id']);
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
      $controller = new $handler[0]();
      call_user_func([$controller, $handler[1]], $vars);
      break;
}