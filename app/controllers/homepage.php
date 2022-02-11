<?php

use League\Plates\Engine;
$templates = new Engine('../app/views');

$db = include __DIR__ . '/../database/start.php';

$books = $db->getAll('books');

echo $templates->render('homepage', 
  [
    'heading' => 'This is a book store',
    'title' => 'Homepage',
    'books' => $books
  ] 
);