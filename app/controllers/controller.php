<?php
use League\Plates\Engine;




function homepage_handler() 
{
  include(__DIR__ . "/homepage.php"); exit;
}

function about_handler() 
{
  include(__DIR__ . "/about.php"); exit;
}

function contacts_handler() 
{
  include(__DIR__ . "/contacts.php"); exit;
}

function show_handler($args) 
{
  $id = $args['id'];
  
  $db = include __DIR__ . '/../database/start.php';
  $result = $db->getOneById('books', $id);

  $templates = new Engine('../app/views');
  echo $templates->render('show', 
    [
      'title' => $result['title'],
    ]
  );
}

function add_book_handler() 
{
  include(__DIR__ . "/add_book.php"); exit;
}

function create_handler() 
{
  $title = $_POST['title'];
  $author = $_POST['author'];
  $price = $_POST['price'];

  $db = include __DIR__ . '/../database/start.php';

  $db->insert('books', [ 
    'title' => $title,
    'author' => $author,
    'price' => $price
   ]);
  header('Location: /');
  exit();
}